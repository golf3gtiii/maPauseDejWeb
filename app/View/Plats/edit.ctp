<div class="plats form">
<?php echo $this->Form->create('Plat');?>
	<fieldset>
		<legend><?php echo __('Edit Plat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('cuisine_id');
		echo $this->Form->input('ingredient_id');
		echo $this->Form->input('historique');
		echo $this->Form->input('date_debut');
		echo $this->Form->input('date_fin');
		echo $this->Form->input('formule_id');
		echo $this->Form->input('Photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Plat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plats'), array('action' => 'index'));?></li>
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
