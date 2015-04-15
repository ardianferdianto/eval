<table id="tblsoal" class="table dataTable center" cellspacing="0" width="100%">
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
                $i=1;
                foreach ($soal_kuis as $row):
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
                    <td><a href="<?php echo $this->webroot?>quizzs/hapus_single_soal/<?php echo $row['Quizz']['id']?>/<?php echo $row['QuizzsQuestion']['id']?>"><button>Hapus</button></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
			<tfoot>
            	<tr>
    				<th class="text-left"></th>
                    <th class="text-left"></th>
                    <th class="text-left"></th>
                    <th class="text-left"></th>
                    <th class="text-left"></th>
                    <th class="text-left"></th>
                    <th class="text-left"></th>
       				<th class="text-left"><button class="primary" id="tambah">Tambah</button></th>
       			</tr>
            </tfoot>
</table>
<a href="<?php echo $this->webroot?>quizzs/edit_new/<?php echo $id_kuis?>"><button class="primary" id="back">< Back to Edit kuis</button></a>
<script>
$(document).ready(function() {
	var table = $('#tblsoal').DataTable({
				        "paging":   false,
    					"searching": false,
    					"info":     false
	});
	$("#tambah").on('click', function(){
		    	$.ajax({
		    		type:"GET",
		    		dataType:"html",
		    		cache:false,
		    		url: "http://localhost/evaluasi_sd/quizzs/datatable/<?php echo $id_kuis?>",
		    		success:function(data){
		    			showdialog(data);
		    		}
		    	})
		    });


//			$("#tambah").on('click', function(){
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
//			});

});
</script>