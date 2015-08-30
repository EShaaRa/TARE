<?php
include 'Common/header.php';
include 'Common/menu.php';
?>
<link href="../css/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.css" rel="stylesheet"/>
<script src="../js/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.js" type="text/javascript"></script>   
<div class="row-fluid main-body">
    <div class="row">
        <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Backup</div>
            <div class="panel-body">
               Click this button to generate backup SQL script.  <button class="btn btn-success" id="btnBackup">Backup</button>
               <a id="dbbackupdownload" target="__blank">&nbsp;</a>
            </div>
        </div>
        </div>
        
        <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">Restore</div>
            <div class="panel-body">
                Upload the backup file <input type="file" id="dbrestorefile"/> <button class="btn btn-success" id="btnRestore">Restore</button>
            </div>
        </div>
        </div>
    </div> 
</div>
<?php
include 'Common/footer.php';
?>