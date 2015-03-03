<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">

<?php echo $html->css('normalize'); ?>
<?php echo $html->css('demo'); ?>
<?php echo $html->css('bookblock'); ?>
<?php echo $html->css('component'); ?>
<?php echo $html->css('iframe'); ?>
<?php echo $html->css('btn-component'); ?>
<?php echo $html->css('jquery.fancybox'); ?>
<?php echo $html->css('notif-style'); ?>

<?php echo $javascript->link('jwplayer.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";


</script>

<?php echo $scripts_for_layout; ?>


</head>

<body>

<?php
  $session->flash();
  $session->flash('auth');
  echo $content_for_layout;
?>

</body>
</html>
