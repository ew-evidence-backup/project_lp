<?php include('application/libraries/includes_alt/header.php');?>

<div class="container page">

    <?php include('application/libraries/includes_alt/menu.php');?>
    <ul class="nav nav-pills subnav">
        <li class="first"><a href="/campaigns.php">Campaigns</a></li>
        <li><a href="/ads.php">Ads</a></li>
        <li class="active"><a href="/lists.php">Lists</a></li>
        <li><a href="/states.php">Stats</a></li>
        <li><a href="/load-funds.php">Load Funds</a></li>
    </ul>

    <div class="title-wrap">
        <h1>Lists</h1>
        <span class="colon">:</span>
        <a href="" class="btn-orange">Create Lists</a>
        <div class="clearfix"></div>
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 ads lists">

                <div class="content-pane-inner">

                    <h2>Add List</h2>

                    <p class="intro">You are about to create a new list of websites that you do not want to receive traffic from<br><br></p>

                    <form>
                        <legend><div><span>Information</span></div></legend>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Name Your List" name="title">
                                </div>
                            </div><!--.col-xs-6-->
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control">
                                        <option value="">Blacklist</option>
                                    </select>
                                </div>
                            </div><!--.col-xs-6-->
                        </div><!--.row-->
                        <legend><div><span>Websites</span></div></legend>
                        <div class="pane-grayer websites">
                            <div class="header">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3>Websites: 1020</h3>
                                        <div class="pull-right search">
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="search" placeholder="search campaigns...">
                                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                            </div>
                                        </div><!--.pull-right.search-->
                                    </div><!--.col-xs-6-->
                                    <div class="col-xs-6">
                                        <h3>Selected Websites: 2</h3>
                                        <div class="pull-right search">
                                            <a href="#" class="btn remove-all">Remove All</a>
                                        </div><!--.pull-right.search-->
                                    </div><!--.col-xs-6-->
                                </div><!--.row-->
                            </div><!--.header-->
                            <div class="row">
                                <div class="col-xs-6 site-list">
                                    <div class="plus"><span class="fa fa-plus"></span> www.example.com</div>
                                    <div class="plus"><span class="fa fa-plus"></span> www.loremipsum.net</div>
                                    <div>www.example.com</div>
                                    <div>www.loremipsum.net</div>
                                    <div>www.example.com</div>
                                    <div>www.loremipsum.net</div>
                                    <div>www.example.com</div>
                                    <div>www.loremipsum.net</div>
                                    <div>www.example.com</div>
                                    <div>www.loremipsum.net</div>
                                    <div>www.example.com</div>
                                    <div>www.loremipsum.net</div>
                                    <div>www.example.com</div>
                                </div><!--.col-xs-6-->
                                <div class="col-xs-6 site-list">
                                    <div class="minus"><span class="fa fa-minus"></span> www.example.com</div>
                                    <div class="minus"><span class="fa fa-minus"></span> www.loremipsum.net</div>
                                </div><!--.col-xs-6-->
                            </div><!--.row-->
                        </div><!--.pane-grayer-->
                        <br><br>
                        <input type="submit" class="btn-green" value="save list(s)">
                        <br><br>
                    </form>

                </div><!--.content-pane-inner-->

            </div><!--#content-pane-->
        </div><!--.page.row-->
    </div>

</div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php');?>