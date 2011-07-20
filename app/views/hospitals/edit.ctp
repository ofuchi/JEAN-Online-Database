<div class="hospitals form">
<?php echo $this->Form->create('Hospital');?>
	<fieldset>
		<legend><?php __('Edit Hospital'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('tel');
		echo $this->Form->input('fax');
		echo $this->Form->input('postalcode');
		echo $this->Form->input('address');
		echo $this->Form->input('comment');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Hospital.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Hospital.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hospitals', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>