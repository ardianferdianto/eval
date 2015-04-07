<div class="titletryoutcontainer containeredittryout1">
	<div class="containeredittryout">
		<div class="titlefirst">
			<h1 class="tryouttitle">BUAT 
			<?php
				switch ($tipesoalID) {
				 	case '1':
				 		echo 'TRYOUT';
				 		break;
				 	case '2':
				 		echo 'KUIS';
				 		break;
				 	case '3':
				 		echo 'UJIAN';
				 		break;
				 	
				 	default:
				 		echo 'UNDIFINED';
				 		break;
				 } 
			?>
			</h1>
		</div>
		<div class="titlesecond">
			<h3 class="tryouttitle3">KELAS : <?php echo $kelasID; ?></h3>
			<h3 class="tryouttitle3">MATA PELAJARAN : 
							<?php
				echo $pelajaranID['Pelajaran']['nama'];
			?>
			</h3>

		</div>
	</div>
</div>
<div class="wizard wizardtryout" id="wizard">
    <div class="steps bg-white">
        <div class="step">
        		<div class="grid">
				    <div class="row">
				        <div class="span6 offset2">
				        	<legend>First Step</legend>
				        	<label>Kode</label>
				 			<div class="input-control text">
								<?php echo $form->input('kode',array('label'=>false,'class'=>'text-input large-input','id'=>'txt_kode_soal'));?>
							</div>
				        </div>
				    </div>
				</div>
        </div>
        <div class="step">
        		<?php if(empty($data_soal)):?>
				    <center>Tidak ada quizz</center>
				<?php else:?>
				    

				    <div class="tryout_info_selected_soal" style="margin-top:10px;margin-bottom:20px;">
						<div class="infoseparated">
							<h2 class="fg-white titletablesoal">Table Soal </h2>
						</div>
						<div class="infoseparated" style="padding:0 20px;">
							<span>FILTER SOAL</span><br/>
							<strong>Kelas : </strong>
							<div id="placeforkelasfilter" class="input-control select">
							    <select>
							        <option>Kelas 1</option>
							        <option>Kelas 2</option>
							        <option>Kelas 3</option>
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
					</div>

				       <table id="tblsoal_tryout" class="table dataTable" cellspacing="0" width="100%">
				            <thead>
				                <tr class="bg-lightBlue">
				                    <th class="text-left">No. </th>
				                    <th class="text-left">Kode Soal</th>
				                    <th class="text-left">Tipe Soal</th>
				                    <th class="text-left">Level Soal</th>
				                    <th class="text-left">Kelas</th>
				                    <th class="text-left">Pertanyaan</th>
				                    <th class="text-left">Kunci Jawaban</th>
				                    <th class="text-left">Aksi</th>
				                </tr>
				            </thead>

				            <tbody>
				               <?php
				                $i=1;foreach ($data_soal as $row):
				                #var_dump($row['Question'][0]['question']);exit;
				                #var_dump($row);echo "LAPIS 1 <br>";
				                


				               ?>
				                 <tr>
				                    <td class="text-left"><?php echo $i++;?></td>
				                    <td class="text-left"><?php echo $row['Question']['id'] ?></td>
				                    <td class="text-left">
				                    	<?php 
				                    		if ($row['Question']['tipe'] ==1) {
				                    			echo "PG";
				                    		} else {
				                    			echo "Essay";
				                    		}
				                    	?>

				                    </td>
				                    <td class="text-left" data-level="<?php echo $row['Question']['level'] ?>">
				                    	<?php 
				                    		
				                    		switch ($row['Question']['level']) {
				                    			case '1':
				                    				echo 'Mudah';
				                    				break;
				                    			case '2':
				                    				echo 'Sedang';
				                    				break;
				                    			case '3':
				                    				echo 'Sulit';
				                    				break;
				                    			default:
				                    				echo 'Undefined';
				                    				break;
				                    		}
				                    	?>
				                    </td>
				                    <td class="text-left" data-kelas="<?php echo $row['Question']['kelas'] ?>"><?php echo $row['Question']['kelas'] ?></td>
				                    <td class="text-left" ><?php echo $row['Question']['question'];?>
				                    </td>
				                    <td class="text-left">
				                    	<?php
				                    		switch ($row['Question']['answer_true']) {
				                    			case '1':
				                    				echo 'A';
				                    				break;
				                    			case '2':
				                    				echo 'B';
				                    				break;
				                    			case '3':
				                    				echo 'C';
				                    				break;
				                    			case '4':
				                    				echo 'D';
				                    				break;
				                    			default:
				                    				echo $row['Question']['answer2'];
				                    				break;
				                    		}
				                    	?>
				                    </td>
				                    <td class="text-left"><input id="boxid" type="checkbox" value="<?php echo $row['Question']['id']; ?>"  data-soalid="<?php echo $row['Question']['id'];?>" data-levelid="<?php echo $row['Question']['level'];?>" data-tipe="<?php echo $row['Question']['tipe'];?>" data-kelas="<?php echo $row['Question']['kelas'] ?>" data-question="<?php echo $row['Question']['question'] ?>" class="checksoalbox"></td>
				                </tr>
				            <?php endforeach;?>
				            </tbody>
				       </table>
			    <script>
			    $(document).ready(function() {
				    var arraysoal = [];
				    var dataSet =[["-","-","-","-","-","-"]];
				    var json2=[];
				    var json=[];
					var MudahPG=0;var SedangPG=0;var SulitPG=0;
					var MudahES=0;var SedangES=0;var SulitES=0;
					var total=0;
				    var table = $('#tblsoal_tryout').DataTable(record_checked());
				    var table2=$('#example').dataTable( {
					        "data": dataSet,
					        "paging":   false,
        					"ordering": false,
        					"searching": false,
        					"info":     false,
					        "columns": [
					            { "title": "Kode Soal", "class": "text-left" },
					            { "title": "Tipe Soal", "class": "text-left" },
					            { "title": "Level", "class": "text-left" },
					            { "title": "Kelas", "class": "text-left" },
					            { "title": "Soal", "class": "text-left" }
					        ]
					    } ); 



				    $("#placeforkelasfilter").each( function ( i ) {

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


					$("#placefortipefilter").each( function ( i ) {

					    if(i == 0){ //Create just one SelectBox
				            var select = $('<select class='+i+'><option value=""></option></select>')
				                .appendTo( $(this).empty() )
				                .on( 'change', function () {

				                    var val = $(this).val();

				                    table.column( 2 ) //Only the first column
				                        .search( val ? '^'+$(this).val()+'$' : val, true, false )
				                        .draw();
				                } );

				            table.column( 2 ).data().unique().sort().each( function ( d, j ) {
				                select.append( '<option value="'+d+'">'+d+'</option>' );
				            } );

					    } 
					});


					$("#placeforlevelfilter").each( function ( i ) {

					    if(i == 0){ //Create just one SelectBox
				            var select = $('<select class='+i+'><option value=""></option></select>')
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
					function record_checked(){
						$("#tblsoal_tryout tr td input.checksoalbox[type=checkbox]").click(function(){
							var soalid_selected = $(this).data('soalid');
							var levelid_selected= $(this).data('levelid');
							var tipe=$(this).data('tipe');
							var kelas=$(this).data('kelas');
							var questions=$(this).data('question');
					    	if($(this).attr('checked')!='checked'){
								arraysoal.push(soalid_selected);
								//get the value of selected row
								    /*json = $("tr:has(:checked)").map(function () {
								        return $(this).children().slice(1,7).map(function () {
								            return $(this).text().trim()
								        }).get()
								    }).get();*/
									json=[soalid_selected,levelid_selected,tipe,kelas,questions];
									json2.push(json);


								switch (levelid_selected) {
									case 1:
										if (tipe==1) {
											MudahPG+=1;
										} else{
											MudahES+=1;
										};
										break;
									case 2:
										if (tipe==1) {
											SedangPG+=1;
										} else{
											SedangES+=1;
										};
										break;
									case 3:
										if (tipe==1) {
											SulitPG+=1;
										} else{
											SulitES+=1;
										};
										break
								}
								$(this).attr('checked',true);
							}else{
								var itemtoRemove = soalid_selected;
							    arraysoal.splice($.inArray(itemtoRemove ,arraysoal),1);
							    //get the value of selected row
								/*    json = $("tr:has(:checked)").map(function () {
								        return $(this).children().slice(1,7).map(function () {
								            return $(this).text().trim()
								        }).get()
								    }).get();*/
									json=[soalid_selected,levelid_selected,tipe,kelas,questions];
								    json2.splice($.inArray(json,json2),1);



								switch (levelid_selected) {
									case 1:
										if (tipe==1) {
											MudahPG-=1;
										} else{
											MudahES-=1;
										};
										break;
									case 2:
										if (tipe==1) {
											SedangPG-=1;
										} else{
											SedangES-=1;
										};
										break;
									case 3:
										if (tipe==1) {
											SulitPG-=1;
										} else{
											SulitES-=1;
										};
										break
								}
						    	$(this).attr('checked',false);
							}
							console.log(arraysoal);
						/*	console.log(MudahPG);console.log(SedangPG);console.log(SulitPG);
							console.log(MudahES);console.log(SedangES);console.log(SulitES);
*/
							$("#pg_mudah").text(MudahPG);$("#pg_sedang").text(SedangPG);$("#pg_sulit").text(SulitPG);
							$("#es_mudah").text(MudahES);$("#es_sedang").text(SedangES);$("#es_sulit").text(SulitES);
							total=MudahPG+MudahES+SedangPG+SedangES+SulitPG+SulitES;
							$("#totalsoal").text(total);
							console.log(json2);
							console.log(json);
							var tabs=$('#example').dataTable();
							tabs.fnClearTable();
							tabs.fnAddData(json2);
							//json2=JSON.stringify(json,0,"\t");
							//return json;
					  	});

					}

					 $("#txt_kode_soal").keyup(function(){
					    var kde=this.value;
					    $('#txt_prev').val(kde);
					  });
					
				});

			    </script>
				<?php endif;?>

				<div class="tryout_info_selected_soal">
					<div class="infoseparated">
						<strong style="line-height: 31px;">SOAL TERPILIH</strong><br/>
						Pilihan Ganda Mudah : <span id="pg_mudah">0</span><br/>
						Pilihan Ganda Sedang : <span id="pg_sedang">0</span><br/>
						Pilihan Ganda Sulit : <span id="pg_sulit">0</span><br/>
					</div>
					<div class="infoseparated">
						<strong style="line-height: 31px;">&nbsp;</strong><br/>
						Pilihan Esai Mudah : <span id="es_mudah">0</span><br/>
						Pilihan Esai Sedang : <span id="es_sedang">0</span><br/>
						Pilihan Esai Sulit : <span id="es_sulit">0</span><br/>
					</div>
					<div class="infoseparated"><strong>TOTAL SOAL TERPILIH : </strong>
						<span class="totalsoalselected" id="totalsoal">0</span>
					</div>
					<div class="infoseparated"></div>
				</div>

        </div>
        <div class="step" id="step3">
        	<p><label>Kode</label>
        		<div class="input-control text">
        		<input type="text" class="text-input large-input" id="txt_prev" disabled/></p>
        	</div>
        	<table class="table dataTable" cellspacing="0" width="100%" id="example"></table>

        	</div>
        </div>
    </div>
</div>
<script>
	$(function(){
    $('#wizard').wizard({
        buttons: {
            cancel: {
                show: false,
                title: "Cancel wizard",
                cls: "warning",
                group: "right"
            },
            help: {
                show: false,
                title: "Help Me!",
                cls: "button primary",
                group: "right"
            },
            prior: {
                show: true,
                title: "Previous page",
                group: "left",
                cls: "info"
            },
            next: {
                show: true,
                title: "Next page",
                group: "left",
                cls: "info"
            },
            finish: {
                show: true,
                title: "Finish step and Go!",
                group: "left",
                cls: "danger"
            }
        }
    });
});

$(document).ready(function() {
	pelajaranid = $(this).data("soalid");

	$('#boxid').click(function() {
	  if ($(this).is(':checked')) {
	    $(this).siblings('label').html('checked');
	  } else {
	    $(this).siblings('label').html(' not checked');
	  }
	});
} );
</script>