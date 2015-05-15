<div class="wrapper">
	<img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon1-tryout.png"/>
	<div class="container">

		<section id="grid" class="grid clearfix">
					<div class="container_select_soal">
						<div class="titletryoutcontainer containeredittryout1">

							<div class="titlefirst createtryout">
								<img src="<?php echo $this->webroot;?>art/icon-create-tryout.png">
								<h1 class="tryouttitle">EDIT 
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
												<?php echo $pelajaranID['Pelajaran']['nama'];?>
								</h3>
							</div>
							
						</div>

						<div class="content_tryout_container">
							<div class="content_tryout_container_bottom">&nbsp;</div>
							<div class="row">
						        <div class="row">
						        	<label>Kode</label>
						 			<div class="input-control text">
										<input name="waktu" type="text" class="text-input" maxlength="32" value="<?php echo $quizz['Quizz']['kode']?>" id="kode">
									<label>Waktu</label>
										<input name="waktu" type="text" class="text-input" maxlength="32" value="<?php echo $quizz['Quizz']['time']?>" id="waktu">
									</div>
						        </div>

						        <div class="row">
						        <?php if(empty($soalid)):?>
			    					<center>Tidak ada quizz</center>
								<?php else:?>
						        <table id="tblsoal_tryout" class="table dataTable center" cellspacing="0" width="100%">
						           <thead>
						                <tr class="bg-lightBlue">
						                    <th class="text-left">No. </th>
						                    <th class="text-left">Kode Soal</th>
						                    <th class="text-left">Tipe Soal</th>
						                    <th class="text-left">Level Soal</th>
						                    <th class="text-left">Kelas</th>
						                    <th class="text-left">Pertanyaan</th>
						                    <th class="text-left">Kunci Jawaban</th>
						                </tr>
						            </thead>

						            <tbody>
										<?php
										$i=1;
										foreach ($soalid as $row):
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
											<td class="text-left">
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
											<td class="text-left"><?php echo $row['Question']['kelas'] ?></td>
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
										</tr>
										<?php endforeach;?>
									</tbody>
						       	</table>
						   		</div>
								<p><a href="<?php echo $this->webroot ?>quizzs/edit_table_soal/<?php echo $kelasID."/".$mapelID."/".$quizz['Quizz']['id']?>" ><button class="primary" id="edit">Edit table soal</button></a></p>


								<p class="text-right"><button class="danger" id="submit">Submit Change</button></p>



								<?php echo $form->create('Quizz',array('id'=>'form_edit_tryout','action'=>'edit_new','type'=>'file'));
						    	switch ($quizz['Quizz']['type']) {
						    		case '1':
						    			$jenissoal='Try Out';
						    			break;
						    		case '2':
						    			$jenissoal='Kuis';
						    			break;
						    		case '3':
						    			$jenissoal='Ujian';
						    			break;	
						    		
						    		default:
						    			$jenissoal='Undefined';
						    			break;
						    	}
						    	echo $form->input('Quizz.id',array('type'=>'hidden','value'=>$quizz['Quizz']['id']));
								echo $form->input('Quizz.time',array('type'=>'hidden','value'=>$quizz['Quizz']['time']));
						    	echo $form->input('Quizz.kode',array('type'=>'hidden','value'=>$quizz['Quizz']['kode']));
						        ?>


						        <?php echo $form->end();?>

								<script>
							    $.fn.dataTable.ext.order['dom-text-numeric'] = function  ( settings, col )
								{
								    return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
								        return $('input', td).val() * 1;
								    } );
								}
							    $(document).ready(function() {
							    $("#tambah").on('click', function(){
							    	$.ajax({
							    		type:"GET",
							    		dataType:"html",
							    		cache:false,
							    		url: "<?php echo $this->webroot ?>quizzs/datatable/<?php echo $kode_quizz ?>",
							    		success:function(data){
							    			showdialog(data);
							    		}
							    	})
							    });

								function showdialog(datashow){
								    $.Dialog({
								        overlay: true,
								        shadow: true,
								        flat: true,
								        icon: '<span class="icon-rocket"></span>',
								        width: 700,
								        title: 'Flat window',
								        content: '',
								        onShow: function(_dialog){
							    			var content=datashow;
							    			$.Dialog.content(content);
								        }
								    });
								}
							    var arraysoal = [];
							    window.json2=[];
							    window.kde='';
							    var columnorder=[];
								var MudahPG=0;var SedangPG=0;var SulitPG=0;
								var MudahES=0;var SedangES=0;var SulitES=0;
								window.dat=[];
								var total=0;
							    var table = $('#tblsoal_tryout').DataTable({
								        "paging":   false,
				    					"searching": false,
				    					"info":     false
							    });

							    var table2=$('#tblsoal_banksoal').DataTable({
				    					"searching": false,
				    					"info":     false,
				    					"scrollY": "300px",
								        "scrollCollapse": true,
								        "columnDefs": [ {
												            "targets": -1,
												            "data": null,
												            "defaultContent": "<button>Pilih</button>"
												        } ]
							    }); 


								function shuffle(arr) {
								    var shuffled = arr.slice(0), i = arr.length, temp, index;
								    while (i--) {
								        index = Math.floor(i * Math.random());
								        temp = shuffled[index];
								        shuffled[index] = shuffled[i];
								        shuffled[i] = temp;
								    }
								    return shuffled;
								}
								 $("#txt_kode_soal").keyup(function(){
								    kde=this.value;
								    $('#txt_prev').val(kde);
								  });
									
								});

								</script>
						   		<?php endif;?>

						    </div>		
							</div>
						</div>
					</div>
				</section>
			</div><!-- /container -->
	
	</div>
   
