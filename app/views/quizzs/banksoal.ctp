<?php 
    $str= Router::url(null, false);
    $strafter= trim($str,"/evaluasi_sd/quizzs/banksoal");
?>
<div class="wrapper">
    <img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon2-banksoal.png"/>
    <div class="container">
        <!-- Top Navigation -->
        <section id="grid" class="grid clearfix container_bank_soal">
            <div class="containerbanksoal_top">&nbsp;</div>
            <div class="containerbanksoal_bottom">&nbsp;</div>
            
            <a href="<?php echo $this->webroot?>questions/add_newsoal/<?php echo $strafter?>" class="addnew_btn">&nbsp;</a>

            <a href="#" id="importfromexcel" class="import_btn">&nbsp;</a>
            



            <div id="content_table" class="container_bank_soal_content">
            
            
            <?php if(empty($data_soal)):?>
                <center>Tidak ada Soal</center>
            <?php else:?>
                <div class="infoseparated" style="padding:0 20px;">
                    <span>FILTER SOAL</span><br/>
                    <strong>Kelas : </strong>
                    <div id="placeforkelasfilter" class="input-control select">
                        <select>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="infoseparated" style="padding:0 20px;">
                    <strong>&nbsp;<br/>
                    <strong>Tipe : </strong>
                    <div id="placefortipefilter" class="input-control select">
                        <select>
                            <option>Semua</option>
                            <option>Pilihan Ganda</option>
                            <option>Essay</option>
                        </select>
                    </div>
                </div>
                <div class="infoseparated" style="padding:0 20px;">
                    <strong>&nbsp;<br/>
                    <strong>Level : </strong>
                    <div id="placeforlevelfilter" class="input-control select">
                        <select>
                            <option>Semua</option>
                            <option>Mudah</option>
                            <option>Sedang</option>
                            <option>Sulit</option>
                        </select>
                    </div>
                </div>
                <h2 class="fg-white titletablesoal titlebanksoal">BANK SOAL </h2>
                   <table class="table striped hovered dataTable" id="dataTables-1">
                        <thead>
                            <tr>
                                <th class="text-left">Details </th>
                                <th class="text-left">No. </th>
                                <th class="text-left">Kode Soal </th>
                                <th class="text-left">Tipe Soal</th>
                                <th class="text-left">Level kesulitan</th>
                                <th class="text-left">Kelas</th>
                                <th class="text-left">Pertanyaan</th>
                                
                                <th class="text-left">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                           <?php $i=1;
                            foreach ($data_soal as $row):
                            $tipesoal_string = $row['Question']['tipe'];
                            if($tipesoal_string == 1){
                                $tipesoal_string = 'PG';
                            }elseif ($tipesoal_string == 2){
                                $tipesoal_string = 'Essay';
                            }else{
                                $tipesoal_string = 'Undefined';
                            }


                            $levelsoal_string = $row['Question']['level'];
                            if($levelsoal_string == 1){
                                $levelsoal_string = 'Mudah';
                            }elseif ($levelsoal_string == 2){
                                $levelsoal_string = 'Sedang';
                            }elseif ($levelsoal_string == 3){
                                $levelsoal_string = 'Sulit';
                            }else{
                                $levelsoal_string = 'Undefined';
                            }
                           ?>
                            <tr>
                                <th class="text-center"><button class="details" data-kode="<?php echo $row['Question']['id']?>" data-answer2="<?php echo $row['Question']['answer2']?>" data-answertrue="<?php echo $row['Question']['answer_true']?>" data-opsia="<?php echo $row['Question']['answer_a']?>" data-opsib="<?php echo $row['Question']['answer_b']?>" data-opsic="<?php echo $row['Question']['answer_c']?>" data-opsid="<?php echo $row['Question']['answer_d']?>" data-opsie="<?php echo $row['Question']['answer_e']?>" data-image="<?php echo $row['Question']['images']?>" data-video="<?php echo $row['Question']['video']?>"> + </button></th>
                                <td class="text-left"><?php echo $i++;?></td>
                                <td class="text-left"><?php echo $row['Question']['id'] ?></td>
                                <td class="text-left"><?php echo $tipesoal_string ?></td>
                                <td class="text-left"><?php echo $levelsoal_string ?></td>
                                <td class="text-left"><?php echo $row['Question']['kelas'] ?></td>
                                <td class="text-left"><?php echo $row['Question']['question'];?></td>
                                
                                <td class="text-left actionrow">
                                    <a href="<?php echo $this->webroot;?>questions/edit/<?php echo $row['Question']['id'] ?>">Edit
                                    </a><br/>
                                    <a href="<?php echo $this->webroot;?>questions/delete/<?php echo $kelasID.'/'.$mapelID.'/'.$row['Question']['id']; ?>">Hapus
                                    </a>
                                    
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                   </table>

                <script>
                /* Formatting function for row details - modify as you need */
                function format ( d ) {
                    // `d` is the original data object for the row
                    var jawab="";
                    switch(d.jawaban_benar){
                        
                            case 0:
                                jawab=d.jawaban_essay;
                                break;
                            case 1:
                                jawab="A";
                                break;
                            case 2:
                                jawab="B";
                                break;
                            case 3:
                                jawab="C";
                                break;
                            case 4:
                                jawab="D";
                                break;
                            case 5:
                                jawab="E";
                                break;
                            default:jawab="Undefined";

                    }

                    //player_generator(d.video);
                    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                        
                        '<tr>'+
                            '<td>Pilihan A</td>'+
                            '<td>'+d.opsi_a+'</td>'+
                        '</tr>'+

                        '<tr>'+
                            '<td>Pilihan B</td>'+
                            '<td>'+d.opsi_b+'</td>'+
                        '</tr>'+

                        '<tr>'+
                            '<td>Pilihan C</td>'+
                            '<td>'+d.opsi_c+'</td>'+
                        '</tr>'+

                        '<tr>'+
                            '<td>Pilihan D</td>'+
                            '<td>'+d.opsi_d+'</td>'+
                        '</tr>'+

                        '<tr>'+
                            '<td>Jawaban Benar</td>'+
                            '<td>'+jawab
                            +'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td>Image</td>'+
                            '<td>'+'<img id="my_image" height="360px" width="240px" src="<?php echo $this->webroot; ?>'+d.image+'"/>'+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td>Video</td>'+
                            '<td id="video_repot'+d.dat_id+'"></td>'+
                        '</tr>'+
                    '</table>';
                }

                $(document).ready(function() {
                   window.table = $('#dataTables-1').DataTable({
                            info:false
                        }
                    );
                    $("#placeforkelasfilter").each( function ( i ) {

                            if(i == 0){ //Create just one SelectBox
                                var select = $('<select class='+i+'><option value="">Semua</option></select>')
                                    .appendTo( $(this).empty() )
                                    .on( 'change', function () {

                                        var val = $(this).val();

                                        table.column( 5 ) //Only the first column
                                            .search( val ? '^'+$(this).val()+'$' : val, true, false )
                                            .draw();
                                    } );

                                table.column( 5 ).data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' );
                                } );

                            } 
                        });


                        $("#placefortipefilter").each( function ( i ) {

                            if(i == 0){ //Create just one SelectBox
                                var select = $('<select class='+i+'><option value="">Semua</option></select>')
                                    .appendTo( $(this).empty() )
                                    .on( 'change', function () {

                                        var val = $(this).val();

                                        table.column( 3 ) //Only the first column
                                            .search( val ? '^'+$(this).val()+'$' : val, true, false )
                                            .draw();
                                    } );

                                table.column( 3 ).data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' );
                                } );

                            } 
                        });


                        $("#placeforlevelfilter").each( function ( i ) {

                            if(i == 0){ //Create just one SelectBox
                                var select = $('<select class='+i+'><option value="">Semua</option></select>')
                                    .appendTo( $(this).empty() )
                                    .on( 'change', function () {

                                        var val = $(this).val();

                                        table.column( 4 ) //Only the first column
                                            .search( val ? '^'+$(this).val()+'$' : val, true, false )
                                            .draw();
                                    } );

                                table.column( 4 ).data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' );
                                } );

                            } 
                        });
                        
                        var kd=$('button.details').data('kode');
                                    //kd.data('kode');
                                    $("#video_repot"+kd).empty();
                                    det('button.details');
                                    console.log('draw1');

                        $('#dataTables-1').on( 'draw.dt', function () {
                                    var buttondetails = $('#dataTables-1').find('button.details');
                                    //if(buttondetails.length!=0){
                                    var kd=$('button.details').data('kode');
                                    $("#video_repot"+kd).empty();
                                    det('button.details');
                                    console.log('draw1');
                                    //}
                        });
