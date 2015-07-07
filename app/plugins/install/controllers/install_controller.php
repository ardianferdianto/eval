<?php
/**
 * Install Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class InstallController extends InstallAppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
    var $name = 'Install';
/**
 * No models required
 *
 * @var array
 * @access public
 */
    var $uses = null;

	var $appLicationName = 'EVALUASI SD';
/**
 * No components required
 *
 * @var array
 * @access public
 */
    var $components = null;
    //var $components = array('Session');

	//default licoff
	var $licoffdefault ='1-4-3-1318566926-eccbc';
	
	//URL SITE
	var $urlDefault ='http://localhost/eval_sd/';
/**
 * beforeFilter
 *
 * @return void
 */
    function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow('*');
        $this->layout = 'install';
        App::import('Component', 'Session');
        $this->Session = new SessionComponent;
		$appLicationName = 'EVALUASI SD';
		$this->set('appLicationName',$appLicationName);
		$urlSite = 'http://localhost/eval_sd/';
		$this->set('urlSite',$urlSite);
    }
/**
 * Step 0: welcome
 *
 * A simple welcome message for the installer.
 *
 * @return void
 */
    function index() {
		$path = CONFIGS .'install.ini';
		
		if (file_exists($path)){
			$this->redirect($this->urlDefault);
		}
        $this->pageTitle = __('Welcome: Selamat Datang di Instalasi', true);
		$this->Session->delete('Install');
		
		
    }
	
	function precheck() {
		//$this->__checkInstallation();
		
        $this->pageTitle = __('Pre-Installation: Pengecekan System', true);
		$results['php'] = $this->__validatephp();
		$results['connection'] = $this->__validateConection();
		$results['browser'] = $this->__validateBrowser();
		
		$this->set('validateTest',$results);
		$this->set('allOke',$results['browser']['status']);
		if (($results['php']['status']== 1) && ($results['browser']['status']== 1)){
			$this->set('allOke',1);
			$this->Session->write('Install.preCheck',true);
		}else{
			$this->set('allOke',0);
		}
		

		
		
    }

	function __validatephp() {
		$results = array();
		//$results = ['results'];
		$i =0;
		if (version_compare(PHP_VERSION, '5.0.0', '<')) {	
			$message = $appLicationName.' membutuhkan PHP versi 5.2. atau lebih Your PHP version: ' . PHP_VERSION;
	      	$results['message'] = $message;
			$results['status'] = 0;
		} else if (version_compare(PHP_VERSION, '5.1.0','<=')) {
			$message = 'Versi PHP anda ' . PHP_VERSION . $appLicationName. '. berjalan sempurnadi PHP versi 5.2 atau lebih ';
	      	$results['message'] = $message;
			$results['status'] = 2;
		
	    } else {
			$message = $this->appLicationName.' membutuhkan PHP versi 5.2. atau lebih.';
			$results['message'] = $message;
			$results['status'] = 1;
	    }
		
		return $results;
	  }
	
	function __validateConection()
	{
		//Initiates a socket connection to www.itechroom.com at port 80
		$conn = @fsockopen("www.eschool-indonesia.com", 80, $errno, $errstr, 5);
		if (!$conn)
		{
			$results['message'] = 'Anda tidak terhubung dengan koneksi internet, Kami menyarankan anda terhubung dengan internet';
			$results['status'] = 0;
			
			
		}
		else
		{
			$results['message'] = 'Anda terhubung dengan koneksi internet.';
			$results['status'] = 1;
			
		}
		return $results;
	}
	
	function __validateBrowser(){
		App::import('Vendor', 'Install.browser');
		$browser = new Browser();
		if( $browser->getBrowser() == Browser::BROWSER_CHROME && $browser->getVersion() >= 5 ) {
			$results['message'] = $this->appLicationName.' dan instalasi '. $this->appLicationName.' berjalan sempurna di chrome 5.0 atau lebih.';
			$results['status'] = 1;
		}else{	
			$results['message'] = $this->appLicationName.' dan instalasi '. $this->appLicationName.' membutuhkan chrome versi 5 atau lebih, silahkan install terlebih dahulu';
			$results['status'] = 0;
		}
		return $results;
	}
