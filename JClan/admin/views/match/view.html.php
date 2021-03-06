<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HelloWorld View
*/
class jclanViewmatch extends JView
{
	/**
	 * display method of Hello view
	 * @return void
	 */
	public function display($tpl = null)
	{



		// get the Data
		$form = $this->get('Form');
		$item = $this->get('Item');

		$input = JFactory::getApplication()->input;
		$input->set('hidemainmenu', true);

		//$input->get('player_id',0);
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Assign the Data
		$this->form = $form;
		$this->item = $item;
			
		$this->addToolBar();
		// Set the toolbar

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Setting the toolbar
	 */
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;
		$input->set('hidemainmenu', true);
		$isNew = ($this->item->match_id == null);
		JToolBarHelper::title($isNew ? JText::_('COM_JCLAN_MATCH_NEW')
		: JText::_('COM_JCLAN_MATCH_EDIT'));
		JToolBarHelper::save('match.save');
		JToolBarHelper::cancel('match.cancel', $isNew ? 'JTOOLBAR_CANCEL'
				: 'JTOOLBAR_CLOSE');
	}
}