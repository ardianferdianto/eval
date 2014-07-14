<style type="text/css">
#flashMessage{
	display: block;
	width: 95%;
	background-color: #1cbbd2;
	padding: 10px;
	text-align: center;
}
</style>
<?php
  $session->flash();
  $session->flash('auth');
  echo $content_for_layout;
?>
        
