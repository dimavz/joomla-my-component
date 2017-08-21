<?php 
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardViewTypes extends JViewLegacy {

	public function display($tpl = null)
	{
		$this->addToolBar();
		// Display the view
		parent::display($tpl);
	}

	protected function addToolBar(){
		JToolbarHelper::title(JText::_('COM_BULLETIN_BOARD_MANAGER_TYPES'));
		JToolbarHelper::addNew('type.add',JText::_('COM_BULLETIN_BOARD_MANAGER_TYPES_ADD'));
		JToolbarHelper::editList('type.edit',JText::_('COM_BULLETIN_BOARD_MANAGER_TYPES_EDIT'));
		JToolbarHelper::divider();
		JToolbarHelper::publish('types.publish','JTOOLBAR_PUBLISH',TRUE);
		JToolbarHelper::unpublish('types.unpublish','JTOOLBAR_UNPUBLISH',TRUE);
		JToolbarHelper::preferences('com_bulletin_board');
	}
}

?>