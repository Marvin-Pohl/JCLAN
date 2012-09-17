<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableposition extends JTable {
	var $position_id = null;
	var $position_name = null;
	var $image = null;
	var $game_id = null;

	function __construct(&$db) {
		parent::__construct('#__jclan_position','position_id',$db);
	}
}
