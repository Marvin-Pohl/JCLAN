<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controlleradmin');

class JClanControllerTeams extends JControllerAdmin {
	
	function getModel($name = 'Team', $prefix='JClanModel') {
		$model = parent::getModel($name,$prefix,array('ignure_request' => true));
		return $model;
	}
	
}