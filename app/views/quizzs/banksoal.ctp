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
               <?php $i=1;foreach ($data_soal as $row):?>
                <tr>
                    <td class="text-left"><?php echo $i++;?></td>
                    <td class="text-left"><?php echo $row['Question']['tipe'] ?></td>
                    <td class="text-left"><?php echo $row['Question']['level'] ?></td>
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
