<?php include('application/libraries/includes_alt/header.php');?>

    <div class="container page">

        <?php include('application/libraries/includes_alt/menu.php');?>
        <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>

        <div class="title-wrap">
            <div class="pull-left">
                <h1>Lists</h1>
                <span class="colon">:</span>
<!--                <a href="#" class="btn-orange">Create Lists</a>-->
            </div>
           <!--.pull-right.search-->
            <div class="clearfix"></div>
        </div><!--.title-wrap-->

        <div class="container" style="width:930px!important;">
            <div class="page-full row">
                <div id="content-pane" class="col-xs-9 ads lists-list">

                    <div class="content-pane-inner">

                        <h2>No Lists Found</h2>

                        <?
                        include('config.php');
                        if (isset($_GET['list_id']) ) {
                            $list_id = (int) $_GET['list_id'];
                            if (isset($_POST['submitted'])) {
                                foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
                                $sql = "UPDATE `lists` SET  `title` =  '{$_POST['title']}' ,  `list_type_id` =  '{$_POST['list_type_id']}' ,  `campaign_id` =  '{$_POST['campaign_id']}' ,  `date` =  '{$_POST['date']}'   WHERE `list_id` = '$list_id' ";
                                mysql_query($sql) or die(mysql_error());
                                echo (mysql_affected_rows()) ? "Edited.<br />" : "Nothing changed. <br />";
                                //echo "<a href='lists'>Back To Listing</a>";
                            }
                            $row = mysql_fetch_array ( mysql_query("SELECT * FROM `lists` WHERE `list_id` = '$list_id' "));
                            ?>

                            <form  action='' method='POST'>

                                <table class="table">

                                    <tr>

                                        <td>

                                            <p><b>Title:</b><br /><input type='text' name='title' value='<?= stripslashes($row['title']) ?>' />

                                        </td>

                                        <td>

                                            <p><b>Type:</b><br />



                                                <select name="list_type_id" id="">

                                                    <?php


                                                    $q = $this->db->query("SELECT list_type_id, description FROM list_types");

                                                    foreach ($q->result_array() as $value) {

                                                        echo ' <option value=' . $value['list_type_id'] . '>' . $value['description'] . '</option>';

                                                    }


                                                    ?>


                                                </select>

                                        </td>

                                        <td>


                                            <p><b>Campaign Id:</b><br />



                                                <select name="campaign_id" id="">

                                                    <?php


                                                    $q = $this->db->query("SELECT campaign_id, title FROM campaigns");

                                                    foreach ($q->result_array() as $value) {

                                                        echo ' <option value=' . $value['campaign_id'] . '>' . $value['title'] . '</option>';

                                                    }


                                                    ?>


                                                </select>

                                        </td>

                                        <td>
                                            <p><b>Date:</b><br /><input type='text' name='date' value='<?= stripslashes($row['date']) ?>' />


                                        </td>

                                    </tr>

                                    <tr>

                                        <td colspan="4">

                                            <p><input class="btn" type='submit' value='Edit' /><input type='hidden' value='1' name='submitted' />

                                        </td>

                                    </tr>

                                </table>







                            </form>
                        <? } ?>

<!--                        <ul class="pagination">-->
<!--                            <li><a href="#">1</a></li>-->
<!--                            <li class="active"><a href="#">2</a></li>-->
<!--                            <li><a href="#">3</a></li>-->
<!--                            <li><a href="#">next</a></li>-->
<!--                            <li><a href="#">last</a></li>-->
<!--                        </ul>-->

                    </div><!--.content-pane-inner-->

                </div><!--#content-pane-->
            </div><!--.page.row-->
        </div>

    </div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php');?>