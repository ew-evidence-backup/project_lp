<?php include('application/libraries/includes_alt/header.php'); ?>
    <div class="container page">
        <?php include('application/libraries/includes_alt/menu.php'); ?>
        <ul class="nav nav-pills subnav">
            <li class="first"><a href="/campaigns.php">Campaigns</a></li>
            <li><a href="/ads.php">Ads</a></li>
            <li class="active"><a href="/lists.php">Lists</a></li>
            <li><a href="/states.php">Stats</a></li>
            <li><a href="/load-funds.php">Load Funds</a></li>
        </ul>
        <div class="title-wrap">
            <div class="pull-left">
                <h1>Lists</h1>
                <span class="colon">:</span>
                <a href="#" class="btn-orange">Create Lists</a>
            </div>
            <div class="pull-right search">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="search campaigns...">
                    <span class="input-group-addon"><span class="fa fa-search"></span></span>
                </div>
            </div>
            <!--.pull-right.search-->
            <div class="clearfix"></div>
        </div>
        <!--.title-wrap-->
        <div class="container" style="width:930px!important;">
            <div class="page-full row">
                <div id="content-pane" class="col-xs-9 ads lists-list">
                    <div class="content-pane-inner">
                        <h2>No Lists Found</h2>
                        <?
                        include('config.php');
                        if (isset($_POST['submitted'])) {
                            foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
                            $sql = "INSERT INTO `lists` ( `title` ,  `list_type_id` ,  `campaign_id` ,  `date`  ) VALUES(  '{$_POST['title']}' ,  '{$_POST['list_type_id']}' ,  '{$_POST['campaign_id']}' ,  '{$_POST['date']}'  ) ";
                            mysql_query($sql) or die(mysql_error());
                            echo "Added row.<br />";
                            echo "<a href='list_list.php'>Back To Listing</a>";
                        }
                        ?>

                        <form action='' method='POST'>
                            <p><b>Title:</b><br /><input type='text' name='title'/>
                            <p><b>List Type Id:</b><br /><input type='text' name='list_type_id'/>
                            <p><b>Campaign Id:</b><br /><input type='text' name='campaign_id'/>
                            <p><b>Date:</b><br /><input type='text' name='date'/>
                            <p><input type='submit' value='Add New List' /><input type='hidden' value='1' name='submitted' />
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