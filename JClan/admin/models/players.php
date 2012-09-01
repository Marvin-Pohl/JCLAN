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
                $query->select('player_id,nickname,steam_id,team_id');
                // From the hello table
                $query->from('#__jclan_players');
                return $query;
	}
}