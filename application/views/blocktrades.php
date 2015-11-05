<?php include('application/libraries/includes_alt/header.php'); ?>

    <div class="container page">
    <?php include('application/libraries/includes_alt/menu.php'); ?>
    <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>


    <div class="title-wrap">
        <div class="pull-left">
            <h1>Block Trades</h1>
            <span class="colon">:</span>
            <!--                <a href="" class="btn-orange">Create Ad</a>-->
            <!--                <a href="" class="btn-orange">Import Ads</a>-->
        </div>
        <!--            <div class="pull-right search">-->
        <!--                <div class="input-group">-->
        <!--                    <input class="form-control" type="text" name="search" placeholder="search campaigns...">-->
        <!--                    <span class="input-group-addon"><span class="fa fa-search"></span></span>-->
        <!--                </div>-->
        <!--            </div>-->
        <div class="clearfix"></div>
    </div>
    <!--.title-wrap-->

    <div class="container" style="width:930px!important;">
    <div class="page-full row">
    <div id="content-pane" class="">

    <div class="content-pane-inner">

    <!--                    <div class="tabs-full-width tabs-full-width-4">-->
    <!--                        <ul class="nav nav-tabs">-->
    <!--                            <li class="active"><a href="#">All <span class="badge">16</span></a></li>-->
    <!--                            <li><a href="#">Approved <span class="badge">11</span></a></li>-->
    <!--                            <li><a href="#">Pending <span class="badge">14</span></a></li>-->
    <!--                            <li><a href="#">Rejected <span class="badge">1</span></a></li>-->
    <!--                        </ul>-->
    <!--                    </div><!--.tabs-full-width-->


    <?php

    $are_there_any = $this->db->query("SELECT ad_id FROM ads WHERE id = '" . $_SESSION['data']->id . "'");

    if ($are_there_any->row()->ad_id == FALSE) {
        ?>

        <h2>No Ads Found</h2>

        <p class="intro">We did not find any ads in your account. Ads are needed to create plug
            traffic
            campaigns. Each ad has a URL where we will send the visitors and a title, description
            and
            thumbnail that will be shown to the visitor. When you create a plug traffic campaign,
            you
            can connect one or more of your ads to it by selecting them from a list. The ads will be
            rotated throughout our network and bring visitors to your plug campaigns...
        </p>

    <?php } ?>

    <?php
    include('config.php');
    echo "<table border=0 class='table' >";
    echo "<tr>";


    echo "<td><b>Internal Reference</b></td>";
    echo "<td><b>Type</b></td>";
    echo "<td><b>Url</b></td>";
    echo "<td><b>Description</b></td>";
    echo "<td><b>Thumbnail</b></td>";

    echo "<td><b>Platform</b></td>";
    echo "<td><b>Status</b></td>";
    echo "</tr>";
    $result = mysql_query("SELECT * FROM `ads`") or trigger_error(mysql_error());


    while ($row = mysql_fetch_array($result)) {
        foreach ($row AS $key => $value) {
            $row[$key] = stripslashes($value);
        }

        /**
         * Relationships
         */

        $platform = $this->db->query("SELECT platform_id,description FROM platforms WHERE platform_id = " . $row['platform_id'] . "  ");

        if (isset($row['thumbnail_id'])) {

            $thumbnail = $this->db->query("SELECT thumbnail_id,path FROM thumbnails WHERE thumbnail_id = " . $row['thumbnail_id'] . "  ");

            if (isset($thumbnail)) {


                $thumbnail_img = '<img src="' . $thumbnail->row()->path . '" alt="" height="100"/>';

            }


        }


        echo "<tr>";


        echo "<td valign='top'>" . nl2br($row['internal_reference']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['type']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['url']) . "</td>";
        echo "<td valign='top'>" . nl2br($row['description']) . "</td>";
        echo "<td valign='top'>" . $thumbnail_img . "</td>";

        echo "<td valign='top'>" . $platform->row()->description . "</td>";
        echo "<td valign='top'>" . nl2br(($row['status_id']) ? 'Active' : 'In Active') . "</td>";
        echo "<td valign='top'><a href=ad_id.php?ad_id={$row['ad_id']}>Edit</a></td><td><a href=ads/delete?ad_id={$row['ad_id']}>Delete</a></td> ";
        echo "</tr>";
    }
    echo "</table>";
    ?>





    <?
    include('config.php');
    if (isset($_POST['submitted'])) {
        foreach ($_POST AS $key => $value) {
            $_POST[$key] = mysql_real_escape_string($value);
        }
        $sql = "INSERT INTO `ads` ( `ad_id` ,  `id` ,  `internal_reference` ,  `type` ,  `url` ,  `description` ,  `thumbnail_id` ,    `platform_id` ,  `status_id`  ) VALUES(  '{$_POST['ad_id']}' ,  '{$_POST['id']}' ,  '{$_POST['internal_reference']}' ,  '{$_POST['type']}' ,  '{$_POST['url']}' ,  '{$_POST['description']}' ,  '{$_POST['thumbnail_id']}' ,   '{$_POST['platform_id']}' ,  '{$_POST['status_id']}'  ) ";
        mysql_query($sql) or die(mysql_error());
        echo "Added.<br />";
        echo "<a href='payment_option_list.php'>Back To Listing</a>";
    }
    ?>

    <form action='' method='POST'>


        <table class="table">

            <tr>

                <td colspan="4">

                    <h2>New Ad</h2>

                </td>

            </tr>

            <tr>

                <td>

                    <p><b>Internal Reference:</b><br/><input type='text' name='internal_reference'/>

                </td>

                <td>

                    <p><b>Type:</b><br/><input type='text' name='type'/>

                </td>

                <td>
                    <p><b>Url:</b><br/><input type="text" name="url"/>


                </td>

                <td>


                </td>

            </tr>


            <tr>

                <td>
                    <p><b>Thumbnail path:</b><br/><input type='text' name='thumbnail_id'/>

                </td>


                <td>

                    <p><b>Platform:</b><br/>


                        <select name="platform_id" id="">

                            <?php


                            $q = $this->db->query("SELECT platform_id, description FROM platforms");

                            foreach ($q->result_array() as $value) {

                                echo ' <option value=' . $value['platform_id'] . '>' . $value['description'] . '</option>';

                            }


                            ?>


                        </select>


                </td>

                <td>

                    <p><b>Status:</b><br/>

                        <select name="status_id" id="">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>

                </td>

                <td>


                </td>

            </tr>


            <tr>

                <td colspan="4">

                    <p><b>Description:</b><br/><textarea name='description'></textarea>

                </td>

            </tr>

        </table>

        <input type='hidden' name='ad_id'/>
        <input type='hidden' name='id' value="<?php $_SESSION['data']->id; ?>"/>


        <p><input class="btn-orange" type='submit' value='Create New Ad'/><input type='hidden' value='1'
                                                                                 name='submitted'/>
    </form>


    <!--                    <ul class="pagination">-->
    <!--                        <li><a href="#">1</a></li>-->
    <!--                        <li class="active"><a href="#">2</a></li>-->
    <!--                        <li><a href="#">3</a></li>-->
    <!--                        <li><a href="#">next</a></li>-->
    <!--                        <li><a href="#">last</a></li>-->
    <!--                    </ul>-->

    </div>
    <!--.content-pane-inner-->

    </div>
    <!--#content-pane-->
    </div>
    <!--.page.row-->
    </div>

    </div><!--.container#advertisers-->


<?php include('application/libraries/includes_alt/footer.php'); ?>