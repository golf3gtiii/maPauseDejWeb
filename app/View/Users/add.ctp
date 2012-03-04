<h1><span class="vert">Créer</span> votre compte</h1>

<p>Vous êtes un restaurateur, un boulanger,, un professionnel de la restauration, tous les jours vous proposez un ou des plats du jour différents, vous souhaitez que vos clients soient facilement informés des bons plats que vous leurs concoctez.</p>

<div class="cadre_form">
    <?php echo $this->Form->create('User');?>
    <fieldset>

    <?php
            echo $this->Form->input('username', array('label' => 'Votre e-mail'));
            echo $this->Form->input('password', array('label' => 'Choisir un mot de passe'));

            echo $this->Form->checkbox('confirm_creation');
    ?>
        <span class="vert">OUI</span>, je confirme les données saisies et je crée mon compte

    <p>Un mail de confirmation vous sera ensuite envoyé dans lequel se trouvera un lien pour activer votre compte</p>    

    </fieldset>
    <?php echo $this->Form->end(__('Valider'));?>
</div>
