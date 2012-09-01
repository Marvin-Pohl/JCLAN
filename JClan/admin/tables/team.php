<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableTeam extends JTable {

	var $team_id = null;
	var $team_name = null;
	var $entry_date = null;
	
	var $homepage = null;	
	
	function __construct(&$db) {
		parent::__construct('#__jclan_team','team_id',$db);
	}
}
