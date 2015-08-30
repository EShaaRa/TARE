<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="../js/start/jquery-ui.min.css" rel="stylesheet"/>
        <link href="../css/style.css" rel="stylesheet"/>

        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/start/jquery-ui.min.js" type="text/javascript"></script>
        <script src="../js/charts/highcharts.js" type="text/javascript" ></script>
        <script src="../js/charts/highcharts-3d.js" type="text/javascript" ></script>
        <script src="../js/charts/modules/exporting.js" type="text/javascript" ></script>
        <script src="../js/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="../js/common.js" type="text/javascript"></script>

    </head>
    <body>
        <!-- Header Section -->
        <header class="row bg-success no-print">
            <div class="col-lg-1 col-md-1 col-sm-2">
                <img src="../images/logo.gif" width="100" height="120"/>
            </div>
            <div class="col-lg-4">               
                <p style="font: bold 25px arial, sans-serif;color: #25444F; text-shadow: 2px 2px #ADFB63;"> Manuscript Management System</p>
                <p style="font: bold 25px arial, sans-serif;color: #25444F; text-shadow: 2px 2px #ADFB63;"> Faculty of Agriculture</p>
                <p style="font: 20px arial, sans-serif;color: #25444F; text-shadow: 1px 1px #ADFB63;"> University of Ruhuna </p>
            </div>          
        </header>

        <!-- Alerts-->
        <div class="row alert alert-warning alert-dismissible" id="WarningAlert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong><span class="alert-text">Your password is about to expire in 3 days.</span>
        </div>
        <div class="row alert alert-info alert-dismissible" id="SuccessAlert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong><span class="alert-text"> Data Sucessfully Saved.</span>
        </div>
        <div class="row alert alert-danger alert-dismissible" id="DangerAlert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong> <span class="alert-text">Mail Send Error!.</span>
        </div>