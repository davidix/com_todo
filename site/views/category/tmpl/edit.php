<?php
/**
 * @author		
 * @copyright	
 * @license		
 */

defined("_JEXEC") or die("Restricted access");

JHtml::_('behavior.keepalive');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.calendar');
JHtml::_('formbehavior.chosen', 'select');
?>

<h2><?php echo JText::_('COM_TODO_TODO_CATEGORY_VIEW_CATEGORY_TITLE'); ?>: <i><?php echo $this->item->name; ?></i></h2>

<form action="<?php echo JRoute::_('index.php?option=com_todo&id=' . (int)$this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate form-horizontal">
	
	<div>
		<button type="button" class="btn btn-primary" onclick="Joomla.submitform('category.apply')"><?php echo JText::_('JAPPLY') ?></button>
		<button type="button" class="btn btn-primary" onclick="Joomla.submitform('category.save')"><?php echo JText::_('JSAVE') ?></button>
		<button type="button" class="btn btn-primary" onclick="Joomla.submitform('category.save2new')"><?php echo JText::_('JTOOLBAR_SAVE_AND_NEW') ?></button>
		<button type="button" class="btn btn-primary" onclick="Joomla.submitform('category.save2copy')"><?php echo JText::_('JTOOLBAR_SAVE_AS_COPY') ?></button>
		<button type="button" class="btn btn-danger" onclick="Joomla.submitform('category.cancel')"><?php echo JText::_('JCANCEL') ?></button>
	</div>
	
	<br>
	
	<div class="form-horizontal">
	<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>
		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', 'Category', $this->item->id, true); ?>

		<div class="row-fluid">
			<div class="span12">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('name'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('name'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('description'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('description'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('icon'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('icon'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('color'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('color'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('id'); ?></div>
				</div>
			</div>
		</div>
		
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'images', JText::_('JGLOBAL_FIELDSET_IMAGE_OPTIONS', true)); ?>
		<div class="row-fluid">
			<div class="span6">
					<?php echo $this->form->getControlGroup('images'); ?>
					<?php foreach ($this->form->getGroup('images') as $field) : ?>
						<?php echo $field->getControlGroup(); ?>
					<?php endforeach; ?>
				</div>
			</div>
		<?php echo JHtml::_('bootstrap.endTab'); ?>
		
		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'publishing', JText::_('JGLOBAL_FIELDSET_PUBLISHING', true), true); ?>

		<div class="row-fluid">
			<div class="span12">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('published'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('published'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('access'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('access'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created_by'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created_by'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created_by_alias'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created_by_alias'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('modified'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('modified'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('modified_by'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('modified_by'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('publish_up'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('publish_up'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('publish_down'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('publish_down'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('version'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('version'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('hits'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('hits'); ?></div>
				</div>
			</div>
		</div>
		
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JLayoutHelper::render('joomla.edit.params', $this); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'acl', 'ACL Configuration', true); ?>		

		<div class="row-fluid">
			<div class="span12">
				<fieldset class="panelform">
					<legend><?php echo $this->item->name ?></legend>
					<?php echo JHtml::_('sliders.start', 'permissions-sliders-'.$this->item->id, array('useCookie'=>1)); ?>
					<?php echo JHtml::_('sliders.panel', JText::_('ACL Configuration'), 'access-rules'); ?>
					<?php echo $this->form->getInput('rules'); ?>
					<?php echo JHtml::_('sliders.end'); ?>
				</fieldset>
			</div>
		</div>

		<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php echo JHtml::_('bootstrap.endTabSet'); ?>
	</div>
	
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>