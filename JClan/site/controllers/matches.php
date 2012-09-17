<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controller');

class JClanControllerMatches extends JController {
	
	function getModel($name = 'Match', $prefix='JClanModel') {
		$model = parent::getModel($name,$prefix,array('ignure_request' => true));
		return $model;
	}
	
}