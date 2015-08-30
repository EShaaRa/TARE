<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reportController
 *
 * @author Dev
 */
class reportController {

    //put your code here
    function indexAction() {
        $GLOBALS['title'] = "Reports";
        $GLOBALS['sales_results'] = reportModel::getCurrentMonthSales();
    }

    function monthsalesbydateAction() {
        $report_data = reportModel::getCurrentMonthSalesByDate();
        $date_array = array();
        $sales_array = array();

        foreach ($report_data as $report) {
            array_push($date_array, $report['date']);
            array_push($sales_array, (int) $report['TotalSales']);
        }

        echo json_encode(array("dates" => $date_array, "sales" => $sales_array));
    }

    function convertpdfAction() {
        $physical_path = realpath("PDFLibrary/NPDFConvert.exe");
        $from_path = $_REQUEST['from'];
        $pdf_save_path = 'PDFConverts/' . $_REQUEST['pdf_name'];
        $argument = "$from_path $pdf_save_path";
        exec("$physical_path $argument");
        echo json_encode(array("status" => "success"));
    }

}
