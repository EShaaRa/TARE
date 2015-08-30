<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboardModel
 *
 * @author Dev
 */
class dashboardModel {
    //put your code here
    public static function getLast3Notifications()
    {
        $sql ="SELECT * FROM notifications ORDER BY notification_id DESC LIMIT 0,3";
        $results = dbFactory::getFactory($sql)->select_data();
        return $results;
    }
}
