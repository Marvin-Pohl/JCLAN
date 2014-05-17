<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableGame extends JTable {
	var $game_id = null;
	var $game_name = null;
	var $homepage = null;
	var $image = null;
		
	
	function __construct(&$db) {
		parent::__construct('#__jclan_game','game_id',$db);
	}
}
