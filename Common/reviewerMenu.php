<!-- Navigation -->
<nav class="row navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="font:bold 20px arial" class="navbar-brand" href="../dashboard/index">TARE Journal Manager</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="MainMenu">
                <li class="active" page="invoice"><a href="../invoice/index">Upload an article <span class="sr-only">(current)</span></a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="backuprestore"><a href="../backuprestore/index">Backup & Restore</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li page="report"><a href="../report/index">Report</a></li>
                <li page="correspondence"><a href="../correspondence/index">Correspondence</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Manuscripts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Uncompleted Submissions</a></li>
                        <li><a href="#">Status of my Manuscripts under Review</a></li>
                        <li><a href="#">My Published Manuscripts</a></li>
                        <li><a href="#">My Rejected Manuscripts</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../help/reviewerGuide">Reviewer Guidelines</a></li>
                        <li><a href="../help/TandC">Terms and Conditions</a></li>
                        <li><a href="../help/contactus">Contact Us</a></li> 
                    </ul>
                </li>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="backuprestore"><a href="../backuprestore/index">Backup & Restore</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li><a class="glyphicon glyphicon-globe" href="../correspondence/notificatios"></a></li>
            </ul>

            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>     