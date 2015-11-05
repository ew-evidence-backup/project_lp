<?php include('application/libraries/includes_alt/header.php');?>

<div class="container page">

<?php include('application/libraries/includes_alt/menu.php');?>
<ul class="nav nav-pills subnav">
    <li class="first"><a href="/campaigns.php">Campaigns</a></li>
    <li class="active"><a href="/ads.php">Ads</a></li>
    <li><a href="/lists.php">Lists</a></li>
    <li><a href="/states.php">Stats</a></li>
    <li><a href="/load-funds.php">Load Funds</a></li>
</ul>

<div class="title-wrap">
    <div class="pull-left">
        <h1>Ads</h1>
        <span class="colon">:</span>
        <a href="" class="btn-orange">Create Ad</a>
        <a href="" class="btn-orange">Import Ads</a>
    </div><!--.pull-left-->
    <div class="pull-right search">
        <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="search campaigns...">
            <span class="input-group-addon"><span class="fa fa-search"></span></span>
        </div>
    </div>
    <div class="clearfix"></div>
</div><!--.title-wrap-->

<div class="container" style="width:930px!important;">
<div class="page-full row">
<div id="content-pane" class="col-xs-9 ads">
<div class="content-pane-inner">
<h2>Create Ad</h2>
<p class="intro">Make sure you enter correct information that describes the content and select proper categories that matches the thumbnail.<br><br></p>
<form>
<div class="row">
<div class="col-xs-6 first">
    <div class="form-group">
        <label>Internal reference</label>
        <input type="text" class="form-control" name="internal_reference">
    </div>
    <div class="form-group">
        <label>Platform</label>
        <select class="form-control" name="platform">
            <option>Desktop Devices</option>
        </select>
    </div>
    <div class="type-group">
        <label>Type</label>
        <select class="form-control" name="type">
            <option>Regular Ad (for most Dumps, Tubes &amp; etc)</option>
        </select>
    </div>
    <div class="form-group">
        <label class="text-uppercase">URL</label>
        <input type="text" class="form-control" name="url">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="internal_reference"></textarea>
    </div>
    <div class="form-group">
        <div class="radio">
            <label><input type="radio" name="thumbnail_type" value="url"> thumbnail <span class="text-transform:uppercase">URL</span></label>
        </div>
        <input type="text" class="form-control" name="thumbnail_url">
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <div class="radio">
            <label><input type="radio" name="thumbnail_type" value="file"> thumbnail file</label>
        </div>
        <input type="file" name="thumbnail_file" id="thumnbnail_file">
    </div>
</div><!--.col-xs-6-->
<div class="col-xs-6">
    <div class="pane pane-padding">
        <div class="form-group">
            <label>Categories</label>
            <p class="help-text italics">
                Only select categories that are relevant to the thumbnail. Failure to do so will get your ads rejected<br><br>
                <input type="button" class="btn-mini ads-select-all" value="select all">
            </p>
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Afghanistan</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Aland Island</label></div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> Algeria</label>
                </div>
            </div><!--.col-xs-6-->
            <div class="col-xs-6">
                <div class="checkbox">
                    <label><input type="checkbox" name="categories[]" value=""> American Samoa</label></div>
            </div><!--.col-xs-6-->
            <div class="clearfix"></div>
        </div><!--.form-group-->
    </div><!--.pane-->
</div><!--.col-xs-6-->
<div class="col-xs-12">
    <br><br>
    <input class="btn-green" type="submit" value="save ad">
    <br><br>
</div>
</div><!--.row-->
</form>
</div><!--.content-pane-inner-->
</div><!--#content-pane-->
</div><!--.page.row-->
</div>

</div><!--.container#advertisers-->
<?php include('application/libraries/includes_alt/footer.php');?>