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
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 account">

                <div class="content-pane-inner">

                    <?php include('application/libraries/includes_alt/sub_menu.php'); ?>

                    <h2>Email Notifications</h2>

                    <?
                    include('config.php');
                    if (isset($_SESSION['data']->id)) {
                        $user_id = $_SESSION['data']->id;
                        if (isset($_POST['submitted'])) {
                            foreach ($_POST AS $key => $value) {
                                $_POST[$key] = mysql_real_escape_string($value);
                            }
                            $sql = "UPDATE `email_notifications` SET  `email_notification_id` =  '{$_POST['email_notification_id']}' ,  `user_id` =  '{$_POST['user_id']}' ,  `adzones` =  '{$_POST['adzones']}' ,  `affiliates` =  '{$_POST['affiliates']}' ,  `campaigns` =  '{$_POST['campaigns']}' ,  `low_balance` =  '{$_POST['low_balance']}' ,  `newsletters` =  '{$_POST['newsletters']}' ,  `reminder` =  '{$_POST['reminder']}' ,  `tickets` =  '{$_POST['tickets']}' ,  `transactions` =  '{$_POST['transactions']}' ,  `websites` =  '{$_POST['websites']}'   WHERE `user_id` = '$user_id' ";
                            mysql_query($sql) or die(mysql_error());
                            echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
                           // echo "<a href='payment_option_list.php'>Back To Listing</a>";
                        }
                        $row = mysql_fetch_array(mysql_query("SELECT * FROM `email_notifications` WHERE `user_id` = '$user_id' "));
                        ?>

                        <form action='' method='POST'>


                            <table class="table">

                                <tr>


                                    <td>

                                        <p><b>Adzones:</b><br/>

                                            <select name="adzones" id="">

                                                <option value="<?= stripslashes($row['adzones']) ?>">

                                                    <?php echo ($row['adzones'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>

                                    </td>

                                    <td>

                                        <p><b>Affiliates:</b><br/>



                                            <select name="affiliates" id="">

                                                <option value="<?= stripslashes($row['affiliates']) ?>">

                                                    <?php echo ($row['affiliates'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>


                                    </td>

                                    <td>

                                        <p><b>Campaigns:</b><br/>



                                            <select name="campaigns" id="">

                                                <option value="<?= stripslashes($row['campaigns']) ?>">

                                                    <?php echo ($row['campaigns'] == 1) ? 'Yes' : 'No'; ?>

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

                                        <p><b>Low Balance:</b><br/>


                                            <select name="low_balance" id="">

                                                <option value="<?= stripslashes($row['low_balance']) ?>">

                                                    <?php echo ($row['low_balance'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>

                                    </td>

                                    <td>

                                        <p><b>Newsletters:</b><br/>


                                            <select name="newsletters" id="">

                                                <option value="<?= stripslashes($row['newsletters']) ?>">

                                                    <?php echo ($row['newsletters'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>


                                    </td>

                                    <td>

                                        <p><b>Reminder:</b><br/>

                                            <select name="reminder" id="">

                                                <option value="<?= stripslashes($row['reminder']) ?>">

                                                    <?php echo ($row['reminder'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>


                                    </td>

                                    <td>

                                        <p><b>Tickets:</b><br/>

                                            <select name="tickets" id="">

                                                <option value="<?= stripslashes($row['tickets']) ?>">

                                                    <?php echo ($row['tickets'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <p><b>Transactions:</b><br/>


                                            <select name="transactions" id="">

                                                <option value="<?= stripslashes($row['transactions']) ?>">

                                                    <?php echo ($row['transactions'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>


                                    </td>

                                    <td>

                                        <p><b>Websites:</b><br/>


                                            <select name="websites" id="">

                                                <option value="<?= stripslashes($row['websites']) ?>">

                                                    <?php echo ($row['websites'] == 1) ? 'Yes' : 'No'; ?>

                                                </option>

                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>

                                    </td>

                                    <td>


                                    </td>

                                    <td>


                                    </td>

                                </tr>

                            </table>


                            <input type='hidden' name='user_id' value='<?= stripslashes($row['user_id']) ?>'/>
                            <input type='hidden' name='email_notification_id'
                                   value='<?= stripslashes($row['email_notification_id']) ?>'/>


                            <p><input class="btn" type='submit' value='Update'/><input type='hidden' value='1'
                                                                                       name='submitted'/>
                        </form>
                    <? } ?>


                </div>
                <!--#content-pane-->
            </div>
            <!--.page.row-->
        </div>

    </div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php'); ?>