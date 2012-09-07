<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelSeasons extends JModellist {
	
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('season_id,season_name');
                // From the hello table
                $query->from('#__jclan_season');
               return $query;
	}
	
}