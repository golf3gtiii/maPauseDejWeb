<div id="bloc-pro">
    <h2><span>Accès professionnels</span></h2>
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User');?>
            <p>Vous avez déjà un compte :</p>
            
        <?php
            echo $this->Form->input('username', array('placeholder' => 'Votre e-mail', 'type' => 'email', 'label' => false));
            echo $this->Form->input('password', array('placeholder' => 'Mot de passe', 'label' => false));
        ?>
            
        <div align="center">
            <?php echo $this->Form->end(__('Se connecter'));?>
        </div>

        <p><a href="">&gt; Mot de passe oublié ?</a></p>

    </form>
</div>