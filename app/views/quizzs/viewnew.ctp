<div class="wrapper">
	<div class="container">
	<?php if(empty($quizz_detail)):?>
		<center><h2>Tidak ada quizz</h2></center>
	<?php endif;?>
				<!-- Top Navigation -->
				<section id="grid" class="grid clearfix">
				<?php foreach ($quizz_detail as $quizz) :?>
					<h3><?php #echo $quizz['Quizz']['kode']; echo $quizz['Quizz']['title'];?><?php #echo $quizz['Pelajaran']['nama']?></h3>
					<a id="container_image" href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
						<figure>
							<img src="<?php echo $this->webroot?>img/2.png" />
							<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
							<figcaption>
								<h2><?php echo $quizz['Quizz']['kode']; ?></h2>
								<p>Soko radicchio bunya nuts gram dulse.</p>
								<button>View</button>
							</figcaption>
						</figure>
					</a>

					<?php endforeach; ?>
				</section>
			</div><!-- /container -->
	<div class="button_container" id="container_tombol" style="display:none;opacity:0;">
			<button class="command-button large default fg-hover-cobalt">
			    <i class=" icon-accessibility on-left"></i>
			    Interaktif
			    <small>Use this option for interactive question</small>
			</button>
			<button class="command-button large primary fg-hover-cobalt">
			    <i class=" icon-glasses-2 on-left"></i>
			    Preview
			    <small>Use this option for preview</small>
			</button>
			<button class="command-button large info fg-hover-cobalt">
			    <i class=" icon-floppy on-left"></i>
			    Save
			    <small>Use this option for save to PDF file</small>
			</button>
			<button class="command-button large success fg-hover-cobalt">
			    <i class=" icon-printer on-left"></i>
			    Print
			    <small>Use this option for printing out the question</small>
			</button>
	</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		  $( "#container_image").click(function() {
		      $('#container_tombol').show();
		      	$('#container_tombol').animate({opacity: 1}, 500,function(){});
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
