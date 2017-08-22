<?php 
 defined('_JEXEC') or die('Restricted Access');
//echo "Тест админской части компонента";
$controller = JControllerLegacy::getInstance('BulletinBoard');
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task','display'));
$controller->redirect();
// echo "<pre>";
// print_r($input);
// echo "</pre>";
?>