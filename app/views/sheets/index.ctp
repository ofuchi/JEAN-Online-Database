<div class="sheets index">
	<h2><?php __('Sheets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
                        <th><?php echo $this->Paginator->sort('hospital_id');?></th>
			<th><?php echo $this->Paginator->sort('trialdate');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('age');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('adaptation_id');?></th>
			<th><?php echo $this->Paginator->sort('other_adaptation');?></th>
			<th><?php echo $this->Paginator->sort('nomoretrialreason');?></th>
			<th><?php echo $this->Paginator->sort('other_complication');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sheets as $sheet):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sheet['Sheet']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sheet['User']['username'], array('controller' => 'users', 'action' => 'view', $sheet['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sheet['Hospital']['name'], array('controller' => 'hospitals', 'action' => 'view', $sheet['Hospital']['id'])); ?>
		</td>
		<td><?php echo $sheet['Sheet']['trialdate']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['gender']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['age']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['weight']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sheet['Adaptation']['name'], array('controller' => 'adaptations', 'action' => 'view', $sheet['Adaptation']['id'])); ?>
		</td>
		<td><?php echo $sheet['Sheet']['other_adaptation']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['nomoretrialreason']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['other_complication']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['comment']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['created']; ?>&nbsp;</td>
		<td><?php echo $sheet['Sheet']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sheet['Sheet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sheet['Sheet']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sheet['Sheet']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sheet['Sheet']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('action' => 'add')); ?></li>
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