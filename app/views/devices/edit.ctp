<div class="devices form">
<?php echo $this->Form->create('Device');?>
	<fieldset>
		<legend><?php __('Edit Device'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Device.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Device.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Devices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('controller' => 'trials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add')); ?> </li>
	</ul>
</div>