<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModellineups extends JModellist {

	function getListQuery() {

		// Create a new query object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$query->select('line.lineup_id,line.lineup_name,line.game_id,line.team_id,team.team_name,game.game_name');
		// From the hello table
		$query->from('#__jclan_lineup as line, #__jclan_team as team, #__jclan_game as game');
		$query->where('line.game_id = game.game_id AND line.team_id = team.team_id');
		return $query;
	}

}