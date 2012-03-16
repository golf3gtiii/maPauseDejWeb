<div class="platsPhotos view">
<h2><?php  echo __('Plats Photo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($platsPhoto['PlatsPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($platsPhoto['PlatsPhoto']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($platsPhoto['Plat']['name'], array('controller' => 'plats', 'action' => 'view', $platsPhoto['Plat']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plats Photo'), array('action' => 'edit', $platsPhoto['PlatsPhoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plats Photo'), array('action' => 'delete', $platsPhoto['PlatsPhoto']['id']), null, __('Are you sure you want to delete # %s?', $platsPhoto['PlatsPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plats Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plats Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plats'), array('controller' => 'plats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plat'), array('controller' => 'plats', 'action' => 'add')); ?> </li>
	</ul>
</div>
