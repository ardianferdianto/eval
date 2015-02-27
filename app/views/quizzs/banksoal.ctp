<div>

<?php if(empty($data_soal)):?>
	Tidak ada quizz
<?php endif;?>
	<h2>Table Soal </h2>
	<table class="table striped hovered dataTable" id="dataTables-1">
				<thead>
                <tr>
                    <th class="text-left">No. </th>
                    <th class="text-left">Tipe Soal</th>
                    <th class="text-left">Level kesulitan</th>
                    <th class="text-left">Kelas</th>
                    <th class="text-left">Pertanyaan</th>
					
                </tr>
                </thead>

                <tbody>
                </tbody>

                <tfoot>
                <tr>
                    <th class="text-left">No. </th>
                    <th class="text-left">Tipe Soal</th>
                    <th class="text-left">Level kesulitan</th>
                    <th class="text-left">Kelas</th>
                    <th class="text-left">Pertanyaan</th>

                </tr>
            	</tfoot>

			<!--<thead>
				<tr class="error">
					<th>No. </th>
					<th>Tipe Soal</th>
					<th>Level kesulitan</th>
					<th>Kelas</th>
					<th>Pertanyaan</th>
					<th>Jawaban A</th>
					<th>Jawaban B</th>
					<th>Jawaban C</th>
					<th>Jawaban D</th>
				</tr>
			</thead>
			<tbody>-->

	</table>
	<script>

    var tableDataKu = {"aaData": [{"engine": "Other browsers","browser": "All others","platform": "-","version": "-","grade": "U"}]};
                $(function(){
                    $('#dataTables-1').dataTable( {
                       "ajax": tableDataKu,
                    } );
                });
            </script>
	 
</div><!-- End content box -->
