<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>
<?php //echo $this->Html->css('styles'); ?>
<link rel="stylesheet/less" type="text/css" href="/css/styles.less" />
<script src="/js/less-1.2.2.min.js" type="text/javascript"></script>
</head>

<body id="page">

	<div id="container">
    	<div id="header"></div>
    	<div id="right">
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
                <form action="" method="post">
                	<p>Vous avez déjà un compte :</p>
                    <input type="email" name="email" id="email" placeholder="Votre e-mail" /><br />
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" /><br />
                    <div align="center">
                    	<input type="submit" name="se_connecter" value="Se connecter" />
                    </div>
                    
                    <p><a href="">&gt; Mot de passe oublié ?</a></p>
                    
                </form>
            </div>
            
            <div id="bloc-inscription">
            	<h2><span>Inscription gratuite</span></h2>
                <div align="center" >
                	<a href="" id="btn_crea_compte">Créer votre compte restaurateur</a> 
                </div>
            </div>
            
           
            
            <div id="vignettes800">
            	<img src="/_images/vignettes_800.png" alt="" />
            </div>
            
        </div>
   
    	
        <div id="main">
           <?php echo $this->Session->flash(); ?>
           <?php echo $content_for_layout; ?>
                
        	
            
        </div>
        
        	<ul id="sous_menu" class="clear">
                <li><a href="">À propos de "ma pause dèj'"</a></li>
                <li class="borderleft"><a href="">Mentions légales</a></li>
                <li class="borderleft">© mapausedej.com</li>
            </ul>
        
    </div>
    
     
    <div class="height50"></div>
	<div id="bottom" class="clear"></div>
</body>
</html>
