<?php include('application/libraries/includes_alt/header.php'); ?>

    <div class="container page">

    <?php include('application/libraries/includes_alt/menu.php'); ?>
    <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>


    <div class="title-wrap">
        <div class="pull-left">
            <h1>Campaign Edit</h1>
            <span class="colon">:</span>
            <!--                <a href="#" class="btn-orange">Create Campaign</a>-->
        </div>
        <div class="pull-right search">
            <!--                <div class="input-group">-->
            <!--                    <input class="form-control" type="text" name="search" placeholder="search campaigns...">-->
            <!--                    <span class="input-group-addon"><span class="fa fa-search"></span></span>-->
            <!--                </div>-->
        </div>
        <!--.pull-right.search-->
        <div class="clearfix"></div>
    </div>
    <!--.title-wrap-->

    <div class="container" style="width:930px!important;">
    <div class="page-full row">
    <div id="content-pane" class="col-xs-9 ads campaigns-list">

    <div class="content-pane-inner">

    <!--                        <div class="row header">-->
    <!--                            <div class="col-xs-10">-->
    <!--                                <div class="tabs-full-width tabs-full-width-3">-->
    <!--                                    <ul class="nav nav-tabs">-->
    <!--                                        <li class="active"><a href="#">Active <span class="badge">2</span></a></li>-->
    <!--                                        <li><a href="#">Paused <span class="badge">1</span></a></li>-->
    <!--                                        <li><a href="#">Completed <span class="badge">14</span></a></li>-->
    <!--                                        <li><a href="#">Rejected <span class="badge">1</span></a></li>-->
    <!--                                        <li><a href="#">All <span class="badge">18</span></a></li>-->
    <!--                                    </ul>-->
    <!--                                </div>-->
    <!--                                <!--.tabs-full-width-->
    <!--                            </div>-->
    <!--                            <!--.col-xs-10-->
    <!--                            <div class="col-xs-2">-->
    <!--                                <select name="filter_campaigns" class="form-control filter-campaigns filter-select">-->
    <!--                                    <option>All Campaigns</option>-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!--                            <!--.col-xs-2-->
    <!--                        </div>-->
    <!--.row-->


    <h2>Edit Campaign</h2>




    <?
    include('config.php');
    if (isset($_SESSION['data']->id)) {
        $campaign_id = mysql_real_escape_string($_REQUEST['campaign_id']);
        $user_id = (int)$_SESSION['data']->id;
        if (isset($_POST['submitted'])) {
            foreach ($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            }
            $sql = "UPDATE `campaigns` SET  `campaign_id` =  '{$_POST['campaign_id']}' ,  `id` =  '{$_POST['id']}' ,  `delivery_method_id` =  '{$_POST['delivery_method_id']}' ,  `title` =  '{$_POST['title']}' ,  `start_date` =  '{$_POST['start_date']}' ,  `traffic_sources` =  '{$_POST['traffic_sources']}' ,  `cpv_min` =  '{$_POST['cpv_min']}' ,  `cpv_bid` =  '{$_POST['cpv_bid']}' ,  `cost` =  '{$_POST['cost']}' ,  `traffic_order` =  '{$_POST['traffic_order']}' ,  `limit_id` =  '{$_POST['limit_id']}' ,  `is_auto_renewed` =  '{$_POST['is_auto_renewed']}' ,  `renewel_amount` =  '{$_POST['renewel_amount']}' ,  `lower_amount` =  '{$_POST['lower_amount']}' ,  `activate` =  '{$_POST['activate']}' ,  `is_list_active` =  '{$_POST['is_list_active']}' ,  `ad_id` =  '{$_POST['ad_id']}' ,  `campaign_status_id` =  '{$_POST['campaign_status_id']}' ,  `geo_sources` =  '{$_POST['geo_sources']}'   WHERE `payment_option_id` = '$payment_option_id' ";
            mysql_query($sql) or die(mysql_error());
            echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
            echo "<a href='payment_option_list.php'>Back To Listing</a>";
        }
        $row = mysql_fetch_array(mysql_query("SELECT * FROM `campaigns` WHERE `campaign_id` = '$campaign_id' and id= " . $user_id . "   "));
        ?>

        <form action='' method='POST'>


            <table class="table">

                <tr>

                    <td>
                        <p><b>Title:</b><br/><input type='text' name='title'
                                                    value='<?= stripslashes($row['title']) ?>'/>


                    </td>

                    <td>

                        <p><b>Delivery Method Id:</b><br/>



                            <select name="delivery_method_id" id="">


                                <?php $selected = $this->db->query("SELECT description FROM delivery_methods WHERE delivery_method_id = ".$row['delivery_method_id']."  "); ?>
                                <option value="<?php echo stripslashes($row['delivery_method_id']); ?>"><?php echo $selected->row()->description; ?></option>
                                
                                <?php


                                
                                $q = $this->db->query("SELECT delivery_method_id, description FROM delivery_methods");
                                                                

                                foreach ($q->result_array() as $value) {

                                    echo ' <option value=' . $value['delivery_method_id'] . '>' . $value['description'] . '</option>';

                                }


                                ?>


                            </select>

                    </td>

                    <td>

                        <p><b>Start Date:</b><br/><input type='text' name='start_date'
                                                         value='<?= stripslashes($row['start_date']) ?>'/>

                    </td>

                    <td>

                        <p><b>

                                <?php
                                /**
                                 * @todo: click box that queries all the options.
                                 */

                                ?>

                                Traffic Sources:</b><br/><textarea
                                name='traffic_sources'><?= stripslashes($row['traffic_sources']) ?></textarea>







                    </td>

                </tr>


                <tr>

                    <td>
                        <p><b>Cpv Min:</b><br/><input type='text' name='cpv_min'
                                                      value='<?= stripslashes($row['cpv_min']) ?>'/>

                    </td>
                    <td>

                        <p><b>Cpv Bid:</b><br/><input type='text' name='cpv_bid'
                                                      value='<?= stripslashes($row['cpv_bid']) ?>'/>

                    </td>
                    <td>

                        <p><b>Cost:</b><br/><input type='text' name='cost'
                                                   value='<?= stripslashes($row['cost']) ?>'/>
                    </td>
                    <td>
                        <p><b>Traffic Order:</b><br/>


                            <select name="traffic_order" id="traffic_order">



                                <option value="<?php echo $row['traffic_order']; ?>">

                                    <?php echo $row['traffic_order']; ?>
                                </option>

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>


                            </select>

                    </td>

                </tr>

                <tr>



                    <td>
                        <p><b>Is Auto Renewed:</b><br/><input type='text' name='is_auto_renewed'
                                                              value='<?= stripslashes($row['is_auto_renewed']) ?>'/>


                    </td>

                    <td>

                        <p><b>Renewel Amount:</b><br/><input type='text' name='renewel_amount'
                                                             value='<?= stripslashes($row['renewel_amount']) ?>'/>
                    </td>

                    <td>

                        <p><b>Lower Amount:</b><br/><input type='text' name='lower_amount'
                                                           value='<?= stripslashes($row['lower_amount']) ?>'/>
                    </td>

                    <td>

                        <p><b>Status:</b><br/>







                            <select name="campaign_status_id" id="campaign_status_id">


                                <?php $selected = $this->db->query("SELECT description FROM campaign_status WHERE campaign_status_id = ".$row['campaign_status_id']."  "); ?>
                                <option value="<?php echo stripslashes($row['campaign_status_id']); ?>"><?php echo $selected->row()->description; ?></option>

                                <?php



                                $q = $this->db->query("SELECT campaign_status_id, description FROM campaign_status");


                                foreach ($q->result_array() as $value) {

                                    echo ' <option value=' . $value['campaign_status_id'] . '>' . $value['description'] . '</option>';

                                }


                                ?>


                            </select>






                    </td>

                </tr>

                <tr>

                    <td>

                        <p><b>Activate:</b><br/>


                            <select name="activate" id="activate">

                                <option value="<?= stripslashes($row['activate']) ?>"><?php echo ($row['activate'])?'Yes':'No'; ?></option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>

                            </select>
                    </td>

                    <td>
                        <p><b>Active:</b><br/>



                            <select name="is_list_active" id="is_list_active">

                                <option value="<?= stripslashes($row['is_list_active']) ?>"><?php echo ($row['is_list_active'])?'Yes':'No'; ?></option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>

                            </select>


                    </td>

                    <td>
                        <p><b>Ads:</b><br/>






                            <select name="ad_id" id="ad_id">


                                <?php $selected = $this->db->query("SELECT description FROM ads WHERE ad_id = ".$row['ad_id']."  "); ?>
                                <option value="<?php echo stripslashes($row['ad_id']); ?>"><?php echo $selected->row()->description; ?></option>

                                <?php



                                $q = $this->db->query("SELECT ad_id, description FROM ads WHERE id= ".$_SESSION['data']->id."  ");


                                foreach ($q->result_array() as $value) {

                                    echo ' <option value=' . $value['ad_id'] . '>' . $value['description'] . '</option>';

                                }


                                ?>


                            </select>



                    </td>

                   <td>


                   </td>

                </tr>

                <tr>

                    <td colspan="4">
                        <p><b>Limits:</b><br/>


                            <select name="limit_id" id="">


                                <?php $selected = $this->db->query("SELECT description FROM limits WHERE limit_id = ".$row['limit_id']."  "); ?>
                                <option value="<?php echo stripslashes($row['limit_id']); ?>"><?php echo $selected->row()->description; ?></option>

                                <?php



                                $q = $this->db->query("SELECT limit_id, description FROM limits");


                                foreach ($q->result_array() as $value) {

                                    echo ' <option value=' . $value['limit_id'] . '>' . $value['description'] . '</option>';

                                }


                                ?>


                            </select>



                    </td>



                </tr>

                <tr>

                    <?php

                    /**
                     * @todo: add check boxes
                     */

                    ?>

                    <td colspan="4">
                        <p><b>Geo Sources:</b><br/><textarea
                                name='geo_sources'><?= stripslashes($row['geo_sources']) ?></textarea>

                    </td>

                </tr>

            </table>


            <input type='hidden' name='campaign_id'
                   value='<?= stripslashes($row['campaign_id']) ?>'/>
            <input type='hidden' name='id' value='<?= stripslashes($row['id']) ?>'/>


            <p><input class="btn-orange" type='submit' value='Edit'/><input type='hidden' value='1'
                                                             name='submitted'/>
        </form>
    <? } ?>


    <!--                        <ul class="pagination">-->
    <!--                            <li><a href="#">1</a></li>-->
    <!--                            <li class="active"><a href="#">2</a></li>-->
    <!--                            <li><a href="#">3</a></li>-->
    <!--                            <li><a href="#">next</a></li>-->
    <!--                            <li><a href="#">last</a></li>-->
    <!--                        </ul>-->

    </div>
    <!--.content-pane-inner-->

    </div>
    <!--#content-pane-->
    </div>
    <!--.page.row-->
    </div>

    </div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php'); ?>