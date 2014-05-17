<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableLineup extends JTable {

	var $lineup_id = null;
	var $game_id = null;
	var $lineup_name = null;
	var $team_id = null;
	function __construct(&$db) {
		parent::__construct('#__jclan_lineup','lineup_id',$db);
	}
}
