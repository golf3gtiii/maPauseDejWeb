<?php 
    echo $this->Html->css('thickbox', array('inline' => 'block'));

    $monthNames = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
?>

<div class="plats form">
<?php echo $this->Form->create('Plat', array('type' => 'file'));?>
	
	<?php
                echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('name', array('label' => 'Nom du plat *: '));
		echo $this->Form->input('cuisine_id', array('label' => 'Type de cuisine *: '));
		echo $this->Form->input('ingredient_id', array('label' => 'Type d\'ingrédient principal *: '));
		echo $this->Form->input('historique', array('label' => 'Historique : '));
		echo $this->Form->input('date_debut', array('label' => 'Date de début de mise en vente du plat *: ',
                                                    'dateFormat' => 'DMY',
                                                    'monthNames' => $monthNames,
                                                    )
                                );
		echo $this->Form->input('date_fin', array('label' => 'Date de fin de mise en vente du plat *: ',
                                                 'dateFormat' => 'DMY',
                                                    'monthNames' => $monthNames,
                                                 )
                                );
		echo $this->Form->input('formule_id');
//		echo $this->Form->input('Photo.0.name', array('type' => 'file', 'label' => 'Photo :'));
                
                
                if ($photos) : foreach ($photos as $k => $v) :
                    echo $this->Html->image($v, array('alt' => ''));
                endforeach; endif;
        ?>
    
        <?php echo $this->Html->link('Ajouter une photo', '/platsphotos/add/?KeepThis=true&TB_iframe=true&height=400&width=600', array('class' => 'thickbox')); ?>
    
    <div class="alignright">
        <?php echo $this->Form->input('Enregistrer', array('type' => 'submit', 'label' => false, 'class' => 'btn_vert')); ?>
    </div>  

    <?php    
    echo $this->Form->end();
    ?>
</div>

         
<?php 
    echo $this->Html->script('thickbox', array('inline' => false));
?>