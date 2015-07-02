<?php

class admindelusers extends Controller
{
   
    public function index()
    {
        
        $users_model = $this->loadModel('UsersModel');
        $users = $users_model->getAllData();
        echo json_encode($users);
        //echo 'hello';
        require APP . 'view/_templates/adminHeader.php';
        require APP . 'view/admin/admin-del_users.php';
        require APP . 'view/_templates/footer.php';
    }
   
   public function removeUsers($t)
    {
       $removeusers_model = $this->loadModel('AdminModel');
        $removeusers_model->removeUsers($t);
        require APP . 'view/_templates/adminHeader.php';
        require APP . 'view/admin/admin-del_users.php';
        require APP . 'view/_templates/footer.php';
    }
}


