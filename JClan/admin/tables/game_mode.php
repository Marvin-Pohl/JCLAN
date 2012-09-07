<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableGame_mode extends JTable {
	var $game_mode_id = null;
	var $game_mode_name = null;
	var $game_mode_short_name = null;
	
	function __construct(&$db) {
		parent::__construct('#__jclan_game_mode','game_mode_id',$db);
	}
}
