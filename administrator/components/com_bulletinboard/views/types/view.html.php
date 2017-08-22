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
		// Пример с пользовательской иконкой
		//JToolbarHelper::title(JText::_('COM_BULLETINBOARD_MANAGER_TYPES'),'bulletin-board'); 
		JToolbarHelper::title(JText::_('COM_BULLETINBOARD_MANAGER_TYPES'));
		JToolbarHelper::addNew('type.add',JText::_('COM_BULLETINBOARD_MANAGER_TYPES_ADD'));
		JToolbarHelper::editList('types.edit',JText::_('COM_BULLETINBOARD_MANAGER_TYPES_EDIT'));
		JToolbarHelper::divider();
		JToolbarHelper::publish('types.publish','JTOOLBAR_PUBLISH',TRUE);
		JToolbarHelper::unpublish('types.unpublish','JTOOLBAR_UNPUBLISH',TRUE);
		JToolbarHelper::deleteList(JText::_('COM_BULLETINBOARD_MANAGER_TYPES_DELETE_MSG'),'types.delete');
		//JToolbarHelper::editHtml();
		//JToolbarHelper::editCss();
		//JToolbarHelper::help('help');
		//JToolbarHelper::save();
		//JToolbarHelper::trash();
		//JToolbarHelper::preview();
		//JToolbarHelper::cancel();
		// Пример с пользовательской кнопкой
		//JToolbarHelper::custom('type.create','bulletin-board','bulletin-board_hover','JTOOLBAR_PUBLISH', false);
		JToolbarHelper::preferences('com_BULLETINBOARD');

		// echo JUri::root()."<br/>";
		// echo JUri::base()."<br/>";
		// echo JUri::current()."<br/>";
		//print_r(JUri::getInstance()->getVar('view'));
	}

	protected function setDocument(){
		$doc = JFactory::getDocument();
		$doc->addStyleSheet(JUri::root(true)."/media/com_BULLETINBOARD/css/style.css");
	}
}

?>