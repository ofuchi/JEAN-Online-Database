<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Realname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['realname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['comment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hospitals', true), array('controller' => 'hospitals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hospital', true), array('controller' => 'hospitals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sheets');?></h3>
	<?php if (!empty($user['Sheet'])):?>
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
		foreach ($user['Sheet'] as $sheet):
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
<div class="related">
	<h3><?php __('Related Hospitals');?></h3>
	<?php if (!empty($user['Hospital'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Tel'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Postalcode'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Hospital'] as $hospital):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $hospital['id'];?></td>
			<td><?php echo $hospital['name'];?></td>
			<td><?php echo $hospital['tel'];?></td>
			<td><?php echo $hospital['fax'];?></td>
			<td><?php echo $hospital['postalcode'];?></td>
			<td><?php echo $hospital['address'];?></td>
			<td><?php echo $hospital['comment'];?></td>
			<td><?php echo $hospital['created'];?></td>
			<td><?php echo $hospital['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'hospitals', 'action' => 'view', $hospital['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'hospitals', 'action' => 'edit', $hospital['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'hospitals', 'action' => 'delete', $hospital['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hospital['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hospital', true), array('controller' => 'hospitals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
