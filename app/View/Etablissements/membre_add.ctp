<h1><span class="vert">Fiche</span> établissement</h1>
<br/>
<div class="etablissements form">
<?php echo $this->Form->create('Etablissement');?>
	
	<?php
        echo $this->Form->input('name', array('label' => 'Nom établissement *: '));
        echo $this->Form->input('adresse', array('label' => 'Adresse *: '));
        echo $this->Form->input('ville', array('label' => 'Ville *: '));
        echo $this->Form->input('code_postal', array('label' => 'Code postal *: '));
        echo $this->Form->input('telephone', array('label' => 'Téléphone* :'));
        echo $this->Form->input('descriptif', array('label' => 'Descriptif* :'));
        ?>
        <div class="inline">
            
            <?php
            echo '<div class="select"><label for="EtablissementVente">Vente *:</label> '.$this->Form->select('vente', array('sur place', 'à emporter', 'all' => 'les deux'))."</div>";
            echo $this->Form->input('places_assises', array('label' => 'Capacité places assises : '));

            ?>
        </div>
        <div class="clear"></div>
        <div class="separation" ></div>
        <h2>Modes de paiement :</h2>
        <div class="inline">
            <?php                
            echo $this->Form->input('Paiement',array(
                            'label' => false,
                            'type' => 'select',
                            'multiple' => 'checkbox',
                            'options' => $paiements,
                            'selected' => $this->Html->value('Paiement.name'),
                    )); 

            
            ?>
        </div>
        <div class="clear"></div>
        <div class="separation" ></div>
        <h2>Formules déjeuner proposées :</h2>
        <?php
        if ($formules) :
            foreach ($formules as $f) :
                echo $this->Form->input($f,array('type' => 'checkbox'));
                echo $this->Form->input($f['montant'],array('label' => false));
            endforeach;            
        endif;
        
        
        /*echo $this->Form->input('Formule',array(
                            'type' => 'select',
                            'multiple' => 'checkbox',
                            'options' => $formules,
                            'selected' => $this->Html->value('Formule.name'),
                    ));
        */
        echo '<div class="separation" ></div>'.$this->Form->input('site_internet', array('label' => 'Site internet de l\'établissement :'));
        echo $this->Form->input('facebook', array('label' => 'Page facebook de l\'établissement :'));
        echo '<div class="separation" ></div>'.$this->Form->input('twitter', array('label' => 'Page twitter :'));
        ?>

        <div class="alignright">
            <?php echo $this->Form->input('Enregistrer', array('type' => 'submit', 'label' => false, 'class' => 'btn_vert')); ?>
        </div>  

        <?php    
        echo $this->Form->end();
        ?>
</div>

