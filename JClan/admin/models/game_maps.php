<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelGame_Maps extends JModellist {
	
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('map.game_map_id,map.map_name,game.game_name,map.image,mode.game_mode_name');
                // From the hello table
                $query->from('#__jclan_game_map as map,#__jclan_game_mode as mode,#__jclan_game as game');
                $query->where('map.game_id = game.game_id AND map.game_mode_id = mode.game_mode_id');
                return $query;
	}
	
}