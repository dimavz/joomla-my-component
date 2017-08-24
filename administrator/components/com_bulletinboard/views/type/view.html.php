<?php 
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardViewType extends JViewLegacy {

	protected $title ='Тип объявления';
	protected $form;
	
	public function display($tpl = null)
	{
		$this->form = $this->get('Form'); //обращение к методу getForm
		$this->item = $this->get('Item'); //обращение к методу getItem
		//print_r($this->item);
		$this->addToolBar();
		$this->setDocument();
		
		// Display the view
		parent::display($tpl);
	}

	protected function addToolBar(){

		$is_new = ($this->item->id == 0);
		if($is_new){
			$this->title = JText::_('COM_BULLETINBOARD_ADD_NEW_TYPE');
		}
		else
		{
			$this->title = JText::_('COM_BULLETINBOARD_EDIT_TYPE');
		}

		JToolbarHelper::title($this->title);
		JToolbarHelper::apply('type.apply');
		JToolbarHelper::save('type.save');
		JToolbarHelper::save2new('type.new');
		JToolbarHelper::cancel('type.cancel');
	}

	protected function setDocument(){
		$doc = JFactory::getDocument();
		$doc->setTitle($this->title);
		$doc->addStyleSheet(JUri::root(true)."/media/com_bulletinboard/css/style.css");
	}

}

?>