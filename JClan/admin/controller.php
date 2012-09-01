<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controller');

class JClanController extends JController {
	
	function __construct() {
		parent::__construct();
	}
	
	function display($cachable = false) {
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'teams'));
		
		// call parent behavior
		parent::display($cachable);
	}
	
	function players() {
		JRequest::setVar('view','players');
		parent::display();
	}
	
	function teams() {
		JRequest::setVar('view','teams');
		parent::display();
	}
	
	function matches() {
		JRequest::setVar('view','matches');
		parent::display();
	}
	
	function seasons() {
		JRequest::setVar('view','seasons');
		parent::display();
	}
	
	function lineups() {
		JRequest::setVar('view','lineups');
		parent::display();
	}
	
	function games() {
		JRequest::setVar('view','games');
		parent::display();
	}
	
	function maps() {
		JRequest::setVar('view','maps');
		parent::display();
	}
	
	function edit_player() {
		JRequest::setVar('view','player');
		JRequest::setVar('layout','edit');
		//JRequest::setVar('hidemainmenu',1);
	
		parent::display();
	}
	
}
