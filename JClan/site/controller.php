<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controller');

class jclanController {
	function display($cachable) {
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'jclan'));
		
		// call parent behavior
		parent::display($cachable);
	}
}
