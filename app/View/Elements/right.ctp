<?php if ($auth->login()) : ?>
<div id="connecte">
    
    <?php echo $this->Html->Link('x Se déconnecter', array('controller' => 'users', 'action' => 'logout'), array('id' => 'deconnexion')); ?>
    <div id="menu_connecte">
        
        <p>• Bienvenue</p>
        
        <p>Gestion et administration :</p>
        <ul>
            <li>
                <a href="" id="fiche">Fiche établissement</a>
            </li>
            <li>
                <?php echo $this->Html->link('Mes plats du jour', array('controller' => 'plats', 'action' => 'index'), array('id' => 'plats')); ?>
            </li>
        </ul>
    </div>
</div>

<?php else : ?>

<div id="bloc-present">
    <h2>Bienvenue sur ma pause déj' !</h2>
    <p>
        L'application "Ma pause déj'" est une application destinée à aider les consommateurs à trouver facilement les différents plats du jour qu'ils peuvent déguster à proximité de leur lieux de travail,  domicile...
    </p><br />
    <p>
        Un clic pour s'ouvrir l'appétit, varier vos envies et vos plaisirs gustatifs.
    </p>

    <img src="/_images/appli_340.png" id="img-present-340" alt="" />

</div>   


<div id="bloc-pro">
    <h2><span>Accès professionnels</span></h2>
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'login'));?>
            <p>Vous avez déjà un compte :</p>
            
        <?php
            echo $this->Form->input('username', array('placeholder' => 'Votre e-mail', 'label' => false));
            echo $this->Form->input('password', array('placeholder' => 'Mot de passe', 'label' => false));
        ?>
            
        <div align="center">
            <?php echo $this->Form->end(__('Se connecter'));?>
        </div>

        <p><a href="">&gt; Mot de passe oublié ?</a></p>

    </form>
</div>

<div id="bloc-inscription">
    <h2><span>Inscription gratuite</span></h2>
    <div align="center" >
            <a href="/users/add" id="btn_crea_compte">Créer votre compte restaurateur</a> 
    </div>
</div>



<div id="vignettes800">
    <img src="/_images/vignettes_800.png" alt="" />
</div>
<?php endif; ?>