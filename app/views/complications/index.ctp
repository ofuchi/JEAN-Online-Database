<div class="complications index">
	<h2><?php __('Complications');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($complications as $complication):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $complication['Complication']['id']; ?>&nbsp;</td>
		<td><?php echo $complication['Complication']['name']; ?>&nbsp;</td>
		<td><?php echo $complication['Complication']['comment']; ?>&nbsp;</td>
		<td><?php echo $complication['Complication']['created']; ?>&nbsp;</td>
		<td><?php echo $complication['Complication']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $complication['Complication']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $complication['Complication']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $complication['Complication']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $complication['Complication']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Complication', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sheets', true), array('controller' => 'sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sheet', true), array('controller' => 'sheets', 'action' => 'add')); ?> </li>
	</ul>
</div>