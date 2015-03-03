
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">




<?php echo $html->css('style.css'); ?>


<style type="text/css">
<!--
.style1 {
    font-size: 16px;
    font-weight: bold;
}
.style3 {
    color: #FFFFFF;
    font-size: 0.7em;
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style5 {color: #FFFF00}
.style7 {font-size: 18px}
.style9 {
    font-family: Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 0.4em;
}
.style10 {
    font-size: 24px;
    color: #000000;
}
-->
</style>

<?php echo $javascript->link('jquery-2.1.3.min.js'); ?>

<?php echo $html->css('jquery.fancybox.css?v=2.1.5'); ?>


<?php echo $javascript->link('jquery.fancybox.pack.js?v=2.1.5'); ?>


<?php echo $javascript->link('jquery.fancybox.pack.js?v=2.1.5'); ?>


<?php echo $html->css('helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>


<?php echo $javascript->link('../css/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>


<?php echo $javascript->link('../css/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>


<?php echo $html->css('helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>


<?php echo $javascript->link('../css/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>



<?php echo $scripts_for_layout; ?>
</head>


<body>
<div class="evaluasititle" >
    <h1 align="center"><span class="style3"><span class="style5">E</span>valuasi   <span class="style5">P</span>embelajaran   <span class="style5">I</span>nteraktif</span><span class="style9"><small>sekolah dasar</small></span></h1>
</div>
<div id="wrapper">
    
    <h2><a href="#" title=""> </a></h2>
    <div id="content">
        
        <?php e($content_for_layout); ?>
        
  </div>
</div>
<div id="footer">
    <img id="ribbon" src="<?php echo $this->webroot;?>images/ribbon.png">
</div>
</body>
</html>
