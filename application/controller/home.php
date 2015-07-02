<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    public function __construct() {
        if ($_SESSION['login'] == FALSE || $_SESSION['username'] == FALSE ) {
            header('Location: ' . URL . 'login');
       }
        parent::__construct();
 }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        $feed_model = $this->loadModel('FeedModel');
        $feeds = $feed_model->getAllFeeds();
       // echo json_encode($feeds);
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
    
    public function postFeed($postFeedVal) {
        //echo $postFeedVal;
        $feed_model = $this->loadModel('FeedModel');
        $feed_model->addFeeds($postFeedVal);
        $latestComment=$feed_model->getLastFeed();
        //echo 'hi';
        //$this->js->add_var('latestComment',$latestComment);
        //echo $_POST['newfeed'];
        echo json_encode($latestComment);
    }
    public function getFeed() {
        $feed_model = $this->loadModel('FeedModel');
        $feeds = $feed_model->getFeed();
        response.write("hhhh");
    require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function checkProfile($t){
        $data_model = $this->loadModel('DataModel');
        $data=$data_model->viewProfile($t);
        echo json_encode($data);
        //response.write(console.log);
    require APP . 'view/_templates/header.php';
        require APP . 'view/profile/profileview.php';
        require APP . 'view/_templates/footer.php';
        
    }
}
