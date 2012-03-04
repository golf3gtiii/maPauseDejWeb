<h1><span class="vert">Créer</span> votre compte</h1>

<p>Vous êtes un restaurateur, un boulanger,, un professionnel de la restauration, tous les jours vous proposez un ou des plats du jour différents, vous souhaitez que vos clients soient facilement informés des bons plats que vous leurs concoctez.</p>

<div class="cadre_form">
    <?php echo $this->Form->create('User');?>
    <fieldset>

    <?php
            echo $this->Form->input('username', array('label' => 'Votre e-mail'));
            echo $this->Form->input('cusername', array('label' => 'Confirmation e-mail'));
            
            echo $this->Form->input('password', array('label' => 'Choisir un mot de passe'));
            echo $this->Form->input('cpassword', array('label' => 'Confirmation mot de passe', 'type' => 'password'));

            echo $this->Form->input('confirm_creation', array('type' => 'checkbox', 'label' => '<span class="vert">OUI</span>, je confirme les données saisies et je crée mon compte'));
    ?>
        

    <p>Un mail de confirmation vous sera ensuite envoyé dans lequel se trouvera un lien pour activer votre compte</p>    

    </fieldset>
    <div class="alignright">
    <?php echo $this->Form->submit('Valider'); ?>
    </div>
    <?php echo $this->Form->end();?>
</div>
