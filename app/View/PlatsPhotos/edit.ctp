<div class="platsPhotos form">
<?php echo $this->Form->create('PlatsPhoto');?>
	<fieldset>
		<legend><?php echo __('Edit Plats Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('plat_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PlatsPhoto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PlatsPhoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plats Photos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Plats'), array('controller' => 'plats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plat'), array('controller' => 'plats', 'action' => 'add')); ?> </li>
	</ul>
</div>
