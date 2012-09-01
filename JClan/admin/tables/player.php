<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTablePlayer extends JTable {
	
	var $player_id = null;
	var $nickname = null;
	
	var $steam_id = null;
	
	var $team_id = null;
	
	
	
	
	function __construct(&$db) {
		parent::__construct('#__jclan_players','player_id',$db);
	}
}
