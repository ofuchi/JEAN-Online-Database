<div class="adaptations form">
<?php echo $this->Form->create('Adaptation');?>
	<fieldset>
		<legend><?php __('Edit Adaptation'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Adaptation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Adaptation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Adaptations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
	</ul>
</div>