<div class="wizard" id="wizard">
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
				    <h2 class="fg-white">Table Soal </h2>
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
				                    <td class="text-left"><input id="boxid" type="checkbox" value="<?php echo $row['Question']['id']; ?>"  data-soalid="<?php echo $row['Question']['id']; ?>"></td>
				                </tr>
				            <?php endforeach;?>
				            </tbody>
				       </table>
				    <script>
					    $(document).ready(function() {
					    	pelajaranid = $(this).data("soalid");
					    	$('#tblsoal_tryout').DataTable();
						} );
				    </script>
				<?php endif;?> 
						<div class="grid">
					     <div class="row">
					         <div class="span9">
					            level 1 column
					             <div class="row">
					                 <div class="span6" id="datashow" name="" > </div>
					                 <div class="span3" >level 2 </div>
					             </div>
					         </div>
					     </div>
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
                show: true,
                title: "Cancel wizard",
                cls: "warning",
                group: "right"
            },
            help: {
                show: true,
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