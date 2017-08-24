<?php
defined('_JEXEC') or die('Restricted Access');

class BulletinBoardViewTest extends JViewLegacy {
	
	public function display($tpl = null)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(TRUE);
		$columns =$db->quoteName(array(id,title,alias,path,link));
		$query->select($columns);
		$id =3;
		$query->from($db->quoteName('#__menu'));
		$query->where($db->quoteName('id').'>'.$db->quote($id));
		
		
		
		echo $query;
		$result = '';
		echo"<pre>";
		//print_r($db);
		echo"</pre>";
		
		// Display the view
		parent::display($tpl);
	}
}
?>