/**
 * Step 1: database
 *
 * @return void
 */
    function database() {
		//$this->__checkInstallation();
		
		//if (!$this->Session->check('Install.preCheck')) {
		//	$this->redirect(array('action' => 'index'));
		//}
		
        $this->pageTitle = __('Langkah 1: Persiapan Database', true);

        if (!empty($this->data)) {
			
			$link = mysql_connect($this->data['Install']['host'], $this->data['Install']['login'], $this->data['Install']['password']);
			
			$databases = array();
			$databases['dbapp'] = "evaluasi_sd";

			
			if (!$link) {
			    
				$this->Session->setFlash(__('Tidak dapat terhubung ke database, periksa login dan password DB anda.', true));
				
			}else{
				$this->Session->write('Install.hostDb', $this->data['Install']['host']);
				$this->Session->write('Install.loginDb', $this->data['Install']['login']);
				$this->Session->write('Install.passwordDb', $this->data['Install']['password']);
				
            	$db_count =0;
				
				foreach($databases as $database => $db_name){
					$sql = "CREATE DATABASE $db_name";
					if (mysql_query($sql, $link)){
					$db_count ++;
					}
				}
				if ($db_count == 1) {

					// Save the ini file
					
					$this->Session->write('Install.databaseCreated', true);
					
					$this->redirect(array('action' => 'data_sekolah'));
					
	                
				} else {
					$this->Session->write('Install.hostDb', $this->data['Install']['host']);
					$this->Session->write('Install.loginDb', $this->data['Install']['login']);
					$this->Session->write('Install.passwordDb', $this->data['Install']['password']);
					$this->Session->setFlash(__('Erorr Database penginstallan sudah ada sebelumnya, silahkan dihapus terlebih dahulu.', true));
				    $this->set('databaseInstalled',true);
					$this->set('url',$this->urlDefault.'install/database/delete:1');
				}
            }
        }

		if (isset($this->params['named']['delete'])) {
			
			$link = mysql_connect($this->Session->read('Install.hostDb'), $this->Session->read('Install.loginDb'), $this->Session->read('Install.passwordDb'));
			
			$databases = array();
			$databases['dbapp'] = "evaluasi_sd";

			
			if (!$link) {
			    
				$this->Session->setFlash(__('Tidak dapat terhubung ke database, periksa login dan password DB anda.', true));
				
			}else{
				
            	$db_count2 =0;
				
				foreach($databases as $database => $db_name){
					$sql = "DROP DATABASE $db_name";
					if (mysql_query($sql, $link)){
					$db_count2 ++;
					}
				}
				
				
				
				if ($db_count2 == 1) {
					$this->Session->setFlash(__('<strong>Sukses:</strong> menghapus database, silahkan lanjutkan penginstalan.', true));
					$this->redirect(array('action' => 'database'));

				} else {
					$this->Session->setFlash(__('<strong>Erorr:</strong> Tidak dapat menghapus database, silahkan hapus secara manual', true));
				}
			}
		}
    }

	function data_sekolah() {
		$this->loadModel('Install.Data');
		//$this->__checkInstallation();
		
		$zend_display = $this->getZendidLocal();
		
		$this->set('zend_display',$zend_display);
		
		//cek db Install
		
		//if (!$this->Session->check('Install.databaseCreated')) {
		//	$this->redirect(array('action' => 'index'));
		//}
		
		$this->pageTitle = __('Langkah 2: Profile Sekolah', true);
		
		//cek license key first
		
        if (!empty($this->data)) {
			$this->Data->set($this->data);
			if ($this->Data->validates()) {
				
				// write data to session  file
				$this->Session->write('Install.profile_name', $this->data['Data']['profile_name']);
				$this->Session->write('Install.profile_alamat', $this->data['Data']['profile_alamat']);
				$this->Session->write('Install.profile_telp', $this->data['Data']['profile_telp']);
				$this->Session->write('Install.profile_tahunBerdiri', $this->data['Data']['profile_tahunBerdiri']);
				$this->Session->write('Install.profile_status', $this->data['Data']['profile_status']);
				$this->Session->write('Install.profile_email', $this->data['Data']['profile_email']);
				
				$this->Session->write('Install.licenseKey', 'Trial Version');
				$this->Session->write('Install.ionoCreated', true);
				$this->Session->write('Install.licVal', 'Trial Version');
                $this->redirect(array('action' => 'data'));
	        
	        //IF LOCAL ACTIVATE
			
			}else{
				$this->Session->setFlash(__('Data erorr, tidak dapat melanjutkan proses, silahkan ulangi <br/> Perhatikan kolom merah untuk data yang erorr dibawah', true));
			}
		}
		
        
    }
/**
 * Step 2: insert required data
 *
 * @return void
 */
    function data() {
		
		//$this->__checkInstallation();
		
		//if (!$this->Session->check('Install.profileCreated')) {
		//	$this->redirect(array('action' => 'index'));
		//}
		$this->set('footerSpecial',true);
        $this->pageTitle = __('Step 3: Proses Instalasi', true);
		$this->Session->write('Install.completeInstall', 0);
		$this->Session->write('Install.startInstall', true);

		$showdatasubmitted = $this->Session->read('Install');
		
		$this->set('showdatasubmitted',$showdatasubmitted);
        
		

        
    }
	
	function runDbApp1(){
		if (isset($this->params['named']['run'])) {
			
            App::import('Core', 'File');
            App::import('Model', 'ConnectionManager');
            $db = ConnectionManager::getDataSource('default');

            if(!$db->isConnected()) {
                $this->Session->setFlash(__('Could not connect to database.', true));
            } else {
                $this->__executeSQLScript($db, CONFIGS.'sql'.DS.'eval_final.sql');
				//$this->__saveInifile();
				//Configure::write('debug', '0');
				$currentInstall = $this->Session->read('Install.completeInstall');
				$add = ($currentInstall)+1;
				$this->Session->write('Install.completeInstall', $add);
				$this->__cekCompleteInstall();
				$this->set('checkInstall',$this->Session->read('Install.completeInstall'));
				$this->render('/install/successInstallApp1','ajax');
                //$this->redirect(array('action' => 'finish'));
            }
        }
	}
	
	
	
	function __cekCompleteInstall(){
		$totalInstalled = $this->Session->read('Install.completeInstall');
		if($totalInstalled == 1){
			
			$this->set('url', $this->urlDefault.'install/finish');
			
			
			
		}else{
			
		}
		
	}
