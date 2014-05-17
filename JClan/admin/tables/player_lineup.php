<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableplayer_Lineup extends JTable {

	var $player_lineup_id = null;
	var $lineup_id = null;
	var $player_id = null;
	var $position_id = null;
	function __construct(&$db) {
		parent::__construct('#__jclan_player_lineup','player_lineup_id',$db);
	}
}
