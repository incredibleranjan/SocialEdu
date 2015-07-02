
<?php

/**
 * Class Login
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Login extends Controller {

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index() {
        //echo 'hi';
       // $name=4;
        $login_model = $this->loadModel('LoginModel');
        $reslt = $login_model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
        //echo $name;
        //echo 'hi2';
        echo $reslt;
        if ($reslt == 'login') {
            $_SESSION['login'] = TRUE;
            header('Location: ' . URL . 'home');
            
        } else if ($reslt == 'admin') {
            $_SESSION['admin'] = TRUE;
            header('Location: ' . URL . 'admin');
            require APP . 'view/_templates/adminHeader.php';
            require APP . 'view/admin/index.php';
            require APP . 'view/_templates/footer.php';
        } else {
            
            require_once APP . 'view/_templates/headerWithoutMenu.php';
            require APP . 'view/login/index.php';
            require APP . 'view/_templates/footer.php';
        }
    }

}
