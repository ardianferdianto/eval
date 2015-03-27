<div class="questions form">
	<h2><?php __('Form Penambahan Pertanyaan');?></h2>
	<p>
	Silahkan isi pertanyaan yang ingin anda masukkan di kuis ini
	</p>
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->	
		<div class="content-box-content">
			<?php 	
			    $str= Router::url(null, false);
			    $strafter= trim($str,"/evaluasi_sd/questions/add_newsoal/");
			?>
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
				
				<p style="float:left;display:inline-block">

				<label><label>Pilih jenis Soal</label></label>
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
				<hr></hr>
				<div id="opt1" class="desc">
					<h5>Pilihan Ganda</h5>
					<fieldset>

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
						echo'<label>Masukkan gambar jika ada</label>';

						echo $form->input('File1.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						echo '<p>';
						echo'<label>Masukkan video jika ada</label>';

						echo $form->input('File3.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						echo '<div class="divider"></div>';
						echo '<h5>Sekarang silahkan masukkan jawaban, dan checklist jawaban yang benar, jawaban yang benar hanya diperbolehkan satu jawaban</h5>';
						echo '<p>';
						echo $form->input('Question.0.details', array('label'=>'Jawaban A','type'=>'textarea'));

						/*echo $form->radio('answer_true',array('1'=>'Pilih jika kunci jawaban A'),$attributes_ans);*/
						echo '</p>';
						echo '<p>';
						echo $form->input('Question.1.details', array('label'=>'Jawaban B','type'=>'textarea'));
						/*echo $form->radio('answer_true',array('2'=>'Pilih jika kunci jawaban B'),$attributes_ans);*/
						echo '</p>';
						echo '<p>';
						echo $form->input('Question.2.details', array('label'=>'Jawaban C','type'=>'textarea'));
						/*echo $form->radio('answer_true',array('3'=>'Pilih jika kunci jawaban C'),$attributes_ans);*/
						echo '</p>';
						echo '<p>';
						echo $form->input('Question.3.details', array('label'=>'Jawaban D','type'=>'textarea'));
						/*echo $form->radio('answer_true',array('4'=>'Pilih jika kunci jawaban D'),$attributes_ans);*/
						echo '</p>';
						echo '<p>';	
						$ans = array(1=>'Jawaban A',2=>'Jawaban B',3=>'Jawaban C',4=>'Jawaban D');
						echo $form->input('answer_true', array('label'=>false,'class'=>'text-input small-input','options' => $ans, 'empty' => '(Pilih Kunci Jawaban)'));
						echo '</p>';
					?>

					</fieldset>
					
					
				</div>
				<div id="opt2" class="desc">
					<h5>Uraian</h5>
					<fieldset>

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
						echo '<p>';
						echo'<label>Masukkan gambar jika ada</label>';

						echo $form->input('File2.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						echo '<p>';
						echo'<label>Masukkan video jika ada</label>';

						echo $form->input('File4.image', array('label'=>false, 'type'=>'file'));
						echo '</p>';
						
						

						echo '<div class="divider"></div>';
						echo '<h5>Sekarang silahkan masukkan jawaban uraian,</h5>';
						echo '<p>';
						echo $form->input('Question.answer2',array('label'=>'Jawaban Uraian'));
						echo '</p>';
					?>

					</fieldset>
				</div>
			<?php echo $form->end('Submit');?>
			
		</div>
	</div>
</div>


<div class="actions">
	<?php echo $html->link(__('Kembali', true), array('action' => 'home'),array('class'=>'button'));?>
</div>
