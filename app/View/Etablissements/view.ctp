<div class="etablissements view">
<h2><?php  echo __('Etablissement');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['code_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descriptif'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['descriptif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vente'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['vente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Places Assises'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['places_assises']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Internet'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['site_internet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($etablissement['Etablissement']['twitter']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etablissement'), array('action' => 'edit', $etablissement['Etablissement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etablissement'), array('action' => 'delete', $etablissement['Etablissement']['id']), null, __('Are you sure you want to delete # %s?', $etablissement['Etablissement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etablissements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etablissement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formules'), array('controller' => 'formules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formule'), array('controller' => 'formules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paiements'), array('controller' => 'paiements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paiement'), array('controller' => 'paiements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Photos');?></h3>
	<?php if (!empty($etablissement['Photo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Etablissement Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($etablissement['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id'];?></td>
			<td><?php echo $photo['etablissement_id'];?></td>
			<td><?php echo $photo['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Formules');?></h3>
	<?php if (!empty($etablissement['Formule'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($etablissement['Formule'] as $formule): ?>
		<tr>
			<td><?php echo $formule['id'];?></td>
			<td><?php echo $formule['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formules', 'action' => 'view', $formule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formules', 'action' => 'edit', $formule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formules', 'action' => 'delete', $formule['id']), null, __('Are you sure you want to delete # %s?', $formule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formule'), array('controller' => 'formules', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Paiements');?></h3>
	<?php if (!empty($etablissement['Paiement'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($etablissement['Paiement'] as $paiement): ?>
		<tr>
			<td><?php echo $paiement['id'];?></td>
			<td><?php echo $paiement['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'paiements', 'action' => 'view', $paiement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'paiements', 'action' => 'edit', $paiement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'paiements', 'action' => 'delete', $paiement['id']), null, __('Are you sure you want to delete # %s?', $paiement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Paiement'), array('controller' => 'paiements', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
