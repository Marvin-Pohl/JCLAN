<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by
$controller = JController::getInstance('jclan');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
?>