/*                        $('#dataTables-1').on( 'search.dt', function () {
                                //$('#dataTables-1').on( 'draw.dt', function () {
                                    var kd=$('button.details').data('kode');
                                    $("#video_repot"+kd).empty();
                                    det('button.details');
                                    console.log('draw1');
                                //});
                                console.log('search');

                        } );*/
                        /*$('#dataTables-1').on( 'length.dt', function () {
                                $('#dataTables-1').on( 'draw.dt', function () {
                                    var kd=$('button.details').data('kode');
                                    $("#video_repot"+kd).empty();
                                    det('button.details');
                                    console.log('draw2');
                                });
                                console.log('length');
                        });
                        $('#dataTables-1').on( 'page.dt', function () {
                            $('#dataTables-1').on( 'draw.dt', function () {
                                var kd=$('button.details').data('kode');
                                $("#video_repot"+kd).empty();
                                det('button.details');
                                console.log('draw3');
                            });
                            console.log('page');
                        });*/
                } );
                function player_generator(data,id){
                    if (data=='') {
                        $("#containerPlayer_"+id).text("no video found");
                    } else{
                        jwplayer("containerPlayer_"+id).setup({
                        'id': "playerID_"+id,
                        'width': '360',
                        'height': '240',
                        'aboutlink': '#',
                        'autostart':false,
                        'primary': 'flash',
                        
                        'file': "<?php echo $this->webroot;?>"+data,
                        events: {
                            onPause: function(event) {
                                setCookie(event.position);
                            }
                        }
                    });
                    };
                    
                }
                function det(element){
                     $(element).on('click', function () {
                        var tr = $(this).closest('tr');
                        var row = table.row( tr );
                        $buttonplus = $(this);
                        var data={
                                    dat_id:$(this).data('kode'),
                                    opsi_a:$(this).data('opsia'),
                                    opsi_b:$(this).data('opsib'),
                                    opsi_c:$(this).data('opsic'),
                                    opsi_d:$(this).data('opsid'),
                                    jawaban_benar:$(this).data('answertrue'),
                                    jawaban_essay:$(this).data('answer2'),
                                    image:$(this).data('image'),
                                    video:$(this).data('video') 

                        };

                        $("#video_repot").empty();
                        console.log(data);
                        if ( row.child.isShown() ) {
                            // This row is already open - close it
                            row.child.hide();
                            tr.removeClass('shown');
                            $buttonplus.html('+');

                        }
                        else {
                            // Open this row
                            row.child( format(data)).show();
                            $("#video_repot"+data.dat_id).empty().append('<div id="containerPlayer_'+data.dat_id+'"></div>')
                            player_generator(data.video,data.dat_id);
                            tr.addClass('shown');
                            $buttonplus.html('-');
                        }
                    } );
                }
                </script>
            <?php endif;?> 
            </div><!-- End content box -->
        </section>
    </div><!-- /container -->
    
</div>


</div><!-- End content box -->
<script>
$("#importfromexcel").on('click', function(){
    $.Dialog({
        shadow: true,
        overlay: false,
        icon: '',
        title: 'Upload Excel File',
        width: 500,
        padding: 10,
        content: '',
        draggable: true,
        overlayClickClose:false,
        onShow: function(_dialog){
            
            var content='<form enctype="multipart/form-data" method="post" action="<?php echo $this->webroot?>questions/import_question/<?php echo $kelasID?>/<?php echo $mapelID?>">'+
                '<h2>Form Upload Pertanyaan</h2>'+
                '<div class="input file"><label>File Excel(.xls):</label><input type="file" name="data[Question][csv]"></div>'+
                '<div class="input file"><label>Image on zip(.zip):</label><input type="file" name="data[Question][image]"></div>'+
                '<input type="submit" value="Submit"></form>';
            $.Dialog.content(content);
            $.Metro.initInputs();
        },
        sysBtnCloseClick: function(e){
            //alert('Close button click');
        },
        sysBtnMinClick: function(e){
            alert('Min button click');
        },
        sysBtnMaxClick: function(e){
            alert('Max button click');
        }
    });
});

</script>

