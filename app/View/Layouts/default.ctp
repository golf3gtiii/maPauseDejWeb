<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout?></title>
<?php //echo $this->Html->css('styles'); ?>
<link rel="stylesheet/less" type="text/css" href="/css/styles.less" />
<?php echo $this->fetch('css'); ?>
</head>

<body id="page">
	<div id="container" <?php echo $auth->login() ? 'class="backgroundblanc"' : ''; ?>>
    	<div id="header"></div>
    	<div id="right">
            <?php 
            echo $this->element('right', array('auth' => $auth));
            ?>
        </div>
   
    	
        <div id="main" <?php echo $auth->login() ? 'class="borderright"' : ''; ?>>
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
    <?php echo $this->element('sql_dump'); ?><br/><br/><br/><br/>
    
    <script src="/js/less-1.2.2.min.js" type="text/javascript"></script>
    <script src="/js/jquery.js" type="text/javascript" language="javascript"></script>
    <script src="/js/jquery.MultiFile.js" type="text/javascript" language="javascript"></script>
    <?php echo $this->fetch('script'); ?>
</body>
</html>
