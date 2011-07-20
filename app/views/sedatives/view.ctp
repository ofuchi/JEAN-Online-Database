<div class="sedatives view">
<h2><?php  __('Sedative');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sedative['Sedative']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sedative['Sedative']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sedative['Sedative']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sedative['Sedative']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sedative['Sedative']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sedative', true), array('action' => 'edit', $sedative['Sedative']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sedative', true), array('action' => 'delete', $sedative['Sedative']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sedative['Sedative']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedatives', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sedative', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('controller' => 'trials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Trials');?></h3>
	<?php if (!empty($sedative['Trial'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sheet Id'); ?></th>
		<th><?php __('Trialnumber'); ?></th>
		<th><?php __('Method Id'); ?></th>
		<th><?php __('Other Method'); ?></th>
		<th><?php __('Device Id'); ?></th>
		<th><?php __('Other Device'); ?></th>
		<th><?php __('Premed Id'); ?></th>
		<th><?php __('Other Premed'); ?></th>
		<th><?php __('Premeddose'); ?></th>
		<th><?php __('Sedative Id'); ?></th>
		<th><?php __('Other Sedative'); ?></th>
		<th><?php __('Sedativedose'); ?></th>
		<th><?php __('Relaxant Id'); ?></th>
		<th><?php __('Other Relaxant'); ?></th>
		<th><?php __('Relaxantdose'); ?></th>
		<th><?php __('Trialer Pgy'); ?></th>
		<th><?php __('Erphysician'); ?></th>
		<th><?php __('Changed'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sedative['Trial'] as $trial):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $trial['id'];?></td>
			<td><?php echo $trial['sheet_id'];?></td>
			<td><?php echo $trial['trialnumber'];?></td>
			<td><?php echo $trial['method_id'];?></td>
			<td><?php echo $trial['other_method'];?></td>
			<td><?php echo $trial['device_id'];?></td>
			<td><?php echo $trial['other_device'];?></td>
			<td><?php echo $trial['premed_id'];?></td>
			<td><?php echo $trial['other_premed'];?></td>
			<td><?php echo $trial['premeddose'];?></td>
			<td><?php echo $trial['sedative_id'];?></td>
			<td><?php echo $trial['other_sedative'];?></td>
			<td><?php echo $trial['sedativedose'];?></td>
			<td><?php echo $trial['relaxant_id'];?></td>
			<td><?php echo $trial['other_relaxant'];?></td>
			<td><?php echo $trial['relaxantdose'];?></td>
			<td><?php echo $trial['trialer_pgy'];?></td>
			<td><?php echo $trial['erphysician'];?></td>
			<td><?php echo $trial['changed'];?></td>
			<td><?php echo $trial['comment'];?></td>
			<td><?php echo $trial['created'];?></td>
			<td><?php echo $trial['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'trials', 'action' => 'view', $trial['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'trials', 'action' => 'edit', $trial['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'trials', 'action' => 'delete', $trial['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trial['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
