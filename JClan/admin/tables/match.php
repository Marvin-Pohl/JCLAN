<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.database.table');

class JClanTableMatch extends JTable {

	var $match_id = null;
	var $match_date = null;
	var $home_id = null;
	var $visitor_id = null;
	var $home_score = null;
	var $visitor_score = null;
	var $game_id = null;
	var $map_id = null;
	var $played = null;
	var $season_id = null;
	var $home_line_up_id = null;
	var $visitor_line_up_id = null;

	function __construct(&$db) {
		parent::__construct('#__jclan_match','match_id',$db);
	}
}
