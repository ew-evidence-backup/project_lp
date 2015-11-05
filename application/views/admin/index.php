<?php ob_start(); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trivia">
    <meta name="author" content="Evin Weissenberg - Venice Data">
    <meta name="revisit-after" content="7 days">
    <META name="robots" CONTENT="INDEX, FOLLOW">
    <meta name="keywords" content="Trivia, Trivia games">
    <title>InboxTrivia</title>
    <?php include('application/libraries/includes/css.php'); ?>
</head>

<body>

<div id="wrapper">

    <?php //include('application/libraries/includes/shell.php'); ?>

    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1>Login
                    <small> For InboxTrivia.com</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href=""><i class="icon-dashboard"></i> Home</a></li>
                    <li class="active"><i class="icon-file-alt"></i> Login</li>
                </ol>

                <html>

                <form action="submit" method="POST">


                    <tr>

                        <td>

                            Username

                        </td>

                        <td>

                            <input type="text" name="Username"/>

                        </td>

                    </tr>

                    <tr>

                        <td>

                            Password

                        </td>

                        <td>

                            <input type="password" name="Password"/>


                        </td>

                        <td>

                            <input type="submit" value="login"/>

                        </td>

                    </tr>

                </form>


                </html>

            </div>
            <?php include('application/libraries/includes/footer.php'); ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->
<?php include('application/libraries/includes/js.php'); ?>

</body>
</html>