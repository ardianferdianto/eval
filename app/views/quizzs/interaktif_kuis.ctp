<div class="grid fluid">
<div class="row">
    <div class="rowblockwhite kolompertanyaan span5">
    	<h6 class="subheader-secondary"> PERTANYAAN :</h6>
    	<div class="containersoal timesnewroman">
    		<p id="soal">
    			2. Why do farmers prefer considering the only available nutrients to the total quantities of nutrient found in the soil? Because …
    		</p>
            <p id="my_image">
            </p>
            <p id="my_video">
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
    					<a id="prevsoal" class="navigatesoal" style="display:none;" data-pages="" href="#"></a>
    					
    				</div>
    				<div class="span6">
    					<a id="nextsoal" class="navigatesoal" style="display:none;" data-pages="" href="#"></a>
    				</div>
    			</div>
    			
    		</div>



    		<div class="rowblockwhite kolomtengah countdownbox">
    			<h6 class="item-title-secondary"> WAKTU </h6>
                <?php
                    $minutes_to_add = 1;
                    $date = date('Y-m-d H:i:s');
                    $time = new DateTime($date);
                    $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

                    $stamp = $time->format('Y-m-d H:i');
                ?>
    			<div class="countdown" id="timersoal">
    				<h3 id="men">60</h3><p>Menit</p>
    				<h3 id="det">20</h3><p>Detik</p>
    				
    			</div>
    			
    		</div>

		</div>    	
    </div>

    <div class="rowblockwhite kolomjawaban span5">
    	<h6 class="subheader-secondary"> JAWABAN :</h6>
    	<div id="contain" class="answercontainer">
            
		</div>
        <div></br></br><p id="jawab" class="text-right" style="display:none;"><button class="primary large">SUBMIT</button></p></div>
    </div>
</div>
</div>
<div id="form_ans">
<?php var_dump($read_soal['Quizz']['time']) ?></div>
<script>

/* before the window is reloaded or closed, store the current timeout in a cookie. 
   For cookie options visit jquery-cookie */
<?php $waktu=$read_soal['Quizz']['time']*60 ?>

