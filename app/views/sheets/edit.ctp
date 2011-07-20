<div class="sheets form">
<?php echo $this->Form->create('Sheet');?>
	<fieldset>
		<legend><?php __('Edit Sheet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('trialdate');
		echo $this->Form->input('gender');
		echo $this->Form->input('age');
		echo $this->Form->input('weight');
		echo $this->Form->input('adaptation_id');
		echo $this->Form->input('other_adaptation');
		echo $this->Form->input('nomoretrialreason');
		echo $this->Form->input('other_complication');
		echo $this->Form->input('comment');
		echo $this->Form->input('Complication');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sheet.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sheet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adaptations', true), array('controller' => 'adaptations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adaptation', true), array('controller' => 'adaptations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('controller' => 'trials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complications', true), array('controller' => 'complications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complication', true), array('controller' => 'complications', 'action' => 'add')); ?> </li>
	</ul>
</div>