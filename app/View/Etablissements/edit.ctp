<div class="etablissements form">
<?php echo $this->Form->create('Etablissement');?>
	<fieldset>
		<legend><?php echo __('Edit Etablissement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('adresse');
		echo $this->Form->input('ville');
		echo $this->Form->input('code_postal');
		echo $this->Form->input('telephone');
		echo $this->Form->input('descriptif');
		echo $this->Form->input('vente');
		echo $this->Form->input('places_assises');
		echo $this->Form->input('site_internet');
		echo $this->Form->input('facebook');
		echo $this->Form->input('twitter');
		echo $this->Form->input('Formule');
		echo $this->Form->input('Paiement');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Etablissement.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Etablissement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Etablissements'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formules'), array('controller' => 'formules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formule'), array('controller' => 'formules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paiements'), array('controller' => 'paiements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paiement'), array('controller' => 'paiements', 'action' => 'add')); ?> </li>
	</ul>
</div>
