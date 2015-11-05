<?php include('application/libraries/includes_alt/header.php'); ?>

    <div class="container page">

        <?php include('application/libraries/includes_alt/menu.php'); ?>

        <script type="text/javascript">


            $(document).ready(function () {
                $("th:contains('Edit Record')").css("display", "none");
            });

        </script>

        <script>


            $(document).ready(function () {
                $("#new_trigger").click(function () {
                    $("#new").toggle("slow");
                });

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

                        <h2>Payment Information</h2>

                        <p class="intro">Use this page to edit your payment information.</p>
                        <?
                        include('config.php');
                        echo "<table class='table' border=0 >";
                        echo "<tr>";
                        //echo "<td><b>Payment Option Id</b></td>";
                        echo "<td><b>Payment Type Id</b></td>";
                        //echo "<td><b>User Id</b></td>";
                        echo "<td><b>Is Active</b></td>";
                        echo "<td><b>Paypal Email</b></td>";
                        echo "<td><b>Account</b></td>";
                        echo "<td><b>Routing</b></td>";
                        echo "</tr>";
                        $result = mysql_query("SELECT * FROM `payment_options` WHERE `user_id` = '" . $_SESSION['data']->id . "'  ") or trigger_error(mysql_error());
                        while ($row = mysql_fetch_array($result)) {
                            foreach ($row AS $key => $value) {
                                $row[$key] = stripslashes($value);
                            }


                            $poi = $this->db->query('SELECT name FROM payment_types WHERE payment_type_id="' . $row['payment_type_id'] . '"   ');

                            if ($row['is_active'] == 1) {

                                $is_active = 'Yes';

                            } else {

                                $is_active = 'No';

                            }


                            echo "<tr>";
                            //echo "<td valign='top'>" . nl2br( $row['payment_option_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br($poi->row()->name) . "</td>";
                            //echo "<td valign='top'>" . nl2br( $row['user_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br($is_active) . "</td>";
                            if (!$row['account']) {

                                echo "<td valign='top'>" . nl2br($row['paypal_email']) . "</td>";

                            } else {

                                echo "<td valign='top'>NA</td>";

                            }
                            echo "<td valign='top'>" . nl2br($row['account']) . "</td>";
                            echo "<td valign='top'>" . nl2br($row['routing']) . "</td>";
                            echo "<td valign='top'><a href=payment_options_edit?payment_option_id={$row['payment_option_id']}>Edit</a></td><td><a href=payment_options/delete/?payment_option_id={$row['payment_option_id']}>Delete</a></td> ";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<a id='new_trigger' >Add</a>";
                        ?>



                        <div id="new" style="display:none">

                            <?
                            include('config.php');
                            if (isset($_POST['submitted'])) {
                                foreach ($_POST AS $key => $value) {
                                    $_POST[$key] = mysql_real_escape_string($value);
                                }
                                $sql = "INSERT INTO `payment_options` ( `payment_type_id` ,  `user_id` ,  `is_active` ,  `paypal_email` ,  `account` ,  `routing`  ) VALUES(  '{$_POST['payment_type_id']}' ,  '{$_POST['user_id']}' ,  '{$_POST['is_active']}' ,  '{$_POST['paypal_email']}' ,  '{$_POST['account']}' ,  '{$_POST['routing']}'  ) ";
                                mysql_query($sql) or die(mysql_error());
                                echo "Added row.<br />";
                                //echo "<a href='payment_option_list.php'>Back To Listing</a>";
                            }
                            ?>

                            <form action='' method='POST'>

                                <table class="table">

                                    <tr>

                                        <td>

                                            <p><b>Paypal Email:</b><br/><input type='text' name='paypal_email'/>

                                        </td>

                                        <td>

                                            <p><b>Account:</b><br/><input type='text' name='account'/>

                                        </td>

                                        <td>

                                            <p><b>Routing:</b><br/><input type='text' name='routing'/>

                                        </td>


                                        <td>


                                            <p><b>Type:</b><br/> <select name="payment_type_id" id="">

                                                    <?php


                                                    $q = $this->db->query("SELECT payment_type_id, name FROM payment_types");

                                                    foreach ($q->result_array() as $value) {

                                                        echo ' <option value=' . $value['payment_type_id'] . '>' . $value['name'] . '</option>';

                                                    }


                                                    ?>


                                                </select>


                                        </td>

                                    </tr>

                                </table>


                                <input type='hidden' name='user_id' value="<?php echo $_SESSION['data']->id ?>"/>
                                <input type='hidden' name='is_active' value="1"/>

                                <p><input class="btn" type='submit' value='Add'/><input type='hidden' value='1'
                                                                                        name='submitted'/>
                            </form>

                        </div>


                    </div>
                    <!--.content-pane-inner-->

                </div>
                <!--#content-pane-->
            </div>
            <!--.page.row-->
        </div>

    </div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php'); ?>