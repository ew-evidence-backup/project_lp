<?php include('application/libraries/includes_alt/header.php'); ?>

    <div class="container page">

    <?php include('application/libraries/includes_alt/menu.php'); ?>

    <script type="text/javascript">


        $(document).ready(function () {
            $("th:contains('Edit Record')").css("display", "none");
        });

    </script>

    <div class="title-wrap">
        <div class="pull-left">
            <h1>Account</h1>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 account">

                <div class="content-pane-inner">

                    <?php include('application/libraries/includes_alt/sub_menu.php'); ?>

                    <h2>Profile</h2>

                    <!--                    <script>-->
                    <!---->
                    <!--                        $(document).ready(function () {-->
                    <!---->
                    <!--                            $('#register').validate({ // initialize the plugin-->
                    <!--                                rules: {-->
                    <!--                                    FirstName: {-->
                    <!--                                        required: true,-->
                    <!--                                        minlength: 2-->
                    <!---->
                    <!--                                    },-->
                    <!--                                    LastName: {-->
                    <!--                                        required: true,-->
                    <!--                                        minlength: 2-->
                    <!---->
                    <!--                                    },-->
                    <!--                                    Password: {-->
                    <!--                                        required: true,-->
                    <!--                                        minlength: 8-->
                    <!---->
                    <!--                                    },-->
                    <!--                                    Email: {-->
                    <!--                                        required: true,-->
                    <!--                                        minlength: 7-->
                    <!---->
                    <!--                                    }-->
                    <!--                                }-->
                    <!--                            });-->
                    <!---->
                    <!--                        });-->
                    <!---->
                    <!--                    </script>-->


                    <head>
                        <title>Line Chart</title>
                        <script src="../../charts/Chart.js-master/Chart.js"></script>
                        <meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
                        <style>
                            canvas{
                            }
                        </style>
                    </head>
                    <body>
                    <canvas id="canvas" height="450" width="910"></canvas>


                    <script>

                        var lineChartData = {
                            labels : ["January","February","March","April","May","June","July"],
                            datasets : [
                                {
                                    fillColor : "rgba(220,220,220,0.5)",
                                    strokeColor : "rgba(220,220,220,1)",
                                    pointColor : "rgba(220,220,220,1)",
                                    pointStrokeColor : "#fff",
                                    data : [65,59,90,81,56,55,40]
                                },
                                {
                                    fillColor : "rgba(151,187,205,0.5)",
                                    strokeColor : "rgba(151,187,205,1)",
                                    pointColor : "rgba(151,187,205,1)",
                                    pointStrokeColor : "#fff",
                                    data : [28,48,40,19,96,27,100]
                                }
                            ]

                        }

                        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

                    </script>

                    <?php
                    include('config.php');
                    if (isset($_SESSION['data']->id)) {
                        $id = (int)$_SESSION['data']->id;
                        if (isset($_POST['submitted'])) {
                            foreach ($_POST AS $key => $value) {
                                $_POST[$key] = mysql_real_escape_string($value);
                            }
                            $sql = "UPDATE `users` SET  `name` =  '{$_POST['name']}' ,  `username` =  '{$_POST['username']}' ,  `company` =  '{$_POST['company']}' ,  `vat_tax_id` =  '{$_POST['vat_tax_id']}' ,  `address` =  '{$_POST['address']}' ,  `zip` =  '{$_POST['zip']}' ,  `city` =  '{$_POST['city']}' ,  `country_id` =  '{$_POST['country_id']}' ,  `im` =  '{$_POST['im']}' ,  `email` =  '{$_POST['email']}' ,  `password` =  '{$_POST['password']}' ,  `updated_at` =  '{$_POST['updated_at']}' ,  `created_at` =  '{$_POST['created_at']}' ,  `deleted_at` =  '{$_POST['deleted_at']}' ,  `user_type_id` =  '{$_POST['user_type_id']}' ,  `is_active` =  '{$_POST['is_active']}'   WHERE `id` = '$id' ";
                            mysql_query($sql) or die(mysql_error());
                            echo (mysql_affected_rows()) ? "Edited Account!.<br />" : "Nothing changed. <br />";
                           // echo "<a href='user_list.php'>Back To Listing</a>";
                        }
                        $row = mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE `id` = '$id' "));
                        ?>

                        <form action='' method='POST'>

                            <table class="table">

                                <tr>


                                    <td>

                                        <p><b>Name:</b><br/><input type='text' name='name'
                                                                   value='<?= stripslashes($row['name']) ?>'/>


                                    </td>

                                    <td>


                                        <p><b>Username:</b><br/><input type='text' name='username'
                                                                       value='<?= stripslashes($row['username']) ?>'/>

                                    </td>

                                    <td>

                                        <p><b>Company:</b><br/><input type='text' name='company'
                                                                      value='<?= stripslashes($row['company']) ?>'/>

                                    </td>

                                    <td>

                                        <p><b>Vat Tax Id:</b><br/><input type='text' name='vat_tax_id'
                                                                         value='<?= stripslashes($row['vat_tax_id']) ?>'/>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <p><b>Address:</b><br/><input type='text' name='address'
                                                                      value='<?= stripslashes($row['address']) ?>'/>
                                    </td>

                                    <td>
                                        <p><b>Zip:</b><br/><input type='text' name='zip' value='<?= stripslashes($row['zip']) ?>'/>

                                    </td>
                                    <td>
                                        <p><b>City:</b><br/><input type='text' name='city'
                                                                   value='<?= stripslashes($row['city']) ?>'/>

                                    </td>

                                    <td>
                                        <p><b>Country Id:</b><br/> <select name="country_id" id="">

                                                <?php


                                                $q = $this->db->query("SELECT country_id, name FROM countries");

                                                foreach ($q->result_array() as $value) {

                                                    echo ' <option value=' . $value['country_id'] . '>' . $value['name'] . '</option>';

                                                }


                                                ?>


                                            </select>


                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <p><b>Im:</b><br/><input type='text' name='im' value='<?= stripslashes($row['im']) ?>'/>

                                    </td>

                                    <td>

                                        <p><b>Email:</b><br/><input type='text' name='email'
                                                                    value='<?= stripslashes($row['email']) ?>'/>

                                    </td>

                                    <td>

                                        <p><b>Password:</b><br/><input type='text' name='password'
                                                                       value='<?= stripslashes($row['password']) ?>'/>

                                    </td>

                                    <td>



                                    </td>

                                </tr>

                                <tr>


                                    <td>

                                        <p><input class="btn" type='submit' value='Edit Account'/><input type='hidden' value='1'
                                                                                                         name='submitted'/>

                                    </td>

                                    <td>



                                    </td>

                                    <td>



                                    </td>
                                    <td>



                                    </td>

                                </tr>


                            </table>
















                                <input type='hidden' name='updated_at' value='<?= stripslashes($row['updated_at']) ?>'/>
                                <input type='hidden' name='created_at' value='<?= stripslashes($row['created_at']) ?>'/>
                                <input type='hidden' name='deleted_at' value='<?= stripslashes($row['deleted_at']) ?>'/>
                                <input type='hidden' name='user_type_id'
                                       value='<?= stripslashes($row['user_type_id']) ?>'/>
                                <input type='hidden' name='is_active' value='<?= stripslashes($row['is_active']) ?>'/>


                        </form>
                    <? } ?>


                </div>
                <!--.content-pane-inner-->

            </div>
            <!--#content-pane-->
        </div>
        <!--.page.row-->
    </div>


    </div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php'); ?>