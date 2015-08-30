<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of correspondenceController
 *
 * @author Dev
 */
class correspondenceController {

    //put your code here
    public function indexAction() {
        $GLOBALS['title'] = "Correspondence";
    }

    public function sendemailAction() {
        $to = $_REQUEST['to'];
        $from = $_REQUEST['from'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        correspondenceModel::sendTxtEmail($from, $to, $subject, $message);
        echo json_encode(array("Success" => true));
    }

    

    public function sendsmsAction() {
        $mobile = $_REQUEST['mobile'];
        $msg = $_REQUEST['msg'];
        correspondenceModel::sendSMS($mobile, $msg);
        echo json_encode(array("Status"=>true));
    }

}
