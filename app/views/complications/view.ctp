<div class="complications view">
<h2><?php  __('Complication');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $complication['Complication']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $complication['Complication']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $complication['Complication']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $complication['Complication']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $complication['Complication']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Complication', true), array('action' => 'edit', $complication['Complication']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Complication', true), array('action' => 'delete', $complication['Complication']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $complication['Complication']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Complications', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complication', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sheets');?></h3>
	<?php if (!empty($complication['Sheet'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Trialdate'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Age'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Adaptation Id'); ?></th>
		<th><?php __('Other Adaptation'); ?></th>
		<th><?php __('Nomoretrialreason'); ?></th>
		<th><?php __('Other Complication'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($complication['Sheet'] as $sheet):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sheet['id'];?></td>
			<td><?php echo $sheet['user_id'];?></td>
			<td><?php echo $sheet['trialdate'];?></td>
			<td><?php echo $sheet['gender'];?></td>
			<td><?php echo $sheet['age'];?></td>
			<td><?php echo $sheet['weight'];?></td>
			<td><?php echo $sheet['adaptation_id'];?></td>
			<td><?php echo $sheet['other_adaptation'];?></td>
			<td><?php echo $sheet['nomoretrialreason'];?></td>
			<td><?php echo $sheet['other_complication'];?></td>
			<td><?php echo $sheet['comment'];?></td>
			<td><?php echo $sheet['created'];?></td>
			<td><?php echo $sheet['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sheets', 'action' => 'view', $sheet['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sheets', 'action' => 'edit', $sheet['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sheets', 'action' => 'delete', $sheet['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sheet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
