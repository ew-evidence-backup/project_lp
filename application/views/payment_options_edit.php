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
                <h1>Edit Payment Option</h1>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--.title-wrap-->

        <div class="container" style="width:930px!important;">
            <div class="page-full row">
                <div id="content-pane" class="col-xs-9 account">

                    <div class="content-pane-inner">


                        <?
                        include('config.php');
                        if (isset($_GET['payment_option_id'])) {
                            $payment_option_id = (int)$_GET['payment_option_id'];
                            if (isset($_POST['submitted'])) {
                                foreach ($_POST AS $key => $value) {
                                    $_POST[$key] = mysql_real_escape_string($value);
                                }
                                $sql = "UPDATE `payment_options` SET  `payment_type_id` =  '{$_POST['payment_type_id']}' ,  `user_id` =  '{$_POST['user_id']}' ,  `is_active` =  '{$_POST['is_active']}' ,  `paypal_email` =  '{$_POST['paypal_email']}' ,  `account` =  '{$_POST['account']}' ,  `routing` =  '{$_POST['routing']}'   WHERE `payment_option_id` = '$payment_option_id' ";
                                mysql_query($sql) or die(mysql_error());
                                echo (mysql_affected_rows()) ? "Edited.<br />" : "Nothing changed. <br />";
                                echo "<a href='/payment_options'>Back To Payment Options</a>";
                            }
                            $row = mysql_fetch_array(mysql_query("SELECT * FROM `payment_options` WHERE `payment_option_id` = '$payment_option_id' "));
                            ?>

                            <form action='' method='POST'>

                                <table class="table">

                                    <tr>

                                        <td>

                                            <p><b>Is Active:</b><br/>

                                                <select name="is_active" id="is_active">

                                                    <option selected
                                                            value="<?php echo $row['is_active']; ?>"><?php echo $selected = ($row['is_active'] == 1) ? 'Yes' : 'No'; ?>
                                                    </option>

                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>

                                                </select>

                                        </td>

                                        <td>


                                        </td>


                                    </tr>

                                    <tr>

                                        <td>

                                            <p><b>Paypal Email:</b><br/><input type='text' name='paypal_email'
                                                                               value='<?= stripslashes($row['paypal_email']) ?>'/>

                                        </td>

                                        <td>


                                        </td>


                                    </tr>

                                    <tr>

                                        <td>

                                            <p><b>Routing:</b><br/><input type='text' name='routing'
                                                                          value='<?= stripslashes($row['routing']) ?>'/>

                                        </td>

                                        <td>

                                            <p><b>Account:</b><br/><input type='text' name='account'
                                                                          value='<?= stripslashes($row['account']) ?>'/>

                                        </td>


                                    </tr>

                                </table>


                                <input type='hidden' name='user_id' value='<?= stripslashes($row['user_id']) ?>'/>
                                <input type='hidden' name='payment_type_id'
                                       value='<?= stripslashes($row['payment_type_id']) ?>'/>


                                <p><input class="btn" type='submit' value='Edit Row'/><input type='hidden' value='1'
                                                                                             name='submitted'/>
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