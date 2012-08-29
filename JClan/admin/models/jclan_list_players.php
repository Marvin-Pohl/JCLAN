<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * jclan_view_teams Model
*/
class jclanModeljclan_list_players extends JModelList
{
	public function getTable($type = 'Player', $prefix = 'Table', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Create a new query object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$query->select('player_id,nickname,steam_id,team_id');
		// From the hello table
		$query->from('#__jclan_players');
		return $query;
	}

	function setPlayer_ID($playerID) {
		$this->player_id = $playerID;
		$this->nickname = null;
		$this->steam_id = null;
		$this->team_id = null;
	}

	function &getData() {
			
		if (!empty($this->_data)) {
			$db = JFactory::getDBO();
			$query = $db->getQuery(true);
			// Select some fields
			$query->select('player_id,nickname,steam_id,team_id');
			// From the hello table
			$query->from('#__jclan_players');
			$query->where('player_id = '.(int)$this->player_id);
			$db->setQuery($query);
			$this->_data = $db->loadObject();
		}
		if (!$this->_data) {
			$this->_data = new stdClass();
			$this->_data->player_id = 0;
			$this->_data->nickname = null;
			$this->_data->steam_id = null;
			$this->_data->team_id = null;
		}
		return $this->_data;
	}

	function getRow($id)
	{

		if ($id ==0) {
			$data->player_id = 0;
			$data->nickname = null;
			$data->steam_id = null;
			$data->team_id = null;
			return $data;
		}
		else
		{
			$db = JFactory::getDBO();
			$query = $db->getQuery(true);
			// Select some fields
			$query->select('player_id,nickname,steam_id,team_id');
			// From the hello table
			$query->from('#__jclan_players');
			$query->where('player_id = '.(int)$id);
			$db->setQuery($query);
			return $db->loadObject();
		}

	}

	function store() {
		$row = $this->getTable();
		$db = JFactory::getDbo();
		$data = JRequest::get('post');
		
		if ($data["team_id"] == JText::_('COM_JCLAN_SELECT_CLAN')) {
			$this->setError(JTEXT::_('COM_JCLAN_ERROR_NO_CLAN_SELECTED'));
			return false;
		}
		
		// Bind the form fields to the hello table
		if (!$row->bind($data)) {
			$this->setError($db->getErrorMsg());
			return false;
		}

		// Make sure the hello record is valid
		if (!$row->check()) {
			$this->setError($db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$row->store()) {
			$this->setError($db->getErrorMsg());
			return false;
		}

		return true;
	}

	/**
	 * Method to delete record(s)
	 *
	 * @access    public
	 * @return    boolean    True on success
	 */
	function delete()
	{
		$player_ids = JRequest::getVar( 'cid', array(0), 'post', 'array' );

		$row =& $this->getTable();

		foreach($player_ids as $player_id) {
			if (!$row->delete( $player_id )) {
				$this->setError( $row->getErrorMsg() );
				return false;
			}
		}

		return true;
	}
}