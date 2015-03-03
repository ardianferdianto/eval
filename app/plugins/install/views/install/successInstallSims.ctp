<span class="logo-menu active" id="sims">&nbsp;</span>
<p>
<?php echo $html->image('Select.png');?> <span>Berhasil menginstall Sims</span>
<?php if ($checkInstall == 1) {?>
	<script>
	alert('Selamat Instalasi berhasil Dilakukan !');
	window.location.href = '<?php echo $url;?>';
	</script>
<?php }?>
</p>
