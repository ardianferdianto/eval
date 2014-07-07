window.selectedTemplate = '';
window.selectedTemplateType = 0;
window.countpage = 0;
window.idLesson = 0;
window.countUpload = 0;
window.selectedColor = '';
window.selectedLesonID = 0;
window.baseUrl = '<?php echo $this->Html->url('/', true); ?>';



var element_textareatext = $('#template_container_text .inserttextarea');
var element_textareatextfile = $('#template_container_file .inserttextarea');

window.dropzoneElement = '<div id="uploadarea" class="uploadarea"><span>Tarik dan taruh file ke area ini<br/> File yang disupport Video, Image, atau Animasi</span><br/><br/><img src="images/drop.png"/></div><div class="posterpreview  dropzone-previews"></div>';


function showResponse(responseText, statusText, xhr, $form)  { 

    console.log(responseText);
    if(responseText.tipe == 'add'){
        var appendlessonelement = '<li class="imgSlideshow2" id="bookid_'+responseText.id+'"><div class="bk-book book-1 book-'+responseText.color+' bk-bookdefault viewlesson" data-urldata="'+responseText.id+'"><div class="bk-front"><div class="bk-cover"><h2><span>'+responseText.lessonAuthor+'</span><span>'+responseText.lessonName+'</span></h2></div><div class="bk-cover-back"></div></div><div class="bk-page"></div><div class="bk-back"><p>'+responseText.description+'</p></div><div class="bk-right"></div><div class="bk-left"></div><div class="bk-top"></div><div class="bk-bottom"></div></div><div class="bk-info"><button class="bk-bookback">Detail</button><button class="btn editlesson btn-icon-only icon-pencil2" data-lessonid="'+responseText.id+'"></button><button class="btn deletelesson btn-icon-only icon-trash" data-lessonid="'+responseText.id+'"></button></div></li>';
        $('#bk-list').append(appendlessonelement);

    }else if(responseText.tipe == 'edit'){

        var appendlessonelement = '<div class="bk-book book-1 bookid_'+responseText.id+' book-'+responseText.color+' bk-bookdefault viewlesson" data-urldata="'+responseText.id+'"><div class="bk-front"><div class="bk-cover"><h2><span>'+responseText.lessonAuthor+'</span><span>'+responseText.lessonName+'</span></h2></div><div class="bk-cover-back"></div></div><div class="bk-page"></div><div class="bk-back"><p>'+responseText.description+'</p></div><div class="bk-right"></div><div class="bk-left"></div><div class="bk-top"></div><div class="bk-bottom"></div></div><div class="bk-info"><button class="bk-bookback">Detail</button><button class="btn editlesson btn-icon-only icon-pencil2" data-lessonid="'+responseText.id+'"></button><button class="btn deletelesson btn-icon-only icon-trash" data-lessonid="'+responseText.id+'"></button></div>';
        
        $('#bk-list li#bookid_'+responseText.id+' div.bk-book .bk-cover h2').html('');
        $('#bk-list li#bookid_'+responseText.id+' div.bk-book .bk-cover h2').html('<span>'+responseText.lessonAuthor+'</span><span>'+responseText.lessonName+'</span>');

        $('#bk-list li#bookid_'+responseText.id+' div.bk-book').removeClass('book-blue');
        $('#bk-list li#bookid_'+responseText.id+' div.bk-book').removeClass('book-green');
        $('#bk-list li#bookid_'+responseText.id+' div.bk-book').removeClass('book-orange');

        $('#bk-list li#bookid_'+responseText.id+' div.bk-book').addClass('book-'+responseText.color);

        $('#bk-list li#bookid_'+responseText.id+' div.bk-book .bk-back').html('<p>'+responseText.description+'</p>');

        var data = responseText.halaman;

        if(data.length >0 ){

            var no = 0;
            $('p.no_halaman').hide();
            window.countpage = (data.length);

            for(var i in data)
            {
                no++;
                var id = data[i].Halaman.id;
                var name = data[i].Halaman.content;
                $('#pages_lesson_area').append('<div class="page-count-lesson" data-halamanid="'+id+'" rel="asdasdasd" id="halamanid_'+id+'">'+no+'</div>');
                
            }
        }

    }

    setTimeout(function() {
        $(".statusload").fadeOut();
        $(".loader").fadeOut();
        $('#step1_lesson').fadeOut('slow',function(){
            $('#step2_lesson').fadeIn('slow');
            $('#step_title').text('HALAMAN BAHAN AJAR');
            $('#desc_title').text('Silahkan memanage halaman pembelajaran anda');
        });

        $('#title_bahanajar').html('<strong>'+responseText.lessonName+'</strong>');
        $('#pelajaran_bahanajar').text(responseText.lessonPelajaran);
        $('#author_bahanajar').text(responseText.lessonAuthor);
        $('#kelas_bahanajar').text(responseText.lessonKelas);

        $('#previewlesson_btn').attr('data-urldata',responseText.id);

        window.idLesson = responseText.id;
        
        alert(responseText.flashMessage);
        console.log(responseText.flashMessage);
        
    },1000);
} 

