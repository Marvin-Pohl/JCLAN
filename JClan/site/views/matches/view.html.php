<?php

//No direct Access
defined('_JEXEC') or die('Restricted Access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
*/
class JCLANViewMatches extends JView
{
	// Overwriting JView display method
	function display($tpl = null)
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');
		//$pagination->total = 100;
		//$pagination->limit = 10;
		 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;

		// Display the view
		parent::display($tpl);
	}
}