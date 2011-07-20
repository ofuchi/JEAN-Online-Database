<div class="hospitals index">
	<h2><?php __('Hospitals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('postalcode');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($hospitals as $hospital):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $hospital['Hospital']['id']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['name']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['tel']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['fax']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['postalcode']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['address']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['comment']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['created']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $hospital['Hospital']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $hospital['Hospital']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $hospital['Hospital']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hospital['Hospital']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hospital', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>