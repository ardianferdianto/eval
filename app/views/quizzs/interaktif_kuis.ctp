<div class="grid fluid">
<div class="row">

    <div class="bg-notebook-interaktif">

    <div class="kolompertanyaan span5">
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




        <div class="kolomjawaban span5">
            <h6 class="subheader-secondary"> JAWABAN :</h6>
            <div id="contain" class="answercontainer">
                

            </div>
            <div></br></br><p class="text-right" ><button id="jawab" class="primary large" style="display:none;">SUBMIT</button><button id="exit" class="danger large" style="display:none;">exit</button></p></div>
        </div>

    </div>

    <div class="containermapsoal">
        <div class="row kolomtengahset">
            <div class=" kolomtengah mapingsoal">
                <h6 class="item-title-secondary mapsoaltitle"> MAP SOAL</h6>
                <div class="rowmapsoalset">
                    <div class="row rowmapsoal" id="mapping">
<!--                        <div class="rowblockblack mapsoalnumber span2">
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
                        <a id="prevsoal" class="navigatesoal" style="display:none;" href="#"></a>
                        
                    </div>
                    <div class="span6">
                        <a id="nextsoal" class="navigatesoal" style="display:none;" href="#"></a>
                    </div>
                </div>
                
            </div>



            <div class="kolomtengah countdownbox">
                <h6 class="item-title-secondary"> WAKTU </h6>
                <?php
                    
                ?>

                <div class="countdown" id="timersoal">
                    <div id="countd"></div>
                </div>
            </div>

            <input id="recheck" type="hidden" value=""/>
        </div>      
    </div>


</div>
</div>
<div id="form_ans">
<?php //var_dump($read_soal['Quizz']['time']) ?></div>
<script>
/* before the window is reloaded or closed, store the current timeout in a cookie. 
   For cookie options visit jquery-cookie */
<?php $waktu=$read_soal['Quizz']['time']*60 ?>
window.jawaban=[];



function delete_cookie(name,value){
     $.cookie(name,value, { expires: -1});
}
$(document).ready(function() { 
   
    var data = $.parseJSON('<?php echo json_encode($soal) ?>');
    window.count=0;
    var page=0;
    var hal=0;
    var id_soal=[];
    console.log(data);

    //create maping
    for (var i = 0; i < data.length; i++) {
        //if(data[i].Question.tipe==1){
            count+=1;   
            $('#mapping ').append('<div id="page" class="rowblockblack mapsoalnumber span2"><a data-page="'+(count-1)+'" class="soal_nonaktif" id="'+(count-1)+'" href="#">'+count+'</a></div>');
            $('#form_ans').append('<input id="jawaban_'+(count-1)+'" type="hidden" value=""/>');
            if (count==1) {
                id_soal[i]=display_soal(data, i);
            } else{
                continue;
            };
        //}else{
        //  continue;
        //}
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
        console.log($('#recheck').val());
    });
    console.log(data[0].Quizz.time);
    var times=data[0].Quizz.time;
    if (!$.cookie('zzz_<?php echo $id_kuis?>')){
        var now = new Date(); 
        var timer = new Date(now.getTime() + (times * 60 * 1000));
        $.cookie('zzz_<?php echo $id_kuis?>', timer);
        
    }
    var cookie = $.cookie('zzz_<?php echo $id_kuis?>');
    console.log(cookie);
    console.log('<?php echo $id_kuis?>')
    //$('#countd').countdown({until: new Date(cookie), onExpiry:delete_cookie('zzz',cookie), format: 'HMS'});
    $('#countd').countdown({
        labels: ['Tahun', 'Bulan', 'Minggu', 'Hari', 'Jam', 'Menit', 'Detik'], 
        // The expanded texts for the counters 
        until: new Date(cookie),onExpiry: function(){showdialog(hitung_nilai(data,id_soal),data);}, format: 'HMS'
    });
    //delete_cookie('zzz',cookie);
    var timestamp_now = new Date().getTime();
    var cookie_timestamp=new Date($.cookie('zzz_<?php echo $id_kuis?>')).getTime();
    
    if(cookie_timestamp < timestamp_now){
        delete_cookie('zzz_<?php echo $id_kuis?>',cookie_timestamp);   
    }

    $("#jawab").click(function(){
        showdialog(hitung_nilai(data,id_soal),data);
        delete_cookie('zzz_<?php echo $id_kuis?>',cookie);
    });
    $("#exit").click(function(){
        window.location.href = "<?php echo $this->webroot?>quizzs/viewnew/"+data[0].Quizz.type+"/"+data[0].Quizz.kelas+"/"+data[0].Quizz.pelajaran_id;
    });
});
function hitung_nilai(data,id_soal){
        var nilai=0;
        var hitung=0;
        for (var i = 0; i < id_soal.length; i++) {
                if (id_soal[i]==data[i].Question.id) {       
                    if($("#jawaban_"+(i)).val()==data[i].Question.answer_true){
                        nilai+=10;
                        console.log("jawaban"+i);
                    }
               }
        };
        $('#recheck').val("1");
/*        $.removeCookie("mytimeout");
        $.removeCookie("timepassed");*/
        console.log(nilai);
        console.log(id_soal.length);
         console.log(data.length);
        
        var cookie = $.cookie('zzz_<?php echo $id_kuis?>');
        delete_cookie('zzz_<?php echo $id_kuis?>',cookie);
        hitung=(nilai/id_soal.length)*10.0;
        hitung=Math.round(hitung);
        return hitung;
}
function showdialog(nilai,param){
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
            //window.location.href = "<?php echo $this->webroot?>";
            display_soal(param, '0');
            $("#jawab").hide();
            $("#exit").show();
        },
        sysBtnMinClick: function(e){
            alert('Min button click');
        },
        sysBtnMaxClick: function(e){
            alert('Max button click');
        }
    });
}
function display_review(){

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
        +'<p><div class="input-control radio default-style margin10 timesnewroman" data-role="input-control" id="container_opsi_e"><label><input type="radio" name="'+page+'" data-opsi="1" value="5"><span class="check"></span><p id="opsiE" class="jawabanparagraph"></p></label></div></p>'
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
    $("#opsiA").text('A. '+data[page].Question.answer_a);
    $("#opsiB").text('B. '+data[page].Question.answer_b);
    $("#opsiC").text('C. '+data[page].Question.answer_c);
    $("#opsiD").text('D. '+data[page].Question.answer_d);
    if(data[page].Question.answer_e != ''){
        $("#opsiE").text('E. '+data[page].Question.answer_e);
    }else{

        $("#container_opsi_e").hide();
    }
    
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

    //yang ngasih garis ijo waktu review
    if($('#recheck').val()=="1"){
        var highlight=data[page].Question.answer_true;
        switch(highlight){
            case "1":
                var benar="opsiA";
                break;
            case "2":
                var benar="opsiB";
                break;
            case "3":
                var benar="opsiC";
                break;
            case "4":
                var benar="opsiD";
                break;
            case "5":
                var benar="opsiE";
                break;
            default:
                break;   

        }
        $("#"+(benar)).addClass("soal_terjawab");
    }
    console.log("this is "+page);
    console.log(benar);
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
/*
    var clock = document.getElementById("countdown-holder"), targetDate = new Date(2015, 04, 18); // Jan , 2050;
    clock.innerHTML = countdown(targetDate).toString();
    setInterval(function(){
        clock.innerHTML = countdown(targetDate).toString();
    }, 1000);*/


</script>