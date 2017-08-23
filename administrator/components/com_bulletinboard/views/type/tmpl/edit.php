<?php 
defined('_JEXEC') or die('Restricted Access');
JHtml::_('formbehavior.chosen','select');
JHtml::_('behavior.keepalive');
?>
<form action="<?php echo JRoute::_('index.php?option=com_bulletinboard&layout=edit');?>" method="post" id="adminForm" name="adminForm" class="form-validate">
	<div class="row-fluid">
		<div class="span9">
			<?php echo JLayoutHelper::render('edit.title_alias',$this,'administrator/components/com_bulletinboard/'); ?>
		</div>
		<div class="span3">
			<?php echo JLayoutHelper::render('edit.global',$this,'administrator/components/com_bulletinboard/'); ?>
		</div>
	</div>
	
	<?php //echo $this->form->renderFieldset('basic'); ?>	
	<input type="hidden" name="task" value="type.edit" />
	<?php echo JHtml::_('form.token'); //JHtmlForm ?>	
</form>
