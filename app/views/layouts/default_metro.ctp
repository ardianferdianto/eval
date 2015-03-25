
<!DOCTYPE html>
<html lang="en" class="demo-2">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>

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
h1 small{
	font-size: 0.7em;
	text-transform:uppercase;
	letter-spacing: 20px;
	display: block;
	line-height: 20px;
	color: #FFFF00;
}
-->
</style>
<link rel="shortcut icon" href="../favicon.ico">

<?php echo $javascript->link('metro/jquery/jquery.min.js'); ?>
<?php echo $javascript->link('metro/jquery/jquery.widget.min.js'); ?>
<?php echo $javascript->link('metro/metro.min.js'); ?>
<?php echo $javascript->link('metro/jquery/jquery.dataTables.js'); ?>
<?php echo $javascript->link('metro/prettify/prettify.js');?>
<?php echo $javascript->link('shapehoverjs/snap.svg-min.js');?>
<?php echo $javascript->link('metro/metro/metro-countdown.js'); ?>

<?php echo $html->css('metrocss/metro-bootstrap.css'); ?>
<?php echo $html->css('metrocss/iconFont.css'); ?>
<?php echo $html->css('shapehovercss/normalize.css'); ?>
<?php echo $html->css('shapehovercss/component.css'); ?>
<?php echo $html->css('apps.css'); ?>

<?php echo $scripts_for_layout; ?>
</head>


<body class="metro">
<div class="evaluasititle" >
    <h1 align="center"><span class="style3"><span class="style5">E</span>valuasi   <span class="style5">P</span>embelajaran   <span class="style5">I</span>nteraktif</span><span class="style9"><small>sekolah dasar</small></span></h1>
</div>
<div id="wrapper">
    <div id="content">
        
        <?php echo $content_for_layout; ?>
        
  </div>
</div>
<!--<div id="footer">
    <img id="ribbon" src="<?php #echo $this->webroot;?>images/ribbon.png">
</div>-->
</body>
</html>
