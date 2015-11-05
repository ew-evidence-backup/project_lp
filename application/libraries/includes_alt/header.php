<?php //session_start(); ?>
<!-- Sidebar -->
<?php if ($_SESSION['data']->id == '') {

    header('location: /');

} elseif ($_SESSION['data']->user_type_id == 0) {

    header('location: /');

} elseif ($_SESSION['data']->is_active == 0) {

    header('location: /');



}

parse_str($_SERVER['QUERY_STRING'], $output);


//@todo make it dynamic

//if($_SESSION['data'][0]['id'] != $output['id']){
//
//    header('location: '.$_SERVER['REDIRECT_URL'].'?action=edit&id='.$_SESSION['data'][0]['id'].'&');
//
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>LoadPops</title>



    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.datetimepicker.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/jquery.jscrollpane.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">



    <script>
        $(document).ready(function () {
            $('#camp').validate({ // initialize the plugin
                rules: {
                    title: {
                        required: true
                    }
                }
            });
        });
    </script>

    <script src="../../../charts/Chart.js-master/Chart.js"></script>
    <meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
    <style>
        canvas{
        }
    </style>

</head>
<body>

<nav class="navbar navbar-default" role="navigation" id="header-wrap">
    <div class="container">
        <header>
            <div class="navbar-header">
                <a href="/" id="logo"></a>
            </div>

            <div class="navbar-right collapse navbar-collapse">
                <ul class="nav navbar-nav logged-in">
                    <li class="nav-earnings"><a href="/earnings">earnings: $245</a></li>
                    <li class="nav-account"><a href="/account?action=edit&id=<?php echo $_SESSION['data']->id; ?>"><?php echo $_SESSION['data']->company; ?></a></li>
                    <li class="nav-support"><a href="/support">support</a></li>
                    <li class="nav-english"><a href="/lang/en">english</a></li>
                    <li class="nav-logout"><a href="login/logout">logout</a></li>
                </ul>
            </div>
            <!--.navbar-collapse-->
        </header>
    </div>
    <!--.container-->
</nav>
<!--#header-wrap-->