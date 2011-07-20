<div class="trials form">
<?php echo $this->Form->create('Trial');?>
	<fieldset>
		<legend><?php __('Edit Trial'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sheet_id');
		echo $this->Form->input('trialnumber');
		echo $this->Form->input('method_id');
		echo $this->Form->input('other_method');
		echo $this->Form->input('device_id');
		echo $this->Form->input('other_device');
		echo $this->Form->input('premed_id');
		echo $this->Form->input('other_premed');
		echo $this->Form->input('premeddose');
		echo $this->Form->input('sedative_id');
		echo $this->Form->input('other_sedative');
		echo $this->Form->input('sedativedose');
		echo $this->Form->input('relaxant_id');
		echo $this->Form->input('other_relaxant');
		echo $this->Form->input('relaxantdose');
		echo $this->Form->input('trialer_pgy');
		echo $this->Form->input('erphysician');
		echo $this->Form->input('changed');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Trial.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Trial.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Methods', true), array('controller' => 'methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Method', true), array('controller' => 'methods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices', true), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device', true), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Premeds', true), array('controller' => 'premeds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Premed', true), array('controller' => 'premeds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedatives', true), array('controller' => 'sedatives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sedative', true), array('controller' => 'sedatives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relaxants', true), array('controller' => 'relaxants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relaxant', true), array('controller' => 'relaxants', 'action' => 'add')); ?> </li>
	</ul>
</div>