<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HelloWorld View
*/
class jclanViewedit_player extends JView
{
	/**
	 * display method of Hello view
	 * @return void
	 */
	public function display($tpl = null)
	{
		try {


			// get the Data
			// $form = $this->get('Form');
			$item = $this->get('Data');

			$input = JFactory::getApplication()->input;
			$input->set('hidemainmenu', true);

			//$input->get('player_id',0);

			$model = $this->getModel('jclan_list_players');
			$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
			JArrayHelper::toInteger($cid, array(0));
			if($cid[0])
			{
				$is_id = $cid[0];
			}

			$item = $this->loadEditData($is_id);

			// Check for errors.
			if (count($errors = $this->get('Errors')))
			{
				JError::raiseError(500, implode('<br />', $errors));
				return false;
			}
			// Assign the Data
			// $this->form = $form;
			$this->item = $item;
			$this->teams = $this->loadTeams();
			
			$this->addToolBar($is_id);
			
		} catch (Exception $e) {
			JError::throwError($e);
		}
		// Set the toolbar

		// Display the template
		parent::display($tpl);
	}

	function loadEditData($id) {
		if (!$id) {
			$data->player_id = 0;
			$data->nickname = null;
			$data->steam_id = null;
			$data->team_id = null;
			$item = $data;
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
			$item = $db->loadObject();
		}
			
		return $item;
	}

	function loadTeams() {
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('team_name');
		$query->from('#__jclan_team');
		$db->setQuery($query);
		return $db->loadResultArray();
	}

	/**
	 * Setting the toolbar
	 */
	protected function addToolBar($isNew)
	{
		JToolBarHelper::title($isNew ? JText::_('COM_JCLAN_PLAYER_NEW')
		: JText::_('COM_JCLAN_PLAYER_EDIT'.$is_id));
		JToolBarHelper::save('save_player');
		JToolBarHelper::cancel('cancel_player', $isNew ? 'JTOOLBAR_CANCEL'
				: 'JTOOLBAR_CLOSE');
	}
}