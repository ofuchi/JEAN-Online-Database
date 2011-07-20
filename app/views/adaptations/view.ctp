<div class="adaptations view">
<h2><?php  __('Adaptation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adaptation['Adaptation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adaptation['Adaptation']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adaptation['Adaptation']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adaptation['Adaptation']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $adaptation['Adaptation']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adaptation', true), array('action' => 'edit', $adaptation['Adaptation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Adaptation', true), array('action' => 'delete', $adaptation['Adaptation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $adaptation['Adaptation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Adaptations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adaptation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sheets');?></h3>
	<?php if (!empty($adaptation['Sheet'])):?>
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
		foreach ($adaptation['Sheet'] as $sheet):
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
