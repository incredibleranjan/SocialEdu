<?php
/**
 * Class profile
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class profileedit extends Controller
{
    public function __construct() {
      if ($_SESSION['login'] == FALSE) {
        header('Location: ' . URL . '/login');
   }
   parent::__construct();
   }
   
    public function index()
    {
        // debug message to show where you are, just for the demo
        //echo 'Message from Controller: You are in the controller profile, using the method index()';
        $data_model = $this->loadModel('DataModel');
        $data=$data_model->getAllData();
        echo json_encode($data);
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/profile/profile-edit.php';
        require APP . 'view/_templates/footer.php';
    }
public function updateData()
    {
        $data_model = $this->loadModel('DataModel');
        $data_model->updateAllData();
        require APP . 'view/_templates/header.php';
        require APP . 'view/profile/profile-edit.php';
        require APP . 'view/_templates/footer.php';
    }
    
}
