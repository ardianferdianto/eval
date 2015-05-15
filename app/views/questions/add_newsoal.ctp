<div class="wrapper">
	<img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon1-tryout.png"/>
	<div class="container">
		<!-- Top Navigation -->
		<section id="grid" class="grid clearfix">
			<div class="container_select_soal">
				<div class="titletryoutcontainer">
					<div class="titlefirst">
						<img src="<?php echo $this->webroot;?>art/icon-list-tryout.png">
						<h1 class="tryouttitle">TAMBAH SOAL</h1>
					</div>
					<div class="titlesecond">
						<h3 class="tryouttitle3">KELAS : 6</h3>
						<h3 class="tryouttitle3">MATA PELAJARAN : <?php echo $pelajaranID['Pelajaran']['nama'];?></h3>
					</div>
				</div>

				
				<div class="content_tryout_container">
					<div class="row ">
						<div class="questions form">
							
							<div class="clear"></div> 
							
							<div class="content-box"><!-- Start Content Box -->	
								<div class="content-box-content">
									<?php echo $form->create('Question',array('action'=>'add_multi','enctype'=>'multipart/form-data'));?>
									<script>
										jQuery(document).ready(function(){ 
										    jQuery("input[name$='data[Question][tipe]']").click(function() {
										        var test = jQuery(this).val();
												if(test == "1"){
										        	jQuery("#opt1").show();
													jQuery("#opt2").hide();
													
												}else{
													jQuery("#opt2").show();
													jQuery("#opt1").hide();
													
												}
										    }); 
										});
										
									</script>
									<style type="text/css">
									    .desc { display: none; }
									</style>
									<p>

									<label>Pilih jenis Soal :</label>
									<?php
									$jenisSoal=array('1'=>'Pilihan Ganda','2'=>'Uraian');
									$attributes=array('legend'=>false,'label'=>false,'class'=>'jenis-asset');
									$attributes_ans=array('legend'=>false,'label'=>false);
									echo $form->radio('tipe',$jenisSoal,$attributes);
									echo $form->hidden('kelas',array('value'=>$kelasID));
									echo $form->hidden('pelajaran_id',array('value'=>$mapelID));
									//var_dump($kelasID);var_dump($mapelID);
									//echo $form->hidden('Question.quizzId',array('value'=>$questionId));
									//echo $form->hidden('Question.type',array('value'=>$type));
									
									?>
									</p>
									<div class="clear"></div>
									
									<div id="opt1" class="desc">
										<h4 class="subheader">
											<i class="icon-clipboard-2 on-left"></i>Pilihan Ganda
										</h4>
										<fieldset>
										
											<div class="blockinputsoal_left">
												<h5 class="subheader-secondary">PERTANYAAN</h5>
												<div class="offset1 rowsoalinput">
													<?php
													echo '<p>';
													echo'<label>Tingkat Kesulitan:</label>';
													$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit');
													echo $form->input('level1', array('label'=>false,'class'=>'text-input small-input','options' => $levels, 'empty' => '(Pilih Tingkat Kesulitan)'));

													echo '</p>';
													
													echo '<p>';
													echo'<label>Pertanyaan</label>';
													echo $form->input('Question.question1',array('label'=>false,'type'=>'textarea'));
													echo '</p>';
													echo '<p>';
													?>
												</div>
												<div class="offset1 rowsoalinput">
													<?php
													echo'<label>Masukkan gambar jika ada</label>';

													echo $form->input('File1.image', array('label'=>false, 'type'=>'file'));
													echo '</p>';
													echo '<p>';
													echo'<label>Masukkan video jika ada</label>';

													echo $form->input('File3.image', array('label'=>false, 'type'=>'file'));
													echo '</p>';
													?>
												</div>
											</div>
											<div class="blockinputsoal_left">
												<h5 class="subheader-secondary">JAWABAN</h5>
												
												<div class="offset1 rowsoalinput">
													<?php 
													echo '<p>';
													echo $form->input('Question.0.details', array('label'=>'Jawaban A','type'=>'textarea'));

													/*echo $form->radio('answer_true',array('1'=>'Pilih jika kunci jawaban A'),$attributes_ans);*/
													echo '</p>';
													echo '<p>';
													echo $form->input('Question.1.details', array('label'=>'Jawaban B','type'=>'textarea'));
													/*echo $form->radio('answer_true',array('2'=>'Pilih jika kunci jawaban B'),$attributes_ans);*/
													echo '</p>';
													?>
												</div>
												<div class="offset1 rowsoalinput">
													<?php 
													echo '<p>';
													echo $form->input('Question.2.details', array('label'=>'Jawaban C','type'=>'textarea'));
													/*echo $form->radio('answer_true',array('3'=>'Pilih jika kunci jawaban C'),$attributes_ans);*/
													echo '</p>';
													
													echo '<p>';
													echo $form->input('Question.3.details', array('label'=>'Jawaban D','type'=>'textarea'));
													/*echo $form->radio('answer_true',array('4'=>'Pilih jika kunci jawaban D'),$attributes_ans);*/
													echo '</p>';
													?>
													<?php
													echo '<p>';	
													$ans = array(1=>'Jawaban A',2=>'Jawaban B',3=>'Jawaban C',4=>'Jawaban D');
													echo $form->input('answer_true', array('label'=>false,'class'=>'text-input small-input','options' => $ans, 'empty' => '(Pilih Kunci Jawaban)'));
													echo '</p>';
													?>
												</div>
												
										
											</fieldset>
											<div class="row aligncenter">
												<input type="submit" value="Submit" class="button large primary">
											</div>
										</div>
									</div>

									<div id="opt2" class="desc">

										<h4 class="subheader">
										<i class="icon-clipboard-2 on-left"></i>Uraian
										</h4>
										<fieldset>
										<div class="row">
											<div class="blockinputsoal_left">
												<h5 class="subheader-secondary">PERTANYAAN</h5>
												<div class="offset1 rowsoalinput">
													<?php
													echo '<p>';
													echo'<label>Tingkat Kesulitan:</label>';
													$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit');
													echo $form->input('level2', array('label'=>false,'class'=>'text-input small-input','options' => $levels, 'empty' => '(Pilih Tingkat Kesulitan)'));

													echo '</p>';
													echo '<p>';
													echo'<label>Pertanyaan</label>';
													echo $form->input('Question.question2',array('label'=>false,'type'=>'textarea'));
													echo '</p>';
													?>
												</div>
												<div class="offset1 rowsoalinput">
													<?php
													echo '<p>';
													echo'<label>Masukkan gambar jika ada</label>';

													echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
													echo '</p>';
													echo '<p>';
													echo'<label>Masukkan video jika ada</label>';

													echo $form->input('File4.image', array('label'=>false, 'type'=>'file'));
													echo '</p>';
													?>
												</div>
											</div>
											<div class="blockinputsoal_right">
												<h5 class="subheader-secondary">JAWABAN</h5>
												<div class="offset1 rowsoalinput">
												<?php
												echo '<p>';
												echo $form->input('Question.answer2',array('label'=>'Jawaban Uraian'));
												echo '</p>';
												?>
												</div>
											</div>
										</fieldset>
										<br/>
										<div class="row aligncenter">
											<input type="submit" value="Submit" class="button large primary">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</div><!-- /container -->

</div>

	