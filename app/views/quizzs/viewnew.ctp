<div class="wrapper">
	<img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon1-tryout.png"/>
	<div class="container">
				<!-- Top Navigation -->
				<section id="grid" class="grid clearfix">
					<div class="container_select_soal">
						<div class="titletryoutcontainer">
							<div class="titlefirst">
								<img src="<?php echo $this->webroot;?>art/icon-list-tryout.png">
								<h1 class="tryouttitle">PILIH TRYOUT</h1>
							</div>
							<div class="titlesecond">
								<h3 class="tryouttitle3">KELAS : 6</h3>
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
										<a class="btn_yellow createWindow" href="#" data-kuisid = "<?php echo $quizz['Quizz']['id']?>">PILIH</a>
									</div>
								</div>
							
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</section>
			</div><!-- /container -->
	
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		  $( "#container_image").click(function() {
		      $('#container_tombol').show();
		      	$('#container_tombol').animate({opacity: 1}, 500,function(){});
		    });
		  });

				var idkuis=0;
        $(function(){
            $(".createWindow").on('click', function(event){
            	event.preventDefault();
            	var idkuis=$(this).data('kuisid');
            	console.log(idkuis);
                $.Dialog({
                    flat: false,
                    shadow: true,
                    width: 500,
                    title: 'PILIH OPSI',
                    padding:0,
                    content:
                    '<a href="<?php echo $this->webroot?>quizzs/edit_new/<?php echo $quizz['Quizz']['type'];?>/<?php echo $kelasID."/".
$mapelID?>/'+idkuis+'">'+
	                    '<button class="command-button large info fg-hover-cobalt buttonopsitryout">'+
	                    '<i class=" icon-pencil on-left"></i>'+
	                    'Edit Tryout<small>Use this option for edit tryout</small>'+
						'</button>'+
					'</a>'+
					'<a href="<?php echo $this->webroot?>quizzs/interaktif_kuis/'+idkuis+'">'+
                    '<button class="command-button large default fg-hover-cobalt buttonopsitryout">'+
                    '<i class=" icon-accessibility on-left"></i>'+
                    'Interaktif<small>Use this option for interactive question</small>'+
					'</button>'+
					'</a>'+
					'<a href="<?php echo $this->webroot?>quizzs/show_pdf/'+idkuis+'">'+
                    '<button class="command-button large primary fg-hover-cobalt buttonopsitryout">'+
                    '<i class=" icon-glasses-2 on-left"></i>'+
                    'Preview<small>Use this option for preview</small>'+
					'</button>'+
					'</a>'+
					'<a href="<?php echo $this->webroot?>quizzs/view_pdf/'+idkuis+'">'+
                    '<button class="command-button large info fg-hover-cobalt buttonopsitryout">'+
                    '<i class=" icon-floppy on-left"></i>'+
                    'Save<small>Use this option for save to PDF file</small>'+
					'</button>'+
					'</a>'+
                    '<button class="command-button large success fg-hover-cobalt buttonopsitryout">'+
                    '<i class=" icon-printer on-left"></i>'+
                    'Print<small>Use this option for printing out the question</small>'+
					'</button>',
                });
            });
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
