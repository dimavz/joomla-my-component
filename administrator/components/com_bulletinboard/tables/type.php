<?php
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardTableType extends JTable{
	
	public function __construct($db){
		parent::__construct('#__bulletin_board_types','id',$db);
	}
}
?>