<?php include('application/libraries/includes_alt/header.php');?>

<div class="container page">

    <?php include('application/libraries/includes_alt/menu.php');?>
    <?php include('application/libraries/includes_alt/publisher_menu.php');?>

    <div class="title-wrap">
        <div class="pull-left">
            <h1>Publishers</h1>
            <span class="colon">:</span>
            <a href="#" class="btn-orange">Add a Website</a>
        </div>
        <div class="clearfix"></div>
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 websites">

                <div class="content-pane-inner">

                    <div class="tabs-full-width tabs-full-width-4">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">All <span class="badge">16</span></a></li>
                            <li><a href="#">Approved <span class="badge">11</span></a></li>
                            <li><a href="#">Pending <span class="badge">14</span></a></li>
                            <li><a href="#">Rejected <span class="badge">1</span></a></li>
                        </ul>
                    </div><!--.tabs-full-width-->

                    <table class="table table-gray">
                        <thead>
                        <tr>
                            <th rowspan="2">ID</th>
                            <th rowspan="2">Website</th>
                            <th colspan="2">Clicked Traffic</th>
                            <th colspan="3">Other Traffic Settings</th>
                            <th rowspan="2">Alexa</th>
                            <th rowspan="2">PageRank</th>
                            <th rowspan="2"><span class="fa fa-gear"></span></th>
                        </tr>
                        <tr>
                            <th>trading</th>
                            <th>selling</th>
                            <th>popunder</th>
                            <th>mobile</th>
                            <th>adblock</th>
                        </tr>
                        </thead>
                        <tbody class="bg-light">
                        <tr>
                            <td>
                                <span class="id">#924512</span><br>
                                <span class="date">10.15.2014</span>
                            </td>
                            <td>
                                <span class="name"><a href="">websitename.com</a></span><br>
                                <span class="category">Blog / Category</span>
                            </td>
                            <td class="text-center">3,245</td>
                            <td class="text-center">5,212</td>
                            <td class="text-center">2,451</td>
                            <td class="text-center">2,124</td>
                            <td class="text-center">2,563</td>
                            <td class="text-center"><span class="green">30,000</span></td>
                            <td class="text-center">412</td>
                            <td class="icons text-center">
                                <a href=""><span class="fa fa-search"></span></a>
                                <a href=""><span class="fa fa-edit"></span></a>
                                <a href=""><span class="fa fa-times"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="id">#924512</span><br>
                                <span class="date">10.15.2014</span>
                            </td>
                            <td>
                                <span class="name"><a href="">websitename.com</a></span><br>
                                <span class="category">Blog / Category</span>
                            </td>
                            <td class="text-center">3,245</td>
                            <td class="text-center">5,212</td>
                            <td class="text-center">2,451</td>
                            <td class="text-center">2,124</td>
                            <td class="text-center">2,563</td>
                            <td class="text-center"><span class="green">30,000</span></td>
                            <td class="text-center">412</td>
                            <td class="icons text-center">
                                <a href=""><span class="fa fa-search"></span></a>
                                <a href=""><span class="fa fa-edit"></span></a>
                                <a href=""><span class="fa fa-times"></span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <br>

                    <h2>Add Website</h2>

                    <p class="intro">By adding your website you may create adzones for it and earn money by selling traffic to advertisers. <br>
                                     You are also able to create plugs and join our traffic exchange program<br></p>
                    <form>
                        <div class="form-group">
                            <label class="text-uppercase">URL</label>
                            <input type="text" name="url" placeholder="www.yourwebsite.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Language</label>
                            <select name="language" class="form-control" placeholder="Please select...">
                                <option value="">English</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" class="form-control" placeholder="Please select...">
                                <option value="">Type 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control" placeholder="Please select...">
                                <option value="">English</option>
                            </select>
                        </div>
                        <br><br>
                        <input type="submit" value="save website" class="btn-green">
                        <br><br><br>
                    </form>

                </div><!--.content-pane-inner-->

            </div><!--#content-pane-->
        </div><!--.page.row-->
    </div>

</div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php');?>