<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelGame_modes extends JModellist {
	
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('game_mode_id,game_mode_name,game_mode_short_name');
                // From the hello table
                $query->from('#__jclan_game_mode');
               return $query;
	}
	
}