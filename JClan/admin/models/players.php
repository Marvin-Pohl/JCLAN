<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelPlayers extends JModellist {
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('p.player_id,p.nickname,p.steam_id,p.team_id,t.team_name');
                // From the hello table
                $query->from('#__jclan_players as p,#__jclan_team as t');
                $query->where('p.team_id = t.team_id');
                return $query;
	}
}