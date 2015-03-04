<div id="content_table">

<?php if(empty($data_soal)):?>
    <center>Tidak ada quizz</center>
<?php else:?>
    <h2 class="fg-white">Table Soal </h2>
       <table class="table striped hovered dataTable" id="dataTables-1">
            <thead>
                <tr>
                    <th class="text-left">No. </th>
                    <th class="text-left">Tipe Soal</th>
                    <th class="text-left">Level kesulitan</th>
                    <th class="text-left">Kelas</th>
                    <th class="text-left">Pertanyaan</th>
                    <th class="text-left">Jawaban A</th>
                    <th class="text-left">Jawaban B</th>
                    <th class="text-left">Jawaban C</th>
                    <th class="text-left">Jawaban D</th>
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
                    <td class="text-left"><?php echo $i++;?></td>
                    <td class="text-left"><?php echo $tipesoal_string ?></td>
                    <td class="text-left"><?php echo $levelsoal_string ?></td>
                    <td class="text-left"><?php echo $row['Question']['kelas'] ?></td>
                    <td class="text-left"><?php echo $row['Question']['question'] ?></td>
                    <td class="text-left"><?php echo $row['Question']['answer_a'] ?></td>
                    <td class="text-left"><?php echo $row['Question']['answer_b'] ?></td>
                    <td class="text-left"><?php echo $row['Question']['answer_c'] ?></td>
                    <td class="text-left"><?php echo $row['Question']['answer_d'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>

            <tfoot>
                <tr>
                    <th class="text-left">No. </th>
                    <th class="text-left">Tipe Soal</th>
                    <th class="text-left">Level kesulitan</th>
                    <th class="text-left">Kelas</th>
                    <th class="text-left">Pertanyaan</th>
                    <th class="text-left">Jawaban A</th>
                    <th class="text-left">Jawaban B</th>
                    <th class="text-left">Jawaban C</th>
                    <th class="text-left">Jawaban D</th>
                </tr>
            </tfoot>
       </table>
    <script>
    $(document).ready(function() {
        $('#dataTables-1').dataTable();
    } );

    </script>
<?php endif;?> 
</div><!-- End content box -->
