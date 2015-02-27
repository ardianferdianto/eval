<script type="text/javascript">
	jQuery(document).ready(function(){

		jQuery('.box-list-mapel').hide();
		var kelasfiltered;
		var typesoalfiltered;
		var typemapelfiltered;
		jQuery('ul.list-kelas li a').click(function(){
			jQuery('.box-list-mapel').hide();
			jQuery('#box-' + jQuery(this).attr('id')).show('slow');
			kelasSelected = jQuery(this).text();
			kelasfiltered = jQuery(this).attr('rel');

			jQuery('#kelas-selected').text(kelasSelected);
			jQuery('ul.list-kelas li a').removeClass("selected");
			jQuery(this).addClass("selected");
			jQuery("#filter-soal").replaceWith( "<a id='filter-soal' href='<?php echo $this->webroot; ?>questions/proses/"+kelasfiltered+"/"+typemapelfiltered+"/"+typesoalfiltered+"' style='position:absolute;top:30px;right:100px;''><img src='<?php echo $this->webroot; ?>img/ok-btn1.png'> </a>" );
		});

		

		jQuery('.list-type-soal ul li a').click(function(){

			typesoalSelected = jQuery(this).text();
			typesoalfiltered = jQuery(this).attr('id');
			jQuery('#type-selected').text(typesoalSelected);
			jQuery('.list-type-soal ul li a').removeClass("selected");
			jQuery(this).addClass("selected");
			jQuery("#filter-soal").replaceWith( "<a id='filter-soal' href='<?php echo $this->webroot; ?>questions/proses/"+kelasfiltered+"/"+typemapelfiltered+"/"+typesoalfiltered+"' style='position:absolute;top:30px;right:100px;''><img src='<?php echo $this->webroot; ?>img/ok-btn1.png'> </a>" );

		});

		jQuery('.box-list-mapel a').click(function(){

			typemapelSelected = jQuery(this).text();
			typemapelfiltered = jQuery(this).attr('id');
			jQuery('#matpel-selected').text(typemapelSelected);
			jQuery("#filter-soal").replaceWith( "<a id='filter-soal' href='<?php echo $this->webroot; ?>questions/proses/"+kelasfiltered+"/"+typemapelfiltered+"/"+typesoalfiltered+"' style='position:absolute;top:30px;right:100px;''><img src='<?php echo $this->webroot; ?>img/ok-btn1.png'> </a>" );
			
			
		});

	});
</script>

<div id="banksoal index">
	<div class="bank-soal-wrapper clearfix">
		<h2>Pilih kelas, bidang study, kategory soal & level soal</h2>
		
			<div class="eval" id="evaluasiset1">
                <a class="classselect" data-kelas="1" href=""><span class="kel">Kelas</span></br><span class="ev">1</span><br/></a>
                <a class="classselect" data-kelas="2" href=""><span class="kel">Kelas</span></br><span class="ev">2</span></a>
                <a class="classselect" data-kelas="3" href=""><span class="kel">Kelas</span></br><span class="ev">3</span></a>
                <a class="classselect" data-kelas="4" href=""><span class="kel">Kelas</span></br><span class="ev">4</span></a>
                <a class="classselect" data-kelas="5" href=""><span class="kel">Kelas</span></br><span class="ev">5</span></a>
                <a class="classselect" data-kelas="6" href=""><span class="kel">Kelas</span></br><span class="ev">6</span></a>
                

                
            </div>

            <div id="evaluasiset2" style="display:none;">
                <div class="pelajaran">

                    <?php foreach ($listPelajaran as $pelajaran):?>
                    
                    <a class="buttontobackground matpel_button" data-matpel="<?php echo $pelajaran['Pelajaran']['alias'];?>" href="#"><span class="mata"><?php echo $pelajaran['Pelajaran']['nama'];?>  |</span></br><span class=""></span><br/></a>

                    <?php endforeach;?>
                    
                </div>
                
                <div class="pilihan">
                    <div class="mudah">
                        <a data-tipesoal="1" data-level="1" class="level_button buttontobackground" href=""><span class="mata">Pilihan Ganda Mudah</span></a>
                        <a data-tipesoal="2" data-level="1" class="level_button buttontobackground" href=""><span class="mata">Soal Essay Mudah </span></a>
                    </div>
                    <div class="sedang">
                         <a data-tipesoal="1" data-level="2" class="level_button buttontobackground" href=""><span class="mata">Pilihan Ganda Sedang</span></a>
                        <a data-tipesoal="2" data-level="2" class="level_button buttontobackground" href=""><span class="mata">Soal Essay Sedang </span></a>
                    </div>
                    <div class="sulit">
                        <a data-tipesoal="1" data-level="3" class="level_button buttontobackground" href=""><span class="mata">Pilihan Ganda Sulit</span></a>
                        <a data-tipesoal="2" data-level="3" class="level_button buttontobackground" href=""><span class="mata">Soal Essay Sulit </span></a>
                    </div>
                    
                </div>
                <a id="evaluasisetback" href="#"><span  class="back">BACK</span></a>
                <a id="evaluasisetgo" href="#"><span class="ok">OK</span></a>
            </div>
		
	</div>
</div>