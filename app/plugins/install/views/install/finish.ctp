<div class="install">
	
	
    <h2><?php echo $this->pageTitle; ?></h2>

    <p>
		Selanjutnya anda dapat menggunakan applikasi shortcuts di desktop:
        </p>
<br/>
<div class="blue_box">
    
        <p style="color:#8c1a26;" >Anda menggunakan <strong>Versi Trial</strong> aplikasi ini. <br/>
            Versi trial mendapatkan semua fitur namun akan berakhir pada 15 hari setelah menginstall</p>
<br/>

	
    
</div>


    

    <?php
        echo $html->link(__('Klik disini untuk memulai Applikasi', true), array(
            'plugin' => 'install',
            'controller' => 'install',
            'action' => 'deleteInstallFolder',
            'delete' => 1,
        ),array('class'=>'button'));
    ?>
	<br/>
</div>