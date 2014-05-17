<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelGames extends JModellist {
	
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('game_id,game_name,homepage,image');
                // From the hello table
                $query->from('#__jclan_game');
                return $query;
	}
	
}