<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");
?>

<h2>
	<?php echo JText::_('COM_TODO_TODO_TASK_VIEW_TASK_TITLE'); ?>: <i><?php echo $this->item->name; ?></i>
	<span class="pull-right" style="font-weight:300; font-size:15px;">[<a href="<?php echo JRoute::_('index.php?option=com_todo&task=task.edit&id=' . (int) $this->item->id); ?>"><?php echo JText::_('JACTION_EDIT') ?></a>]</span>
</h2>

<table class="table table-striped">
	<tbody>
			<tr>
				<td>Name</td>
				<td><?php echo $this->escape($this->item->name); ?></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><?php echo $this->escape($this->item->description); ?></td>
			</tr>
			<tr>
				<td>Date_done</td>
				<td><?php echo $this->escape($this->item->date_done); ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $this->escape($this->item->status); ?></td>
			</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $this->escape($this->item->id); ?></td>
		</tr>
	</tbody>
</table>
<p><a href="index.php?option=com_todo&view=tasks"><?php echo JText::_('JPREVIOUS'); ?></a></p>