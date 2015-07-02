<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class adminvids extends Controller
{
    public function index()
    {
    $AdminVids_model = $this->loadModel('AdminModel');
        $AdminVids_model->addVids();
        //echo json_encode($collfeeds);
        require APP . 'view/_templates/adminHeader.php';
        require APP . 'view/admin/adminvids.php';
        require APP . 'view/_templates/footer.php';
    }
}