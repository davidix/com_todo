<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

$published = $this->state->get('filter.published');
?>
<div class="modal hide fade" id="collapseModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&#215;</button>
		<h3><?php echo JText::_('COM_TODO_BATCH_OPTIONS');?></h3>
	</div>
	<div class="modal-body">
		<p><?php echo JText::_('COM_TODO_BATCH_TIP'); ?></p>
		<div class="control-group">
			<div class="controls">
				<?php echo JHtml::_('batch.access');?>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" type="button" onclick="document.id('batch-category-id').value='';document.id('batch-access').value='';document.id('batch-language-id').value='';document.id('batch-user-id').value='';document.id('batch-tag-id)').value=''" data-dismiss="modal">
			<?php echo JText::_('JCANCEL'); ?>
		</button>
		<button class="btn btn-primary" type="submit" onclick="Joomla.submitbutton('category.batch');">
			<?php echo JText::_('JGLOBAL_BATCH_PROCESS'); ?>
		</button>
	</div>
</div>
