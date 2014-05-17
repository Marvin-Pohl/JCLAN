<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.controlleradmin');

class JClanControllerplayer_lineups extends JControllerAdmin {
	
	function getModel($name = 'player_lineup', $prefix='JClanModel') {
		$model = parent::getModel($name,$prefix,array('ignure_request' => true));
		return $model;
	}
	
}