window.jawaban=[];
$(document).ready(function() { 


   	var data = $.parseJSON('<?php echo json_encode($soal) ?>');
   	window.count=0;
   	var page=0;
    var hal=0;
    var id_soal=[];

    //create maping
    for (var i = 0; i < data.length; i++) {
    	if(data[i].Question.tipe==1){
    		count+=1;	
    		$('#mapping ').append('<div id="page" class="rowblockblack mapsoalnumber span2"><a data-page="'+(count-1)+'" class="soal_nonaktif" id="'+(count-1)+'" href="#">'+count+'</a></div>');
            $('#form_ans').append('<input id="jawaban_'+(count-1)+'" type="hidden" value=""/>');
            if (count==1) {
                id_soal[i]=display_soal(data, i);
            } else{
                continue;
            };
    	}else{
    		continue;
    	}
    };
  

    $("#page a.soal_nonaktif").click(function(){
        hal=$(this).data('page');
        id_soal[hal]=display_soal(data, hal);
    });
    $("#nextsoal").click(function(){
        var hals=$("#nextsoal").attr('data-pages');
        hals=parseInt(hals);
        hals+=1;
        id_soal[hals]=display_soal(data, hals);
    });
    $("#prevsoal").click(function(){
        var hals=$("#nextsoal").attr('data-pages');
        hals=parseInt(hals);
        hals-=1;
        id_soal[hals]=display_soal(data, hals);
    });
    $("#jawab").click(function(){
        showdialog(hitung_nilai(data,id_soal));
    });


});
function hitung_nilai(data,id_soal){
        var nilai=0;
        var hitung=0;
        for (var i = 0; i < data.length; i++) {
           for (var j = 0; j < data.length; j++) {
               if (id_soal[i]===data[j].Question.id) {
                    if($("#jawaban_"+(i)).val()==data[j].Question.answer_true){
                        nilai+=10;
                    }else{
                        continue;
                    }
               }else{
                continue
               }
           };
           
        };
/*        $.removeCookie("mytimeout");
        $.removeCookie("timepassed");*/
        hitung=(nilai/(id_soal.length*1.0))*10.0;
        hitung=Math.round(hitung);
        return hitung;
}
function showdialog(nilai){
    $.Dialog({
        shadow: true,
        overlay: false,
        icon: '',
        title: 'Title',
        width: 500,
        padding: 10,
        content: '<center><h2>Point anda <h1>'+nilai+'</h1></h2></center>',
        draggable: true,
        overlayClickClose:false,
        sysButtons: {
            btnClose: true
        },
        sysBtnCloseClick: function(e){
            //alert('Close button click');
            window.location.href = "<?php echo $this->webroot?>";
        },
        sysBtnMinClick: function(e){
            alert('Min button click');
        },
        sysBtnMaxClick: function(e){
            alert('Max button click');
        }
    });
}
function display_soal(data, page){
    var soalterjawab=0;
    $("#nextsoal").show();
    $("#prevsoal").show();

    if (page==0) {
        $("#prevsoal").hide();
    }else if(page==count-1){
        $("#nextsoal").hide();
    };
    //indicator soal aktif
    for (var i = 0; i < count; i++) {
        if(i==page){
            $("#"+(i)).addClass("soalactive");
        }
        else{
            $("#"+(i)).removeClass("soalactive");
        }
    };

    $("#nextsoal").attr("data-pages",page);
    $("#prevsoal").attr("data-pages",page);
    
    //displaying items
    $(".answercontainer").empty().append('<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control"><label><input type="radio" name="'+page+'" data-opsi="1" value="1"><span class="check"></span><p id="opsiA" class="jawabanparagraph"></p></label></div></p>'
        +'<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control"><label><input type="radio" name="'+page+'" data-opsi="1" value="2"><span class="check"></span><p id="opsiB" class="jawabanparagraph"></p></label></div></p>'
        +'<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control"><label><input type="radio" name="'+page+'" data-opsi="1" value="3"><span class="check"></span><p id="opsiC" class="jawabanparagraph"></p></label></div></p>'
        +'<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control"><label><input type="radio" name="'+page+'" data-opsi="1" value="4"><span class="check"></span><p id="opsiD" class="jawabanparagraph"></p></label></div></p>'
        +'<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control"><label><input type="radio" name="'+page+'" data-opsi="1" value="5"><span class="check"></span><p id="opsiE" class="jawabanparagraph"></p></label></div></p>'
    );

    //console.log(page);
    var dats=$('#jawaban_'+page).val();
    if (dats!="") {
            var a=$('#contain div label input[type="radio"][name="'+page+'"]:checked').val();
        $('#contain div label input[type="radio"][name="'+page+'"][value="'+dats+'"]').attr('checked',true); 
    } else{
        $('#contain div label input[type="radio"]').attr('checked',false); 
    };
    if (data[page].Question.images!=null) {
        var image='<?php echo $this->webroot?>'+data[page].Question.images;
        //$("#my_image").attr("src",image); 
        $("#my_image").empty().append('<img id="my_image" src="'+image+'"/>');
    }else{
        $("#my_image").empty().append('<img id="my_image"/>');
    }
    if (data[page].Question.video!=null) {
        var video='<?php echo $this->webroot?>'+data[page].Question.video;
        //$("#my_image").attr("src",image); 
        //$("#containerPlayer").empty().append('<img id="my_image" src="'+image+'"/>');
        $("#my_video").empty().append('<div id="containerPlayer"></div>');
        player_generator(page,video);
    }else{
        $("#my_video").empty().append('');
    }


    $("#soal").text(data[page].Question.question);
    $("#opsiA").text(data[page].Question.answer_a);
    $("#opsiB").text(data[page].Question.answer_b);
    $("#opsiC").text(data[page].Question.answer_c);
    $("#opsiD").text(data[page].Question.answer_d);
    $("#opsiE").text(data[page].Question.answer_e);



    $('#contain div label input[type="radio"]').data('page',page);
    $('#contain div label input[type="radio"]').attr('name',page);



    $('#contain div label input[type="radio"][name="'+page+'"]').on('change',function(){
        var val_jawab=$(this).val();
        $('#jawaban_'+page).val(val_jawab);
        //hitung yang telah terjawab
        for (var i = 0; i < count; i++) {
            if($("#jawaban_"+(i)).val()!="") {
                soalterjawab+=1;
            } else{
                continue;
            };
        };
        $("#"+(page)).addClass("soal_terjawab");

        if (soalterjawab===count) {
            $("#jawab").show();
        };
    });
    console.log(count);
    console.log(soalterjawab);
    console.log(data[page].Question.id);

    return data[page].Question.id;
}
function player_generator(page,data){
    jwplayer("containerPlayer").setup({
        'id': "playerID_"+page,
        'width': '360',
        'height': '240',
        'aboutlink': '#',
        'autostart':false,
        'primary': 'flash',
        
        'file': data,
        events: {
            onPause: function(event) {
                setCookie(event.position);
            }
        }
    });
}
</script>