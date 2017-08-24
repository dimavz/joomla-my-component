<?php 
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardModelType extends JModelAdmin{

	public function getForm($data=array(),$loadData = true){
		$form = $this->loadForm(
			$this->option.'type',
			'type',
			array('control'=>'jform','load_data'=>$loadData)
			);
		if(empty($form)){
			return false;
		}
		return $form;
	}
	
	public function getTable($type='Type',$prefix='BulletinBoardTable',$config=array()){
		return JTable::getInstance($type,$prefix,$config);
	}
	
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState('com_bulletinboard.edit.type.data');
		if(empty($data)){
			$data = $this->getItem();
		}
		return $data;
	}

}

?>