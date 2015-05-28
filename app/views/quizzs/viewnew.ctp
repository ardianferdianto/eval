<div class="wrapper">
	<img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon1-tryout.png"/>
	<div class="container">
				<!-- Top Navigation -->
				<section id="grid" class="grid clearfix">
					<div class="container_select_soal">
						<div class="titletryoutcontainer">
							<div class="titlefirst">
								<img src="<?php echo $this->webroot;?>art/icon-list-tryout.png">
								<h1 class="tryouttitle">PILIH <?php
									switch ($tipeID) {
									 	case '1':
									 		echo 'TRYOUT';
									 		break;
									 	case '2':
									 		echo 'KUIS';
									 		break;
									 	case '3':
									 		echo 'UJIAN';
									 		break;
									 	
									 	default:
									 		echo 'UNDIFINED';
									 		break;
									 } 
								?></h1>
							</div>
							<div class="titlesecond">
								<h3 class="tryouttitle3">KELAS : <?php echo $kelasID;?></h3>
								<h3 class="tryouttitle3">MATA PELAJARAN : <?php echo $pelajaranID['Pelajaran']['nama'];?></h3>
							</div>
							<a href="<?php echo $this->webroot?>quizzs/add_new/<?php echo $tipeID."/".$kelasID."/".$mapelID?>" class="addnew_btn">&nbsp;</a>
						</div>

						
						<div class="content_tryout_container">
							<div class="content_tryout_container_bottom">&nbsp;</div>
							<?php if(empty($quizz_detail)):?>
								<center><h2>Tidak ada quizz</h2></center>
							<?php endif;?>
							<div class="row" style="padding-top:50px;">
							<?php foreach ($quizz_detail as $quizz) :?>
								<div class="entrykuisview">
									<h5><?php echo $quizz['Quizz']['kode']; ?></h5>
									<div class="button_entrykuisview">
										<a class="btn_yellow createWindow" href="#select_quizz_type" data-tipekuis='<?php echo $quizz['Quizz']['type']?>' data-kuisid = "<?php echo $quizz['Quizz']['id']?>">PILIH</a>

										<a class="btn_red" href="<?php echo $this->webroot;?>quizzs/delete/<?php echo $quizz['Quizz']['id']?>/<?php echo $quizz['Quizz']['type']?>/<?php echo $kelasID?>/<?php echo $quizz['Pelajaran']['id']?>" onclick="return confirm('Anda yakin ingin menghapus item ini?')">HAPUS</a>

									</div>
								</div>
							
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</section>
			</div><!-- /container -->
	<!-- <embed width="100%" height="100%" name="plugin" src="http://localhost/evaluasi/quizzs/show_pdf/46" type="application/pdf"> -->
	</div>



	<div id="select_quizz_type" class="popupwithstitch" style="display:none;">
	  <h2>Pilih Opsi</h2>
	  
	    <div class="contentpopup_opsi"></div>
	  
	</div>
	<div id="preview_kuis" style="display:none;">
	  <h2><center>PREVIEW</center></h2>
	  
	    <div class="contentpopup_preview"></div>
	  
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		  $( "#container_image").click(function() {
		      $('#container_tombol').show();
		      	$('#container_tombol').animate({opacity: 1}, 500,function(){});
		    });
		  });

		
        $(function(){
        	$idkuis=0;
        	$tipekuis=0;
        	$(".createWindow").on('click', function(event){
            	event.preventDefault();
            	$idkuis=$(this).data('kuisid');
            	$tipekuis=$(this).data('tipekuis');
            	
            	console.log($idkuis);
            	$.fancybox({
			    maxWidth  : 700,
			    maxHeight:300,
			    fitToView : true,
			    padding : 0,
			    
			    content: $('#select_quizz_type'),
			    scrolling: 'no',

			    autoHeight:true,
			    autoSize  : false,
			    closeClick  : false,
			    openEffect  : 'none',
			    closeEffect : 'none',
			    helpers : {
			            title : null            
			    },
			    beforeShow: load_content_opsi($idkuis,$tipekuis)
				});
            });
        	

			function load_content_opsi(id_kuis,tipe_kuis){
				$('.contentpopup_opsi').empty().append('<a href="<?php echo $this->webroot?>quizzs/edit_new/'+tipe_kuis+'/<?php echo $kelasID."/".
$mapelID?>/'+id_kuis+'">'+
	                    '<img src="<?php echo $this->webroot;?>art/edit-icon.png"/><br/><span>'+
	                    'Edit Tryout</span>'+
					'</a>'+
					'<a href="<?php echo $this->webroot?>quizzs/interaktif_kuis/'+id_kuis+'">'+
                    '<img src="<?php echo $this->webroot;?>art/interaktif-icon.png"/><br/><span>'+
                    'Interaktif<span>'+
					'</a>'+
					'<a id="show_pdf" data-quiz='+id_kuis+'>'+
                    '<img src="<?php echo $this->webroot;?>art/preview-icon.png"/><br/><span>'+
                    'Preview<span>'+
					'</a>'+
					'<a href="<?php echo $this->webroot?>quizzs/view_pdf/'+id_kuis+'">'+
                    '<img src="<?php echo $this->webroot;?>art/savepdf-icon.png"/><br/><span>'+
                    'Simpan sebagai pdf<span>'+
					'</a>'+
                    '<a href="<?php echo $this->webroot?>quizzs/print_pdf/'+id_kuis+'" target="_blank">'+
                    '<img src="<?php echo $this->webroot;?>art/print-icon.png"/><br/><span>'+
                    'Print<span>'+
					'</a>');

	            $("#show_pdf").on('click',function(){
	            	$hehe=$(this).data('quiz');
	            	console.log($hehe);
					/*$('.contentpopup_opsi').empty().append('<embed width="100%" height="100%" name="plugin" src="http://localhost/evaluasi/quizzs/show_pdf/'+$hehe+'" type="application/pdf">');*/
					$.fancybox.close();$.fancybox({
				    'width'  : '864px',
				    maxHeight: 800,
				    fitToView : true,
				    padding : 0,
				    
				    content: $('#preview_kuis'),
				    scrolling: 'no',

				    //autoHeight:true,
				    autoSize  : false,
				    closeClick  : false,
				    openEffect  : 'none',
				    closeEffect : 'none',
				    helpers : {
				            title : null            
				    },
				    beforeShow: awe($hehe)
					});
				});
			}

			$('.fancybox-inner').css('overflow','hidden');
			//on('click', 'button.details'
			function awe(huehe){
				$('.contentpopup_preview').empty().append('<embed width="100%" height="100%" name="plugin" src="http://localhost/evaluasi/quizzs/show_pdf/'+huehe+'" type="application/pdf">')
			}
//			$("#tambah").on('click', function(){
			function showdialog(datashow){
			    $.Dialog({
			        overlay: true,
			        shadow: true,
			        flat: true,
			        icon: '<span class="icon-rocket"></span>',
			        width: 700,
			        title: 'TABLE SOAL',
			        content: '',
			        onShow: function(_dialog){
		    			var content=datashow;
		    			$.Dialog.content(content);
			        }
			    });
			}
        });
    
	</script>
		<script>
			(function() {
	
				function init() {
					var speed = 330,
						easing = mina.backout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
