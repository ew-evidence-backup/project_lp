<?php include('application/libraries/includes_alt/header.php'); ?>
    <div class="container page">
        <?php include('application/libraries/includes_alt/menu.php'); ?>
        <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>
        <div class="title-wrap">
            <div class="pull-left">
                <h1>Lists</h1>
                <span class="colon">:</span>
                <!--                <a href="lists_new" class="btn-orange">Create Lists</a>-->
            </div>

            <!--.pull-right.search-->
            <div class="clearfix"></div>
        </div>
        <!--.title-wrap-->
        <div class="container" style="width:930px!important;">
            <div class="page-full row">
                <div id="content-pane">
                    <div class="content-pane-inner">
                        <?
                        include('config.php');
                        echo "<table border=0 class='table' >";
                        echo "<tr>";

                        echo "<td><b>Title</b></td>";
                        echo "<td><b>List Type Id</b></td>";
                        echo "<td><b>Campaign</b></td>";
                        echo "<td><b>Date</b></td>";

                        echo "</tr>";
                        $result = mysql_query("SELECT * FROM `lists`") or trigger_error(mysql_error());
                        while ($row = mysql_fetch_array($result)) {
                            foreach ($row AS $key => $value) {
                                $row[$key] = stripslashes($value);
                            }

                            $camp = $this->db->query("SELECT title FROM campaigns WHERE campaign_id = " . $row['campaign_id'] . "  ");
                            $list = $this->db->query("SELECT description FROM list_types WHERE list_type_id = " . $row['list_type_id'] . "  ");


                            echo "<tr>";

                            echo "<td valign='top'>" . nl2br($row['title']) . "</td>";
                            echo "<td valign='top'>" . nl2br($list->row()->description) . "</td>";
                            echo "<td valign='top'>" . nl2br($camp->row()->title) . "</td>";
                            echo "<td valign='top'>" . nl2br($row['date']) . "</td>";

                            echo "<td valign='top'><a href=list_edit?list_id={$row['list_id']}>Edit</a></td><td><a href=lists/delete?list_id={$row['list_id']}>Delete</a></td> ";
                            echo "</tr>";
                        }
                        echo "</table>";
                        //echo "<a href=/lists_new>New Row</a>";
                        ?>


                        <h2>New List</h2>

                        <?
                        include('config.php');
                        if (isset($_POST['submitted'])) {
                            foreach ($_POST AS $key => $value) {
                                $_POST[$key] = mysql_real_escape_string($value);
                            }
                            $sql = "INSERT INTO `lists` ( `title` ,  `list_type_id` ,  `campaign_id` ,  `date` ,  `id`  ) VALUES(  '{$_POST['title']}' ,  '{$_POST['list_type_id']}' ,  '{$_POST['campaign_id']}' ,  '{$_POST['date']}' ,  '{$_POST['id']}'  ) ";
                            mysql_query($sql) or die(mysql_error());
                            echo "Added row.<br />";
                            echo "<a href='list'>Back To Listing</a>";
                        }
                        ?>

                        <form action='' method='POST'>

                            <table class="table">

                                <td>
                                    <p><b>Title:</b><br/><input type='text' name='title'/>


                                </td>

                                <td>

                                    <p><b>List Type:</b><br/>



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
                                    <p><b>Campaign:</b><br/>

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


                                </td>

                                <tr>

                                    <td colspan="4">

                                        <p><input class="btn" type='submit' value='New'/><input type='hidden' value='1'
                                                                                                name='submitted'/>

                                    </td>

                                </tr>

                            </table>


                            <input type='hidden' name='date'/>
                            <input type='hidden' name="id" value='<?php echo $_SESSION['data']->id; ?>'/>


                        </form>


                    </div>
                    <!--.content-pane-inner-->
                </div>
                <!--#content-pane-->
            </div>
            <!--.page.row-->
        </div>
    </div><!--.container#advertisers-->
<?php include('application/libraries/includes_alt/footer.php'); ?>