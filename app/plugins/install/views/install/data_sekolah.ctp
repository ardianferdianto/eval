<div class="install form clearfix">
    <h2><?php echo $this->pageTitle; ?></h2>
	<p class="desc">Silahkan masukkan profile sekolah</p>
    <?php
		
        echo $form->create('Data', array('url' => array('plugin' => 'install', 'controller' => 'install', 'action' => 'data_sekolah')));
        echo $form->input('profile_name', array('label' => 'Nama Sekolah','class'=>'input-normal'));
        echo $form->input('profile_alamat', array('type'=>'textarea','label' => 'Alamat','class'=>'input-normal'));
		?>
		<div class="radio-set">
			
			<label>Status Sekolah</label>
			<input type="hidden" value="" id="InstallStatus_" name="data[Data][profile_status]">
			<span>
			<input type="radio" value="1" class="input-radio" id="InstallStatus1" name="data[Data][profile_status]">
			<label for="InstallStatus1">Negeri</label>
			</span>
			<span>
			<input type="radio" value="2" class="input-radio" id="InstallStatus2" name="data[Data][profile_status]">
			<label for="InstallStatus2">Swasta</label>
			</span>
			<?php echo $form->error('profile_status');?>
		</div>
		<?php
		echo '<div class="input text">';
		echo '<label>Tahun Berdiri</label>';
		echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');	
		echo '</div>';
		echo $form->input('profile_telp', array('label' => 'Telpon','class'=>'input-normal'));

		
		echo $form->input('profile_email', array('label' => 'Email Admin: ','class'=>'input-normal'));
		
		?>
		
        <br/>

        <div class="input text">
        	<div class= 'blue_box'>
			<p>Anda akan menginstall <strong>Versi Trial</strong> aplikasi ini. <br/>
			Versi trial mendapatkan semua fitur namun akan berakhir pada 15 hari</p>
			</div>
			
		<div class="submit"><input type="submit" value="Lanjutkan  →" class="button lanjut"></div>
		<?php echo $form->end();
    ?>
</div>