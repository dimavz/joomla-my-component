<?php 
defined('_JEXEC') or die('Restricted Access');
?>
<form action="<?php echo JRoute::_('index.php?option=com_bulletinboard&view=types'); ?>" method="post" name="adminForm" id="adminForm">

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td width="1%">
				<?php echo JText::_('COM_BULLETINBOARD_NUM');//# ?>
			</td>
			<td width="2%">
				Check
			</td>
			<td width="60%">
				<?php echo JText::_('COM_BULLETINBOARD_TYPE_NAME'); ?>
			</td>
			<td width="30%">
				<?php echo JText::_('COM_BULLETINBOARD_TYPE_ALIAS'); ?>
			</td>
			<td width="5%">
				<?php echo JText::_('JSTATUS');//# ?>
			</td>
			<td width="2%">
				<?php echo JText::_('COM_BULLETINBOARD_TYPE_ID'); ?>
			</td>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($this->items)):?>
			<?php foreach($this->items as $item):?>
				<tr>
				<td width="1%">
					
				</td>
				<td width="2%">
					Check
				</td>
				<td width="60%">
					<?php $link = JRoute::_('index.php?option=com_bulletinboard&task=type.edit&id='.$item->id); ?>
						<a href="<?php echo $link; ?>"><?php echo $item->name; ?></a>
				</td>
				<td width="30%">
					<?php echo $item->alias; ?>
				</td>
				<td width="5%">
					<?php echo $item->state; ?>
				</td>
				<td width="2%">
					<?php echo $item->id; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</form>