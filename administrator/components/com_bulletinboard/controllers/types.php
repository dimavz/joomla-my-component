<?php
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardControllerTypes extends JControllerAdmin{
	
	public function getModel($name='Type', $prefix='BulletinBoardModel',$config=array()){
		return parent::getModel($name,$prefix,$config);
	}
	
	public function publish(){
		
	}
}
?>