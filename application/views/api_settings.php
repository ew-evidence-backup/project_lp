<?php include('application/libraries/includes_alt/header.php');?>

    <div class="container page">

    <?php include('application/libraries/includes_alt/menu.php');?>

    <script type="text/javascript">



        $(document).ready(function() {
            $( "th:contains('Edit Record')" ).css( "display", "none" );
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

        <?php include('application/libraries/includes_alt/sub_menu.php');?>

        <h2>API Settings</h2>
        <div><a href="/api_docs">API DOCUMENTATION</a></div><br/>



        <?
        include('config.php');
        if (isset($_SESSION['data']->id) ) {
            $user_id = $_SESSION['data']->id;
            if (isset($_POST['submitted'])) {
                foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
                $sql = "UPDATE `api_settings` SET  `api_setting_id` =  '{$_POST['api_setting_id']}' ,  `user_id` =  '{$_POST['user_id']}' ,  `key` =  '{$_POST['key']}'   WHERE `user_id` = '$user_id' ";
                mysql_query($sql) or die(mysql_error());
                echo (mysql_affected_rows()) ? "Edited.<br />" : "Nothing changed. <br />";
                //echo "<a href='payment_option_list.php'>Back To Listing</a>";
            }
            $row = mysql_fetch_array ( mysql_query("SELECT * FROM `api_settings` WHERE `user_id` = '$user_id' "));
            ?>

            <form action='' method='POST'>

                <table class="table">

                    <tr>

                        <td>
                            <p><b>Key:</b><br /><input size="45" type='text' name='key' value='<?= stripslashes($row['key']) ?>' />


                        </td>

                    </tr>

                    <tr>


                        <td>

                            <input type='hidden' name='api_setting_id' value='<?= stripslashes($row['api_setting_id']) ?>' />
                            <input type='hidden' name='user_id' value='<?= stripslashes($row['user_id']) ?>' />

                            <p><input class="btn" type='submit' value='Update' /><input type='hidden' value='1' name='submitted' />

                        </td>
                    </tr>

                </table>


            </form>
        <? } ?>



    </div><!--#content-pane-->
    </div><!--.page.row-->
    </div>

    </div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php');?>