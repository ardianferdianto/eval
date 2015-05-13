<div class="quizzs form">
	
	
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			<h3>From Edit Pertanyaan</h3>
			
						
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<?php echo $form->create('Question',array('enctype'=>'multipart/form-data'));?>
				<fieldset>
			 		
				<?php
					echo '<p>';
					echo'<label>Pertanyaan</label>';
					echo $form->hidden('kelas',array('value'=>$question['Question']['kelas']));
					echo $form->hidden('mapel',array('value'=>$question['Question']['pelajaran_id']));
					echo $form->input('Question.question',array('label'=>false));
					echo '</p>';
					echo '<p>';
					echo'<label>File Gambar Sebelumnya</label>';
					if($question['Question']['images'] != null || !empty ($question['Question']['images'])){?>
					<br/>
					<img src="<?php echo $this->webroot.$question['Question']['images']; ?>" width="300" /> 
					
					
					<?php 
					echo '</p>';
					echo '<p>';
					echo'<label>Rubah Gambar</label>';
					echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
					echo '</p>';
					}else{
					
					echo 'Tidak ada gambar';
					
					echo '<p>';
					echo'<label>Tambah Gambar</label>';
					echo $form->input('File.image', array('label'=>false, 'type'=>'file'));
					echo '</p>';
					}
					
					echo '<p>';
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
						echo'<label>Tambah Video</label>';
						echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
							
					}
					
					if ($question['Question']['tipe'] == 2){
						echo '<p>';
						echo $form->input('Question.answer2',array('label'=>'Jawaban Uraian'));
						echo '</p>';
					}else{
						echo '<p>';
						echo $form->input('Question.answer_a',array('label'=>'Jawaban A'));
						echo '</p>';
						echo '<p>';
						echo $form->input('Question.answer_b',array('label'=>'Jawaban B'));
						echo '</p>';
						echo '<p>';
						echo $form->input('Question.answer_c',array('label'=>'Jawaban C'));
						echo '</p>';
						echo '<p>';
						echo $form->input('Question.answer_d',array('label'=>'Jawaban D'));
						echo '</p>';
					}
					
					
				?>
				<div class="row aligncenter">
					<?php
					echo '<p>';	
					$ans = array(1=>'Jawaban A',2=>'Jawaban B',3=>'Jawaban C',4=>'Jawaban D');
					echo $form->input('answer_true', array('label'=>false,'class'=>'text-input small-input','options' => $ans, 'empty' => '(Pilih Kunci Jawaban)'));
					echo '</p>';
					?>
				</div>
				</fieldset>
			<p>
			<?php echo $form->end('Submit');?>
			</p>
			
		</div>
	</div>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Kembali', true), array('controller'=>'quizzs','action' => 'banksoal',$question['Question']['kelas'],$question['Question']['pelajaran_id']));?></li>
	</ul>
</div>
