<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of correspondenceModel
 *
 * @author Dev
 */
class correspondenceModel {


    public static function sendSMS($mobile,$message)
    {
        $comport = "COM11";
         $physical_path = realpath("Model/SMSGateway/NSMSGateway.exe");
          $argument = "" . $comport . " $mobile $message";
        exec("$physical_path $argument");
        return true;
    }
    //put your code here
    /**
     * 
     * @param type $from - From Email Address
     * @param type $to - To Email Array("email"=>"jon@gmail.com")
     * @param type $subject -String Subject
     * @param type $message - Html String Message
     * @return boolean
     */
    public static function sendTxtEmail($from, $to, $subject, $message) {

        require_once "Model/PearMail/Mail.php";
        $subject = $subject;
        $body = $message;

        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject,
            'MIME-Version' => '1.0',
            'Content-Type' => "text/html; charset=ISO-8859-1"
        );

        $smtp = Mail::factory('smtp', array(
                    'host' => 'ssl://smtp.gmail.com',
                    'port' => '465',
                    'auth' => true,
                    'username' => 'esoftphpadvance1',
                    'password' => 'abc@123#',
                    'html' => true
        ));

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail)) {
            return '<p>' . $mail->getMessage() . '</p>';
        } else {
            return '<p>Message successfully sent!</p>';
        }
    }

}
