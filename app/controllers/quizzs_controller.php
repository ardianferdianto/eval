<?php
class QuizzsController extends AppController {

	var $name = 'Quizzs';
	var $helpers = array('Html', 'Form','Video','Javascript','Fck');
	
	function beforeFilter() {
	    parent::beforeFilter();
		
	    //$this->Auth->allow('*');
		//$this->set('menuTab', 'kuis');
		//$this->set('menuTabChild', 'kuis');
	}
	
	function index() {
		
		$this->Quizz->recursive = 1;
		

	    $this->paginate = array(
	    'limit' => 25,
		'order' => array(
			'Quizz.created' => 'desc'
			)
		);
		
	    $quizzs = $this->paginate('Quizz');
	    $this->set(compact('quizzs'));
		
		
		
	
		/*$this->Quizz->recursive = 0;
		$quizzs = $this->Quizz->find('all',array('conditions'=>array('tahun_ajaran_id'=> $this->Session->read('tahunAjaran'),'semester'=>$this->Session->read('semester')),'limit'=>'20'));
		
		$this->set(compact('quizzs', $this->paginate()));
		
		$quizzGuru = $this->Quizz->find('all',array('conditions'=>array('author'=>$this->Auth->user('username'),'tahun_ajaran_id'=> $this->Session->read('tahunAjaran'),'semester'=>$this->Session->read('semester')),'limit'=>'20'));
		$this->set(compact('quizzGuru'));*/
		
		/*if($this->Auth->user('group_id')==3){
			
			$quizzMurid = $this->paginate('Quizz');
			 $this->set(compact('quizzMurid'));
			
			
		}*/

		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('listMataPelajaran'));