/**
 * Step 3: finish
 *
 * Remind the user to delete 'install' plugin.
 *
 * @return void
 */
    function finish() {
		//$this->__checkInstallation();
        $this->pageTitle = __('Selamat, Instalasi berhasil dilakukan', true);
		//if (!$this->Session->check('Install.startInstall')) {
		//	$this->redirect(array('action' => 'index'));
		//}else{
			$this->Session->setFlash(__('Selamat '.$appLicationName.' sudah terinstall.', true));
			$this->__updateDatabaseProfile();
			$this->Session->delete('Install');
			
			
		//}
        
		Configure::write('debug', '0');
    }

	function deleteInstallFolder(){
		App::import('Core', 'Folder');
        $this->folder = new Folder;
        if ($this->folder->delete(APP.'plugins'.DS.'install')) {
            $this->redirect($this->urlDefault);
        } else {
            $this->Session->setFlash(__('Could not delete installation files.', true));
        }
	}
	
	function __updateDatabaseProfile(){
		$today = date('Y-m-d H:i:s');
		App::import('Model', 'ConnectionManager');
		$db = ConnectionManager::getDataSource('default');
		if(!$db->isConnected()) {
			
		}else{
			
			
			$statement =  'INSERT INTO `profiles` VALUES (1, "'.$this->Session->read('Install.profile_name').'", "'.$this->Session->read('Install.profile_alamat').'", "'.$this->Session->read('Install.profile_telp').'", 1987, 1, "'.$this->Session->read('Install.profile_email').'", "'.$this->Session->read('Install.licenseKey').'", "'.$this->Session->read('Install.licVal').'", "img/2011-09-01-200407tut-wuri-handayani.png", 1, 2, 3, 1, 2, 3, "'.$today.'", "'.$today.'");';
			
			$this->__saveInifile();
			$db->query($statement);
			
		}
		
	}
	
	function __saveInifile(){
		//$content = str_replace('{default_database}', $this->data['Install']['database'], $content);
		
		$install = $this->Session->read('Install');
		//$install['date'] = date('Y-m-d H:i:s');
        $settings = array();
		foreach ($install as $field => $value) {
			$settings[] = $field .' = "'. $value .'"';
		}
		
		$path = CONFIGS .'install.ini';
		$contents = implode("\n", $settings);
		
		$this->File = new File($path, true, 0777);
		$this->File->open('w', true);
		$this->File->write($contents);
		$this->File->close();
        // write database.php file
        //$content = str_replace('{default_host}', $this->data['Install']['host'], $content);
        //$content = str_replace('{default_login}', $this->data['Install']['login'], $content);
        //$content = str_replace('{default_password}', $this->data['Install']['password'], $content);
        //$content = str_replace('{default_database}', $this->data['Install']['database'], $content);
        if($this->File->write($contents) ) {
			$this->Session->delete('Install');
        } else {
            $this->Session->setFlash(__('Could not write database.php file.', true));
        }
	}
/**
 * Execute SQL file
 *
 * @link http://cakebaker.42dh.com/2007/04/16/writing-an-installer-for-your-cakephp-application/
 * @param object $db Database
 * @param string $fileName sql file
 * @return void
 */
    function __executeSQLScript($db, $fileName) {
        $statements = file_get_contents($fileName);
        $statements = explode(';', $statements);

        foreach ($statements as $statement) {
            if (trim($statement) != '') {
                $db->query($statement);
            }
        }
    }

	function __dropdatabaseInstalled(){
		$databases = array();
		$databases['dbapp'] = "etsd";
		foreach($databases as $database => $db_name){
			$sql = "DROP DATABASE $db_name";
			if (mysql_query($sql, $link)){
			$db_count ++;
			}
		}
	}

	/*function __getLineonInstall($db, $fileName) {
        $statements = file_get_contents($fileName);
        $statements = explode(';', $statements);
		$total_line =array;
        foreach ($statements as $statement) {
            $total_line ++;
        }
		return $total_line;
    }*/
	
	function __checkInstallation() {
		
		$path = CONFIGS .'install.ini';
		
		if (file_exists($path)){
			$this->Session->delete('Install');
			$this->redirect('$this->urlDefault');
		}

		// If progress hasn't begun, redirect
		if ($this->action != 'precheck') {
			if (!$this->Session->check('Install')) {
				$this->redirect(array('action' => 'index'));
			}
		} else {
			if (!$this->Session->check('Install')) {
				$this->Session->write('Install', array());
			}
		}

	}
	
	function __ionLicense($lic_key) {
	//return true;
	// Clean up variables for security
	//unset($home_url_site, $home_url_iono, $user_defined_string, $request, $header, $return, $fpointer, $content, $status, $hash);
	
	}
	
	
	function getZendidLocal(){

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
}
?>