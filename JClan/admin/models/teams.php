<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.modellist');

class JClanModelTeams extends JModellist {
	function getListQuery() {
		
		  // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('team_name,entry_date,homepage');
                // From the hello table
                $query->from('#__jclan_team');
                return $query;
	}
}