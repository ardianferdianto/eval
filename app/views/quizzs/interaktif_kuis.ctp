<div class="grid fluid">
<div class="row">
    <div class="rowblockwhite kolompertanyaan span5">
    	<h6 class="subheader-secondary"> PERTANYAAN :</h6>
    	<div class="containersoal timesnewroman">
    		<p id="soal">
    			2. Why do farmers prefer considering the only available nutrients to the total quantities of nutrient found in the soil? Because …
    		</p>

    	</div>
    </div>

    <div class="span2">
		<div class="row kolomtengahset">
			<div class="rowblockwhite kolomtengah mapingsoal">
    			<h6 class="item-title-secondary"> MAP SOAL</h6>
    			<div class="rowmapsoalset">
	    			<div class="row rowmapsoal" id="mapping">
<!-- 	    				<div class="rowblockblack mapsoalnumber span2">
	    					<a class="soalactive" href="#">
	    					1
	    					</a>
	    				</div> -->
	    			</div>
    			</div>
    		</div>

    		<div class="kolomtengah">
    			<div class="row navigatebutton">
    				<div class="span6">
    					<a id="prevsoal" class="navigatesoal" href="#"></a>
    					
    				</div>
    				<div class="span6">
    					<a id="nextsoal" class="navigatesoal" href="#"></a>
    				</div>
    			</div>
    			
    		</div>



    		<div class="rowblockwhite kolomtengah countdownbox">
    			<h6 class="item-title-secondary"> WAKTU </h6>
                <?php
                    $minutes_to_add = 100;
                    $date = date('Y-m-d H:i:s');
                    $time = new DateTime($date);
                    $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

                    $stamp = $time->format('Y-m-d H:i');
                ?>
    			<div class="countdown" id="timersoal" data-role="countdown"  data-stoptimer="<?php echo $stamp ?>" style="font-size: 15px">
    				<!-- <h3>60</h3> Menit
    				<br/>
    				<br/>
    				<h3>20</h3> Detik -->
    				
    			</div>
    			
    		</div>

		</div>    	
    </div>

    <div class="rowblockwhite kolomjawaban span5">
    	<h6 class="subheader-secondary"> JAWABAN :</h6>
    	<div class="answercontainer">
    		<p>
		    	<div class="input-control radio default-style margin10 timesnewroman" data-role="input-control">
		            <label>
		            	<input type="radio" name="r1" data-opsi="1" id="selected1" >
		                <span class="check"></span>
		                <p id="opsiA" class="jawabanparagraph"></p>
		            </label>
		        </div>
        	</p>
            <p>
	            <div class="input-control radio default-style margin10 timesnewroman" data-role="input-control">
	                <label>
	                	<input type="radio" name="r1"  data-opsi="2" id="selected2" >
	                    <span class="check"></span>
	                    <p id="opsiB" class="jawabanparagraph"></p>
	                </label>
	            </div>
        	</p>
            <p>
	            <div class="input-control radio default-style margin10 timesnewroman" data-role="input-control">
	                <label>
	                	<input type="radio" name="r1"  data-opsi="3" id="selected3">
	                    <span class="check"></span>
	                    <p id="opsiC" class="jawabanparagraph"></p>
	                </label>
	            </div>
        	</p>
            <p>
	            <div class="input-control radio default-style margin10 timesnewroman" data-role="input-control">
	                <label>
	                	<input type="radio" name="r1"  data-opsi="4" id="selected4">
	                    <span class="check"></span>
	                    <p id="opsiD" class="jawabanparagraph"></p>
	                </label>
	            </div>
        	</p>
            <p>
	            <div class="input-control radio default-style margin10 timesnewroman" data-role="input-control">
	                <label>
	                	<input type="radio" name="r1" id="selected5" >
	                    <span class="check"></span>
	                    <p id="opsiE" class="jawabanparagraph"></p>
	                </label>
	            </div>
        	</p>
            
		</div>

    </div>
</div>
</div>
<div id="kudaz">
<?php //var_dump($soal) ?></div>
<script>

window.jawaban=[];
$(document).ready(function() { 
   	var data = $.parseJSON('<?php echo json_encode($soal) ?>');
   	var count=0;
   	var page=2;
    //create maping
    for (var i = 0; i < data.length; i++) {
    	if(data[i].Question.tipe==1){
    		count+=1;	
    		$('#mapping ').append('<div id="page" class="rowblockblack mapsoalnumber span2"><a data-page="'+i+'" class="soal_nonaktif" href="#">'+count+'</a></div>');
            $('.answercontainer ').append('<input id="jawaban_'+(count)+'" type="hidden" value=""/>');
            if (count==1) {
                display_soal(data, i);
            } else{
                continue;
            };
    	}else{
    		continue;
    	}
    };
    $("#page a.soal_nonaktif").click(function(){
        var hal=$(this).data('page');
        display_soal(data, hal);
    });


/*$(".answercontainer").append('<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control"><label><input type="radio" name="r1" data-opsi="1" id="selected1" ><span class="check"></span><p id="opsiz" class="jawabanparagraph"></p></label></div></p>');*/

});
    function display_soal(data, page){

        $("#selected"+page).prop('checked',false);
        $("#soal").text(data[page].Question.question);
        $("#opsiA").text(data[page].Question.answer_a);
        $("#opsiB").text(data[page].Question.answer_b);
        $("#opsiC").text(data[page].Question.answer_c);
        $("#opsiD").text(data[page].Question.answer_d);
        $("#opsiz").text("lalalalala");
        $("#opsiE").text("-");
        $("input:radio[name=r1]").attr('soalid',data[page].Question.id);
        $("input:radio[name=r1]").click(function() {
            var value = $(this).data('soalid');
            console.log($("#jawaban_"+(page)).val());
        });
        
        console.log(data[page].Question.id);
    }
        $("#timersoal").countdown({
        blink: false, // blink divider
        //days: int, // days to alert, set stoptimer to zero, default 1
        //stoptimer: "<?php echo $stamp ?>", // the string value of datetime, example '2013-07-05 12:00'
        //ontick: function(d, h, m, s){...},
        onstop: function(){
            alert("Time out");
        }
    });
</script>