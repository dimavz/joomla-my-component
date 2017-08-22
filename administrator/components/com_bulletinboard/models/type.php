<?php 
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardModelType extends JModelAdmin{

	public function getForm($data=array(),$loadData = true){
		$form = array(1,2,3,4);
		return $form;
	}

}

?>