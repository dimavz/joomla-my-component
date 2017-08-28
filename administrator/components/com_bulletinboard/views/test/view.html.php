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
		
		$db->setQuery($query);
		//$result = $db->loadAssocList('id','link');
		//$result = $db->loadAssoc();
		//$result = $db->loadRow();
		//$result = $db->loadRowList();
		
		
		
		echo $query;
		$db->execute();
		echo "<br/>";
		echo $db->getNumRows();
		//$result = '';
		echo"<pre>";
		print_r($result);
		echo"</pre>";
		
		// Display the view
		parent::display($tpl);
	}
}
?>