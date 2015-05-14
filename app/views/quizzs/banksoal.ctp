<div class="wrapper">
    <img class="sticth_title_icon" src="<?php echo $this->webroot;?>art/stitch-icon2-banksoal.png"/>
    <div class="container">
        <!-- Top Navigation -->
        <section id="grid" class="grid clearfix container_bank_soal">
            
            <a href="<?php echo $this->webroot?>questions/add_newsoal/<?php echo $strafter?>" class="addnew_btn">&nbsp;</a>

            <div id="content_table" class="container_bank_soal_content">
            <?php 
                $str= Router::url(null, false);
                $strafter= trim($str,"/evaluasi_sd/quizzs/banksoal");
            ?>
            
            <?php if(empty($data_soal)):?>
                <center>Tidak ada Soal</center>
            <?php else:?>
                <h2 class="fg-white titletablesoal titlebanksoal">BANK SOAL </h2>
                   <table class="table striped hovered dataTable" id="dataTables-1">
                        <thead>
                            <tr>
                                <th class="text-left">No. </th>
                                <th class="text-left">Kode Soal </th>
                                <th class="text-left">Tipe Soal</th>
                                <th class="text-left">Level kesulitan</th>
                                <th class="text-left">Kelas</th>
                                <th class="text-left">Pertanyaan</th>
                                <th class="text-left">Jawaban A</th>
                                <th class="text-left">Jawaban B</th>
                                <th class="text-left">Jawaban C</th>
                                <th class="text-left">Jawaban D</th>
                                <th class="text-left">Kunci Jawaban</th>
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
                                <td class="text-left"><?php echo $i++;?></td>
                                <td class="text-left"><?php echo $row['Question']['id'] ?></td>
                                <td class="text-left"><?php echo $tipesoal_string ?></td>
                                <td class="text-left"><?php echo $levelsoal_string ?></td>
                                <td class="text-left"><?php echo $row['Question']['kelas'] ?></td>
                                <td class="text-left"><?php echo $row['Question']['question'];?></td>
                                <td class="text-left"><?php echo $row['Question']['answer_a'] ?></td>
                                <td class="text-left"><?php echo $row['Question']['answer_b'] ?></td>
                                <td class="text-left"><?php echo $row['Question']['answer_c'] ?></td>
                                <td class="text-left"><?php echo $row['Question']['answer_d'] ?></td>
                                <td class="text-left">
                                    <?php 
                                        if ($row['Question']['tipe']==1) {
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
                                            }
                                        } else {
                                            echo $row['Question']['answer2'];
                                        }
                                    ?>
                                </td>
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
                $(document).ready(function() {
                    $('#dataTables-1').dataTable({
                        "info":false
                    });
                } );

                </script>
            <?php endif;?> 
            </div><!-- End content box -->
        </section>
    </div><!-- /container -->
    
</div>