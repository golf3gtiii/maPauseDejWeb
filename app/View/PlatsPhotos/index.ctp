<div class="platsPhotos index">
	<h2><?php echo __('Plats Photos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('plat_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($platsPhotos as $platsPhoto): ?>
	<tr>
		<td><?php echo h($platsPhoto['PlatsPhoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($platsPhoto['PlatsPhoto']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($platsPhoto['Plat']['name'], array('controller' => 'plats', 'action' => 'view', $platsPhoto['Plat']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $platsPhoto['PlatsPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $platsPhoto['PlatsPhoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $platsPhoto['PlatsPhoto']['id']), null, __('Are you sure you want to delete # %s?', $platsPhoto['PlatsPhoto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Plats Photo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plats'), array('controller' => 'plats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plat'), array('controller' => 'plats', 'action' => 'add')); ?> </li>
	</ul>
</div>
