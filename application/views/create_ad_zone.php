<?php include('application/libraries/includes_alt/header.php'); ?>

<div class="container page publishers">
    <?php include('application/libraries/includes_alt/menu.php'); ?>
    <?php include('application/libraries/includes_alt/publisher_menu.php'); ?>

    <div class="title-wrap">
        <div class="pull-left">
            <h1>Publishers</h1>
            <span class="colon">:</span>
<!--            <a href="" class="btn-orange">Create Adzone</a>-->
        </div>
        <div class="clearfix"></div>
    </div>
    <!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 publishers adzones">

                <div class="content-pane-inner">

                    <?
                    include('config.php');
                    if (isset($_POST['submitted'])) {
                        foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
                        $sql = "INSERT INTO `ad_zones` ( `adzone_type_id` ,  `popunder_id` ,  `widget_id` ,  `slider_widget_id` ,  `mobile_redirect_id` ,  `adblock_redirect_id` ,  `is_active` ,  `date`  ) VALUES(  '{$_POST['adzone_type_id']}' ,  '{$_POST['popunder_id']}' ,  '{$_POST['widget_id']}' ,  '{$_POST['slider_widget_id']}' ,  '{$_POST['mobile_redirect_id']}' ,  '{$_POST['adblock_redirect_id']}' ,  '{$_POST['is_active']}' ,  '{$_POST['date']}'  ) ";
                        mysql_query($sql) or die(mysql_error());
                        echo "Added row.<br />";
                        echo "<a href='ad_zones'>Back To Listing</a>";
                    }
                    ?>

                    <table class="table">

                        <tr>

                            <td>

                                <form  action='' method='POST'>
                                    <p><b>Adzone Type Id:</b><br /><input type='text' name='adzone_type_id'/>
                                    <p><b>Popunder Id:</b><br /><input type='text' name='popunder_id'/>
                                    <p><b>Widget Id:</b><br /><input type='text' name='widget_id'/>
                                    <p><b>Slider Widget Id:</b><br /><input type='text' name='slider_widget_id'/>
                                    <p><b>Mobile Redirect Id:</b><br /><input type='text' name='mobile_redirect_id'/>
                                    <p><b>Adblock Redirect Id:</b><br /><input type='text' name='adblock_redirect_id'/>
                                    <p><b>Is Active:</b><br /><input type='text' name='is_active'/>
                                    <p><b>Date:</b><br /><input type='text' name='date'/>
                                    <p><input type='submit' value='Create AdZone' /><input type='hidden' value='1' name='submitted' />
                                </form>

                            </td>

                        </tr>

                    </table>




                </div>
                <!--.content-pane-inner-->

            </div>
            <!--#content-pane-->
        </div>
        <!--.page.row-->
    </div>

</div><!--.container#advertisers-->


<?php include('application/libraries/includes_alt/footer.php'); ?>
