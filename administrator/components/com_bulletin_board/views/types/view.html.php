<?php 
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardViewTypes extends JViewLegacy {

	public function display($tpl = null)
	{
		$this->addToolBar();
		$this->setDocument();
		// Display the view
		parent::display($tpl);
	}

	protected function addToolBar(){
		JToolbarHelper::title(JText::_('COM_BULLETIN_BOARD_MANAGER_TYPES'),'bulletin-board');
		JToolbarHelper::addNew('type.add',JText::_('COM_BULLETIN_BOARD_MANAGER_TYPES_ADD'));
		JToolbarHelper::editList('types.edit',JText::_('COM_BULLETIN_BOARD_MANAGER_TYPES_EDIT'));
		JToolbarHelper::deleteList('types.delite');
		JToolbarHelper::divider();
		JToolbarHelper::publish('types.publish','JTOOLBAR_PUBLISH',TRUE);
		JToolbarHelper::unpublish('types.unpublish','JTOOLBAR_UNPUBLISH',TRUE);
		JToolbarHelper::custom('type.create','bulletin-board','bulletin-board_hover','JTOOLBAR_PUBLISH', false);
		JToolbarHelper::preferences('com_bulletin_board');

		// echo JUri::root()."<br/>";
		// echo JUri::base()."<br/>";
		// echo JUri::current()."<br/>";
		//print_r(JUri::getInstance()->getVar('view'));
	}

	protected function setDocument(){
		$doc = JFactory::getDocument();
		echo JUri::root(true)."/media/com_bulletin_board/css/style.css";
		$doc->addStyleSheet(JUri::root(true)."/media/com_bulletin_board/css/style.css");
	}
}

?>