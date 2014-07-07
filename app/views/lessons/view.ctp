<div class="feaature bk-book book-1 bk-bookdefault viewlesson">
	<div class="bk-front">
        <div class="bk-cover">
            <h2>
                <span><?php echo $lesson['Lesson']['author']?></span>
                <span><?php echo $lesson['Lesson']['title']?></span>
            </h2>
        </div>
        <div class="bk-cover-back"></div>
    </div>
</div>
<?php 
foreach ($pagesbook as $item):?>

	<div class='feature'>
		<?php if ($item['Halaman']['template_type'] == 1):?>
			<div class="contenttextbook nano">
				<div class="nano-content">
					<div class="contentareablock">
					<?php echo $item['Halaman']['content'];?>
				</div>
				</div>
			</div>

		<?php elseif ($item['Halaman']['template_type'] == 2):?>
		
				<div class="nano contenttextbook alignleft">
					<div class="nano-content">
						<div class="contentmedia_alignleft">
							<?php if ($item['Halaman']['file_type'] == 'image'):?>
								<img src="<?php echo $this->webroot.'files/lessons/'.$lesson['Lesson']['id'].'/images/pages/'.$item['Halaman']['file'];?>" style="width:280px;margin-top:20px;">
							
							<?php elseif ($item['Halaman']['file_type'] == 'video'):?>
								<div id="containerPlayer_<?php echo $item['Halaman']['id']?>">Loading the player ...</div>
								<script type="text/javascript">
								jwplayer("containerPlayer_<?php echo $item['Halaman']['id']?>").setup({
	                                'id': 'playerID_<?php echo $item['Halaman']['id']?>',
	                                'width': '280',
	                                'height': '180',
	                                'aboutlink': '#',
	                                'autostart':false,
	                                'primary': 'flash',
	                                'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/screenshot.png',
	                                //'skin': 'skins/five.xml',

	                                
	                                'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/<?php echo $item['Halaman']['file'];?>',
	                                events: {
	                                    onPause: function(event) {
	                                        setCookie(event.position);
	                                    }
	                                }
	                            });
	                        	</script>

	                        <?php elseif ($item['Halaman']['file_type'] == 'animation'):?>

		                        <div id="containerPlayer_81_wrapper" style="position: relative; width: 300px;">

		                        <object type="application/x-shockwave-flash" data="<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/<?php echo $item['Halaman']['file'];?>" width="100%" height="100%" bgcolor="#000000" id="containerPlayer_<?php echo $item['Halaman']['id']?>" name="containerPlayer_<?php echo $item['Halaman']['id']?>" tabindex="0">

			                        <param name="allowfullscreen" value="true">
			                        <param name="allowscriptaccess" value="always">
			                        <param name="seamlesstabbing" value="true">
			                        <param name="wmode" value="opaque">
		                        </object>
		                        </div>
								
												
							<?php endif;?>
						</div>
						<div class="contentareablock">
							<?php echo $item['Halaman']['content'];?>
						</div>
					</div>
				</div>
			

		<?php elseif ($item['Halaman']['template_type'] == 3):?>
			
			<div class="nano contenttextbook alignright">
				<div class="nano-content">
					<div class="contentmedia_alignright">
						<?php if ($item['Halaman']['file_type'] == 'image'):?>
							<img src="<?php echo $this->webroot.'files/lessons/'.$lesson['Lesson']['id'].'/images/pages/'.$item['Halaman']['file'];?>" style="width:280px;margin-top:10px;">


							<?php elseif ($item['Halaman']['file_type'] == 'video'):?>
								<div id="containerPlayer_<?php echo $item['Halaman']['id']?>">Loading the player ...</div>
								<script type="text/javascript">
								jwplayer("containerPlayer_<?php echo $item['Halaman']['id']?>").setup({
	                                'id': 'playerID_<?php echo $item['Halaman']['id']?>',
	                                'width': '280',
	                                'height': '180',
	                                'aboutlink': '#',
	                                'autostart':false,
	                                'primary': 'flash',
	                                'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/screenshot.png',
	                                //'skin': 'skins/five.xml',

	                                
	                                'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/<?php echo $item['Halaman']['file'];?>',
	                                events: {
	                                    onPause: function(event) {
	                                        setCookie(event.position);
	                                    }
	                                }
	                            });
								</script>


						<?php endif;?>
					</div>
					<div class="contentareablock">
						<?php echo $item['Halaman']['content'];?>
					</div>
				</div>
			</div>

		<?php elseif ($item['Halaman']['template_type'] == 4):?>
			
			<div class="nano contenttextbook aligntop">
				<div class="nano-content">
					<div class="contentmedia_aligntop">
						<?php if ($item['Halaman']['file_type'] == 'image'):?>
							<img src="<?php echo $this->webroot.'files/lessons/'.$lesson['Lesson']['id'].'/images/pages/'.$item['Halaman']['file'];?>" style="width:280px;">

							<?php elseif ($item['Halaman']['file_type'] == 'video'):?>
								<div id="containerPlayer_<?php echo $item['Halaman']['id']?>">Loading the player ...</div>
								<script type="text/javascript">
								jwplayer("containerPlayer_<?php echo $item['Halaman']['id']?>").setup({
	                                'id': 'playerID_<?php echo $item['Halaman']['id']?>',
	                                'width': '300',
	                                'height': '200',
	                                'aboutlink': '#',
	                                'autostart':false,
	                                'primary': 'flash',
	                                'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/screenshot.png',
	                                //'skin': 'skins/five.xml',

	                                
	                                'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/<?php echo $item['Halaman']['file'];?>',
	                                events: {
	                                    onPause: function(event) {
	                                        setCookie(event.position);
	                                    }
	                                }
	                            });
								</script>

						<?php endif;?>
					</div>
					<div class="contentareablock">
						<?php echo $item['Halaman']['content'];?>
					</div>
				</div>
			</div>


		<?php elseif ($item['Halaman']['template_type'] == 5):?>
			
			<div class="contentmedia_alignsingle">
				<?php if ($item['Halaman']['file_type'] == 'image'):?>
					<img src="<?php echo $this->webroot.'files/lessons/'.$lesson['Lesson']['id'].'/images/pages/'.$item['Halaman']['file'];?>" style="width:400px;">

					<?php elseif ($item['Halaman']['file_type'] == 'video'):?>
						<div id="containerPlayer_<?php echo $item['Halaman']['id']?>">Loading the player ...</div>
						<script type="text/javascript">
						jwplayer("containerPlayer_<?php echo $item['Halaman']['id']?>").setup({
	                        'id': 'playerID_<?php echo $item['Halaman']['id']?>',
	                        'width': '400',
	                        'height': '300',
	                        'aboutlink': '#',
	                        'autostart':false,
	                        'primary': 'flash',
	                        'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/screenshot.png',
	                        //'skin': 'skins/five.xml',

	                        
	                        'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $lesson['Lesson']['id']?>/images/pages/<?php echo $item['Halaman']['file'];?>',
	                        events: {
	                            onPause: function(event) {
	                                setCookie(event.position);
	                            }
	                        }
	                    });
						</script>

				<?php endif;?>
			</div>


		<?php endif;?>
	</div>

<?php endforeach;?>