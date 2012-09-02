<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTablePlayer extends JTable {
	
	var $player_id = 0;
	var $nickname = '';
	
	var $steam_id = '';
	
	var $team_id = 0;
	
	
	
	
	function __construct(&$db) {
		parent::__construct('#__jclan_players','player_id',$db);
	}
}
