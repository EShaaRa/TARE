<?php
include 'Common/header.php';
include 'Common/menu.php';
include 'Common/footer.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../css/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.css" rel="stylesheet"/>
        <script src="../js/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.js" type="text/javascript"></script>   
    </head>
    <body>
        <div class="container-fluid">
        <p style="font-size:16px;">
            <b>Contact Us</b>
        </p>
        <p style="font-size:12px;">
            <b>You have a problem with TMMS? Ask us! or feedback us!</b>
        </p>
        <table width="100%" cellspacing="0" cellpadding="5" border="0" style="background-color:#eeeeee;">
            <tr> <td>&nbsp;</td></tr>
            <tr>
                <td align="right">
                    <b>Name:&nbsp; </b>
                </td>
                <td>
                    <input type="text" name="name" size="44">
                    * You must provide your name.
                </td>
            </tr>
            <tr> <td>&nbsp;</td></tr>
            <tr>
                <td align="right">
                    <b>E-mail:&nbsp; </b>
                </td>
                <td>
                    <input type="text" name="email" size="44">
                    * You must provide your email.
                </td>
            </tr>
            <tr> <td>&nbsp;</td></tr>
            <tr>
                <td align="right">
                    <b>Your Message/Feedback:&nbsp; </b>
                    <br> 
                </td>
                <td>
                    <textarea rows="10" cols="42" name="question"></textarea>
                </td>
            </tr>
        <!--    <tr> <td>&nbsp;</td></tr>
            <tr>
                <td></td>
                <td>
                    <button id="btnSubmit" class="btn btn-success"> Send </button>&emsp;
                    <button id="btnCancel" class="btn btn-success"> Cancel </button>
                </td>
            </tr>-->
        </table>
        <button id="btnSubmit" class="btn btn-success"> Send </button>&emsp;
        <button id="btnCancel" class="btn btn-success"> Cancel </button>
        </div>
    </body>