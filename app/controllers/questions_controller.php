<?php
class QuestionsController extends AppController {

	var $name = 'Questions';
	var $helpers = array('Html', 'Form','Video');
	//var $vendor  = array();

	var $licensestatus = 'undefined';

	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('*');
	   // $this->set('menuTab', 'kelas');
	    //$this->set('menuTabChild', 'kuis');
	    //$licensestatus = 'undefined';
	    /*if($this->Auth->user('group_id') == 3){
	    	$this->Session->setFlash( 'Anda tidak berhak masuk ke halaman ini','flash_erorr');
	    	$this->redirect(array('controller'=>'users','action'=>'home'));
	    }*/
	    
	}


	function __getlic(){
		$this->Question->bindModel(
	    	array('belongsTo' => 
		    	array(
				'Profile' => array(
		             'className' => 'Profile',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);
		
		$profils = $this->Question->Profile->read(null, 1);
		$lickey = $profils['Profile']['license_key'];
		$licVal = $profils['Profile']['val_sync'];
		
		$license = array();
		$license['lickey'] = $lickey;
		$license['licVal'] = $licVal;
		//array_push($license, $lickey, $licVal);
		
		return $license;
		
	}
	
	function __ceklicense($getLic,$getIon){
		
		//Check License first!!!
		$zend_id = $this->getZendid();
		$ion = $getIon;
		$get_lic = $getLic;
		//ion:1-6-1-1315771514-c4ca4238znd:M:NA22Q-RNVUA-6TP86-GD6ZNM:FC82D-K2SGF-5ASZ8-F2ED2
		
		
		$get_local_lic = 'ion:'.$ion.'znd:'.$zend_id;
		$lic_hashed = Security::hash($get_local_lic, null, true);
		
		if($getLic == 'Trial Version' &&  $getIon == 'Trial Version'){
			$this->licensestatus = 'Trial';
		}
		else if($get_lic != $lic_hashed){
			echo '<br>
			<b style="color:red;">Fatal error:</b>  <br>License yang anda gunakan <b>tidak valid!</b> atau <b>tidak legal!!</b>. Silahkan hubungi costumer support untuk keterangan lebih lanjut<br>';
			($this->webroot()) ? exit : NULL;
		
		}
		//return $this->licensestatus;
		
	}

	function getZendid(){

		$idZend = zend_get_id();

		$banyakIdZend = count($idZend);

		if($banyakIdZend > 1){	
			foreach ($idZend as $id => $n){
				$idZendSelected = $idZend[0];
			}
		}else if($banyakIdZend == 1){
			$idZendSelected = $idZend;
		}else{
			$idZendSelected = null;
		}

	return $idZendSelected;

	}

	function proses($kelas=null,$mapel=null){

		$conditions = array('Question.kelas'=>$kelas,'Question.pelajaran_id'=>$mapel);
		$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => array('Question.created' => 'DESC')));
		

		$banyakSoal = count($questions);
		//$quizz = $this->Question->Quizz->find('list',array('fields'=>'Quizz.kode'));
		$this->set('questions',$questions);
		$this->set(compact('kelas','mapel','banyakSoal'));

		$this->layout = 'default_metro';


	}


	function index() {
		$this->set('menuTab', 'bankSoal');
		$this->Question->recursive = 0;


	    $this->paginate = array(
	    'limit' => 25,
		'order' => array(
			'Question.created' => 'desc'
			)
		);

	    $questions = $this->paginate('Question');
	    $this->set(compact('questions'));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));
	}

	function kelas($idKelas = null) {
		if(!$idKelas){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Question->recursive = 0;
			$listMataPelajaran = $this->Question->Pelajaran->find('all');
			//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
			$this->set(compact('listMataPelajaran','idKelas'));
		}
	}

	function pelajaran($idKelas = null,$idPelajaran = null) {
		if((!$idKelas) ||(!$idPelajaran)){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Question->recursive = 0;
			$conditions1 = array('Question.kelas'=>$idKelas,'Question.pelajaran_id'=>$idPelajaran);
		    $this->paginate = array(
		    'conditions' => $conditions1,
		    'limit' => 25,
			'order' => array(
				'Question.created' => 'desc'
				)
			);

		    $questions = $this->paginate('Question');
		    $this->set(compact('questions'));

		}
	}

	function home(){

	}

	function homenew(){

		//check license
		$licInfo = $this->__getlic();
		$this->__ceklicense($licInfo['licVal'],$licInfo['lickey']);

		$landing = true;
		$this->set('landing',$landing);
		$subject_list = $this->Question->Pelajaran->find('all');
		$this->set('kumpulanmatapelajaran',$subject_list);
		$this->set('trial',$this->licensestatus);
	}

	function current_add($questionId = null,$fromurl = null,$matpelId = null,$kelas = null) {
		//$this->set('menuTab', 'bankSoal');
		$this->set('matpelId', $matpelId);
		$this->set('kelas', $kelas);
		$this->set('questionId', $questionId);
		$this->set('fromurl', $fromurl);
		$this->Question->recursive = 0;


	    $this->paginate = array(
		'conditions' => array('Question.pelajaran_id'=>$matpelId,'Question.kelas'=>$kelas),
	    'limit' => 25,
		'order' => array(
			'Question.created' => 'desc'
			)
		);

	    $questions = $this->paginate('Question');
	    $this->set(compact('questions'));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));
	}

	function view($id = null) {
		$this->Quizz->recursive = 2;
		$this->set('menuTab', 'bankSoal');
		if (!$id) {
			$this->Session->setFlash(__('Invalid Question.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('question', $this->Question->read(null, $id));
	}

	function __view($id = null) {
		$this->Quizz->recursive = 2;
		$this->set('menuTab', 'bankSoal');
		if (!$id) {
			$this->Session->setFlash(__('Invalid Question.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('question', $this->Question->read(null, $id));
	}

	/*function add($questionId = null,$fromurl = null,$matpelId = null,$kelas =null) {

		$this->set('matpelId',$matpelId);
		$this->set('kelas',$kelas);

		if (!$questionId) {
			$this->Session->setFlash('Latihan tidak ditemukan untuk mengisi pertanyaan ini silahkan ulangi, atau lihat melalu index latihan','flash_erorr');
			$this->redirect(array('controller'=>'quizzs','action'=>'index'));
		}
		$this->set('questionId',$questionId);
		if(!$fromurl){
			$type = 1;
		}else{
			$type = 2;
		}
		if (!empty($this->data)) {
			$type_soal = $this->data['Question']['tipe'];

			if ($type_soal == 1){
				//record data based on what selected
				$this->data['Question']['question'] = $this->data['Question']['question1'];
				$this->data['Question']['level'] = $this->data['Question']['level1'];

				$fileOK = $this->uploadFiles('files/quizz', $this->data['File1']);

				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}

				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File3']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}else if($type_soal == 2){
				$this->data['Question']['question'] = $this->data['Question']['question2'];
				$this->data['Question']['level'] = $this->data['Question']['level2'];

				$fileOK = $this->uploadFiles('files/quizz', $this->data['File2']);

				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}
				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File4']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}

			$this->Question->create();
			//$this->Question->saveAll($this->data);
			$saveQuizzId = $this->data['Question']['quizzId'];


			if ($this->Question->saveAll($this->data)) {

				//save questionsid
				$this->Session->setFlash('Pertanyaan berhasil ditambahkan ke kuis','flash_success');
				//if($this->data['Question']['type'] == 1){
				//$this->redirect(array('action'=>'add_success'.'/'.$saveQuizzId));

				//}else{
				//$this->redirect(array('controller'=>'quizzs','action'=>'view'.'/'.$saveQuizzId));

				//}
			} else {
				$this->Session->setFlash('Pertanyaan gagal disimpan kedalam kuis, silahkan ulangi!','flash_erorr');

			}
		}
		$quizzs = $this->Question->Quizz->find('list');
		$this->set(compact('quizzs','type'));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));
	}*/

	function add($questionId = null,$fromurl = null,$matpelId = null,$kelas =null) {

		$this->set('matpelId',$matpelId);
		$this->set('kelas',$kelas);

		if (!$questionId) {
			$this->Session->setFlash('Latihan tidak ditemukan untuk mengisi pertanyaan ini silahkan ulangi, atau lihat melalu index latihan','flash_erorr');
			$this->redirect(array('controller'=>'quizzs','action'=>'index'));
		}
		$this->set('questionId',$questionId);
		if(!$fromurl){
			$type = 1;
		}else{
			$type = 2;
		}
		if (!empty($this->data)) {
			$matpelId = $this->data['Question']['pelajaran_id'];
			$kelas = $this->data['Question']['kelas'];
			//new method add
			$type_soal = $this->data['Question']['tipe'];
			if ($type_soal == 1){
				//record data based on what selected
				$this->data['Question']['question'] = $this->data['Question']['question1'];
				$this->data['Question']['level'] = $this->data['Question']['level1'];
				$this->data['Question']['point_nilai'] = $this->data['Question']['point1'];

				$fileOK = $this->uploadFiles('files/quizz', $this->data['File1']);

				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}

				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File3']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}else if($type_soal == 2){
				$this->data['Question']['question'] = $this->data['Question']['question2'];
				$this->data['Question']['level'] = $this->data['Question']['level2'];
				$this->data['Question']['point_nilai'] = $this->data['Question']['point2'];

				$fileOK = $this->uploadFiles('files/quizz', $this->data['File2']);

				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}
				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File4']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}



			$this->Question->create();
			$saveQuizzId = $this->data['Question']['quizzId'];
			$questionId = $this->Question->getLastInsertId();
			//$questionId = $this->data->id;
			$this->data['Quizz']['id'] = $saveQuizzId;
			$this->data['Question.Question'] = $questionId;
			//$saveQuizzId = $this->data['Answer']['quizz_id'];

			//$this->Question->saveAll($this->data);


			if ($this->Question->saveAll($this->data)) {



				//save questionsid
				$this->Session->setFlash('Pertanyaan berhasil ditambahkan ke kuis','flash_success');
				if($this->data['Question']['type'] == 1){
				$this->redirect(array('action'=>'add_success'.'/'.$saveQuizzId.'/'.$matpelId.'/'.$kelas));


				}else{
				$this->redirect(array('controller'=>'quizzs','action'=>'view'.'/'.$saveQuizzId));

				}
			} else {
				$this->Session->setFlash('Pertanyaan gagal disimpan kedalam kuis, silahkan ulangi!','flash_erorr');

			}
		}
		$quizzs = $this->Question->Quizz->find('list');
		$this->set(compact('quizzs','type'));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));
	}

	function add_multi($kelas = null,$pelajaran_id = null){
		if (!empty($this->data)) {
			$type_soal = $this->data['Question']['tipe'];
			if ($type_soal == 1){
				//record data based on what selected
				$this->data['Question']['question'] = $this->data['Question']['question1'];
				$this->data['Question']['level'] = $this->data['Question']['level1'];
				//$this->data['Question']['pelajaran_id'] = $this->data['Question']['pelajaran_id1'];
				//$this->data['Question']['point_nilai'] = $this->data['Question']['point1'];
				$this->data['Question']['answer_a']=$this->data['Question']['0']['details'];
				$this->data['Question']['answer_b']=$this->data['Question']['1']['details'];
				$this->data['Question']['answer_c']=$this->data['Question']['2']['details'];
				$this->data['Question']['answer_d']=$this->data['Question']['3']['details'];
				//set question which true
/*				if($this->data['Question']['true_a']!=null){
					$this->data['Question']['answer_true'] = 1;
				}elseif ($this->data['Question']['true_b']!=null) {
					$this->data['Question']['answer_true'] = 2;
				}elseif ($this->data['Question']['true_c']!=null) {
					$this->data['Question']['answer_true'] = 3;
				}elseif ($this->data['Question']['true_d']!=null) {
					$this->data['Question']['answer_true'] = 4;
				}*/

				$fileOK = $this->uploadFiles('files/quizz', $this->data['File1']);


				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}

				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File3']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}else if($type_soal == 2){
				$this->data['Question']['question'] = $this->data['Question']['question2'];
				$this->data['Question']['level'] = $this->data['Question']['level2'];
				$this->data['Question']['answer_true']='0';
				//$this->data['Question']['pelajaran_id'] = $this->data['Question']['pelajaran_id2'];
				//$this->data['Question']['point_nilai'] = $this->data['Question']['point2'];
				$fileOK = $this->uploadFiles('files/quizz', $this->data['File2']);

/*				$kelas = $this->data['Question']['kelas2'];
				$mapel = $this->data['Question']['mapel'];
				$level = $this->data['Question']['level2'];
				$tipe =  $this->data['Question']['tipe'];
*/
				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}
				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File4']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}


			$this->Question->create();
			//$this->Question->saveAll($this->data);
			//var_dump($this->data['Question']['answer_true']);var_dump($this->data['Question']['kelas']);var_dump($this->data['Question']['pelajaran_id']);exit();
			$kelas_id=$this->data['Question']['kelas'];
			$mapel_id=$this->data['Question']['pelajaran_id'];
			if ($this->Question->saveAll($this->data)) {

				$lastID  = $this->Question->getInsertID();
				//save questionsid
				$status = 'Pertanyaan berhasil ditambahkan';

				
				//$this->Session->setFlash('Soal baru berhasil ditambahkan');

				$this->Session->setFlash('Pertanyaan berhasil ditambahkan ke dalam Banksoal','flash_success');
				$this->redirect(array('controller'=>'quizzs','action'=>'banksoal/'.$kelas_id.'/'.$mapel_id));
				//$this->redirect(array('controller'=>'questions','action'=>'proses/'.$kelas.'/'.$mapel.'/'.$level.'/'.$tipe));


				//$this->redirect(array('action'=>'index'));


			} else {

				$lastID  = '';
				//save questionsid
				$status = 'Pertanyaan gagal disimpan, silahkan ulangi!';
				//$this->redirect(array('action'=>'banksoal',$lastID,$status));
				$this->Session->setFlash('Pertanyaan gagal ditambahkan ke dalam Banksoal','flash_error');
				//$this->Session->setFlash(__('GAGALLL', true));
				$this->redirect(array('controller'=>'quizzs','action'=>'banksoal/'.$kelas_id.'/'.$mapel_id));
			}
		}
		//$quizzs = $this->Question->Quizz->find('list');
		//$this->set(compact('quizzs'));
		//$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$this->set(compact('kelas','mapel','level','tipe'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		//$this->set(compact('listMataPelajaran'));
	}

	function add_single($kelas=null,$mapel=null,$level=null,$tipe=null) {
		$this->set('menuTab', 'bankSoal');
		if (!empty($this->data)) {
			$type_soal = $this->data['Question']['tipe'];

			if ($type_soal == 1){
				//record data based on what selected
				$this->data['Question']['question'] = $this->data['Question']['question1'];
				$this->data['Question']['level'] = $this->data['Question']['level1'];
				//$this->data['Question']['pelajaran_id'] = $this->data['Question']['pelajaran_id1'];
				//$this->data['Question']['point_nilai'] = $this->data['Question']['point1'];
				$this->data['Question']['kelas'] = $this->data['Question']['kelas1'];

				$this->data['Question']['target'] = $this->data['Question']['target'];

				//set question which true
				if($this->data['Question']['true_a']!=null){
					$this->data['Question']['true'] = 1;
				}elseif ($this->data['Question']['true_b']!=null) {
					$this->data['Question']['true'] = 2;
				}elseif ($this->data['Question']['true_c']!=null) {
					$this->data['Question']['true'] = 3;
				}elseif ($this->data['Question']['true_d']!=null) {
					$this->data['Question']['true'] = 4;
				}

				$fileOK = $this->uploadFiles('files/quizz', $this->data['File1']);

				$kelas = $this->data['Question']['kelas1'];
				$mapel = $this->data['Question']['mapel'];
				$level = $this->data['Question']['level1'];
				$tipe =  $this->data['Question']['tipe'];

				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}

				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File3']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}else if($type_soal == 2){
				$this->data['Question']['question'] = $this->data['Question']['question2'];
				$this->data['Question']['level'] = $this->data['Question']['level2'];
				//$this->data['Question']['pelajaran_id'] = $this->data['Question']['pelajaran_id2'];
				//$this->data['Question']['point_nilai'] = $this->data['Question']['point2'];
				$this->data['Question']['kelas'] = $this->data['Question']['kelas2'];
				$this->data['Question']['target'] = $this->data['Question']['target2'];
				$fileOK = $this->uploadFiles('files/quizz', $this->data['File2']);

				$kelas = $this->data['Question']['kelas2'];
				$mapel = $this->data['Question']['mapel'];
				$level = $this->data['Question']['level2'];
				$tipe =  $this->data['Question']['tipe'];

				if(array_key_exists('urls', $fileOK)) {
				    // save the url in the form data
				    $this->data['Question']['images'] = $fileOK['urls'][0];
				}
				$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File4']);

				if(array_key_exists('urls', $fileOK2)) {
				    // save the url in the form data
				    $this->data['Question']['video'] = $fileOK2['urls'][0];
				}
				else{
					$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
				}
			}


			$this->Question->create();
			//$this->Question->saveAll($this->data);



			if ($this->Question->saveAll($this->data)) {

				$lastID  = $this->Question->getInsertID();
				//save questionsid
				$status = 'Pertanyaan berhasil ditambahkan';

				

				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				//$this->redirect(array('controller'=>'questions','action'=>'proses/'.$kelas.'/'.$mapel.'/'.$level.'/'.$tipe));


				//$this->redirect(array('action'=>'index'));


			} else {

				$lastID  = '';
				//save questionsid
				$status = 'Pertanyaan gagal disimpan, silahkan ulangi!';
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
			}
		}
		$quizzs = $this->Question->Quizz->find('list');
		$this->set(compact('quizzs'));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('kelas','mapel','level','tipe'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));

		$this->layout = 'default_blank';
	}


	function add_responses($id,$status){
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('n', $this->Question->read(null, $id));
		
		$toread = $this->Question->read(null, $id);
		
		$kelas = $toread['Question']['kelas'];
		$mapel = $toread['Question']['mapel'];
		$level = $toread['Question']['level'];
		$tipe = $toread['Question']['tipe'];
		
		$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe);
		
		$this->set('questiontotal',$this->Question->find('count',array('conditions'=>$conditions)));
		$this->set('status', $status);
		$this->layout = 'default_blank';
	}



	function add_success($saveQuizzId = null,$matpelId = null,$kelas =null) {

		if (!$saveQuizzId) {
			$this->Session->setFlash('Latihan tidak ditemukan untuk mengisi pertanyaan ini silahkan ulangi, atau lihat melalu index latihan','flash_erorr');
			$this->redirect(array('controller'=>'quizzs','action'=>'index'));
		}
		$this->set('saveQuizzId',$saveQuizzId);
		$this->set('matpelId',$matpelId);
		$this->set('kelas',$kelas);
	}






	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Question', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			

			$fileOK = $this->uploadFiles('files/quizz', $this->data['File']);

			if(array_key_exists('urls', $fileOK)) {
			    // save the url in the form data
			    $this->data['Question']['images'] = $fileOK['urls'][0];
			}
			else{
				$this->Session->setFlash('Pertanyaan gagal ditambahkan ke dalam Banksoal','flash_error');
			}

			$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File2']);

			if(array_key_exists('urls', $fileOK2)) {
			    // save the url in the form data
			    $this->data['Question']['video'] = $fileOK2['urls'][0];
			}
			else{
				$this->Session->setFlash('Pertanyaan gagal ditambahkan ke dalam Banksoal','flash_error');
			}

			
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash('Pertanyaan berhasil diupdate','flash_success');
				$this->redirect(array('controller'=>'quizzs','action'=>'banksoal',$this->data['Question']['kelas'],$this->data['Question']['mapel']));
			} else {
				$this->Session->setFlash('Pertanyaan gagal diupdate, silahkan ulangi!','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->read(null, $id);
		}
		$this->set('question', $this->Question->read(null, $id));
		$this->layout = 'default_metro';

	}

	function edit_single($id = null,$kelas=null,$mapel=null,$level=null,$tipe=null) {

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Question', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$kelas = $this->data['Question']['kelas'];
			$mapel = $this->data['Question']['mapel'];
			$level = $this->data['Question']['level'];
			$tipe = $this->data['Question']['tipe'];

			$fileOK = $this->uploadFiles('files/quizz', $this->data['File']);

			if(array_key_exists('urls', $fileOK)) {
			    // save the url in the form data
			    $this->data['Question']['images'] = $fileOK['urls'][0];
			}
			else{
				//$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
			}

			$fileOK2 = $this->uploadFiles('files/quizz', $this->data['File2']);

			if(array_key_exists('urls', $fileOK2)) {
			    // save the url in the form data
			    $this->data['Question']['video'] = $fileOK2['urls'][0];
			}
			else{
				//$this->flash(__('Gagal Mengupload File yang anda kirim, Silahkan Ulangi.', true), array('action'=>'index'));
			}

			if ($this->Question->save($this->data)) {

				$status = 'true';
				$flashMessage = 'Pertanyaan berhasil diupdate';
				$this->redirect(array('action'=>'edit_responses',$id,$status,$flashMessage));
				//$this->Session->setFlash('','flash_success');
				//$this->redirect(array('controller'=>'questions','action'=>'proses/'.$kelas.'/'.$mapel.'/'.$level.'/'.$tipe));
			} else {
				$status = 'false';
				$flashMessage = 'Pertanyaan gagal diupdate, silahkan ulangi!';
				$this->redirect(array('action'=>'edit_responses',$id,$status,$$flashMessage));
				//$this->Session->setFlash('','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->read(null, $id);
		}
		$this->set('question', $this->Question->read(null, $id));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		$this->set(compact('kelas','mapel','level','tipe','id'));
		$this->set(compact('listMataPelajaran'));
		$this->layout = 'default_blank';

	}


	function edit_responses($id,$status,$flashMessage){
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->set('question', $this->Question->read(null, $id));
		
		$this->set('status', $status);
		$this->set('flashMessage', $flashMessage);

		$this->set('idtoResponse', $id);

		$this->layout = 'default_blank';
	}


	function edit_uraian($id = null,$QuestionId = null) {
		$this->set('id',$id);
		$this->set('QuestionId',$QuestionId);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Question', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {


			if ($this->Question->save($this->data)) {
				$this->Session->setFlash('Pertanyaan berhasil diupdate','flash_success');

				$this->redirect(array('controller'=>'questions','action'=>'index'));
			} else {
				$this->Session->setFlash('Pertanyaan gagal diupdate, silahkan ulangi!','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->read(null, $id);
		}
		$this->set('question', $this->Question->read(null, $id));
		$listMataPelajaran = $this->Question->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));

	}

	/*function delete($id = null,$kelas=null,$mapel=null,$level=null,$tipe=null) {
		$this->set('QuizzId',$QuizzId);
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Question->del($id)) {
			$this->Session->setFlash('Pertanyaan berhasil terhapus','flash_success');
			if(!empty($QuizzId)){
			$this->redirect(array('controller'=>'quizzs','action'=>'proses/'.$kelas.'/'.$mapel.'/'.$level.'/'.$tipe));
			}else{
			$this->redirect(array('action'=>'home','action'=>'proses/'.$kelas.'/'.$mapel.'/'.$level.'/'.$tipe));
			}
		}
	}*/


	function delete( $kelas_id=null, $mapel_id=null, $id = null) {
		$status = "false";
		$flashMessage = "";
		$idtodelete = "";
		if (!$id) {
/*			$status = "false";
			$flashMessage = "Tidak Berhasil Menghapus";
			$idtodelete = "";*/

			$this->Session->setFlash('Pertanyaan gagal dihapus','flash_success');
			
			$this->redirect(array('controller'=>'quizzs','action'=>'banksoal/'.$kelas_id.'/'.$mapel_id));
		}else{
		if ($this->Question->del($id)) {

			///$directory = WWW_ROOT.'files'.DS.'ebooks'.DS.$id;
			//$this->_delete_recursive($directory);

/*			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;*/
			
			$this->Session->setFlash('Pertanyaan berhasil dihapus','flash_success');
			
			$this->redirect(array('controller'=>'quizzs','action'=>'banksoal/'.$kelas_id.'/'.$mapel_id));

		}
	}
/*		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_metro';*/
		
	}

	function filter(){
		$this->set('menuTab', 'bankSoal');
		Configure::write('debug', '0');


		$this->Journal->recursive = 0;



		$tipe = $this->data['Question']['type_soal'];

		$level = $this->data['Question']['level'];

		$conditions = array();



		if(!empty($kelas) && !empty($tipe) && !empty($matpel) && !empty($level) ){

			$conditions = array(


				'Question.tipe'=>$tipe,

				'Question.level'=>$level,

			);
		}


		//find
		if(empty($kelas) && empty($tipe) && empty($matpel) && empty($level) ){
			$questions = $this->Question->find('all',array('order' => array('Question.created' => 'DESC')));

		}else{
			$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => array('Question.created' => 'DESC')));
		}
		$this->set('questions',$questions);

		//$this->set(compact('tgl_start','tgl_finish'));
		$this->render('filter','ajax');


	}

	

	function select_tryout($kelas=null,$mapel=null,$level=null,$tipe=null){

		$quizz = $this->Question->Quizz->find('list',array('fields'=>'Quizz.kode'));
		$this->set(compact('kelas','mapel','level','tipe','banyakSoal','quizz'));
		$this->layout='default_blank';
	}

	function salin_tryout() {
		//$this->set('menuTab', 'bankSoal');
		$mapel = $this->data['Question']['mapel'];
		$kelas = $this->data['Question']['kelas'];
		$level = $this->data['Question']['level'];
		$tipe = $this->data['Question']['tipe'];
		$quizzID = $this->data['Quizz']['id'];


		//$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe,'Question.target'=>2);
		$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe);
		$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => array('Question.created' => 'DESC')));
		$banyakSoal = count($questions);

		$quizz = $this->Question->Quizz->read(null, $quizzID);

		//$this->set('questions',$questions);
		$this->set(compact('kelas','mapel','level','tipe','quizzID','questions','banyakSoal','quizz'));
		$this->layout='default_blank';

	}

	function quizz($kelas=null,$mapel=null,$level=null,$tipe=null,$userid = null){

		//find time
		$this->Question->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Profile' => array(
		             	'className' => 'Profile',
		             	'foreignKey'=> ''
		         	)
		        )
		    )
		);

		$profils = $this->Question->Profile->read(null, 1);

		$configGandaMudah = $profils['Profile']['time_ganda_mudah'];
		$configGandaSedang = $profils['Profile']['time_ganda_sedang'];
		$configGandaSulit = $profils['Profile']['time_ganda_sulit'];
		$configEssayMudah = $profils['Profile']['time_essay_mudah'];
		$configEssaySedang = $profils['Profile']['time_essay_sedang'];
		$configEssaySulit = $profils['Profile']['time_essay_sulit'];

		if(($tipe == 1)&&($level == 1)){
			$timeset = $profils['Profile']['time_ganda_mudah'];
		}elseif (($tipe == 1)&&($level == 2)) {
			$timeset = $profils['Profile']['time_ganda_sedang'];
		}elseif (($tipe == 1)&&($level == 3)) {
			$timeset = $profils['Profile']['time_ganda_sulit'];
		}elseif (($tipe == 2)&&($level == 1)) {
			$timeset = $profils['Profile']['time_essay_mudah'];
		}elseif (($tipe == 2)&&($level == 2)) {
			$timeset = $profils['Profile']['time_essay_sedang'];
		}elseif (($tipe == 2)&&($level == 3)) {
			$timeset = $profils['Profile']['time_essay_sulit'];
		}

		//find 10 questions random
		$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe,'Question.target'=>1);
		$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => 'rand()','limit' => 10));

		$this->set(compact('kelas','mapel','level','tipe','quizz','questions','timeset'));
	}

	function view_pdf($kelas=null,$mapel=null,$level=null,$tipe=null)
    {
    	//Configure::write('debug',0); // Otherwise we cannot use this method while developing

    	/*if($this->Auth->user('group_id') == 3){
			$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe,'Question.target'=>1);
			$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => array('Question.created' => 'DESC')));
		}else{
			$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe);
			$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => array('Question.created' => 'DESC')));
		}*/

		$conditions = array('Question.kelas'=>$kelas,'Question.mapel'=>$mapel,'Question.level'=>$level,'Question.tipe'=>$tipe);
		$questions = $this->Question->find('all',array('conditions'=>$conditions,'order' => array('Question.created' => 'DESC')));

		$banyakSoal = count($questions);
		$quizz = $this->Question->Quizz->find('list',array('fields'=>'Quizz.kode'));
		$this->set('questions',$questions);
		$this->set(compact('kelas','mapel','level','tipe','banyakSoal','quizz'));


        $this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
    }

    function import_question($kelas,$mapel){

    	//$kelas = $this->data['Question']['kelas'];
    	//$mapel = $this->data['Question']['mapel'];

    	$data = new Spreadsheet_Excel_Reader();
		// Set output Encoding.
		$data->setOutputEncoding('CP1251');

		$data->read($this->data['Question']['csv']['tmp_name']);

		$headings = array();
		$xls_data = array();

//upload data zip image
		$now = new DateTime();
		$tanggal= $now->format('Y-m-d H:i:s'); 

		if ($this->data['Question']['image']) {

			$file = new File($this->data['Question']['image']['tmp_name']);
			$folderpath  = WWW_ROOT.'files/quizz/'.$tanggal;
			if (!file_exists($folderpath)) {
	    		mkdir($folderpath, 0777, true);
			}
			$foldertounzip  = $folderpath;
			$foldertoupload  = WWW_ROOT.'/files/quizz/quizz.zip';


			$dataImages = $file->read();
			$file->close();

			$file = new File($foldertoupload,true);
			$file->write($dataImages);
			$file->close();
			// do unzip file

			//delete folder first
			//$file = new Folder($foldertounzip);
			//$file->delete();

			$zip = new ZipArchive;
		     $res = $zip->open($foldertoupload);
		     if ($res === TRUE) {
		         $zip->extractTo($foldertounzip);
		         $zip->close();

		        //$this->Session->setFlash('Berhasil Mengupload data','flash_success');
				//$this->redirect(array('action'=>'kelas/'.$kelas));
		     } else {
		        //$this->Session->setFlash('Tidak Berhasil Mengupload data','flash_erorr');
				//$this->redirect(array('action'=>'home'));
		     }
		 }		




		for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
		    $row_data = array();
		    for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		        if($i == 1) {
		            //this is the headings row, each column (j) is a header
		            //$headings[$j] = $data->sheets[0]['cells'][$i][$j];
		        	$headings[1] = 'question';
		        	$headings[2] = 'level';
		        	$headings[3] = 'answer_a';
		        	$headings[4] = 'answer_b';
		        	$headings[5] = 'answer_c';
		        	$headings[6] = 'answer_d';
		        	$headings[7] = 'answer_true';
		        	$headings[8] = 'answer2';
		        	$headings[9] = 'images';
		        	$headings[10] = 'video';
		        	$headings[11] = 'kelas';
		        	$headings[12] = 'pelajaran_id';
		        	$headings[13] = 'tipe';
		        } else {
		            //column of data
		            if (isset($data->sheets[0]['cells'][$i][8])) {
			            $row_data[$headings[13]]= 2;
		            } else {
		            	$row_data[$headings[13]]= 1;
		            }
		            if (isset($data->sheets[0]['cells'][$i][9])) {
		            	$tmpdir="files/quizz/".$tanggal."/";
			            $temp=$tmpdir.$data->sheets[0]['cells'][$i][9];
			            $row_data[$headings[9]]= $temp;

		            } 
		            $row_data[$headings[11]] = $kelas;
		            $row_data[$headings[12]] = $mapel;
		            $row_data[$headings[$j]] = isset($data->sheets[0]['cells'][$i][$j]) ? $data->sheets[0]['cells'][$i][$j] : '';
		        }
		    }

		    if($i > 1) {
		        $xls_data[] = array('Question' => $row_data);
		    }
		}

