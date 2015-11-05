<?php include('application/libraries/includes_alt/header.php');?>

<div class="container page">
    <?php include('application/libraries/includes_alt/menu.php');?>
    <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>

    <div class="title-wrap">
        <div class="pull-left">
            <h1>Stats</h1>
        </div>
        <div class="pull-right">
            <div class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control input-date" name="range_begin" placeholder="From...">
                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                    </div><!--.input-group-->
                </div><!--.form-group-->
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control input-date" name="range_end" placeholder="To...">
                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                    </div><!--.input-group-->
                </div><!--.form-group-->
            </div><!--.form-inline-->
        </div><!--.pull-right-->
        <div class="clearfix"></div>
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 ads stats-list">

                <div class="content-pane-inner">

                    <div class="tabs-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">Dates</a></li>
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Referrals</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </div><!--.tabs-full-width-->

                    <h2>No Stats Found</h2>

                    <p class="intro">We did not find any stats in your account for the period 2014-02-05 - 2014-02-12. If you've not started any campaings yet, you may do so at any time.  Below are some links to get your started</p>

                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">next</a></li>
                        <li><a href="#">last</a></li>
                    </ul>

                </div><!--.content-pane-inner-->

            </div><!--#content-pane-->
        </div><!--.page.row-->
    </div>

</div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php');?>