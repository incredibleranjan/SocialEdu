<?php


class admin extends Controller
{
    /**public function __construct() {
        if ($_SESSION['login'] == FALSE) {
            header('Location: ' . URL . '/login');
        }
        parent::__construct();
    }
    **/
    public function index()
    {
        
        $AdminVids_model = $this->loadModel('AdminModel');
        $AdminVids_model->addVids();
        //echo json_encode($collfeeds);
        require APP . 'view/_templates/adminHeader.php';
        require APP . 'view/admin/index.php';
        require APP . 'view/_templates/footer.php';
    }

    
  
}

