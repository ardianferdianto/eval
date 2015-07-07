<div class="wrapper">
	<img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon1-tryout.png"/>
	<div class="container">
		<!-- Top Navigation -->
		<section id="grid" class="grid clearfix">
			<div class="container_select_soal">
				<div class="titletryoutcontainer">
					<div class="titlefirst">
						<img src="<?php echo $this->webroot;?>art/icon-list-tryout.png">
						<h1 class="tryouttitle">EDIT SOAL</h1>
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
									<?php echo $form->create('Question',array('enctype'=>'multipart/form-data'));
										echo $form->hidden('kelas',array('value'=>$question['Question']['kelas']));
										echo $form->hidden('mapel',array('value'=>$question['Question']['pelajaran_id']));
									?>

									<div id="opt1" class="desc">
										<h4 class="subheader">
											<?php if ($question['Question']['tipe'] == 1):?>
											<i class="icon-clipboard-2 on-left"></i>Pilihan Ganda
											<?php else:?>
											<i class="icon-clipboard-2 on-left"></i>Essay
											<?php endif;?>
										</h4>
										<fieldset>
										
											<div class="blockinputsoal_left">
												<h5 class="subheader-secondary">PERTANYAAN</h5>
												<div class="offset1 rowsoalinput">
													<?php
													echo '<p>';
													echo'<label>Tingkat Kesulitan:</label>';
													$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit');
													echo $form->input('level', array('label'=>false,'class'=>'text-input small-input','options' => $levels, 'empty' => '(Pilih Tingkat Kesulitan)'));

													echo '</p>';
													
													echo '<p>';
													echo'<label>Pertanyaan</label>';
													echo $form->input('Question.question',array('label'=>false,'type'=>'textarea'));
													echo '</p>';
													echo '<p>';
													?>
												</div>
												<div class="offset1 rowsoalinput">
													<?php
													echo'<label>Gambar Sebelumnya</label>';

													if($question['Question']['images'] != null || !empty ($question['Question']['images'])):?>
													<br/>
													<label>Rubah Gambar </label>

													<img src="<?php echo $this->webroot.$question['Question']['images']; ?>" width="300" />
													<?php else: ?>
													<p>Belum ada gambar</p>
													<?php endif;?>

													<?php
													echo '<p>';
													echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
													echo '</p>';
													?>
													<?php
													echo'<label>File Video Sebelumnya</label>';
													if($question['Question']['video'] != null || !empty ($question['Question']['video'])){?>
														<br/>
														<div id="containerPlayer_<?php echo $question['Question']['id']?>">Loading the player ...</div>
														<script type="text/javascript">
														jwplayer("containerPlayer_<?php echo $question['Question']['id']?>").setup({
								                            'id': "playerID_<?php echo $question['Question']['id']?>",
								                            'width': '280',
								                            'height': '180',
								                            'aboutlink': '#',
								                            'autostart':false,
								                            'primary': 'flash',
								                            //'skin': 'skins/five.xml',

								                            
								                            'file': "<?php echo $this->webroot.$question['Question']['video'];?>",
								                            events: {
								                                onPause: function(event) {
								                                    setCookie(event.position);
								                                }
								                            }
								                        });
								                    	</script>
														<?php 
														echo '</p>';
														echo '<p>';
														echo'<label>Rubah Video</label>';
														echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
														echo '</p>';?>
													<?php }else{
														
														echo 'Tidak ada video';
														
														echo '<p>';
														echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
														echo '</p>';
															
													}?>
												</div>
											</div>
											<div class="blockinputsoal_left">
												<h5 class="subheader-secondary">JAWABAN</h5>
												
												<?php if ($question['Question']['tipe'] == 1):?>

												<div class="offset1 rowsoalinput">
													<?php 
													echo '<p>';
													echo $form->input('Question.answer_a', array('label'=>'Jawaban A','type'=>'textarea'));

													/*echo $form->radio('answer_true',array('1'=>'Pilih jika kunci jawaban A'),$attributes_ans);*/
													echo '</p>';
													echo '<p>';
													echo $form->input('Question.answer_b', array('label'=>'Jawaban B','type'=>'textarea'));
													/*echo $form->radio('answer_true',array('2'=>'Pilih jika kunci jawaban B'),$attributes_ans);*/
													echo '</p>';
													?>
												</div>

												<div class="offset1 rowsoalinput">
													<?php 
													echo '<p>';
													echo $form->input('Question.answer_c', array('label'=>'Jawaban C','type'=>'textarea'));
													/*echo $form->radio('answer_true',array('3'=>'Pilih jika kunci jawaban C'),$attributes_ans);*/
													echo '</p>';
													
													echo '<p>';
													echo $form->input('Question.answer_d', array('label'=>'Jawaban D','type'=>'textarea'));
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
												<?php else:?>
												<div class="offset1 rowsoalinput">
													<?php
													echo '<p>';
													echo $form->input('Question.answer2',array('label'=>'Jawaban Uraian'));
													echo '</p>';
													?>
												</div>
												<?php endif;?>
										
											</fieldset>
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
			</div>
		</section>
	</div><!-- /container -->
</div>

