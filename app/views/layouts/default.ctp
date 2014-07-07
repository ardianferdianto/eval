
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">

<?php echo $html->css('normalize'); ?>
<?php echo $html->css('demo'); ?>
<?php echo $html->css('bookblock'); ?>
<?php echo $html->css('component'); ?>
<?php echo $html->css('component_lesson'); ?>
<?php echo $html->css('style'); ?>
<?php echo $html->css('btn-component'); ?>
<?php echo $html->css('jquery.fancybox'); ?>
<?php echo $html->css('notif-style'); ?>

<?php echo $html->css('jquery.qtip'); ?>
<?php echo $html->css('dropzone'); ?>
<?php echo $html->css('slick'); ?>
<?php echo $html->css('jquery.bxslider'); ?>

<style type="text/css">
.progressebookupload { 
    
    
    border: 1px solid #ddd;
    padding: 1px;
    border-radius: 3px;
    position: absolute;
    display: inline-block;
    overflow: hidden;
    left: 50%;
    top: 50%;
    width: 400px;
    height: 50px;
    margin-top: 150px;
    margin-left: -200px;
}
.bar { background-color: #B4F5B4; width:0%; height:50px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:10px; left:48%; }

#CategoryAddForm{
    display: none;
}
</style>


<?php echo $javascript->link('jquery-1.10.1.min.js'); ?>
<?php echo $javascript->link('jquery.swfobject.1-1-1.min.js'); ?>

<?php echo $javascript->link('jquery.easing.1.3.js'); ?>
<?php echo $javascript->link('jquery.form.min.js'); ?>


<?php echo $javascript->link('jquery.transit.min.js'); ?>
<?php echo $javascript->link('jquery.fancybox.pack.js'); ?>

<?php echo $javascript->link('cufon.js'); ?>
<?php echo $javascript->link('RNS_Camelia_275.font.js'); ?>
<?php echo $javascript->link('modernizr.custom.39460.js'); ?>
<?php echo $javascript->link('jquery.qtip.js'); ?>

<?php echo $javascript->link('lesson_process.js'); ?>

<?php echo $javascript->link('ckeditor/ckeditor.js'); ?>
<?php echo $javascript->link('dropzone.js'); ?>
<?php echo $javascript->link('slick.min.js'); ?>
<?php echo $javascript->link('jquery.bxslider.min.js'); ?>


