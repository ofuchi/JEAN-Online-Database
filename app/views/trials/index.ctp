<div class="trials index">
	<h2><?php __('Trials');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sheet_id');?></th>
			<th><?php echo $this->Paginator->sort('trialnumber');?></th>
			<th><?php echo $this->Paginator->sort('method_id');?></th>
			<th><?php echo $this->Paginator->sort('other_method');?></th>
			<th><?php echo $this->Paginator->sort('device_id');?></th>
			<th><?php echo $this->Paginator->sort('other_device');?></th>
			<th><?php echo $this->Paginator->sort('premed_id');?></th>
			<th><?php echo $this->Paginator->sort('other_premed');?></th>
			<th><?php echo $this->Paginator->sort('premeddose');?></th>
			<th><?php echo $this->Paginator->sort('sedative_id');?></th>
			<th><?php echo $this->Paginator->sort('other_sedative');?></th>
			<th><?php echo $this->Paginator->sort('sedativedose');?></th>
			<th><?php echo $this->Paginator->sort('relaxant_id');?></th>
			<th><?php echo $this->Paginator->sort('other_relaxant');?></th>
			<th><?php echo $this->Paginator->sort('relaxantdose');?></th>
			<th><?php echo $this->Paginator->sort('trialer_pgy');?></th>
			<th><?php echo $this->Paginator->sort('erphysician');?></th>
			<th><?php echo $this->Paginator->sort('changed');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($trials as $trial):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $trial['Trial']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trial['Sheet']['id'], array('controller' => 'sheets', 'action' => 'view', $trial['Sheet']['id'])); ?>
		</td>
		<td><?php echo $trial['Trial']['trialnumber']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trial['Method']['name'], array('controller' => 'methods', 'action' => 'view', $trial['Method']['id'])); ?>
		</td>
		<td><?php echo $trial['Trial']['other_method']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trial['Device']['name'], array('controller' => 'devices', 'action' => 'view', $trial['Device']['id'])); ?>
		</td>
		<td><?php echo $trial['Trial']['other_device']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trial['Premed']['name'], array('controller' => 'premeds', 'action' => 'view', $trial['Premed']['id'])); ?>
		</td>
		<td><?php echo $trial['Trial']['other_premed']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['premeddose']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trial['Sedative']['name'], array('controller' => 'sedatives', 'action' => 'view', $trial['Sedative']['id'])); ?>
		</td>
		<td><?php echo $trial['Trial']['other_sedative']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['sedativedose']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trial['Relaxant']['name'], array('controller' => 'relaxants', 'action' => 'view', $trial['Relaxant']['id'])); ?>
		</td>
		<td><?php echo $trial['Trial']['other_relaxant']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['relaxantdose']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['trialer_pgy']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['erphysician']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['changed']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['comment']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['created']; ?>&nbsp;</td>
		<td><?php echo $trial['Trial']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $trial['Trial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $trial['Trial']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $trial['Trial']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trial['Trial']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Trial', true), array('action' => 'add')); ?></li>
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