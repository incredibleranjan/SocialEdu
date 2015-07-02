<?php


class admindelcoll extends Controller
{
   /** public function __construct() {
        if ($_SESSION['login'] == FALSE) {
            header('Location: ' . URL . '/login');
        }
        parent::__construct();
    }
   **/
    public function index()
    {
        $Collfeeds_model = $this->loadModel('CollfeedsModel');
        $collfeeds = $Collfeeds_model->getAllCollfeeds();
        echo json_encode($collfeeds);
        require APP . 'view/_templates/adminHeader.php';
        require APP . 'view/admin/admin-del-mycollege.php';
        require APP . 'view/_templates/footer.php';
    }

    public function removeFeeds($t)
    {
        //if (!$t) {
          //  header('Location: ' . URL . '/admindelcoll');
        //}
        $removefeeds_model = $this->loadModel('AdminModel');
        $removefeeds_model->removeCollFeeds($t);
        //echo $_POST['title'];
       require APP . 'view/_templates/adminHeader.php';
        require APP . 'view/admin/admin-del-mycollege.php';
       require APP . 'view/_templates/footer.php';
    }
}

