<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controller');

class JClanController extends JController {
	
	function __construct() {
		parent::__construct();
	
		//Add is the same Task as the edit task
		$this->registerTask('add_player','edit_player');
	}
	
	function display($cachable = false) {
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'jclan_list_teams'));
		
		// call parent behavior
		parent::display($cachable);
	}
	
	function list_players() {
		JRequest::setVar('view','jclan_list_players');
		parent::display();
	}
	
	function list_teams() {
		JRequest::setVar('view','jclan_list_teams');
		parent::display();
	}
	
	function list_matches() {
		JRequest::setVar('view','jclan_list_matches');
		parent::display();
	}
	
	function list_seasons() {
		JRequest::setVar('view','jclan_list_seasons');
		parent::display();
	}
	
	function list_lineups() {
		JRequest::setVar('view','jclan_list_lineups');
		parent::display();
	}
	
	function list_games() {
		JRequest::setVar('view','jclan_list_games');
		parent::display();
	}
	
	function list_maps() {
		JRequest::setVar('view','jclan_list_maps');
		parent::display();
	}
	
	function edit_player() {
		JRequest::setVar('view','edit_player');
		JRequest::setVar('layout','edit');
		//JRequest::setVar('hidemainmenu',1);
	
		parent::display();
	}
	
	function save_player()
	{
		try {
 			$model = $this->getModel('jclan_list_players');
			
 			if ($model->store()) {
 				$msg = JText::_( 'COM_JCLAN_PLAYER_SAVED' );
 				$type = 'message';
 			} else {
 				//Display Error
 				$msg = $model->getError();
 				$type='error';
 			}
			
			$link = 'index.php?option=com_jclan&task=list_players';
			$this->setRedirect($link, $msg,$type);
		} catch (Exception $e) {
			JError::throwError($e);
		}
	
	}
	
	/**
	 * remove record(s)
	 * @return void
	 */
	function remove_player()
	{
		try {
			$model = $this->getModel('jclan_list_players');
			if(!$model->delete()) {
				$msg = JText::_( 'COM_JCLAN_ERROR_PLAYERS_NOT_DELETED' );
			} else {
				$msg = JText::_( 'COM_JCLAN_PLAYERS_DELETED' );
			}
		} catch (Exception $e) {
			$msg = $e->getMessage();
		}
 		
	
		$this->setRedirect( 'index.php?option=com_jclan&task=list_players', $msg );
	}
	
	function cancel_player()
	{
		$msg = JText::_('COM_JCLAN_OPERATION_CANCELLED');
		$this->setRedirect('index.php?option=com_jclan&task=list_players',$msg);
	}
}
