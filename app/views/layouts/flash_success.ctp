<script type="text/javascript">
$(document).ready(function(){

	var myMessages = ['info','warning','error','success'];

	function showMessage(){
	        //$('.'+ type +'-trigger').click(function(){
	                  hideAllMessages();
	                  $('.success').animate({top:"0"}, 500);
	        //});
	}
	// Initially, hide them all
	hideAllMessages();

	// Show message
	for(var i=0;i<myMessages.length;i++){
	    showMessage();
	}

	// When message is clicked, hide it
	$('.message').click(function(){
	              $(this).animate({top: -$(this).outerHeight()}, 500);
	});
	function hideAllMessages(){
		var messagesHeights = new Array(); // this array will store height for each
		for (i=0; i<myMessages.length; i++){
			messagesHeights[i] = $('.' + myMessages[i]).outerHeight(); // fill array
			$('.' + myMessages[i]).css('top', -messagesHeights[i]); //move element outside viewport
		}
	}
});
</script>
<style type="text/css">
.message{
     -webkit-background-size: 40px 40px;
     -moz-background-size: 40px 40px;
     background-size: 40px 40px;
     background-image: -webkit-gradient(linear, left top, right bottom,
                color-stop(.25, rgba(255, 255, 255, .05)), color-stop(.25, transparent),
                color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .05)),
                color-stop(.75, rgba(255, 255, 255, .05)), color-stop(.75, transparent),
                         to(transparent));
     background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                         transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                         transparent 75%, transparent);
     background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                          transparent 75%, transparent);
     background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                          transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                           transparent 75%, transparent);
     background-image: linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
                           transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
                            transparent 75%, transparent);
     -moz-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     -webkit-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
     width: 100%;
     border: 1px solid;
     color: #fff;
     padding: 15px;
     position: fixed;
     _position: absolute;
     text-shadow: 0 1px 0 rgba(0,0,0,.5);
     -webkit-animation: animate-bg 5s linear infinite;
     -moz-animation: animate-bg 5s linear infinite;
     z-index: 999999;
     top:0;
}
.info{
     background-color: #4ea5cd;
     border-color: #3b8eb5;
}

.error{
     background-color: #de4343;
     border-color: #c43d3d;
}

.warning{
     background-color: #eaaf51;
     border-color: #d99a36;
}

.success{
     background-color: #61b832;
     border-color: #55a12c;
}

.message h3{
     margin: 0 0 5px 0;
     color: #fff;
}

.message p{
     margin: 0;
     color: #fff;
}


@-webkit-keyframes animate-bg{
    from {
       background-position: 0 0;
    }
    to {
       background-position: -80px 0;
    }
}

@-moz-keyframes animate-bg{
    from {
       background-position: 0 0;
    }
    to {
       background-position: -80px 0;
    }
}
</style>
<div class="success message">
     <h3>Sukses</h3>
     <p><?php e($content_for_layout); ?></p>
</div>