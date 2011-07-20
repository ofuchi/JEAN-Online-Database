<div class="complications form">
<?php echo $this->Form->create('Complication');?>
	<fieldset>
		<legend><?php __('Edit Complication'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
		echo $this->Form->input('Sheet');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Complication.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Complication.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Complications', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
	</ul>
</div>