var options2 = {
    dataType: 'json',
    success:       showResponse  // post-submit callback
};






$( document ).on( "click", "#submit_step1", function() {


    // bind form2 using ajaxSubmit
    
    var formtosubmit = $(this).parents('form:first');
    // submit the form via ajax
    $(formtosubmit).fadeOut();
    //$.fancybox.resize();
    $(".statusload").fadeIn();
    $(".loader").fadeIn();

    $(formtosubmit).ajaxSubmit(options2);
    
    return false;
  
}); // ready

$( document ).on( "click", "#add_leson_page", function() {

    $('#step2_lesson').fadeOut('slow',function(){
        $('#step3_lesson').fadeIn('slow');
        $('#step_title').text('TEMPLATE HALAMAN');
        $('#desc_title').text('Silahkan pilih template halaman yang akan anda gunakan');

    });

    
    
   return false;
  
}); // ready

$( document ).on( "click", "#step3_lesson ul li a", function() {

	window.selectedTemplate = $(this).data('templatetype');
    window.selectedTemplateType = $(this).data('template');
    $('#step3_lesson ul li a').removeClass('active');
    $(this).addClass('active');

    return false;
  
}); // ready


$( document ).on( "click", "#submit_step3", function() {

    $('.template_container').hide();
    $('#template_container_'+window.selectedTemplate).show();

    $('#lessonidtosave').val(window.idLesson);
    
    $('#lessontypetosave').val(window.selectedTemplateType);

    window.countpage++;
    $('#lessonordertosave').val(window.countpage);
    
    $('#step3_lesson').fadeOut('slow',function(){

        $('#step4_lesson').fadeIn('slow',function(){
            if(window.selectedTemplate == 'text'){
                
                $('#template_container_text .inserttextarea').append('<textarea name="data[Halaman][content]" id="lesson_textarea_content" ><h1>Ini Adalah Contoh Judul</h1><p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p><p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><h3><strong>Sub judul</strong></h3><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p></textarea>');
                CKEDITOR.replace('lesson_textarea_content');

            }else if(window.selectedTemplate == 'file'){
                
                //append
                $('#template_container_file .uploadcontainer').append(window.dropzoneElement);

                var count = 0;
                var myDropzone = new Dropzone("#uploadarea", { 
                      paramName: "data[Halaman][mediafiles]", // The name that will be used to transfer the file
                      url: "halamen/uploadfiles/",
                      
                      previewsContainer: ".posterpreview",
                      maxFiles: 1,
                      addRemoveLinks:true,
                      acceptedFiles: 'image/*,.flv,.mp4,.swf',
                      dictRemoveFile: 'Ganti File',
                      dictInvalidFileType: 'Anda tidak diizinkan mengupload file tipe ini',
                      

                  
                    init: function() {
                        this.on("addedfile", function(file,data) { 
                          count ++;
                          $('#uploadarea').fadeOut();
                          
                        });

                        this.on("sending", function(file, xhr, formData) {
                            formData.append("data[Halaman][lessonId]", window.idLesson); // Will send the filesize along with the file as POST data.
                        });

                        this.on("success", function(file,data) { 
                          console.log(data);
                          $('#lesson_filename_tosave').val(data.file_name);
                          $('#lesson_filetype_tosave').val(data.file_type);
                          $('#lesson_fileextension_tosave').val(data.file_extension);

                          if(data.file_type == 'video'){
                            //alert('files/lessons/'+data.idfolder+'/images/pages/'+data.file_name);
                            $('.dz-details').addClass('previewvideo');
                            $('.dz-details').append('<div id="containerPlayer">Loading the player ...</div>');
                            jwplayer("containerPlayer").setup({
                                'id': 'playerID',
                                'width': '300',
                                'height': '200',
                                'aboutlink': 'http://basedidea.com',
                                'autostart':true,
                                'primary': 'flash',
                                
                                //'skin': 'skins/five.xml',

                                
                                'file': 'files/lessons/'+data.idfolder+'/images/pages/'+data.file_name,
                                events: {
                                    onPause: function(event) {
                                        setCookie(event.position);
                                    }
                                }
                            });
                          }
                        });

                        this.on("error", function(file,data) {
                            $('#uploadarea').fadeIn(); 
                            $('#HalamanMediafiles').val('');
                            $('#lesson_filename_tosave').val('');
                            $('#lesson_filetype_tosave').val('');
                            $('#lesson_fileextension_tosave').val('');
                            
                        });

                        this.on("removedfile", function(file,data) { 
                          count --;
                          
                          if(count == 0){
                            $('#uploadarea').fadeIn();
                            $('#HalamanMediafiles').val('');
                            $('#lesson_filename_tosave').val('');
                            $('#lesson_filetype_tosave').val('');
                            $('#lesson_fileextension_tosave').val('');
                            
                          }
                          
                        });
                    }
                });                

                if(window.selectedTemplateType == 5){
                    $('.uploadcontainer').removeClass('default');
                    $('.uploadcontainer').addClass('uploadmediaonly');
                }else{
                    $('#template_container_file .inserttextarea').append('<textarea name="data[Halaman][content]" id="lesson_textarea_content_file" ><h1>Ini Adalah Contoh Judul</h1><p>Silahkan ganti judul dan materi ini sesuai dengan yang anda inginkan.</p><p>Silahkan gunakan alat alat formating content diatas, untuk mendapatkan format tulisan yang lain seperti <span class="marker">marker </span>&nbsp; &nbsp;<strong>Tebal </strong><em>miring&nbsp;</em>dan sebagainya.</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><h3><strong>Sub judul</strong></h3><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p><p>------------------------------------------------------------------------------------------------------------------------------------------------</p></textarea>');
                    //$('#template_container_file .inserttextarea').append('<textarea name="data[Halaman][content]" id="lesson_textarea_content_file" ></textarea>');
                    CKEDITOR.replace('lesson_textarea_content_file');
                    $('.uploadcontainer').addClass('default');
                    $('.uploadcontainer').removeClass('uploadmediaonly');
                }
                
                

                
            }

            
        });
        $('#step_title').text('CONTENT EDITOR');
        $('#desc_title').text('Silahkan lakukan pengisian content');

        console.log();
        
        //_init_ajax_forms();
        $('#step3_lesson ul li a').removeClass('active');
    


    });
  
}); // ready


