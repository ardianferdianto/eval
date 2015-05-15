<div id="customerDialog">
   <table id="tblsoal_banksoal" class="display" cellspacing="0" width="100%">
        <thead width="100%">
            <tr>
                <th>Kode Soal</th>
                <th>Level Soal</th>
                <th>Kelas</th>
                <th>Tipe</th>
                <th>Pertanyaan</th>
                <th>Jawaban Benar</th>
                <th>Aksi</th>
            </tr>
        </thead>
         <tbody>
            <?php foreach ($data_soal as $row):?>
                <tr>
                    <td><?php echo $row['Question']['id'] ?></td>
                    <td>
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
                    <td><?php echo $row['Question']['kelas'] ?></td>
                    <td>
                        <?php 
                            if ($row['Question']['tipe'] ==1) {
                                echo "PG";
                            } else {
                                echo "Essay";
                            }
                        ?>
                    </td>
                    <td><?php echo $row['Question']['question'] ?></td>
                    <td>
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
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
   </table>
    <?php 
    echo $form->create('Quizz',array('id'=>'form_tambah','action'=>'tambah_single_soal','type'=>'file'));
    echo $form->input('QuizzsQuestion.quizz_id',array('type'=>'hidden','value'=>$quizz['Quizz']['id']));
    ?>


    <?php echo $form->end();?>
</div>
<script>
var options_submitformtryout = {
  //beforeSubmit:  showRequest,  // pre-submit callback 
  success:       showResponse_submitformtryout  // post-submit callback
};
$(document).ready(function() {
    var tes=<?php echo $quizz['Quizz']['id'] ?>;
    console.log(tes);
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
                        
    $('#tblsoal_banksoal tbody').on( 'click', 'button', function () {
        var data = table2.row( $(this).parents('tr') ).data();
        $('#form_tambah').append('<input type="hidden" name="data[QuizzsQuestion][question_id]" value="'+data[0]+'" >');
        console.log(data[0]);
        $('#form_tambah').ajaxSubmit(options_submitformtryout);
        $.Dialog.close();
    } );
});

    function showResponse_submitformtryout(responseText, statusText, xhr, $form)  { 
      setTimeout(function() {
        alert('success');
        window.location.href = "<?php echo $this->webroot?>quizzs/edit_table_soal/<?php echo $quizz['Quizz']['id']?>";
      }, 1000);
    }
</script>