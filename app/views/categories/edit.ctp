<!-- START NEW -->
<style type="text/css">
#presentase-template-content{
	font-family: 'Lato', Calibri, Arial, sans-serif;
	background-color: #c5cae9;
}
tr td{
	padding: 10px;
}

#menu_list_presentase{
	display: block;
	position: absolute;
	right: 50px;
	top: 20px;
}
#menu_list_presentase li{
	float: left;
}
#menu_list_presentase li
{
	width:32px;
	height: 32px;
	display: block;
}
#add-btn-black{
	background: url('/eteaching_sd/images/plus_alt_32x32.png') no-repeat;
	width:32px;
	height: 32px;
	display: block;
	margin-left: -30px;

	
}
#back-btn-black{
	background: url('/eteaching_sd/images/back_alt_32x32.png') no-repeat;
	width:32px;
	height: 32px;
	display: block;
	margin-right: 40px;
}

</style>
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:30px;left:20px;" src="<?php echo $this->webroot;?>images/categories-setting-ico2.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2 style="padding-left: 60px;padding-top: 21px;">EDIT <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KATEGORI</h2>

		<div style="margin-top:130px;" class="content-box-content">
			<?php echo $form->create('Category');?>
				<fieldset>

				<?php
					echo '<p>';
					echo $form->input('name',array('label'=>'Nama Kategori  '));
					echo '</p>';
					echo '<p>';
					echo '<label>Tipe Kategori</label>  ';
					$listCategory = array(1=>'Ebook',2=>'Video');
					echo $form->select('type',$listCategory,null);
					echo '</p>';

				?>
				</fieldset>
				<p>
			<?php echo $form->end('Submit');?>
			</p>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->
			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>categories/index"></a></li>
		</ul>
	</div>

</div>



