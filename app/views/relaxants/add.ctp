<div class="relaxants form">
<?php echo $this->Form->create('Relaxant');?>
	<fieldset>
		<legend><?php __('Add Relaxant'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Relaxants', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('controller' => 'trials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add')); ?> </li>
	</ul>
</div>