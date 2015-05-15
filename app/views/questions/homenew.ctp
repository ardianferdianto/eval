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
    maxWidth  : 500,
    maxHeight : 400,
    fitToView : false,
    padding : 0,
    width   : '50%',
    height    : '40%',
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