		$this->layout = 'default_iframe';
	}

	function view($id = null) {
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);
		
		/*if( ($this->Auth->user('group_id')!= 1) || ($quizz['Quizz']['author'] != $this->Auth->user('username'))){
		$this->Session->setFlash('Maaf anda tidak mempunyai hak untuk mengakses halamn latihan orang lain','flash_erorr');
		$this->redirect(array('action'=>'index'));
		}*/
	}

	function view_single($id = null) {
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);
		$this->layout = 'default_iframe';
	}

	function kelas($idKelas = null) {
		if(!$idKelas){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Quizz->recursive = 0;
			$listMataPelajaran = $this->Quizz->Pelajaran->find('all');
			//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
			$this->set(compact('listMataPelajaran','idKelas'));
		}
	}

	function pelajaran($idKelas = null,$idPelajaran = null) {
		if((!$idKelas) ||(!$idPelajaran)){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Quizz->recursive = 0;
			$conditions1 = array('Quizz.kelas'=>$idKelas,'Quizz.pelajaran_id'=>$idPelajaran);
		    $this->paginate = array(
		    'conditions' => $conditions1,
		    'limit' => 25,
			'order' => array(
				'Quizz.created' => 'desc'
				)
			);
			
		    $quizzs = $this->paginate('Quizz');
		    $this->set(compact('quizzs'));
			
		}
	}

	function add() {
		if (!empty($this->data)) {
			$matpelId =  $this->data['Quizz']['pelajaran_id'];
			$kelas =   $this->data['Quizz']['kelas'];
			$this->data['Quizz']['user_id'] = $this->Auth->user('id');
			//$this->data['Quizz']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			//$this->data['Quizz']['semester'] = $this->Session->read('semester');
			$this->Quizz->create();
			if ($this->Quizz->save($this->data)) {
				
				//$this->Session->setFlash('Quiz berhasil disimpan <br/> Selanjutnya silahkan anda isikan pertanyaan untuk kuis ini, dan centang jawaban yang benar','flash_success');
				//$this->Session->setFlash('','flash_attention');
				$idQuis = $this->Quizz->getLastInsertId();
				
				$this->redirect(array('controller'=>'questions','action'=>'add'.'/'.$idQuis.'/0/'.$matpelId.'/'.$kelas));
			} else {
				//$this->Session->setFlash('Quiz tidak berhasil disimpan','flash_erorr');
			}
		}
		
		
		$this->set(compact('questions'));
		
		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		
		$this->set(compact('listMataPelajaran'));
		$this->layout = 'default_iframe';
	}

	function add_single() {
		if (!empty($this->data)) {
			$matpelId =  $this->data['Quizz']['pelajaran_id'];
			$kelas =   $this->data['Quizz']['kelas'];
			$this->data['Quizz']['user_id'] = '1';
			//$this->data['Quizz']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			//$this->data['Quizz']['semester'] = $this->Session->read('semester');
			$this->Quizz->create();
			if ($this->Quizz->save($this->data)) {
				
				//$this->Session->setFlash('Tryout berhasil dibuat','flash_success');
				//$this->Session->setFlash('','flash_attention');
				//$idQuis = $this->Quizz->getLastInsertId();
				
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Quiz tidak berhasil disimpan','flash_erorr');
			}
		}
		
		
		$this->set(compact('questions'));
		
		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		
		$this->set(compact('listMataPelajaran'));
		
	}
	
	function take_quiz($id = null){
		
		$this->set('id',$id);
		//set condition has take quiz
		$hastake = $this->Quizz->QuizzPoint->find('first',array('conditions'=>array('quizz_id'=>$id,'siswa'=>$this->Auth->user('id')),array('order' => array('QuizzPoint.modified DESC'))));
		
		
		$this->set(compact('hastake','remedId'));
		$this->set('quizz', $this->Quizz->read(null, $id));
		//$this->set('quizzs', $this->paginate());
		$this->set('MataPelajaran', $this->Quizz->Pelajaran->read(null, $id));
		
	}
	
	function do_quizz($id = null) {
		$this->set('id',$id);
        $this->Quizz->recursive = 2;
        $this->set('quizz', $this->Quizz->read(null, $id));
        
        $hastake = $this->Quizz->QuizzPoint->find('first',array('conditions'=>array('quizz_id'=>$id,'siswa'=>$this->Auth->user('id'))));
        
        if (!empty($hastake)){
        	$remedId = $hastake['QuizzPoint']['id'];
        }
        
        if($remedId != null){
        	$this->set('remedId',$remedId);	
        }else{
        	$this->set('remedId',0);	
        }
        
        $this->layout='quizz';
		
    }
    
    function results(){
    	$this->Quizz->recursive = 2;
	   	//storing post data
	   	$banyakSoal = $this->data['Quizz']['banyak_soal'];
		$dataJawaban = $this->data['jawaban'];
	
		//giving default value
		$countTrue = 0;
		$scoreNilai = 0;
		$pointNew = 0;
		$score = 0;
		
		//loop post data
		
		
		$listPoint = array();
		
		foreach ($dataJawaban as $n){
			$answer = $this->Quizz->Question->Answer->read(null, $n);
			
			
			$idQuestion = $answer['Answer']['question_id'];
			$question = $this->Quizz->Question->read(null, $idQuestion);
			$pointNew = $question['Question']['point_nilai'];
			array_push($listPoint, $pointNew);
			
			//conditional if true count true ++
			if($answer['Answer']['true'] == 1){
				//$pointNew ++;
			 	$countTrue ++;
			}
		
		}
		
		foreach ($listPoint as $n =>$k){
			$score += $k;
		}
	
		
			//}
		$this->set(compact('scoreNilai','score','countTrue','banyakSoal','pointNew','listPoint'));
		
	
		//define condition remedial or not
		if($this->data['QuizzPoint']['id'] != null){
		
			//update record
			$this->Quizz->QuizzPoint->set(array(
				'siswa' => $this->Auth->user('id'),
				'points' => $score,
				'quizz_id'=>$this->data['QuizzPoint']['quizz_id'],
				'id'=>$this->data['QuizzPoint']['id']
			));
			$this->Quizz->QuizzPoint->save();
		
	
		}else{
	
			//check first and submit if they has answer questions at least one, then savequiz new result
			if($dataJawaban != null){
				$this->Quizz->QuizzPoint->set(array(
					'siswa' => $this->Auth->user('id'),
					'points' => $score,
					'quizz_id'=>$this->data['QuizzPoint']['quizz_id']
				));
				$this->Quizz->QuizzPoint->save();
			
			
			}
		}
		
		
		$uraianSoal = $this->data['UraianAnswer'];
		
		
		
		//if remedial
		
			
		foreach ($uraianSoal as $k =>$v){
			//check first is there any data before ?
			$conditions = array(
			'UraianAnswer.user_id'=>$this->Auth->user('id'),
			'UraianAnswer.quizz_id'=>$this->data['UraianAnswer'][$k]['quizz_id'],
			'UraianAnswer.question_id'=>$this->data['UraianAnswer'][$k]['question_id'],
			);
			$hasData = $this->Quizz->UraianAnswer->find('first',array('conditions'=>$conditions));
		
			if (!empty($hasData)){
				//store id answeuraian
				$idAnswerUraian = $hasData['UraianAnswer']['id'];
				
				$this->Quizz->UraianAnswer->set(array(
					'user_id' => $this->Auth->user('id'),
					'quizz_id' => $this->data['UraianAnswer'][$k]['quizz_id'],
					'question_id'=>$this->data['UraianAnswer'][$k]['question_id'],
					'jawaban_uraian'=>$this->data['UraianAnswer'][$k]['jawaban_uraian'],
					'id'=>$idAnswerUraian
				));
		    	$this->Quizz->UraianAnswer->saveAll();
		
			}else{
				$this->Quizz->UraianAnswer->set(array(
					'user_id' => $this->Auth->user('id'),
					'quizz_id' => $this->data['UraianAnswer'][$k]['quizz_id'],
					'question_id'=>$this->data['UraianAnswer'][$k]['question_id'],
					'jawaban_uraian'=>$this->data['UraianAnswer'][$k]['jawaban_uraian']
				));
		    	$this->Quizz->UraianAnswer->saveAll();
			}
		
			
		}
		
		
	
	
    	
    }

	function edit($id = null) {
		$this->set('id',$id);	
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Quizz', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Quizz']['author'] = $this->Auth->user('username');
			$this->data['Quizz']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			$this->data['Quizz']['semester'] = $this->Session->read('semester');
			if ($this->Quizz->save($this->data)) {
				$this->Session->setFlash('Quiz berhasil diupdate!','flash_success');
				$this->redirect(array('action'=>'view',$id));
			} else {
				$this->Session->setFlash('Quiz tidak berhasil disimpan,silahkan ulangi!','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Quizz->read(null, $id);
		}
		
		
		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Quiz tidak ditemukan','flash_erorr');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Quizz->delete($id,$cascade = true)) {
			$this->Session->setFlash('Quiz berhasil dihapus ','flash_success');
			
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function view_all($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Latihan tidak ditemukan.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Quizz->recursive = 2;
			
		$this->set('quizz', $this->Quizz->read(null, $id));
		$quizSerahList = $this->Quizz->QuizzPoint->find('all',array('conditions'=>array('QuizzPoint.quizz_id'=>$id)));
		
		//$namaSiswa = $this->Quizz->SiswaPas->find('all',array('conditions'=>array('SiswaPas.NIS'=>$this->Auth->user('username'))));
			//$tugasSerahList = $this->Tuga->FileTuga->find('all',array('conditions'=>array('FileTuga.tugas_id'=>$id)));
		
		$this->set(compact('quizSerahList','namaSiswa'));
	}

	function update_quizz_select(){
		if(!empty($this->data['Quizz']['id'])) {
			$quizz_id = (int)$this->data['Quizz']['id'];
			$conditions = array('Quizz.id' => $quizz_id);
			$options = $this->Quizz->read(null, $quizz_id);
			$this->set('options',$options);
			$this->render('update_quizz_select','ajax');
		}
	}

	function view_pdf($id = null)
    { 
    	//Configure::write('debug',0); // Otherwise we cannot use this method while developing

    	if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
	/*	$conditions_selectedsoal = array('QuizzsQuestion.quizz_id'=>$idquizz);
		$selected_soal = $this->Quizz->QuizzsQuestion->find('all',
				array(
					'conditions'=>$conditions_selectedsoal,
					'order' => array('QuizzsQuestion.order' => 'asc')
					
				)
		);*/

		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);


        $this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
    }

    function present_single($id = null) {
    	if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);
    	$this->layout = 'default_bookblock'; //this will use the pdf.ctp layout
    }

    function viewnew($tipe,$kelas,$mapel){
    	$conditions_lihatquizz = array('Quizz.type'=>$tipe,'Quizz.kelas'=>$kelas,'Quizz.pelajaran_id'=>$mapel);
    	$quizz_detail = $this->Quizz->find('all',array('conditions'=>$conditions_lihatquizz));
    	$pelajaran = $this->Quizz->Pelajaran->read(null, $mapel);
    	$this->set('quizz_detail',$quizz_detail);
    	$this->set('tipeID',$tipe);
    	$this->set('kelasID',$kelas);
    	$this->set('mapelID',$mapel);
    	$this->set('pelajaranID',$pelajaran);
    	$this->layout='default_metro';
    }

    function banksoal($kelas,$mapel){
    	$conditions_lihatsoal = array('Question.kelas'=>$kelas,'Question.pelajaran_id'=>$mapel);
    	$bank_soal = $this->Quizz->Question->find('all',array('conditions'=>$conditions_lihatsoal));
    	$this->set('data_soal',$bank_soal);
    	$this->set('kelasID',$kelas);
    	$this->set('mapelID',$mapel);
    	$this->layout='default_metro';
    }
    function interaktif_kuis($idquizz){
    	$homeicon = true;
		$conditions_selectedsoal = array('QuizzsQuestion.quizz_id'=>$idquizz);
		$selected_soal = $this->Quizz->QuizzsQuestion->find('all',
			array(
				'conditions'=>$conditions_selectedsoal,
				'order' => array('QuizzsQuestion.order' => 'asc')
				
			)
		);
		$read_soal=$this->Quizz->read(null, $idquizz);
		$this->set('read_soal',$read_soal);
		$this->set('id_kuis',$idquizz);
		$this->set('soal',$selected_soal);
		$this->set('homeicon',$homeicon);
    	$this->layout='default_metro';
    	//print_r();
    }
    function add_new($tipesoal,$kelas,$mapel){
    	//$this->Quizz->recursive = 2;

    	if (!empty($this->data)) {
    		$this->Quizz->create();
			
			if ($this->Quizz->saveAll($this->data)) {

				$quizz_id  = $this->Quizz->getInsertID();

				foreach($this->data['QuizzsQuestion'] as $datax) {
					$datax['quizz_id'] = $quizz_id;

                	$this->Quizz->QuizzsQuestion->save($datax);
            	}
            	//$this->redirect(array('action'=>'index'));
		    }
		}
    	
    	$conditions_lihatsoal = array('Question.kelas'=>$kelas,'Question.pelajaran_id'=>$mapel);
    	$bank_soal = $this->Quizz->Question->find('all',array('conditions'=>$conditions_lihatsoal));
    	$pelajaran = $this->Quizz->Pelajaran->read(null, $mapel);
    	//save all data
    	
    	//fetch data pelajaran
    	/*$conditionz = array('Pelajaran.id'=>$mapel);
    	$pelajaranlist = $this->Quizz->Pelajaran->find('all',array('conditions'=>$conditionz));*/
    	$this->set('tipesoalID',$tipesoal);
    	$this->set('kelasID',$kelas);
    	$this->set('mapelID',$mapel);
    	$this->set('list_mapel',$pelajaranlist);
    	$this->set('data_soal',$bank_soal);
    	$this->set('pelajaranID',$pelajaran);
    	$this->layout='default_metro';
    }
    function edit_new($tipesoal,$kelas=null,$mapel=null,$idquizz){
    	$this->Quizz->recursive = 1;
    	$kuisidtable=$idquizz;

		if (!$idquizz && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Quizz', true));
			//caranya blik ke root
			$this->redirect(array('controller'=>'Questions','action'=>'index'));
		}
		//how to update
    	if (!empty($this->data)) {
		    $this->Quizz->save($this->data);
		}
		//if(empty(($this->data))){

			$conditions_selectedsoal = array('QuizzsQuestion.quizz_id'=>$idquizz);
			$selected_soal = $this->Quizz->QuizzsQuestion->find('all',
				array(
					'conditions'=>$conditions_selectedsoal,
					'order' => array('QuizzsQuestion.order' => 'asc')
					
				)
			);
			$conditions_banksoal = array('Question.quizz_id <'=>$idquizz);
			$listquiz=$this->Quizz->read(null, $idquizz);
			$bank_soal= $this->Quizz->Question->find('all',$conditions_banksoal);
	    	$this->set('soalid',$selected_soal);
	    	$this->set('kode_quizz',$idquizz);
			$this->set('data_soal',$bank_soal);
			$this->set('kelasID',$kelas);
			$this->set('mapelID',$mapel);
			$this->set('tipesoalID',$tipesoal);

			$this->set('quizz',$listquiz);	
		//}
    	$this->layout='default_metro';
    }
    function datatable($kelas,$mapel,$idquizz=null){
    	$conditions_banksoal = array('Question.kelas'=>$kelas,'Question.pelajaran_id'=>$mapel);
		$bank_soal= $this->Quizz->Question->find('all',array('conditions'=>$conditions_banksoal));
		$listquiz=$this->Quizz->read(null, $idquizz);

		$this->set('quizz',$listquiz);	
		$this->set('data_soal',$bank_soal);	
    	$this->layout='default_blank';
    }
    function edit_table_soal($kelas,$mapel,$idquizz){
		$conditions_selectedsoal = array('QuizzsQuestion.quizz_id'=>$idquizz);
		$selected_soal = $this->Quizz->QuizzsQuestion->find('all',
			array(
				'conditions'=>$conditions_selectedsoal,
				
			)
		);
		$this->set('id_kuis',$idquizz);
		$this->set('soal_kuis',$selected_soal);
		$this->set('kelasID',$kelas);	
		$this->set('mapelID',$mapel);
    	$this->layout='default_metro';
    }
    function tambah_single_soal(){
    	$this->Quizz->QuizzsQuestion->create();
    	$this->Quizz->QuizzsQuestion->save($this->data);
    }
    function hapus_single_soal($quizzid=null,$id=null){
    	//$this->Quizz->QuizzsQuestion->del($id);
		if (!$id) {
			$this->Session->setFlash('Invalid id for Task');
			$this->redirect(array('action'=>'index'), null, true);
		}
		if ($this->Quizz->QuizzsQuestion->del($id)) {
			$this->Session->setFlash('Task #'.$id.' deleted');
			$this->redirect(array('controller'=>'quizzs','action'=>'edit_table_soal/'.$quizzid));
		}
    }
	function show_pdf($id = null)
    { 
    	//Configure::write('debug',0); // Otherwise we cannot use this method while developing

    	if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
	/*	$conditions_selectedsoal = array('QuizzsQuestion.quizz_id'=>$idquizz);
		$selected_soal = $this->Quizz->QuizzsQuestion->find('all',
				array(
					'conditions'=>$conditions_selectedsoal,
					'order' => array('QuizzsQuestion.order' => 'asc')
					
				)
		);*/

		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);


        $this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
    }

}
?>