function CKupdate(){
    for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();
}

function showResponsePages(responseText, statusText, xhr, $form)  { 
        
    setTimeout(function() {
        $(".statusload").fadeOut();
        $(".loader").fadeOut();

        $('.template_container').hide();


        $('#uploadarea').show();
        //$('.posterpreview').hide();
        
        window.countUpload = 0;


        $('#template_container_'+window.selectedTemplate).show();
        $('#template_container_'+window.selectedTemplate+' .inserttextarea').html('');

        $('#template_container_file .uploadcontainer').html('');

        $('#HalamanMediafiles').val('');
        $('#lesson_filename_tosave').val('');
        $('#lesson_filetype_tosave').val('');
        $('#lesson_fileextension_tosave').val('');


        $('.uploadcontainer').addClass('default');
        $('.uploadcontainer').removeClass('uploadmediaonly');

        $('.dz-details').removeClass('previewvideo');
        $('.dz-details #containerPlayer').remove();
        


        
        $('#step4_lesson').fadeOut('slow',function(){
            $('#step2_lesson').fadeIn('slow');
            $('#step_title').text('HALAMAN BAHAN AJAR');
            $('#desc_title').text('Silahkan memanage halaman pembelajaran anda');
            $('.no_halaman').hide();
            $('#pages_lesson_area').append('<div class="page-count-lesson">'+window.countpage+'</div>');
            $("#HalamanAddForm").show();
        });

        
        
        alert(responseText.flashMessage);
        console.log(responseText);
        
    },1000);
} 

var optionsPages = {
    dataType: 'json',
    success:       showResponsePages  // post-submit callback
};

$( document ).on( "click", "#submit_step4", function() {

    $(".statusload").fadeIn();
    $(".loader").fadeIn();

    $("#HalamanAddForm").fadeOut();

    CKupdate();

    $('#HalamanAddForm').ajaxSubmit(optionsPages);


    return false;
  
}); // ready



