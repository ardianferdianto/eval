<?php
class HalamenController extends AppController {

	var $name = 'Halamen';
	var $helpers = array('Html', 'Form');
	
	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
		//$this->Auth->allow('logout','login');
		//$this->Auth->allow('*');
		//$this->set('menuTab', 'admin');
		//$this->set('menuTabChild', 'matpel');
	    
		
	}
	
	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->set('halaman', $this->Halaman->read(null, $id));
		$this->layout = 'default_blank';
	}

	function view_single($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tipe','edit');
		$halaman = $this->Halaman->read(null, $id);

		$template = $halaman['Halaman']['template_type'];

		if($template == 1){
			$template = 'text';
		}else{
			$template = 'file';
		}

		$this->set('halaman',$halaman);
		$this->set('template',$template);
		
		$this->layout = 'default_blank';
	}

	function add() {
		$this->Halaman->recursive = 1;
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Halaman']['title'];

			$this->Halaman->create();
			if ($this->Halaman->save($this->data)) {
				
				
				$idtoResponse  = $this->Halaman->getInsertID();

				
				$status = "true";
				$flashMessage = "Berhasil Menambahkan Halaman baru";
				
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Menambahkan Halaman Ajar";
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));

			}
		}


	}


	function add_responses($idtoResponse,$status,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		//$this->set('nametoResponse',$nametoResponse);

		$this->set('page', $this->Halaman->read(null, $idtoResponse));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);


		$this->layout = 'default_blank';
	}





	function edit($id = null) {
		$this->Halaman->recursive = 1;
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Halaman']['title'];
			$idtoResponse  = $this->data['Halaman']['id'];
			//$this->Halaman->create();
			if ($this->Halaman->save($this->data)) {

				$status = "true";
				$flashMessage = "Berhasil Mengupdate Halaman";
				
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Mengupdate Halaman";
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));

			}
		}


	}


	function edit_responses($idtoResponse,$status,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		//$this->set('nametoResponse',$nametoResponse);

		$this->set('page', $this->Halaman->read(null, $idtoResponse));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);


		$this->layout = 'default_blank';
	}

	

	function delete($id = null) {
		$status = "false";
		$flashMessage = "";
		$idtodelete = "";
		if (!$id) {
			$status = "false";
			$flashMessage = "Tidak Berhasil Menghapus";
			$idtodelete = "";
			//$this->Session->setFlash('Tidak Berhasil Menghapus','flash_erorr');
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Halaman->del($id)) {

			//$directory = WWW_ROOT.'files'.DS.'ebooks'.DS.$id;
			//$this->_delete_recursive($directory);

			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;
			//$this->Session->setFlash('Berhasil Menghapus','flash_success');
			//$this->redirect(array('action'=>'index'));

		}
		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}

	

	function uploadfiles(){
		$this->autoRender = false;
		$str_random  = $this->_str_random(8);
		$file = $this->data['Halaman']['mediafiles']; // your file upload input field in the form should be named 'file'
		$idfolder = $this->data['Halaman']['lessonId'];

		if($file)
		{
			
			$output_dir = WWW_ROOT.'files'.DS.'lessons'.DS.$idfolder.DS.'images'.DS.'pages'.DS;
			
		    //$output_dir = "uploads/";
		    //ini_set("display_errors",1);
		    if(isset($file))
		    {
		        //$RandomNum   = time();
		        
		        $ImageName      = str_replace(' ','-',strtolower($this->data['Halaman']['mediafiles']['name']));
		        $ImageType      = $this->data['Halaman']['mediafiles']['type']; //"image/png", image/jpeg etc.
		     
		        $ImageExt 		= substr($ImageName, strrpos($ImageName, '.'));
		        $ImageExt       = str_replace('.','',$ImageExt);
		        
	            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	            $NewImageName   = $ImageName.'_'.$str_random.'.'.$ImageExt;

	            if($ImageExt == 'jpg' || $ImageExt == 'png' || $ImageExt == 'jpeg' || $ImageExt == 'gif' || $ImageExt == 'tiff'){
	            
	            	$fileType = 'image';
	            
	            }elseif ($ImageExt == 'mp4' || $ImageExt == 'flv' || $ImageExt == 'Webm') {
	            	
	            	$fileType = 'video';
	            
	            }elseif ($ImageExt == 'swf') {
	            	
	            	$fileType = 'animation';
	            }



	         
	            move_uploaded_file($this->data['Halaman']['mediafiles']["tmp_name"],$output_dir. $NewImageName);
	        	
	            $obj['status'] = TRUE;
	            $obj['idfolder'] = $idfolder;
	            $obj['file_name'] = $NewImageName;
	            $obj['file_extension'] = $ImageExt;
	            $obj['file_type'] = $fileType;
	            $result = $obj;

		            
		        
		    }
		}



		header('Content-type: text/json');
    	header('Content-type: application/json');
	    echo json_encode($result);
	}




}
?>