<script>

var options_submitformtryout = {
  //beforeSubmit:  showRequest,  // pre-submit callback 
  success:       showResponse_submitformtryout  // post-submit callback
};

$(document).ready(function() { 
	var order=[];

	$("#kode").keyup(function(){
		var k=this.value;
		$('#QuizzKode').val(k);
	});
	$("#waktu").keyup(function(){
		var t=this.value;
		$('#QuizzTime').val(t);
	});

	function insert_fieldformsetsoal(){
		//console.log(soal[0].QuizzsQuestion.id);

		/*for (var j = 0; j < soal.length; j++) {
			$('#form_edit_tryout').append('<input type="hidden" name="data[QuizzsQuestion]['+j+'][id]" value="'+soal[j].QuizzsQuestion.id+'" >');
		};*/
    	for (var i = 0; i < dat.length; i++) {
    		console.log(dat.length);
    		order[i]=$('#'+dat[i][0]).val();
    		if (i<=soal.length-1) {
    			$('#form_edit_tryout').append('<input type="hidden" name="data[QuizzsQuestion]['+i+'][id]" value="'+soal[i].QuizzsQuestion.id+'" >');
    		}else{
    			$('#form_edit_tryout').append('<input type="hidden" name="data[QuizzsQuestion]['+i+'][id]" value="0" >');
    		}
    		$('#form_edit_tryout').append('<input type="hidden" name="data[QuizzsQuestion]['+i+'][question_id]" value="'+dat[i][0]+'" >');
    		
    		$('#form_edit_tryout').append('<input type="hidden" name="data[QuizzsQuestion]['+i+'][order]" value="'+order[i]+'" >');
    		//console.log(order[i]);
    	};
    	
    }

    $( '#submit').on('click', function(){
    	//insert_fieldformsetsoal();
    	//setTimeout(function(){
    		$('#form_edit_tryout').ajaxSubmit(options_submitformtryout);	
    	//}, 5000);
    });
}); 

function showResponse_submitformtryout(responseText, statusText, xhr, $form)  { 
  setTimeout(function() {
    alert('success');
	window.location.href = "<?php echo $this->webroot?>quizzs/viewnew/<?php echo $quizz['Quizz']['type']?>/<?php echo $quizz['Quizz']['kelas']?>/<?php echo $quizz['Quizz']['pelajaran_id']?>";
  }, 2000);
}


</script>