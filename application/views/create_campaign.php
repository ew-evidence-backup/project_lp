<?php include('application/libraries/includes_alt/header.php'); ?>
<script type="text/javascript" src="js/datetimepicker/jquery.simple-dtpicker.js"></script>
<link rel="stylesheet" href="js/datetimepicker/jquery.simple-dtpicker.css"/>
<div class="container page">

<?php include('application/libraries/includes_alt/menu.php'); ?>
    <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>


<div class="title-wrap">
    <h1>Campaigns</h1>
    <span class="colon">:</span>
    <a href="" class="btn-orange">Create Campaign</a>

    <div class="clearfix"></div>
</div>
<!--.title-wrap-->

<div class="container" style="width:930px!important;">
<div class="page-sidebar row">
<aside id="sidebar" class="col-xs-3">
    <h2>New<br>
        Campaign</h2>
    <h4>Fast &amp; easy.</h4>
    <ol id="eightsteps">
        <li>Method, Title &amp; Date</li>
        <li>Sources</li>
        <li>CPV</li>
        <li>Cost, Order & Limits</li>
        <li>Renewal</li>
        <li>Activation</li>
        <li>Rules</li>
        <li>Save</li>
    </ol>
    <!--#80-steps-->
    <br><br>

    <h2>Rules</h2>
    <br>

    <p>Do not under any circumstances spread malware or viruses to the visitors

    <p>

    <p>Websites with a any history of spreading malware will be rejected</p>

    <p>Automatic downloads are not allowed</p>

    <p>Any files that the visitors can download must be clean from malware, adware and similar problems</p>

    <p>Anyone promoting the FBI/Police lockers will be instantly banned</p>

    <p>We will not accept websites that contain beastiality-, nudism-, piracy- or underage content</p>
</aside>
<!--#sidebar-->
<div id="content-pane" class="col-xs-9 cpv">
    <?
    include('config.php');
    if (isset($_POST['submitted'])) {
        foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
        $sql = "INSERT INTO `campaigns` ( `id` ,  `delivery_method_id` ,  `title` ,  `start_date` ,  `traffic_sources` ,  `cpv_min` ,  `cpv_bid` ,  `cost` ,  `traffic_order` ,  `limit_id` ,  `is_auto_renewed` ,  `renewel_amount` ,  `lower_amount` ,  `activate` ,  `is_list_active` ,  `ad_id` ,  `campaign_status_id` ,  `geo_sources`  ) VALUES(  '{$_POST['id']}' ,  '{$_POST['delivery_method_id']}' ,  '{$_POST['title']}' ,  '{$_POST['start_date']}' ,  '{$_POST['traffic_sources']}' ,  '{$_POST['cpv_min']}' ,  '{$_POST['cpv_bid']}' ,  '{$_POST['cost']}' ,  '{$_POST['traffic_order']}' ,  '{$_POST['limit_id']}' ,  '{$_POST['is_auto_renewed']}' ,  '{$_POST['renewel_amount']}' ,  '{$_POST['lower_amount']}' ,  '{$_POST['activate']}' ,  '{$_POST['is_list_active']}' ,  '{$_POST['ad_id']}' ,  '{$_POST['campaign_status_id']}' ,  '{$_POST['geo_sources']}'  ) ";
        mysql_query($sql) or die(mysql_error());
        echo "Added row.<br />";
        echo "<a href='campaign_list.php'>Back To Listing</a>";
    }
    ?>

    <form style="padding-left:35px;" action='' method='POST'>
        <p><b></b><br /><input type='hidden' name='id'/>
        <p><b>Delivery Method Id:</b><br /><input type='text' name='delivery_method_id'/>
        <p><b>Title:</b><br /><input type='text' name='title'/>
        <p><b>Start Date:</b><br /><input type='text' name='start_date'/>
        <p><b>Traffic Sources:</b><br /><textarea name='traffic_sources'></textarea>
        <p><b>Cpv Min:</b><br /><input type='text' name='cpv_min'/>
        <p><b>Cpv Bid:</b><br /><input type='text' name='cpv_bid'/>
        <p><b>Cost:</b><br /><input type='text' name='cost'/>
        <p><b>Traffic Order:</b><br /><input type='text' name='traffic_order'/>
        <p><b>Limit Id:</b><br /><input type='text' name='limit_id'/>
        <p><b>Is Auto Renewed:</b><br /><input type='text' name='is_auto_renewed'/>
        <p><b>Renewel Amount:</b><br /><input type='text' name='renewel_amount'/>
        <p><b>Lower Amount:</b><br /><input type='text' name='lower_amount'/>
        <p><b>Activate:</b><br /><input type='text' name='activate'/>
        <p><b>Is List Active:</b><br /><input type='text' name='is_list_active'/>
        <p><b>Ad Id:</b><br /><input type='text' name='ad_id'/>
        <p><b>Campaign Status Id:</b><br /><input type='text' name='campaign_status_id'/>
        <p><b>Geo Sources:</b><br /><textarea name='geo_sources'></textarea>
        <p><input type='submit' value='Add Campaign' /><input type='hidden' value='1' name='submitted' />
    </form>
</div>
<!--#content-pane-->
</div>
<!--.page.row-->
</div>

</div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php'); ?>
