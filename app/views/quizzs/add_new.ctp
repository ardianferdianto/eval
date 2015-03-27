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
								<?php echo $form->input('kode',array('label'=>false,'class'=>'text-input large-input'));?>
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
							<strong>Tingkat : </strong>
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
				                    <td class="text-left"><?php echo $row['Question']['level'] ?></td>
				                    <td class="text-left"><?php echo $row['Question']['kelas'] ?></td>
				                    <td class="text-left"><?php echo $row['Question']['question'];?></td>
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
				                    				echo 'Tidak Ada Kunci';
				                    				break;
				                    		}
				                    	?>
				                    </td>
				                    <td class="text-left"><input id="boxid" type="checkbox" value="<?php echo $row['Question']['id']; ?>"  data-soalid="<?php echo $row['Question']['id']; ?>" class="checksoalbox"></td>
				                </tr>
				            <?php endforeach;?>
				            </tbody>
				       </table>
				    <script>
				    $(document).ready(function() {

					    var table = $('#tblsoal_tryout').DataTable();

					    var arraysoal = [];

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
						
						$("#tblsoal_tryout tr td input.checksoalbox[type=checkbox]").click(function(){

							var soalid_selected = $(this).data('soalid');
							
					    	if($(this).attr('checked') == 'checked'){

					    		var itemtoRemove = soalid_selected;
							    arraysoal.splice($.inArray(itemtoRemove ,arraysoal),1);

						    	$(this).attr('checked',false);
							}else{
								$(this).attr('checked',true);
								arraysoal.push(soalid_selected);
							}
							console.log(arraysoal);
					  	});

						$('#tblsoal_tryout').on( 'draw.dt', function () {
						    record_checked();
						} );

						function record_checked(){
							$("#tblsoal_tryout tr td input.checksoalbox[type=checkbox]").click(function(){

								var soalid_selected = $(this).data('soalid');
								
						    	if($(this).attr('checked') == 'checked'){

						    		var itemtoRemove = soalid_selected;
								    arraysoal.splice($.inArray(itemtoRemove ,arraysoal),1);

							    	$(this).attr('checked',false);
								}else{
									$(this).attr('checked',true);
									arraysoal.push(soalid_selected);
								}
								console.log(arraysoal);
						  	});
						}
						


					} );

				    </script>
				<?php endif;?>

				<div class="tryout_info_selected_soal">
					<div class="infoseparated">
						<strong style="line-height: 31px;">SOAL TERPILIH</strong><br/>
						Pilihan Ganda Mudah : 4<br/>
						Pilihan Ganda Sedang : 4<br/>
						Pilihan Ganda Sulit : 5<br/>
					</div>
					<div class="infoseparated">
						<strong style="line-height: 31px;">&nbsp;</strong><br/>
						Pilihan Esai Mudah : -<br/>
						Pilihan Esai Sedang : -<br/>
						Pilihan Esai Sulit : -<br/>
					</div>
					<div class="infoseparated"><strong>TOTAL SOAL TERPILIH : </strong>
						<span class="totalsoalselected">20</span>
					</div>
					<div class="infoseparated"></div>
				</div>

        </div>
        <div class="step">Page 3</div>
    </div>
</div>
<script type="text/javascript">
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