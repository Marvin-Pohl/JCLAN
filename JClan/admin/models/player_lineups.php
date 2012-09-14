<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelplayer_lineups extends JModellist {

	function getListQuery() {

		// Create a new query object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$query->select('pline.player_lineup_id,player.nickname,line.lineup_name,team.team_name,pos.position_name');
		// From the hello table
		$query->from('#__jclan_player_lineup as pline,#__jclan_lineup as line, #__jclan_team as team, #__jclan_players as player, #__jclan_position as pos');
		$query->where('pline.lineup_id = line.lineup_id AND pline.player_id = player.player_id AND pline.position_id = pos.position_id AND line.team_id = team.team_id');
		return $query;
	}

}