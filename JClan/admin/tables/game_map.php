<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableGame_Map extends JTable {
	var $game_map_id = null;
	var $game_id = null;
	var $map_name = null;
	var $image = null;
	var $game_mode_id = null;	
	
	function __construct(&$db) {
		parent::__construct('#__jclan_game_map','game_map_id',$db);
	}
}
