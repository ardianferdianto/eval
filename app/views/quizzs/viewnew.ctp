<div class="quizzs view">
<?php if(empty($quizz_detail)):?>
	Tidak ada quizz
<?php endif;?>
<?php foreach ($quizz_detail as $quizz) :?>
	<h1><?php echo $quizz['Quizz']['kode']?></h1>
	<h1><?php echo $quizz['Pelajaran']['nama']?></h1>
<?php endforeach; ?>
	 
</div><!-- End content box -->
