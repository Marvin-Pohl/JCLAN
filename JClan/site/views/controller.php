<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controller');

class jclan_view_teamsController {
	function display($cachable) {
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'matches'));
		
		// call parent behavior
		parent::display($cachable);
	}
}
