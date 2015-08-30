<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reportModel
 *
 * @author Dev
 */
class reportModel {
    //put your code here
    
    public static function getCurrentMonthSales()
    {
        $date  = date('Y-m-d');
        $sql ="SELECT SUM(amount) as TotalSales,invoice_id,date FROM `payment` WHERE YEAR(date)=YEAR('$date') AND MONTH(date)=MONTH('$date') GROUP BY invoice_id";
        $sales_result = dbFactory::getFactory($sql)->select_data();
        return $sales_result;
    }
    
    public static function getCurrentMonthSalesByDate()
    {
        $date  = date('Y-m-d');
        $sql = "SELECT SUM(amount) as TotalSales,date FROM `payment` WHERE YEAR(date)=YEAR('$date') AND MONTH(date)=MONTH('$date') GROUP BY date";
        $report_result = dbFactory::getFactory($sql)->select_data();
        return $report_result;
    }
}
