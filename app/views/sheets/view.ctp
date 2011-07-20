<div class="sheets view">
<h2><?php  __('Sheet');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sheet['User']['username'], array('controller' => 'users', 'action' => 'view', $sheet['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hospital'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sheet['Hospital']['name'], array('controller' => 'hospitals', 'action' => 'view', $sheet['Hospital']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trialdate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['trialdate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Age'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['age']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Weight'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['weight']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adaptation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sheet['Adaptation']['name'], array('controller' => 'adaptations', 'action' => 'view', $sheet['Adaptation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Other Adaptation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['other_adaptation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nomoretrialreason'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['nomoretrialreason']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Other Complication'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['other_complication']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sheet['Sheet']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sheet', true), array('action' => 'edit', $sheet['Sheet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sheet', true), array('action' => 'delete', $sheet['Sheet']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sheet['Sheet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hospitals', true), array('controller' => 'hospitals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hospital', true), array('controller' => 'hospitals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adaptations', true), array('controller' => 'adaptations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adaptation', true), array('controller' => 'adaptations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trials', true), array('controller' => 'trials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trial', true), array('controller' => 'trials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complications', true), array('controller' => 'complications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complication', true), array('controller' => 'complications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Trials');?></h3>
	<?php if (!empty($sheet['Trial'])):?>
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
		foreach ($sheet['Trial'] as $trial):
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
<div class="related">
	<h3><?php __('Related Complications');?></h3>
	<?php if (!empty($sheet['Complication'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sheet['Complication'] as $complication):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $complication['id'];?></td>
			<td><?php echo $complication['name'];?></td>
			<td><?php echo $complication['comment'];?></td>
			<td><?php echo $complication['created'];?></td>
			<td><?php echo $complication['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'complications', 'action' => 'view', $complication['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'complications', 'action' => 'edit', $complication['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'complications', 'action' => 'delete', $complication['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $complication['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complication', true), array('controller' => 'complications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
