<?php include('application/libraries/includes_alt/header.php'); ?>

    <div class="container page">

        <?php include('application/libraries/includes_alt/menu.php'); ?>
        <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>


        <div class="title-wrap">
            <div class="pull-left">
                <h1>Campaigns</h1>
                <span class="colon">:</span>
                <a href="campaign_new" class="btn-orange">Create Campaign</a>
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

        <div class="container" style="width:1200px!important; ">
            <div class="page-full row">
                <div  id="content-pane" class="col-xs-9 ads campaigns-list">

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



                        <?php

                        $are_there_any = $this->db->query("SELECT campaign_id FROM campaigns WHERE id = '".$_SESSION['data']->id."'");

                        if($are_there_any->row()->campaign_id==FALSE){ ?>

                            <h2>No Campaigns Found</h2>

                            <p class="intro">We did not find any campaigns in your account. To buy traffic from us you need
                                to create campaigns. If you wish to buy clicked traffic you must create ads and
                                then create a plug traffic campaign. If you want to buy popunders or mobile
                                redirects, you don't need to create ads you only need to have a URL..</p>

                        <?php }?>

                        <?
                        include('config.php');
                        echo "<table class='table'  border='0'  >";
                        echo "<tr>";

                        echo "<td><b>Method</b></td>";
                        echo "<td><b>Title</b></td>";
                        echo "<td><b>Date</b></td>";
                        echo "<td><b>Sources</b></td>";
                        echo "<td><b>Cpv Min</b></td>";
                        echo "<td><b>Cpv Bid</b></td>";
                        echo "<td><b>Cost</b></td>";
                        echo "<td><b>Traffic Order</b></td>";
                        echo "<td><b>Limit</b></td>";
                        echo "<td><b>Is Auto Renewed</b></td>";
                        echo "<td><b>Renewel Amount</b></td>";
                        echo "<td><b>Lower Amount</b></td>";
                        echo "<td><b>Activate</b></td>";
                        echo "<td><b>Is List Active</b></td>";
                        echo "<td><b>Ad Id</b></td>";
                        echo "<td><b>Status</b></td>";
                        echo "<td><b>Geo Sources</b></td>";
                        echo "</tr>";
                        $result = mysql_query("SELECT * FROM `campaigns` WHERE id= ".$_SESSION['data']->id." AND activate=1   ") or trigger_error(mysql_error());
                        while($row = mysql_fetch_array($result)){
                            foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }


                            /**
                             * Relations
                             */

                            $delivery = $this->db->query("SELECT description FROM delivery_methods WHERE delivery_method_id = '".$row['delivery_method_id']."' ");
                            $is_auto_renewed = ($row['is_auto_renewed'])?'Yes':'No';
                            $lower_amount = ($row['lower_amount'])?'Yes':'No';
                            $activate = ($row['activate'])?'Yes':'No';
                            $is_list_active = ($row['is_list_active'])?'Yes':'No';
                            $campaign_status = $this->db->query("SELECT description FROM campaign_status WHERE campaign_status_id = '".$row['campaign_status_id']."' ");
                            $date = strtotime( $row['start_date'] );






                            echo "<tr>";

                            echo "<td valign='top'>" . nl2br( $delivery->row()->description) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['title']) . "</td>";
                            echo "<td valign='top'>" . nl2br(

                                    date("m/d/y g:i A", $date)

                                ) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['traffic_sources']) . "</td>";
                            echo "<td valign='top'>$" . nl2br( $row['cpv_min']) . "</td>";
                            echo "<td valign='top'>$" . nl2br( $row['cpv_bid']) . "</td>";
                            echo "<td valign='top'>$" . nl2br( $row['cost']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['traffic_order']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['limit_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $is_auto_renewed) . "</td>";
                            echo "<td valign='top'>$" . nl2br( $row['renewel_amount']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $lower_amount) . "</td>";
                            echo "<td valign='top'>" . nl2br( $activate) . "</td>";
                            echo "<td valign='top'>" . nl2br( $is_list_active) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['ad_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $campaign_status->row()->description) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['geo_sources']) . "</td>";
                            echo "<td valign='top'><a href=campaign_edit?campaign_id={$row['campaign_id']}>Edit</a></td><td><a href=/campaigns/delete/?campaign_id={$row['campaign_id']}>Delete</a></td> ";
                            echo "</tr>";



                        }

                        echo "<tr><td colspan='17'><a href=campaign_new>New Campaign</a></td></tr>";
                        echo "</table>";

                        ?>

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