
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">


<?php echo $javascript->link('jquery-2.1.3.min.js'); ?>
<?php echo $javascript->link('jquery.widget.min.js'); ?>
<?php echo $javascript->link('metro.min.js'); ?>
<?php echo $javascript->link('jquery.dataTables.js'); ?>
<?php echo $html->css('metro-bootstrap.css'); ?>
<?php echo $scripts_for_layout; ?>
</head>


<body class="metro">
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
