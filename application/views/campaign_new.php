<?php include('application/libraries/includes_alt/header.php'); ?>

<div class="container page">

<?php include('application/libraries/includes_alt/menu.php'); ?>
<?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>


    <div class="title-wrap">
        <div class="pull-left">
            <h1>New Campaign</h1>
            <span class="colon"></span>
            <!--            <a href="#" class="btn-orange">Create Campaign</a>-->
        </div>
        <!--            <div class="pull-right search">-->
        <!--                <div class="input-group">-->
        <!--                    <input class="form-control" type="text" name="search" placeholder="search campaigns...">-->
        <!--                    <span class="input-group-addon"><span class="fa fa-search"></span></span>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--.pull-right.search-->
        <div class="clearfix"></div>
    </div>
    <!--.title-wrap-->

    <div class="container" style="width:930px!important; ">
    <div class="page-full row">
    <div id="content-pane" class="col-xs-9 account">

    <div class="content-pane-inner">

    <?
    include('config.php');
    if (isset($_POST['submitted'])) {


        //print_r('<pre>');
        //print_r($_REQUEST);

        if ($_POST['traffic_sources']) {

            $traffic_sources_keys = array_keys($_POST['traffic_sources'], 'on');
            $traffic_sources = implode(',', $traffic_sources_keys);

        } else {

            $traffic_sources = NULL;

        }

        if ($_POST['countries']) {

            $countries_keys = array_keys($_POST['countries'], 'on');
            $countries = implode(',', $countries_keys);

        } else {

            $countries = NULL;
        }


        foreach ($_POST AS $key => $value) {
            $_POST[$key] = @mysql_real_escape_string($value);
        }
        $sql = "INSERT INTO `campaigns` ( `campaign_id` ,  `id` ,  `delivery_method_id` ,  `title` ,  `start_date` ,  `traffic_sources` ,  `cpv_min` ,  `cpv_bid` ,  `cost` ,  `traffic_order` ,  `limit_id` ,  `is_auto_renewed` ,  `renewel_amount` ,  `lower_amount` ,  `activate` ,  `is_list_active` ,  `ad_id` ,  `campaign_status_id` ,  `geo_sources`  ) VALUES(  '{$_POST['campaign_id']}' ,  '{$_SESSION['data']->id}' ,  '{$_POST['delivery_method_id']}' ,  '{$_POST['title']}' ,  '{$_POST['start_date']}' ,  '{$traffic_sources}' ,  '{$_POST['cpv_min']}' ,  '{$_POST['cpv_bid']}' ,  '{$_POST['cost']}' ,  '{$_POST['traffic_order']}' ,  '{$_POST['limit_id']}' ,  '{$_POST['is_auto_renewed']}' ,  '{$_POST['renewel_amount']}' ,  '{$_POST['lower_amount']}' ,  '{$_POST['activate']}' ,  '{$_POST['is_list_active']}' ,  '{$_POST['ad_id']}' ,  '{$_POST['campaign_status_id']}' ,  '{$countries}'  ) ";
        mysql_query($sql) or die(mysql_error());
        echo "Added row.<br />";
        //echo "<a href='payment_option_list.php'>Back To Listing</a>";
    }
    ?>





    <?php

    /**
     * Relationships
     */

    $delivery = $this->db->query("SELECT delivery_method_id,description FROM delivery_methods ");


    ?>

    <form id="camp" action='' method='POST'>
    <table class="table">

    <tr>
        <td>
            <p><b>Title:</b><br/><input type='text' name='title'/>

        </td>
        <td>
            <p><b>Delivery Method:</b><br/>


                <select name="delivery_method_id" id="">

                    <?php




                    foreach ($delivery->result_array() as $value) {

                        echo ' <option value=' . $value['delivery_method_id'] . '>' . $value['description'] . '</option>';

                    }


                    ?>


                </select>


        </td>
        <td>
            <p><b>Start Date:</b><br/><input id="datepicker" type='text' name='start_date'/>

        </td>
        <td>


        </td>

    </tr>


    <tr>

        <td colspan="4">

            <p><b>Traffic Sources:</b><br/>


                <?php

                $cb = $this->db->query("SELECT traffic_source_id,description FROM traffic_sources");

                $i = 0;

                foreach ($cb->result_array() as $value) {

                    echo " " . $value['description'] . " ";
                    echo "<input type='checkbox' name='traffic_sources[]'/>";

                    if ($i == 6) {

                        echo '<hr/>';

                    }

                    if ($i == 12) {

                        echo '<hr/>';

                    }
                    if ($i == 18) {

                        echo '<hr/>';

                    }
                    if ($i == 24) {

                        echo '<hr/>';

                    }

                    $i++;
                }


                ?>


        </td>

    </tr>

    <tr>

        <td>
            <p><b>CPV Min:</b><br/><input type='text' name='cpv_min'/>

        </td>

        <td>

            <p><b>CPV Bid:</b><br/><input type='text' name='cpv_bid'/>
        </td>

        <td>
            <p><b>Cost:</b><br/><input type='text' name='cost'/>

        </td>

        <td>
            <p><b>Traffic Order:</b><br/>

                <select name="traffic_order" id="traffic_order">
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
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>


                </select>

        </td>

    </tr>

    <tr>


        <td>

            <p><b>Is Auto Renewed:</b><br/>

                <select name="is_auto_renewed" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>

                </select>

        </td>

        <td>
            <p><b>Renewel Amount:</b><br/><input type='text' name='renewel_amount'/>

        </td>

        <td>
            <p><b>Lower Amount:</b><br/><input type='text' name='lower_amount'/>

        </td>

        <td>


        </td>

    </tr>

    <tr>

        <td>
            <p><b>Activate:</b><br/>

                <select name="activate" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>

                </select>


        </td>

        <td>
            <p><b>Is List Active:</b><br/>


                <select name="is_list_active" id="">
                    <option value="1">Yes</option>
                    <option value="0">No</option>

                </select>

        </td>

        <td>

            <p><b>Ad:</b><br/>


                <select name="ad_id" id="">

                    <?php


                    $q = $this->db->query("SELECT ad_id, description FROM ads WHERE id = " . $_SESSION['data']->id . "  ");

                    foreach ($q->result_array() as $value) {

                        echo ' <option value=' . $value['ad_id'] . '>' . $value['description'] . '</option>';

                    }


                    ?>


                </select>


        </td>

        <td>

            <p><b>Status:</b><br/>


                <select name="campaign_status_id" id="">

                    <?php


                    $q = $this->db->query("SELECT campaign_status_id, description FROM campaign_status  ");

                    foreach ($q->result_array() as $value) {

                        echo ' <option value=' . $value['campaign_status_id'] . '>' . $value['description'] . '</option>';

                    }


                    ?>


                </select>


        </td>

    </tr>

    <tr>


        <td colspan="4">

            <p><b>Limit:</b><br/>

                <select name="limit_id" id="">

                    <?php


                    $q = $this->db->query("SELECT limit_id, description FROM limits");

                    foreach ($q->result_array() as $value) {

                        echo ' <option value=' . $value['limit_id'] . '>' . $value['description'] . '</option>';

                    }


                    ?>


                </select>


        </td>

        <td>


        </td>

        <td>


        </td>

        <td>


        </td>

    </tr>

    <tr>

    <td colspan="4">

    <p><b>Geo Sources:</b><br/>

    <?php

    $cb = $this->db->query("SELECT country_id,name FROM countries");

    $i = 0;

    foreach ($cb->result_array() as $value) {

        echo " " . $value['name'] . " ";
        echo "<input type='checkbox' name='countries[]'/>";

        if ($i == 6) {

            echo '<hr/>';

        }

        if ($i == 12) {

            echo '<hr/>';

        }
        if ($i == 18) {

            echo '<hr/>';

        }
        if ($i == 24) {

            echo '<hr/>';

        }
        if ($i == 30) {

            echo '<hr/>';

        }
        if ($i == 36) {

            echo '<hr/>';

        }
        if ($i == 42) {

            echo '<hr/>';

        }
        if ($i == 48) {

            echo '<hr/>';

        }
        if ($i == 54) {

            echo '<hr/>';

        }
        if ($i == 60) {

            echo '<hr/>';

        }
        if ($i == 66) {

            echo '<hr/>';

        }
        if ($i == 72) {

            echo '<hr/>';

        }
        if ($i == 78) {

            echo '<hr/>';

        }
        if ($i == 84) {

            echo '<hr/>';

        }
        if ($i == 90) {

            echo '<hr/>';

        }
        if ($i == 96) {

            echo '<hr/>';

        }
        if ($i == 102) {

            echo '<hr/>';

        }
        if ($i == 108) {

            echo '<hr/>';

        }
        if ($i == 114) {

            echo '<hr/>';

        }
        if ($i == 120) {

            echo '<hr/>';

        }
        if ($i == 126) {

            echo '<hr/>';

        }
        if ($i == 132) {

            echo '<hr/>';

        }
        if ($i == 138) {

            echo '<hr/>';

        }
        if ($i == 144) {

            echo '<hr/>';

        }
        if ($i == 150) {

            echo '<hr/>';

        }
        if ($i == 156) {

            echo '<hr/>';

        }
        if ($i == 162) {

            echo '<hr/>';

        }
        if ($i == 168) {

            echo '<hr/>';

        }
        if ($i == 174) {

            echo '<hr/>';

        }
        if ($i == 180) {

            echo '<hr/>';

        }
        if ($i == 186) {

            echo '<hr/>';

        }
        if ($i == 6 * 32) {

            echo '<hr/>';

        }
        if ($i == 6 * 33) {

            echo '<hr/>';

        }
        if ($i == 6 * 34) {

            echo '<hr/>';

        }
        if ($i == 6 * 35) {

            echo '<hr/>';

        }
        if ($i == 6 * 36) {

            echo '<hr/>';

        }
        if ($i == 6 * 37) {

            echo '<hr/>';

        }
        if ($i == 6 * 38) {

            echo '<hr/>';

        }
        if ($i == 6 * 39) {

            echo '<hr/>';

        }

        if ($i == 6 * 40) {

            echo '<hr/>';

        }


        $i++;

    }

    ?>


    </td>

    <td>


    </td>

    <td>


    </td>

    <td>


    </td>


    </tr>

    <tr>

        <td>

            <p><input class="btn" type='submit' value='Create'/>
                <input type='hidden' value='1' name='submitted'/>

        </td>

        <td>


        </td>

        <td>


        </td>

        <td>


        </td>

    </tr>

    </table>

    <input type='hidden' name='campaign_id'/>

    <input type='hidden' name='id'/>


    </form>


    <!--.content-pane-inner-->

    </div>
    <!--#content-pane-->
    </div>
    <!--.page.row-->
    </div>

    </div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php'); ?>