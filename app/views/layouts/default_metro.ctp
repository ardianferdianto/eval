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
<?php echo $javascript->link('metro/jquery/jquery.cookie.js'); ?>
<?php echo $javascript->link('metro/metro.min.js'); ?>
<?php echo $javascript->link('metro/jquery/jquery.countdown.js'); ?>
<?php echo $javascript->link('metro/jquery/jquery.dataTables.js'); ?>
<?php echo $javascript->link('metro/prettify/prettify.js');?>
<?php echo $javascript->link('shapehoverjs/snap.svg-min.js');?>
<?php echo $javascript->link('metro/metro/metro-countdown.js'); ?>
<?php echo $javascript->link('jquery.form.js'); ?>



<?php echo $html->css('jquery.fancybox.css?v=2.1.5'); ?>


<?php echo $javascript->link('jquery.fancybox.pack.js?v=2.1.5'); ?>


<?php echo $javascript->link('jquery.fancybox.pack.js?v=2.1.5'); ?>


<?php echo $html->css('helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>


<?php echo $javascript->link('../css/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>


<?php echo $javascript->link('../css/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>


<?php echo $html->css('helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>


<?php echo $javascript->link('../css/helpers/jquery.fancybox-thumbs.js?v=1.0.7'); ?>

<?php echo $html->css('metrocss/metro-bootstrap.css'); ?>
<?php echo $html->css('metrocss/iconFont.css'); ?>
<?php echo $html->css('shapehovercss/normalize.css'); ?>
<?php echo $html->css('shapehovercss/component.css'); ?>
<?php echo $html->css('apps.css'); ?>

<?php echo $javascript->link('jwplayer.js'); ?>
<?php echo $javascript->link('countdown.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";</script>


<?php echo $scripts_for_layout; ?>
</head>


<body class="metro">

<?php if(isset($homeicon) && $homeicon == true){ ?>

<?php }else{ ?>

<a class="sticth_home_icon" href="<?php echo $this->webroot;?>"></a>

<?php }?>


<!--<div class="evaluasititle" >
    <h1 align="center" style="padding-top:15px;">Evaluasi Pembelajaran Interaktif </h1>
        <p style="padding-top:20px;color:#fff;font-size:2em;text-transform:uppercase;text-align:center;text-shadow:0px 2px 6px #333;letter-spacing:15px;">sekolah dasar</p>
        <p style="margin:0 auto;text-align:center;padding-top:10px;"><img src="<?php echo $this->webroot;?>art/line-heading.png"/></p>
</div>-->
<div id="wrapper">
    <div id="content">  
        <?php $session->flash(); ?>
        <?php echo $content_for_layout; ?>
  </div>
</div>
<div id="footer">
    <img id="logoedusoft" src="<?php echo $this->webroot;?>art/logoedusoft.png"/>
    
</div>
</body>
</html>
