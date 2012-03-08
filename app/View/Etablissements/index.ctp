<div class="etablissements index">
	<h2><?php echo __('Etablissements');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('adresse');?></th>
			<th><?php echo $this->Paginator->sort('ville');?></th>
			<th><?php echo $this->Paginator->sort('code_postal');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('descriptif');?></th>
			<th><?php echo $this->Paginator->sort('vente');?></th>
			<th><?php echo $this->Paginator->sort('places_assises');?></th>
			<th><?php echo $this->Paginator->sort('site_internet');?></th>
			<th><?php echo $this->Paginator->sort('facebook');?></th>
			<th><?php echo $this->Paginator->sort('twitter');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($etablissements as $etablissement): ?>
	<tr>
		<td><?php echo h($etablissement['Etablissement']['id']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['name']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['ville']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['code_postal']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['descriptif']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['vente']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['places_assises']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['site_internet']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['facebook']); ?>&nbsp;</td>
		<td><?php echo h($etablissement['Etablissement']['twitter']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $etablissement['Etablissement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $etablissement['Etablissement']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $etablissement['Etablissement']['id']), null, __('Are you sure you want to delete # %s?', $etablissement['Etablissement']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Etablissement'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formules'), array('controller' => 'formules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formule'), array('controller' => 'formules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paiements'), array('controller' => 'paiements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paiement'), array('controller' => 'paiements', 'action' => 'add')); ?> </li>
	</ul>
</div>
