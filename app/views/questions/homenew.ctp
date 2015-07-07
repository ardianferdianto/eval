<?php if($trial == 'Trial'):?>
<script type="text/javascript">
$(document).ready(function(){

  var myMessages = ['info','warning','error','success'];

  function showMessage(){
          //$('.'+ type +'-trigger').click(function(){
                    hideAllMessages();
                    $('.warning').animate({top:"0"}, 500);
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
<div class="warning message">
     <h3>Info</h3>
     <p>Anda menggunakan versi trial aplikasi ini.<br/> klik untuk menutup pesan ini</p>
</div>

<?php endif;?>

<ul id="" class="movieposters listkelas_container">
    <li>
        <div align="center"><img src="<?php echo $this->webroot?>images/kelas_1.jpg" alt="Kelas  2" />
      </div>
        <div class="movieinfo">
          <h2 align="center" class="style10">Kelas 1</h2>
          
            <div align="center">
              <a href="#" title="Kelas  2" class="style1 buttonkelas" data-kelasid = "1">Klik Disini</a> </div>
      </div>
  </li>
    
    <li>
        <div align="center"><img src="<?php echo $this->webroot?>images/kelas_2.jpg" alt="Kelas  2" />             </div>
      <div class="movieinfo">
            <h2 align="center" class="style10">Kelas  2</h2>
            
          <div align="center"><a href="#" title="Kelas  2" class="style1 buttonkelas" data-kelasid = "2">Klik Disini</a> </div>
      </div>
    </li>
    
    <li>
        <div align="center"><img src="<?php echo $this->webroot?>images/kelas_3.jpg" alt="Kelas  2" />             </div>
      <div class="movieinfo">
            <h2 align="center" class="style9">Kelas  3</h2>
            
            <div align="center"><a href="#" title="Kelas  2" class="style1 buttonkelas" data-kelasid = "3">Klik Disini</a> </div>
      </div>
    </li>
    
    <li>
        <div align="center"><img src="<?php echo $this->webroot?>images/kelas_4.jpg" alt="Kelas  2" />             </div>
      <div class="movieinfo">
            <h2 align="center" class="style10">Kelas  4</h2>
            
        <div align="center"><a href="#" title="Kelas  2" class="style1 buttonkelas" data-kelasid = "4">Klik Disini</a> </div>
      </div>
    </li>
    
    <li>
        <div align="center"><img src="<?php echo $this->webroot?>images/kelas_5.jpg" alt="Kelas  2" />             </div>
      <div class="movieinfo">
            <h2 align="center" class="style9">Kelas 5</h2>
            
          <div align="center"><a href="#" title="Kelas  2" class="style1 buttonkelas" data-kelasid = "5">Klik Disini</a> </div>
      </div>
    </li>
    
    <li>
        <div align="center"><img src="<?php echo $this->webroot?>images/kelas_6.jpg" alt="Kelas  2" />             </div>
      <div class="movieinfo">
            <h2 align="center" class="style9">Kelas  6</h2>
            
          <div align="center"><a href="#" title="Kelas  2" class="style1 style7 buttonkelas" data-kelasid = "6">Klik Disini</a> </div>
      </div>
    </li>
</ul>




<ul id="" class="movieposters listmapel_container" style="display:none;opacity:0;">
  <?php foreach ($kumpulanmatapelajaran as $pelajaran) :?>
  <li>
        <div align="center"><img src="<?php echo $this->webroot?>art/<?php echo $pelajaran['Pelajaran']['image']?>" alt="Kelas  2" />
      </div>
        <div class="movieinfo">
          <h2 align="center" class="style10"><?php echo $pelajaran['Pelajaran']['nama']?></h2>
          <p align="center"></p>
            <div align="center">
              <a href="#select_quizz_type" title="Kelas  2" class="style1 buttonmapel"  data-pelajaranid ="<?php echo $pelajaran['Pelajaran']['id']?>" >Klik Disini</a> </div>
      </div>
  </li>  
  <?php endforeach;?>

</ul>

<div id="select_quizz_type" class="popupwithstitch" style="display:none;">
  <h2>Pilih Tipe Soal</h2>
  
    <a class="tile triple bg-darkPink" id="button_tryout_first" href="<?php echo $this->webroot?>quizzs/viewnew/1/1/2"><center> <img src="<?php echo $this->webroot;?>art/stitch-icon1-tryout-small.png"><br/>TRYOUT</center> </a>
    <a class="tile triple bg-lightBlue" id="button_quizz_first" href="<?php echo $this->webroot?>quizzs/viewnew/1/1/2"><center> <img src="<?php echo $this->webroot;?>art/stitch-icon3-quizz-small.png"><br/> QUIZZ </center></a>
    <a class="tile triple bg-teal" id="button_ujian_first" href="<?php echo $this->webroot?>quizzs/viewnew/1/1/2"><center><img src="<?php echo $this->webroot;?>art/stitch-icon4-ujian-small.png"><br/>UJIAN</center></a>
    <a class="tile triple bg-darkCyan" id="button_soal_first" href="<?php echo $this->webroot?>quizzs/viewnew/1/1/2"><center> <img src="<?php echo $this->webroot;?>art/stitch-icon2-banksoal-small.png"><br/> BANK SOAL </center></a>
  
</div>
<script type="text/javascript">

$(document).ready(function() {
  var kelasid = 0;
  var pelajaranid = 0;
  var webroot = <?php echo $this->webroot;?>

  $( ".buttonkelas").click(function() {
     kelasid = $(this).data("kelasid");
    
    $('.listkelas_container').animate({opacity: 0}, 500,function(){
      $('.listkelas_container').hide();
      $('.listmapel_container').show();
      $('.listmapel_container').animate({opacity: 1}, 500,function(){
        
      });
    });
  });

  $( ".buttonmapel").click(function() {
    pelajaranid = $(this).data("pelajaranid");
    
    //modify href

    $("#button_tryout_first").attr("href", webroot+'quizzs/viewnew/1/'+kelasid+'/'+pelajaranid);
    $("#button_quizz_first").attr("href", webroot+'quizzs/viewnew/2/'+kelasid+'/'+pelajaranid);
    $("#button_ujian_first").attr("href", webroot+'quizzs/viewnew/3/'+kelasid+'/'+pelajaranid);
    $("#button_soal_first").attr("href", webroot+'quizzs/banksoal/'+kelasid+'/'+pelajaranid);
    

  });

  $(".buttonmapel").fancybox({
    maxWidth  : 700,

    fitToView : true,
    padding : 0,
    scrolling: 'no',
    maxHeight:300,
    autoHeight:true,
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none',
    helpers : {
            title : null            
    }       
  });


});
</script>

