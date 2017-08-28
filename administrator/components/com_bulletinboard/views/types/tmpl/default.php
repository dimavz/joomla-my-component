<?php 
defined('_JEXEC') or die('Restricted Access');
?>
<form action="<?php echo JRoute::_('index.php?option=com_bulletinboard&view=types'); ?>" method="post" name="adminForm" id="adminForm">

<table class="table table-striped table-hover">
	<thead>

			<th width="1%">
				<?php echo JText::_('COM_BULLETINBOARD_NUM');//# ?>
			</th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall');?>
			</th>
			<th width="60%">
				<?php echo JText::_('COM_BULLETINBOARD_TYPE_NAME'); ?>
			</th>
			<th width="30%">
				<?php echo JText::_('COM_BULLETINBOARD_TYPE_ALIAS'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('JSTATUS');//# ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_BULLETINBOARD_TYPE_ID'); ?>
			</th>
	</thead>
	<tbody>
		<?php if(!empty($this->items)):?>
			<?php $num = 1;?>
			<?php foreach($this->items as $key=>$item):?>
				<tr>
				<td width="1%">
					<?php echo $num;?>
				</td>
				<td width="2%">
					<?php echo JHtml::_('grid.id',$key,$item->id)?>
				</td>
				<td width="60%">
					<?php $link = JRoute::_('index.php?option=com_bulletinboard&task=type.edit&id='.$item->id); ?>						
						<?php echo JHtml::_('link',$link, $item->name); ?>
				</td>
				<td width="30%">
					<?php echo $item->alias; ?>
				</td>
				<td width="5%">
					<?php echo JHtml::_('jgrid.published',$item->state,$key,'types.'); ?>
				</td>
				<td width="2%">
					<?php echo $item->id; ?>
				</td>
			</tr>
			<?php $num++;?>
			<?php endforeach; ?>
		<?php endif; ?>
	</tbody>
</table>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token'); ?>
</form>