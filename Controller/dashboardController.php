<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboardController
 *
 * @author Dev
 */
class dashboardController {

    function __construct() {
        /* Validate Session */
        if (!isset($_SESSION['username'])) {
            header("location:../user/login");
        }
    }

    //put your code here
    function IndexAction() {
        $GLOBALS['title'] = "TARE Dashboard";
    }
    
    function getNotificationsAction()
    {
        $results = dashboardModel::getLast3Notifications();
        echo json_encode(array("notifications"=>$results));
    }

}
