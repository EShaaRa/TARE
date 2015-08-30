<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of backuprestore
 *
 * @author Dev
 */
class backuprestoreController {
    //put your code here
    function indexAction(){
        $GLOBALS['title']="Backup & Restore";
    }
    
    function backupAction()
    {
         $db_name = "inventory_control";
        $file_name = 'Backups/' . $db_name . '_' . date('Y-m-d') . '_' . date('U') . '.sql';
        require_once("Model/Backup/iam_backup.php");
        $backup = new iam_backup("localhost", "$db_name", "root", "", false, true, false, $file_name);
        $backup->perform_backup(); //Factory method
//        header('Content-Description: File Transfer');
//        header('Content-Type: application/octet-stream');
//        header('Content-Disposition: attachment; filename=' . basename($file_name));
//        header('Content-Transfer-Encoding: binary');
//        header('Expires: 0');
//        header('Cache-Control: must-revalidate');
//        header('Pragma: public');
//        header('Content-Length: ' . filesize($file_name));
//        ob_clean();
//        flush();
//        readfile($file_name);
//        //After download remove the file from server
//        exec('rm ' . $file_name);
        echo json_encode(array("success" => true,"filename"=>$file_name));
    }
    
    function restoreAction()
    {
        $files = $_FILES['dbrestorefile'];
        move_uploaded_file($files['tmp_name'], 'Backups/restore_' . $files['name']); //name is a default object in files array
        //Before writing below codes can move the restore file to Backup folder
        require_once("Model/Backup/iam_restore.php");
        $restore = new iam_restore('Backups/restore_' . $files['name'], "localhost", "inventory_control", "root", "");
        $restore->perform_restore();
        unlink('Backups/restore_' . $files['name']); //Delete the file from the folder
        echo json_encode(array("success" => true)); 
    }
}
