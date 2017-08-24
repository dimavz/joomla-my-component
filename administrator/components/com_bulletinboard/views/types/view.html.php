<?php 
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardViewTypes extends JViewLegacy {
	
	protected $items;

	public function display($tpl = null)
	{
		$this->addToolBar();
		$this->setDocument();
		
		$this->items = $this->get('Items'); //Обращаемся к методу модели getItems 
		//var_dump($this->items);
		
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
		JToolbarHelper::preferences('com_bulletinboard');
	}

	protected function setDocument(){
		$doc = JFactory::getDocument();
		$doc->addStyleSheet(JUri::root(true)."/media/com_bulletinboard/css/style.css");
	}
}

?>