$( document ).ready(function() {
    
    $( document ).on( "click", ".colorlistselect", function() {
    
        $('.colorlistselect').removeClass('active');
        $(this).addClass('active');

        var color = $(this).data('color');
        $('#colortosave').val(color);
    })

    $( document ).on( "click", "#finish_lesson", function() {
    
        $.fancybox.close();
        resetuploadlesson();

    }); // ready

    function resetuploadlesson(){
        $('#step1_lesson').show();
        $('#step2_lesson').hide();
        $('#step3_lesson').hide();
        $('#step4_lesson').hide();
        $('#LessonAddForm').show();

        $('#LessonTitle').val('');
        $('#LessonAuthor').val('');
        $('#LessonDescription').val('');
        
        $('select option:contains("")').prop('selected',true);
        
        $('.no_halaman').show();
        $('.page-count-lesson').remove();

        
        window.countpage = 0;

        $('#step_title').text('JUDUL BAHAN AJAR');
        $('#desc_title').text('Selamat datang di Lesson Creator, silahkan masukan judul dan deskripsi singkat tentang bahan ajar anda terlebih dahulu');
    }

    
    $( document ).on( "click", ".popupuploadlesson", function(e) {
        e.preventDefault(); // avoids calling preview.php

        

        $.fancybox({
            closeBtn    : false, // hide close button
            closeClick  : false, // prevents closing when clicking INSIDE fancybox
           helpers :{
            overlay:{closeClick:false}
            },
            href:'#uploadlesson',
            openEffect  : 'elastic',
            closeEffect : 'elastic',
            width:'90%',
            height:'95%',
            autoSize : false,
            beforeShow : function(){
                addCloseButton();
                
                $.ajax({
                  type: "GET",
                  dataType: "html",
                  cache: false,
                  url: 'lessons/add/', // preview.php
                  //data: $("#postp").serializeArray(), // all form fields
                  success: function (data) {
                    $('#step1_lesson').append(data);
                    
                  } // success
                }); // ajax
            },


            padding:0,
            margin:0
            
        }); //fancybox
        return false;
    });
    

    $( document ).on( "click", ".editlesson", function(e) {
        e.preventDefault(); // avoids calling preview.php

        var selectedLesonID = $(this).data('lessonid');

        $.fancybox({
            closeBtn    : false, // hide close button
            closeClick  : false, // prevents closing when clicking INSIDE fancybox
            helpers :{
            overlay:{closeClick:false}
            },
            href:'#uploadlesson',
            openEffect  : 'elastic',
            closeEffect : 'elastic',
            width:'90%',
            height:'95%',
            autoSize : false,
            beforeShow : function(){
                
                addCloseButton();
                
                $.ajax({
                  type: "GET",
                  dataType: "html",
                  cache: false,
                  url: 'lessons/edit/'+selectedLesonID, // preview.php
                  //data: $("#postp").serializeArray(), // all form fields
                  success: function (data) {
                    $('#step1_lesson').append(data);
                    
                  } // success
                }); // ajax
            },
            padding:0,
            margin:0
            
        }); //fancybox
        return false;
    });

    function addCloseButton(){
        $('#step1_lesson').html('');
        var appendClose = '<a title="Close" class="fancybox-close" href="javascript:;"></a>';
        $('.fancybox-skin').append(appendClose);

        $( ".fancybox-close" ).on( "click",function(e) {
            e.preventDefault(); // avoids calling preview.php
            var x;
            if (confirm("Apakah anda yakin akan menutup jendela ini? Jika ya data tidak akan tersimpan") == true) {
                $.fancybox.close();
                resetuploadlesson();
                x = "You pressed OK!";
            } else {
                x = "You pressed Cancel!";
            }
            
            
            
        });
        
    }




    $('.deletelesson').on( "click", function(e) {
        e.preventDefault(); // avoids calling preview.php

        var dataurl = $(this).data('urldata');

        if(confirm('Apakah anda yakin akan menghapus item ini ? Semua data di lessson ini akan di hapus juga')){
            $.fancybox.showLoading();

            var clickedItem = $(this);

            $.ajax({
              type: "POST",
              dataType: "json",
              cache: false,
              url: dataurl, // preview.php
              //data: $("#postp").serializeArray(), // all form fields
              success: function (data) {                
                // on success, post (preview) returned data in fancybox
                if(data.status == "true"){
                    
                    setTimeout(function() {
                        clickedItem.parents('li.imgSlideshow2').fadeOut('slow',function(){
                            clickedItem.parents('li.imgSlideshow2').remove();
                            $.fancybox.hideLoading();
                            alert(data.flashMessage);
                        })

                    },1000);
                    
                }else{
                    alert(data.flashMessage);
                }
              } // success
            }); // ajax

        }else{
            //alert('Batal menghapus')
        }
    }); // on


    


    $( document ).on( "click", "#backtoeditor", function() {
        
        $.fancybox({

            closeBtn    : false, // hide close button
            closeClick  : false, // prevents closing when clicking INSIDE fancybox
            helpers :{
                overlay:{closeClick:false}
            },
            type:'inline',
            href:'#uploadlesson',
            openEffect  : 'elastic',
            closeEffect : 'elastic',
            width:'90%',
            height:'95%',
            autoSize : false,
            beforeShow: function(){
                addCloseButton();
            },
            beforeClose: function() {
                
            },
            padding:0,
            margin:0,
            openEffect:'elastic',
            closeEffect:'elastic',
        }); //fancybox
        return false;
    });


    
    

}); // ready







(function() {
                        
    


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

})();
