<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HelloWorld View
*/
class JClanViewPlayer extends JView
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
		$isNew = ($this->item->player_id == null);
		JToolBarHelper::title($isNew ? JText::_('COM_JCLAN_PLAYER_NEW')
		: JText::_('COM_JCLAN_PLAYER_EDIT'));
		JToolBarHelper::save('player.save');
		JToolBarHelper::cancel('player.cancel', $isNew ? 'JTOOLBAR_CANCEL'
				: 'JTOOLBAR_CLOSE');
	}
}