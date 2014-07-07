<?php
class EbooksController extends AppController {

	var $name = 'Ebooks';
	var $helpers = array('Html', 'Form','Excerpt','Magick');
	//var $helpers = array('Html', 'Form');
	//var $components = array('Filter');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    //$this->set('menuTab', 'Ebooks');
	    //$this->set('menuTabChild', 'Ebooks');
	    //$this->Auth->allow('download');
	}
	function index() {
		$this->Ebook->recursive = 2;

		$this->Ebook->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Video' => array(
		             'className' => 'Video',
		             'foreignKey'=> 'produksi'
		         )
		        )
		    )
		);
		
		$ebooks = $this->Ebook->find('all',array('order' => array('Ebook.created' => 'DESC')));
		$this->set('ebooks',$ebooks);

		$videos = $this->Ebook->Video->find('all',array('order' => array('Video.created' => 'DESC')));
		$this->set('videos',$videos);

	    $listCategory = $this->Ebook->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
	    $listCategoryVideo = $this->Ebook->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>2)));
		$this->set(compact('listCategory','listCategoryVideo'));
		
	}

	function ebooks() {
		$this->Ebook->recursive = 2;
		
		$ebooks = $this->Ebook->find('all');
		$this->set('ebooks',$ebooks);
	    $listCategory = $this->Ebook->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));
		
	}

	function search(){
		$keyword=$this->params['url']['keyword']; //get keyword from querystring//
		//used simpme or condition with singe value checking
		//replace ModelName with actual name of your Appmodel
		$cond=array('OR'=>array("Ebook.title LIKE '%$keyword%'","Ebook.penerbit LIKE '%$keyword%'", "Ebook.pengarang LIKE '%$keyword%'","Ebook.details LIKE '%$keyword%'")  );

		$ebooks = $this->Ebook->find('all',array('conditions'=>$cond,'order' => array('Ebook.created' => 'DESC')));
		$this->set(compact('ebooks'));
		$this->layout = 'default_blank';

	}

	function video() {
		$this->Ebook->recursive = 2;
		
		
		$this->set('Ebooks', $this->paginate());
		
		
		if($this->Auth->user('group_id')==3){
		$EbooksMurid = $this->Ebook->find('all');
		$this->set(compact('EbooksMurid'));
		
		}
		
		
	}
	function find_category($id = null ) {
		$this->Ebook->recursive = 2;
		if ($id == 'empty'){
			$ebooks = $this->Ebook->find('all',array('order' => array('Ebook.created' => 'DESC')));	
		}else{
			$conditions = array('Ebook.category_id'=>$id);
			$ebooks = $this->Ebook->find('all',array('conditions'=>$conditions,'order' => array('Ebook.created' => 'DESC')));
		}
		$this->set(compact('ebooks'));
		$this->layout = 'default_blank';

		//$this->render('find_category','ajax');
	}

	function find_category_video($id = null ) {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>$id);
		$ebooks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('ebooks'));
		//6 for BSE
		//7 for BSE Non kemendiknas
		//8 for cahracterbulding
		//9 for lifeskill
		//10 for computer
		//11 for fiksi
		//12 video Dokumenter Sejarah Indonesia
		//13 video IPTEK
		//14 video Life Skill
		//15 video Carachter Building


		$this->render('find_category_video','ajax');
	}

	function view_thumb($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
		$this->render('view_thumb','ajax');
	}
	function view_thumb_video($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
		$this->render('view_thumb_video','ajax');
	}

	function lifeskill() {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>4);
		$eboks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function carachter() {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>5);
		$eboks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ebook', $this->Ebook->read(null, $id));
		$this->layout = 'default_popup';
	}

	function view_video($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
	}
	
	function find() {
		$this->Ebook->recursive = 0;
	    $filter = $this->Filter->process($this);
	    $this->set('Ebooks', $this->paginate(null, $filter));
	    $listMataPelajaran = $this->Ebook->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
	    //$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
	    $listGuru = $this->Ebook->User->find('list',array('fields'=>'User.nama','conditions'=>array('User.group_id'=>array(1,2))));
	    
	    /*$listTahunAjaran = $this->Ebook->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.tahun','order'=>'PasTahunAjaran.id DESC'));*/
	    //$this->set(compact('assets', $this->paginate()));
	    $this->set(compact('listMataPelajaran','listGuru','listTahunAjaran'));
	    $this->set('menuTabChild', 'EbookFind');
	}


	function _uploadpdf($output_dir){
		$status = array('status'=>FALSE,'message'=>'File tidak ditemukan','filename'=>'');
		if($this->data['Ebook']['ebookfiles'])
		{
		    //$output_dir = "uploads/";
		    //ini_set("display_errors",1);
		    if(isset($this->data['Ebook']['ebookfiles']))
		    {
		        //$RandomNum   = time();
		        
		        $ImageName      = str_replace(' ','-',strtolower($this->data['Ebook']['ebookfiles']['name']));
		        $ImageType      = $this->data['Ebook']['ebookfiles']['type']; //"image/png", image/jpeg etc.
		     
		        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
		        $ImageExt       = str_replace('.','',$ImageExt);
		        if($ImageExt != "pdf")
		        {
		        	$status = array('status'=>FALSE,'message'=>'File yang diizinkan untuk diupload adalah pdf','filename'=>'');
		            
		        }
		        else
		        {
		            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
		            $NewImageName = $ImageName.'.'.$ImageExt;
		         
		            move_uploaded_file($this->data['Ebook']['ebookfiles']["tmp_name"],$output_dir. $NewImageName);
		        
		            /*$location   = "/usr/local/convert";
		            $name       = $output_dir. $NewImageName;
		            $num = count_pages($name);
		            $RandomNum   = time();
		            $nameto     = $output_dir.$RandomNum.".jpg";
		            $convert    = $location . " " . $name . " ".$nameto;
		            exec($convert);
		            for($i = 0; $i<$num;$i++)
		            {
		                $display .= "<img src='$output_dir$RandomNum-$i.jpg' title='Page-$i' /><br>"; 
		            }*/
		            $status = array('status'=>TRUE,'message'=>'','filename'=>$NewImageName);
		            
		        }
		    }
		}

		return $status;
	}


	function _createcoverpdf($pdf_file,$save_to){
		
		 
		$img = new imagick();
		 
		//this must be called before reading the image, otherwise has no effect - "-density {$x_resolution}x{$y_resolution}"
		//this is important to give good quality output, otherwise text might be unclear
		$img->setResolution(200,200);
		 
		//read the pdf
		$img->readImage("{$pdf_file}[0]");
		 
		//reduce the dimensions - scaling will lead to black color in transparent regions
		$img->scaleImage(800,0);
		 
		//set new format
		$img->setImageFormat('jpg');
		 
		// -flatten option, this is necessary for images with transparency, it will produce white background for transparent regions
		$img = $img->flattenImages();

		//savetodatabase

		 
		//save image file
		$img->writeImages($save_to, false);

		$img->destroy();

		return true;
	}


	function _convertallpdf($pdf_file,$save_to){

		$img = new imagick($pdf_file);
		 
		//this must be called before reading the image, otherwise has no effect - "-density {$x_resolution}x{$y_resolution}"
		//this is important to give good quality output, otherwise text might be unclear
		$img->setResolution(200,200);
		 
		
		 
		//reduce the dimensions - scaling will lead to black color in transparent regions
		$img->scaleImage(800,0);
		 
		//set new format
		$img->setImageFormat('jpg');
		 
		$img->setImageBackgroundColor('white');
		

		$num_pages = $img->getNumberImages();


	    // Convert PDF pages to images
	    for($i = 0;$i < $num_pages; $i++) {         

	        // Set iterator postion
	        $img->setIteratorIndex($i);

	        // Set image format
	        $img->setImageFormat('jpg');

	        // Write Images to temp 'upload' folder     
	        $img->writeImage($save_to.DS.'page'.'-'.$i.'.jpg');
	    }

	    $img->destroy();

	    return $num_pages;
	}

	function _createXMLFile($xmlfile,$numberimage)
	{
		$stringDataBody='';

		//$dir=digiBook::readFolderDirectory($imgloc);//Open location  of  image sliced
		
		$fh = fopen($xmlfile, 'w') or die("can't open file");
		
		$stringDataTop='<?xml version="1.0" encoding="iso-8859-1"?>
<content width="499" height="709">
';
		
		$stringDataBody .= '<page src="pages/images/cover.jpg" thumb="pages/images/cover.jpg"/>
';
		
		for ($i=1;$i<$numberimage;$i++){

			$stringDataBody.= '<page src="pages/images/page-'.$i.'.jpg" thumb="pages/images/page-'.$i.'.jpg"/>
';
		}

		$stringDataBottom='</content>';
		
		fwrite($fh, $stringDataTop.$stringDataBody.$stringDataBottom);//Write file name to xml file

		fclose($fh);
	}

	function _upload_cover() {
	// init
	$image_ok = TRUE;
	
		// if a file has been added
		if($this->data['File']['image1']['error'] != 4) {
			// try to upload the file
			$result = $this->upload_files('img', $this->data['File']);

			// if there are errors
			if(array_key_exists('errors', $result)) {
				// set image ok to false
				$image_ok = FALSE;
				// set the error for the view
				$this->set('errors', $result['errors']);
			} else {
				// save the url
				$this->data['Ebook']['cover'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}



	function add($type = null) {
		$status = "false";
		if (!empty($this->data)) {
			
			$this->data['Ebook']['author'] = 1;
			$this->data['Ebook']['type'] = 1;
			$typeSubmitted = $this->data['Ebook']['type'];
			
			
			// check for image
			//$image_ok = $this->_upload_cover();

			$this->data['Ebook']['tahun'] = $this->data['Ebook']['tahunBerdiri']['year'];



			$this->Ebook->create();
			if ($this->Ebook->save($this->data)) {
				$status = "true";
				$lastID  = $this->Ebook->getInsertID();

				//copy directory
				$newdirectory = WWW_ROOT.'files'.DS.'ebooks'.DS.$lastID;
				mkdir($newdirectory);

				$this->_cpyrec(WWW_ROOT.'files'.DS.'ebooks'.DS.'default',$newdirectory);

				$pdf_ok = $this->_uploadpdf($newdirectory.DS.'pdf'.DS);

				$filenamepdf = $newdirectory.DS.'pdf'.DS.$pdf_ok['filename'];
				$fileoutputjpgconvert =  $newdirectory.DS.'pages'.DS.'images'.DS.'cover.jpg';
				$this->_createcoverpdf($filenamepdf,$fileoutputjpgconvert);

				$coverpath = 'files/ebooks/'.$lastID.'/pages/images/cover.jpg';

				$pdfpath = 'files/ebooks/'.$lastID.'/pdf/'.$pdf_ok['filename'];

				
				//$this->Ebook->id = $lastID;
				
				
				//save cover path file



			

				//convert pdf
				$folderoutputconvertall = $newdirectory.DS.'pages'.DS.'images';
				$convertingall = $this->_convertallpdf($filenamepdf,$folderoutputconvertall);

				//create xml file
				$xmlfilelocation = $newdirectory.DS.'xml'.DS.'pages.xml';
				$this->_createXMLFile($xmlfilelocation,$convertingall);


				$record = $this->Ebook->read(null, $lastID);
				$this->Ebook->saveField('cover', $coverpath);
				$this->Ebook->saveField('pdffile', $pdfpath);
				$this->Ebook->saveField('jumlahhalaman', $convertingall);
				
				

				//$this->set('ebookID', $lastID);
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				
			} else {
				$status = "false";
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				/*$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));*/
			}
		}
		
		$listMataPelajaran = $this->Ebook->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$listCategory = $this->Ebook->Category->find('list',array('fields'=>'Category.nama'));
		$typeEbook = $type;
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Ebook->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','typeEbook','status','listCategory'));
		$this->layout = 'default_blank';
	}

	function add_responses($id,$status){
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ebook', $this->Ebook->read(null, $id));
		$this->layout = 'default_blank';
	}

	function edit($tipe=null,$id = null) {

		

		//type 1 for ebook 2 for video
		if (!$tipe && !$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ebook', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {

			$this->data['Ebook']['author'] = 1;
			$this->data['Ebook']['type'] = 1;
			$typeSubmitted = $this->data['Ebook']['type'];
			
			// check for image
			
			$image_ok = $this->_upload_cover();
			

			$this->data['Ebook']['tahun'] = $this->data['Ebook']['tahunBerdiri']['year']; 

			
			if ($this->Ebook->save($this->data)) {

				$status = "true";
				$flashMessage = "Berhasil Mengedit Data";
				$idtoResponse = $this->data['Ebook']['id'];
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
				//$this->Session->setFlash('Berhasil Menghapus','flash_success');
				//$this->redirect(array('action'=>'index'));
				

			} else {

				$status = "false";
				$flashMessage = "Tidak Berhasil Mengedit Data";
				$idtoResponse = 0;
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
				//$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				//$this->redirect(array('action'=>'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ebook->read(null, $id);
		}

		$this->set('ebook', $this->Ebook->read(null, $id));
		$listMataPelajaran = $this->Ebook->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$listCategory = $this->Ebook->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));
		$this->set(compact('listMataPelajaran','tipe'));

		//$this->set(compact('status','flashMessage','idtoResponse'));

		$this->layout = 'default_blank';
	}


	function edit_responses($id,$status,$flashMessage){
		
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ebook', $this->Ebook->read(null, $id));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$id);

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
		if ($this->Ebook->del($id)) {

			$directory = WWW_ROOT.'files'.DS.'ebooks'.DS.$id;
			$this->_delete_recursive($directory);

			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;
			//$this->Session->setFlash('Berhasil Menghapus','flash_success');
			//$this->redirect(array('action'=>'index'));

		}
		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}


	function administrator_index() {
		$this->Ebook->recursive = 0;
		$this->set('Ebooks', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Ebook->create();
			if ($this->Ebook->save($this->data)) {
				$this->Session->setFlash(__('The Ebook has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ebook could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ebook', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ebook->save($this->data)) {
				$this->Session->setFlash(__('The Ebook has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ebook could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ebook->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Ebook', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ebook->del($id)) {
			$this->Session->setFlash(__('Ebook deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function download($id) {
		$this->set('ebook', $this->Ebook->read(null, $id));
	}

}
?>