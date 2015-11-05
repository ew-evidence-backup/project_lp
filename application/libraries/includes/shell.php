<!-- Sidebar -->
<?php if ($_SESSION['data'][0]['UserID'] == '') {

    header('location: /');

} elseif ($_SESSION['data'][0]['Type'] == 'player') {

    header('location: /');

} elseif ($_SESSION['data'][0]['IsActive'] == 0) {

    header('location: /');

} ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashboard">InboxTrivia.com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="reports"><i class="fa fa-bar-chart-o"></i> Reports</a></li>
            <li><a href="users"><i class="fa fa-table"></i> Users</a></li>
            <li><a href="questions"><i class="fa fa-edit"></i> Questions</a></li>
            <li><a href="categories"><i class="fa fa-edit"></i> Categories</a></li>
            <li><a href="email_preferences"><i class="fa fa-edit"></i> Email Preferences</a></li>
            <li><a href="scores"><i class="fa fa fa-bar-chart-o"></i> Scores</a></li>
            <li><a href="achievements"><i class="fa fa-desktop"></i> Achievements</a></li>
            <li><a href="ads"><i class="fa fa-file"></i> Ads</a></li>
            <li><a href="system"><i class="fa fa-wrench"></i> System</a></li>
            <!--            <li class="dropdown">-->
            <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>-->
            <!--                <ul class="dropdown-menu">-->
            <!--                    <li><a href="#">Dropdown Item</a></li>-->
            <!--                    <li><a href="#">Another Item</a></li>-->
            <!--                    <li><a href="#">Third Item</a></li>-->
            <!--                    <li><a href="#">Last Item</a></li>-->
            <!--                </ul>-->
            <!--            </li>-->
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span
                        class="badge">7</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">7 New Messages</li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/50x50"></span>
                            <span class="name">John Smith:</span>
                            <span class="message">Hey there, I wanted to ask you something...</span>
                            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/50x50"></span>
                            <span class="name">John Smith:</span>
                            <span class="message">Hey there, I wanted to ask you something...</span>
                            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/50x50"></span>
                            <span class="name">John Smith:</span>
                            <span class="message">Hey there, I wanted to ask you something...</span>
                            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">View Inbox <span class="badge">7</span></a></li>
                </ul>
            </li>
            <li class="dropdown alerts-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span
                        class="badge">3</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                    <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                    <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                    <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                    <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                    <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                        class="fa fa-user"></i> <?php echo $_SESSION['data'][0]['Username']; ?> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="login/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
