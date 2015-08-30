
<?php
include 'Common/initial_header.php';
include 'Common/footer.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../css/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.css" rel="stylesheet"/>
        <script src="../js/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.js" type="text/javascript"></script>   
    </head>
    <body>
        <style>
            body{
                background-image: url(../images/bg1.jpg);
                background-repeat: no-repeat;
                background-size: 100%; 
            }
        </style> 
        <!--Body Section-->
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12" style="position: absolute; top: 23%;">
                <div class="panel panel-success text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Login</h3>
                    </div>
                    <div class="panel-body">
                        <img src="../images/login.png"/><br/><br/>
                        <form>
                            Login as: <br>
                            <input type="radio" name="login" value="Author" id="Author" checked="true">Author &nbsp;
                            <input type="radio" name="login" value="Reviewer" id="Reviewer">Reviewer &nbsp;
                            <input type="radio" name="login" value="Editor" id="Editor">Editor <br>
                            <br>
                            <input type="text" placeholder="Username" name="username" id="username"/><br/>
                            <input type="password" placeholder="Password" name="password" id="password"/><br/>
                            <input type="checkbox" id="rememberme" name="remember" />                       
                            <label for="remember">&nbsp; Remember me</label> <br/>  
                            <button id="btnLogin" class="btn btn-success">
                                <span class="glyphicon glyphicon-log-in"></span> Login
                            </button>   <br>                         
                            <div class="alert alert-danger clearfix" id="LoginErrorMessage" role="alert">
                                Invalid Username or Password
                            </div><!--<input type="button" name="btnLogin" value="Login" /><br>                            -->
                            <a href="">Forgot username or password?</a><br/>
                            <a href="../user/register">Not a user? Register with us </a>
                        </form>
                    </div>
                </div>

            </div>

            <!-- Wait Box Modal -->
            <div class="modal fade" id="WaitBox">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-center">
                                <img src="../images/loading.gif" height="70"> <br/>
                                <span class="WaitBox">Please Wait...</span>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>

            <!-- Popup Alert -->
            <div class="modal fade" id="PopupAlert">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"><img src="../images/min-logo.png"/>&nbsp;<span id="PopupAlertTitle">Modal title</span></h4>
                        </div>
                        <div class="modal-body" id="PopupModalMessage">

                        </div>
                        <div class="modal-footer">
                            <button id="btnYes" class="btn btn-primary">Yes</button>                            
                            <button id="btnOK" class="btn btn-primary" data-dismiss="modal">OK</button>
                            <button id="btnNo" class="btn btn-danger" data-dismiss="modal">No</button>
                            <button id="btnCancel" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div> 
    </body>
</html>
