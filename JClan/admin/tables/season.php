<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableSeason extends JTable {
	var $season_id = null;
	var $season_name = null;
	
	function __construct(&$db) {
		parent::__construct('#__jclan_season','season_id',$db);
	}
}
