<div class="plats view">
<h2><?php  echo __('Plat');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plat['Plat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plat['Plat']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuisine'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plat['Cuisine']['name'], array('controller' => 'cuisines', 'action' => 'view', $plat['Cuisine']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingredient'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plat['Ingredient']['name'], array('controller' => 'ingredients', 'action' => 'view', $plat['Ingredient']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historique'); ?></dt>
		<dd>
			<?php echo h($plat['Plat']['historique']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Debut'); ?></dt>
		<dd>
			<?php echo h($plat['Plat']['date_debut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Fin'); ?></dt>
		<dd>
			<?php echo h($plat['Plat']['date_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plat['Formule']['name'], array('controller' => 'formules', 'action' => 'view', $plat['Formule']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plat'), array('action' => 'edit', $plat['Plat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plat'), array('action' => 'delete', $plat['Plat']['id']), null, __('Are you sure you want to delete # %s?', $plat['Plat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisines'), array('controller' => 'cuisines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine'), array('controller' => 'cuisines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingredients'), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingredient'), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formules'), array('controller' => 'formules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formule'), array('controller' => 'formules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plats Photos'), array('controller' => 'plats_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'plats_photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Plats Photos');?></h3>
	<?php if (!empty($plat['Photo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Plat Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($plat['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id'];?></td>
			<td><?php echo $photo['name'];?></td>
			<td><?php echo $photo['plat_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plats_photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plats_photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plats_photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'plats_photos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
