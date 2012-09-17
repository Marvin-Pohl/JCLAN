<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelpositions extends JModellist {
	
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('pos.position_id,pos.position_name,pos.image,game.game_name');
                // From the hello table
                $query->from('#__jclan_position as pos, #__jclan_game as game');
                $query->where('pos.game_id = game.game_id');
                return $query;
	}
	
}