<?php echo $javascript->link('jwplayer.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";


</script>




<script type="text/javascript">
	Cufon.replace('.logo', {hover: true}); 
	Cufon.replace('h2.cufonreplace');

</script>

<?php echo $javascript->link('core.js'); ?>
<?php echo $javascript->link('modernizr.custom.js'); ?>

<?php echo $scripts_for_layout; ?>
</head>
<body>
<div class="tn-box tn-box-color-1">
    <p>Your settings have been saved successfully!</p>
    <div class="tn-progress"></div>
</div>

<div class="tn-box tn-box-color-2">
    <p>Yummy! I just ate your settings! They were delicious!</</p>
    <div class="tn-progress"></div>
</div>

<div class="loader loadingstateall" style="">
    <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
    
</div>


<div class="main">
    <div class="header">
        <img style="float:left;margin-top:-30px;" src="<?php echo $this->webroot;?>images/logo_main.png"/>
        <div class="logo">Welcome to E-Teaching Technology</div>
        <div class="menu">
            <ul>
                <li><a href="#Home" id="btnHome"></a></li>
                <!--<li> <a href="#Gallery" id="btnGallery">Video</a></li>
                <li> <a href="#Services" id="btnServices">Ebook</a></li>
                <li style="margin-right:0px;"><a href="#Contact" id="btnContact">Contact</a></li>-->
            </ul>
        </div>
        <!-- .menu -->
    </div>
    <!-- .header -->
</div>
<!-- .main -->

<!-- Begin #caruselWrapper -->
<div id="caruselWrapper" style="float: left; width:100%; height:585px; overflow: hidden;position:relative;">
	<?php e($content_for_layout); ?>
</div>
<!-- End #caruselWrapper -->

<div class="clear"></div>




<div style="display:none">

<div id="uploadebook">
    
    <div class="loader" style="display:none;">
        <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
        
    </div>
    <p class="statusload"> Memproses data, mohon menunggu <br/> <small>Membutuhkan waktu untuk mempersiapkan ebook. Lama proses tergantung dari besar file pdf</small></p>

    <p class="statusload2 statusload"> Memproses data, mohon menunggu</p>

    <!--<div class="progressebookupload">
        <div class="bar" style="width: 100%;"></div>
        <div class="percent">100%</div>
    </div>-->

    <div id="upload-ebook">
            
            <div class="labs form">

                <?php echo $form->create('Ebook',array('enctype'=>'multipart/form-data'));?>
                    <h2>Tambah Buku</h2>
                    <fieldset>
                    <div style="float:left;width:400px;"
                        <?php

                        echo '<p>';
                        echo '<label>Category Ebook</label>';
                        echo $form->select('category_id',$listCategory,null);
                        echo '&nbsp;&nbsp;<img src="'.$this->webroot.'images/folder_new.gif"/><a id="addcat" class="addcat" href="#">Tambah Category</a>';
                        echo '</p>';
                    ?>
                    
                    <p>
                    <?php
                    echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Buku'));

                    ?>

                    </p>
                    <p>

                    <?php
                    echo $form->input('pengarang',array('class'=>'text-input normal-input','label'=>'Pengarang'));

                    ?>
                    <p>

                    <?php
                    echo $form->input('penerbit',array('class'=>'text-input normal-input','label'=>'Penerbit'));

                    ?>

                    </p>
                    <p>
                        <?php echo $form->year('tahunBerdiri', 1945, 2015, null, array('class'=>'year-set'), 'Pilih Tahun');    ?>
                        <?php //echo $form->input('jumlahhalaman',array('class'=>'text-input normal-input','label'=>'Jumlah halaman'));   ?>
                    </p>
                    <?php
                    echo $form->input('details',array('label'=>'Resensi'));

                    ?>
                    <!--<p>-->
                    
                    <?php
                    //echo $form->input('File.image1', array('label'=>'Cover file', 'type'=>'file'));
                    //echo '</p>';?>
                    <p>

                    <label>Pilih file ebook</label>
                    <?php
                    echo $form->input('Ebook.ebookfiles', array('label'=>false, 'type'=>'file'));
                    echo '</p>';?>

                    </fieldset>
                    <div class="submit">
                        <button class="btn btn-2 btn-2g" type="submit">Upload</button>
                    </div>

                    <?php echo $form->end();?>

                    <?php echo $form->create('Category',array('enctype'=>'multipart/form-data'));?>

                        <h2>Tambah Category</h2>
                        <?php
                        echo $form->input('name',array('class'=>'text-input large-input categorynameinput','label'=>'Nama Kategori'));

                        ?>
                        <br/>

                        <?php
                        echo $form->hidden('type',array('class'=>'text-input large-input','value'=>1));

                        ?>
                        <div class="submit">
                            <button class="btn btn-2 btn-2g" type="submit">Tambah</button>
                            <a class="btn btn-2 btn-2g addcatcancel">Batal</a>
                            
                        </div>

                    <?php echo $form->end();?>

                    <script type="text/javascript">


                    (function() {
                        
                    function showResponse(responseText, statusText, xhr, $form)  { 
                        $('#bookshelf').slickGoTo(0);
                        setTimeout(function() {
                            $(".statusload").hide();
                            $(".loader").hide();
                            $.fancybox.close();
                            $("#EbookAddForm").clearForm();
                            $("#upload-ebook").show();
                            
                            reindexcountbook(responseText);
                            
                            
                        },4000);
                    } 

                    var options2 = {
                        success:       showResponse  // post-submit callback
                    };




                    // bind form2 using ajaxSubmit
                    $('#EbookAddForm').on('submit', function(e) {
                        e.preventDefault(); // avoids calling preview.php
                        // submit the form via ajax
                        $("#upload-ebook").fadeOut();
                        //$.fancybox.resize();
                        $(".statusload").fadeIn();
                        $(".loader").fadeIn();

                        
                        $(this).ajaxSubmit(options2);



                        

                        return false;
                    });

                    

                    var options3 = {
                        
                        dataType: 'json',
                        success: function(responsesText, statusText, xhr, $form){
                            console.log(responsesText);
                            if(responsesText.status == "true"){
                                setTimeout(function() {
                                    $(".statusload2").hide();
                                    $(".loader").hide();
                                    //$.fancybox.close();
                                    $("#CategoryAddForm").clearForm();
                                    $("#upload-ebook").show();

                                    $('#EbookAddForm').fadeIn();
                                    $('#CategoryAddForm').fadeOut();

                                    alert(responsesText.flashMessage);

                                    $('#EbookCategoryId').append('<option selected="selected" value="'+responsesText.idtodelete+'">'+responsesText.nametoResponse+'</option>');
                                    //$('#bookshelf').prepend(responseText);
                                    
                                },2000);
                            }
                        }
                    };

                    $('#CategoryAddForm').on('submit', function(e) {
                        e.preventDefault(); // avoids calling preview.php
                        // submit the form via ajax
                        $("#upload-ebook").fadeOut();
                        //$.fancybox.resize();
                        $(".statusload2").fadeIn();
                        $(".loader").fadeIn();
                        $(this).ajaxSubmit(options3);                        

                        return false;
                    });

                    function reindexcountbook(responseText){
                        
                        $('#bookshelf > div.slick-list > div.slick-track > div.lastbookshelf').prepend(responseText);

                        var i = 0;
                        var findelement = $( "figure.entrybook" );
                        var rand = Math.floor((Math.random() * 30) + 1);
                        var countelement = findelement.length;
                        console.log(countelement);
                        //$( "figure.entrybook" ).data('countebook',0);
                        $(findelement).each(function() {
                            i++;
                            countelement -- ;
                            
                            
                            $(this).attr('data-countebookreindex'+rand,i);
                            if(countelement == 0){
                                setTimeout(function() {
                                    reindexebook(rand);

                                },1000);
                            }
                        });
                    }

                    
                    function reindexebook(rand){
                        
                        console.log('startreindexagain');
                        var multipleBook = 0;
                        var datacount = '';
                        var findelement2 = $( "figure.entrybook" );
                        
                        $(findelement2).each(function() {
                        
                            $(this).removeClass('showonright');
                            var datacount = $(this).data('countebookreindex'+rand);

                            console.log(datacount);
                            if (datacount % 8 == 0){
                                $(this).addClass('showonright');
                                console.log('find');
                                
                            }
                            else if (datacount  % ((multipleBook*7)+(multipleBook-1)) == 0 ) {
                                multipleBook++;
                                $(this).addClass('showonright');
                                console.log('find');
                                
                            }
                            

                            if (datacount == 1){
                                $(this).removeClass('showonright');
                            }
                            

                        });
                        slickit();
                        
                    }

                    function slickit(){

                        
                        
                        var divs = $("figure.entrybook");
                        $('#bookshelf').unslick();
                        $('.containerbookshelf').children().unwrap();
                        for(var i = 0; i < divs.length; i+=24) {
                          divs.slice(i, i+24).wrapAll("<div class='containerbookshelf'></div>");
                        }
                        $( "#bookshelf div:first-child" ).addClass('lastbookshelf');

                        $('#bookshelf').slick({
                            slide:'div',
                            slidesToShow:1,
                            infinite: false,
                            
                        });
                    }


                    })();       
                    </script>
            </div>
     </div><!--end labs upload div-->

</div>
</div>



<div style="display:none">

<div id="uploadvideo">
    
    <div class="loader" style="display:none;">
        <img src="<?php echo $this->webroot;?>images/rotite-30-29.png" width="928" height="29" style="position: absolute; display: block; overflow: hidden; left: 0px; top: 0px; margin: 0px; padding: 0px; max-width: none; max-height: none; border: none; line-height: 1; background-color: transparent; -webkit-backface-visibility: hidden; -webkit-user-select: none;">
        
    </div>
    <p class="statusload"> Memproses data, mohon menunggu </p>
    

     <div id="upload-video">
        
        <div class="labs form">
            <?php echo $form->create('Video',array('class'=>'CategoryAddForm','enctype'=>'multipart/form-data'));?>
            <h2>Tambah Video</h2>
                <fieldset>
                <div style="float:left;width:400px;"
                    <?php

                    echo '<p>';
                    echo '<label>Category Video</label>';
                    echo $form->select('category_id',$listCategoryVideo,null);
                    echo '&nbsp;&nbsp;<img src="'.$this->webroot.'images/folder_new.gif"/><a id="addcat" class="addcat" href="#">Tambah Category</a>';
                    echo '</p>';
                ?>
                
                <p>
                <?php
                echo $form->input('title',array('class'=>'text-input large-input','label'=>'Judul Video'));

                ?>

                </p>
                <p>

                <?php
                echo $form->input('sutradara',array('class'=>'text-input normal-input','label'=>'Sutradara'));

                ?>
                <p>

                <?php
                echo $form->input('produksi',array('class'=>'text-input normal-input','label'=>'Produksi'));

                ?>

                </p>
                <p>
                    <?php echo $form->year('tahunBerdiri', 1945, 2011, null, array('class'=>'year-set'), 'Pilih Tahun');    ?>
                    
                </p>
                <?php
                echo $form->input('details',array('label'=>'Resensi'));

                ?>
                <p>
                
                <?php
                echo $form->input('File.image1', array('label'=>'Cover files', 'type'=>'file'));
                echo '</p>';?>
                <p>
                <label>Pilih file video</label>
                <?php
                echo $form->input('file', array('label'=>false, 'type'=>'file'));

                echo '</p>';?>



                </fieldset>
                <div class="submit">
                    <button class="btn btn-2 btn-2g" type="submit">Upload</button>
                </div>
                <?php echo $form->end();?>



                <?php echo $form->create('Category',array('id'=>'CategoryAddForm2','class'=>'CategoryAddForm2','enctype'=>'multipart/form-data'));?>

                        <h2>Tambah Category</h2>
                        <?php
                        echo $form->input('name',array('class'=>'text-input large-input categorynameinput','label'=>'Nama Kategori'));

                        ?>
                        <br/>

                        <?php
                        echo $form->hidden('type',array('class'=>'text-input large-input','value'=>2));

                        ?>
                        <div class="submit">
                            <button class="btn btn-2 btn-2g" type="submit">Tambah</button>
                            <a class="btn btn-2 btn-2g addcatcancel">Batal</a>
                            
                        </div>

                    <?php echo $form->end();?>


                <script type="text/javascript">


                    (function() {
                        
                    function showResponse(responseText, statusText, xhr, $form)  { 
                        // for normal html responses, the first argument to the success callback 
                        // is the XMLHttpRequest object's responseText property 
                     
                        // if the ajaxSubmit method was passed an Options Object with the dataType 
                        // property set to 'xml' then the first argument to the success callback 
                        // is the XMLHttpRequest object's responseXML property 
                     
                        // if the ajaxSubmit method was passed an Options Object with the dataType 
                        // property set to 'json' then the first argument to the success callback 
                        // is the json data object returned by the server 
                        setTimeout(function() {
                            $(".statusload").hide();
                            $(".loader").hide();
                            $.fancybox.close();
                            $("#VideoAddForm").clearForm();
                            $("#VideoAddForm").show();
                            $('.arrCenter').prepend(responseText);
                            
                        },4000);
                    } 

                    var options2 = {
                        //target:        '#output2',   // target element to update
                        //beforeSubmit:  showRequest,  // pre-submit callback
                        success:       showResponse  // post-submit callback
                    };

                    // bind form2 using ajaxSubmit
                    $('#VideoAddForm').on('submit', function(e) {
                        e.preventDefault(); // avoids calling preview.php
                        // submit the form via ajax
                        $("#VideoAddForm").fadeOut();
                        //$.fancybox.resize();
                        $(".statusload").fadeIn();
                        $(".loader").fadeIn();
                        $('.detailsvideo').hide();
                        $('.closedetailvideo').hide();
                        $(this).ajaxSubmit(options2);
                        

                        return false;
                    });



                    var options3 = {
                        
                        dataType: 'json',
                        success: function(responsesText, statusText, xhr, $form){
                            console.log(responsesText);
                            if(responsesText.status == "true"){
                                setTimeout(function() {
                                    $(".statusload").hide();
                                    $(".loader").hide();
                                    //$.fancybox.close();
                                    $("#CategoryAddForm2").clearForm();
                                    $("#upload-video").show();

                                    $('#VideoAddForm').fadeIn();
                                    $('#CategoryAddForm2').fadeOut();

                                    alert(responsesText.flashMessage);

                                    $('#VideoCategoryId').append('<option selected="selected" value="'+responsesText.idtodelete+'">'+responsesText.nametoResponse+'</option>');
                                    //$('#bookshelf').prepend(responseText);
                                    
                                },2000);
                            }
                        }
                    };

                    $('#CategoryAddForm2').on('submit', function(e) {
                        e.preventDefault(); // avoids calling preview.php
                        // submit the form via ajax
                        $("#upload-video").fadeOut();
                        //$.fancybox.resize();
                        $(".statusload").fadeIn();
                        $(".loader").fadeIn();
                        $(this).ajaxSubmit(options3);                        

                        return false;
                    });

                    })();       
                    </script>
            
        </div>
     </div><!--end labs upload div-->

</div>
</div>




<!-- .main -->

<?php echo $javascript->link('bookblock.min.js'); ?>
<?php echo $javascript->link('classie.js'); ?>
<?php echo $javascript->link('bookshelf.js'); ?>

<?php echo $javascript->link('lesson.js'); ?>

</body>
</html>
