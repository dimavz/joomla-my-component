<?php
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardModelTypes extends JModelList{
	protected function getListQuery()
	{
		$query = parent::getListQuery();
		$query->select('id,name,state,alias');
		$query->from('#__bulletin_board_types');
		return $query;
	}
}
?>