/*		if ($this->data['Question']['image']) {

			$file = new File($this->data['Question']['image']['tmp_name']);

			$foldertounzip  = WWW_ROOT.DS.'files'.DS.'quizz';
			$foldertoupload  = WWW_ROOT.DS.'files'.DS.'quizz'.DS.'quizz.zip';


			$dataImages = $file->read();
			$file->close();

			$file = new File($foldertoupload,true);
			$file->write($dataImages);
			$file->close();
			// do unzip file

			//delete folder first
			//$file = new Folder($foldertounzip);
			//$file->delete();

			$zip = new ZipArchive;
		     $res = $zip->open($foldertoupload);
		     if ($res === TRUE) {
		         $zip->extractTo($foldertounzip);
		         $zip->close();

		        //$this->Session->setFlash('Berhasil Mengupload data','flash_success');
				//$this->redirect(array('action'=>'kelas/'.$kelas));
		     } else {
		        //$this->Session->setFlash('Tidak Berhasil Mengupload data','flash_erorr');
				//$this->redirect(array('action'=>'home'));
		     }
		 }*/


		if($this->Question->saveAll($xls_data)) {
			$this->Session->setFlash('Pertanyaan berhasil diupdate','flash_success');
			$status = 'Berhasil mengimpor '. count($xls_data) .' data.';
		    $this->redirect(array('controller'=>'quizzs','action'=>'banksoal/'.$kelas.'/'.$mapel));
		    //$this->redirect(array('action'=>'index'));
		
		} else {
			$this->Session->setFlash('Pertanyaan berhasil diupdate','flash_success');
			$status = 'tidak berhasil mengimpor data, silahkan ulangi!';

		    $this->redirect(array('controller'=>'quizzs','action'=>'banksoal/'.$kelas.'/'.$mapel));
		}

    }

    function viewquizz_pdf($kelas=null,$mapel=null,$level=null,$tipe=null,$jawabanbenar = null,$jawabansalah = null,$jawabanpas = null,$skor = null,$soal1 = null,$soal2 = null,$soal3 = null,$soal4 = null,$soal5 = null,$soal6 = null,$soal7 = null,$soal8 = null,$soal9 = null,$soal10 = null){

    	//find question as id given
    	$conditions = array('Question.id'=>array($soal1,$soal2,$soal3,$soal4,$soal5,$soal6,$soal7,$soal8,$soal9,$soal10));
		$questions = $this->Question->find('all',array('conditions'=>$conditions));
    	//set all variabel
    	$this->set(compact('kelas','mapel','level','tipe','jawabanbenar','jawabansalah','jawabanpas','skor','questions'));
    	$this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
    }
    function add_newsoal($kelas,$mapelid){
    	$this->set('kelasID',$kelas);
    	$this->set('mapelID',$mapelid);
    	$this->layout='default_metro';
    }
    function add_new($kelas,$mapelid){

    }
}
?>