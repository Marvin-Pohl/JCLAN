<?php
//No direct Access
defined('_JEXEC') or die('Restricted Access');

// import Joomla view library
jimport('joomla.application.component.view');
 
class JClanViewGame_modes extends JView
{

	
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
                // Only set the toolbar if not modal
                if ($this->getLayout() !== 'modal') {
                	$this->addToolBar();
                }
                
                // Display the template
                parent::display($tpl);
        }
        
        /**
         * Setting the toolbar
         */
        protected function addToolBar()
        {
        	JToolBarHelper::title(JText::_('COM_JCLAN_MANAGER_GAME_MODES_TOOLBAR_TITLE'));
        	JToolBarHelper::deleteList('', 'game_modes.delete');
        	JToolBarHelper::editList('game_mode.edit');
        	JToolBarHelper::addNew('game_mode.add');
        }
}