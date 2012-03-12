<div class="plats form">
<?php echo $this->Form->create('Plat', array('type' => 'file'));?>
	
	<?php
		echo $this->Form->input('name', array('label' => 'Nom du plat *: '));
		echo $this->Form->input('cuisine_id', array('label' => 'Type de cuisine *: '));
		echo $this->Form->input('ingredient_id', array('label' => 'Type d\'ingrédient principal *: '));
		echo $this->Form->input('historique', array('label' => 'Historique : '));
		echo $this->Form->input('date_debut', array('label' => 'Date de début de mise en vente du plat *: '));
		echo $this->Form->input('date_fin', array('label' => 'Date de fin de mise en vente du plat *: '));
		echo $this->Form->input('formule_id');
		echo $this->Form->input('Photo.name', array('type' => 'file'));
                echo $this->Form->input('Photo.name.remove', array('type' => 'checkbox'));
	?>

    <div class="alignright">
        <?php echo $this->Form->input('Enregistrer', array('type' => 'submit', 'label' => false, 'class' => 'btn_vert')); ?>
    </div>  

    <?php    
    echo $this->Form->end();
    ?>
</div>

         
