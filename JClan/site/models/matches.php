<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelMatches extends JModellist {

	function getListQuery() {

		// Create a new query object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$arr = array();
		$arr[] = 'm.match_id';
		$arr[] = 'm.match_date';
		$arr[] = 'm.home_score';
		$arr[] = 'm.visitor_score';
		$arr[] = 'g.game_name';
		$arr[] = 't1.team_name as home_team_name';
		$arr[] = 't1.tag as home_team_tag';
		$arr[] = 't2.team_name as visitor_team_name';
		$arr[] = 't2.tag as visitor_team_tag';
		$arr[] = 'l1.lineup_name as home_team_lineup';
		$arr[] = 'l2.lineup_name as visitor_team_lineup';
		$arr[] = 'm.home_line_up_id';
		$arr[] = 'm.visitor_line_up_id';
		$arr[] = 'map.map_name';
		$arr[] = 'm.played';
		$arr[] = 's.season_name';
		$arr[] = 'map.image as map_image';
		$query->select(implode(',', $arr));
		//From
		$from = array();
		$from[] = '#__jclan_match as m';
		$from[] = '#__jclan_game as g';
		$from[] = '#__jclan_team as t1';
		$from[] = '#__jclan_team as t2';
		$from[] = '#__jclan_game_map as map';
		$from[] = '#__jclan_lineup as l1';
		$from[] = '#__jclan_lineup as l2';
		$from[] = '#__jclan_season as s';
		$query->from(implode(',', $from));
		//where
		$where = array();
		$where[] = 'm.home_id = t1.team_id';
		$where[] = 'm.visitor_id = t2.team_id';
		$where[] = 'm.home_line_up_id = l1.lineup_id';
		$where[] = 'm.visitor_line_up_id = l2.lineup_id';
		$where[] = 'm.game_id = g.game_id';
		$where[] = 'm.map_id = map.game_map_id';
		$where[] = 'm.season_id = s.season_id';
		$query->where(implode(' AND ', $where));
		return $query;
	}

	function getLineUp($lineup_id){
		// Create a new query object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$arr = array();
		$arr[] = 'player.nickname';
		$arr[] = 'pos.position_name';
		$arr[] = 'pos.image';
		$query->select(implode(',', $arr));
		//From
		$from = array();
		$from[] = '#__jclan_players as player';
		$from[] = '#__jclan_position as pos';
		$from[] = '#__jclan_player_lineup as pline';
		$query->from(implode(',', $from));
		//where
		$where = array();
		$where[] = 'pline.lineup_id ='.(int)$lineup_id;
		$where[] = 'pline.player_id = player.player_id';
		$where[] = 'pline.position_id = pos.position_id';
		$query->where(implode(' AND ', $where));
		
		$query->order('pos.position_name');
		
		$db->setQuery($query);
		
		return $db->loadObjectList();

	}

}