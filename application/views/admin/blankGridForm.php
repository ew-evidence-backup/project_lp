<?php include('application/libraries/includes_alt/header.php');?>

    <div class="container page">

    <?php include('application/libraries/includes_alt/menu.php');?>

    <script type="text/javascript">



        $(document).ready(function() {
            $( "th:contains('Edit Record')" ).css( "display", "none" );
        });

    </script>

    <div class="title-wrap">
        <div class="pull-left">
            <h1>Account</h1>
        </div>
        <div class="clearfix"></div>
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
    <div class="page-full row">
    <div id="content-pane" class="col-xs-9 account">

    <div class="content-pane-inner">

        <?php include('application/libraries/includes_alt/sub_menu.php');?>

        <h2>Profile</h2>

        <p class="intro">Use this page to edit your account profile. Make sure your information is correct and updated at all times</p>
              <!--                    <form>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Username</label>-->
              <!--                            <div class="input-group">-->
              <!--                                <input readonly type="text" name="username" value="--><?php //echo $_SESSION['data'][0]['username']; ?><!--" class="form-control">-->
              <!--                                <span class="input-group-addon"><a href=""><span class="fa fa-edit"></span></a></span>-->
              <!--                            </div>-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label><span class="text-uppercase">I</span> a primarily</label>-->
              <!--                            <select name="primary_role" class="form-control">-->
              <!--                                <option>an Advertiser</option>-->
              <!--                            </select>-->
              <!--                        </div>-->
              <!---->
              <!--                        <hr>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Company</label>-->
              <!--                            <input type="text" name="company" value="--><?php //echo $_SESSION['data'][0]['company']; ?><!--" class="form-control">-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label class="text-uppercase">VAT</label>-->
              <!--                            <input type="text" name="vat" value="--><?php //echo $_SESSION['data'][0]['vat_tax_id']; ?><!--" class="form-control">-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Name</label>-->
              <!--                            <input type="text" name="vat" placeholder="Enter your VAT" class="form-control">-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Address</label>-->
              <!--                            <input type="text" name="address" class="form-control" value="--><?php //echo $_SESSION['data'][0]['address']; ?><!--">-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Zip Code</label>-->
              <!--                            <input type="text" name="zip_code" class="form-control" value="--><?php //echo $_SESSION['data'][0]['zip']; ?><!--">-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>City</label>-->
              <!--                            <input type="text" name="city" class="form-control" value="--><?php //echo $_SESSION['data'][0]['city']; ?><!--">-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Country</label>-->
              <!--                            <select name="country" class="form-control">-->
              <!--                                <option>--><?php //echo $_SESSION['data'][0]['country_id']; ?><!--</option>-->
              <!--                            </select>-->
              <!--                        </div>-->
              <!---->
              <!--                        <hr>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Email</label>-->
              <!--                            <div class="input-group">-->
              <!--                                <input readonly type="email" name="email" value="--><?php //echo $_SESSION['data'][0]['email']; ?><!--" class="form-control edit">-->
              <!--                                <span class="input-group-addon"><a href=""><span class="fa fa-edit"></span></a></span>-->
              <!--                            </div>-->
              <!--                        </div>-->
              <!---->
              <!--                        <div class="form-group">-->
              <!--                            <label>Password</label>-->
              <!--                            <div class="input-group">-->
              <!--                                <input readonly type="password" name="password" value="--><?php //echo $_SESSION['data'][0]['password']; ?><!--" class="form-control edit">-->
              <!--                                <span class="input-group-addon"><a href=""><span class="fa fa-edit"></span></a></span>-->
              <!--                            </div>-->
              <!--                        </div>-->
              <!---->
              <!--                        <br><br>-->
              <!--                        <p class="text-green form-note">Fields marked with (*) are mandatory and need to be completed</p>-->
              <!---->
              <!--                        <br>-->
              <!---->
              <!--                        <input type="submit" value="save changes" class="btn-green">-->
              <!---->
              <!--                        <br><br><br><br><br><br>-->
              <!---->
              <!--                    </form>-->

    </div><!--.content-pane-inner-->
    <?php
    /*
        -- sample sql script to populate database for demo

        create table if not exists country
        ( country_id int unsigned not null auto_increment primary key
        , country_name varchar(255)
        ) character set utf8 collate utf8_general_ci;

        insert into country(country_name) values ('Canada'), ('United States'), ('Mexico');

        create table if not exists market
        ( market_id int unsigned not null auto_increment primary key
        , market_name varchar(255)
        , photo varchar(255)
        , contact_email varchar(255)
        , country_id int unsigned
        , is_active tinyint(1)
        , create_date date
        , notes text
        ) character set utf8 collate utf8_general_ci;

        insert into market(market_name, contact_email, country_id, is_active, create_date, notes) values
        ('Great North', 'jane@superco.com', 1, 1, now(), 'nothing new'),
        ('The Middle', 'sue@superco.com', 2, null, '2001-01-01', 'these are notes'),
        ('Latin Market', 'john@superco.com', 1, 1, '1999-10-31', 'expanding soon');

        create table if not exists sub_market
        ( sub_market_id int unsigned not null auto_increment primary key
        , market_id int unsigned
        , sub_market_name varchar(255)
        , photo varchar(255)
        ) character set utf8 collate utf8_general_ci;

        insert into sub_market(market_id, sub_market_name) values
        (1, 'Sample a'),
        (1, 'Sample b'),
        (1, 'Sample c'),
        (2, 'Sample d'),
        (2, 'Sample e'),
        (2, 'Sample f');


    */

    // speed things up with gzip, ob_start() required for csv downloads

    //if(!ob_start('ob_gzhandler'))
    //  ob_start();
    header('Content-Type: text/html; charset=utf-8');

    include('application/libraries/dataGrid.php');


    echo "
<html>
<head>
	<meta charset='UTF-8' />
	<link rel='stylesheet' type='text/css' href='../css/dataGrid.css'  />
</head>
<body>
";


    // enter your database host, name, username, and password
    include('application/libraries/connection.php');

    // connect with pdo
    try {
        $dbh = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);
    }
    catch(PDOException $e) {
        die('pdo connection error: ' . $e->getMessage());
    }


    // create LM object, pass in PDO connection
    $lm = new lazy_mofo($dbh);


    // table name for updates, inserts and deletes
    $lm->table = 'users';


    // identity / primary key for table
    $lm->identity_name = 'id';


    // optional, define grid sort order
    $lm->grid_default_order_by = 'id desc';


    // optional, make friendly names for fields
    $lm->rename = array('id' => 'Account ID');


    // optional, ON FORM define input controls on the form
    $lm->form_input_control = array('image' => '--image', 'is_active' => '--checkbox','UserID'=> 'select UserID, Username from Users; --select');


    // optional, EDIT ON GRID define editable input controls on the grid
    $lm->grid_input_control = array('is_active' => '--checkbox','UserID'=> 'select UserID, Username from Users; --select');


    // optional, OUTPUT CONTROL GRID define output control on the grid; make email clickable and the photo a clickable link
    $lm->grid_output_control = array('email' => '--email', 'image' => '--image');


    // optional, query for grid(). if the last column selected is the primary key identity, then the [edit] and [delete] links are displayed
    //$lm->grid_sql = "select m.market_id, m.market_name, m.photo, m.contact_email, c.country_name, m.is_active, m.create_date, m.notes, market_id from market m left join country c on m.country_id = c.country_id order by m.market_id desc";


    // optional, define what is displayed on edit form
    //$lm->form_sql = 'select market_id, market_name, country_id, photo, contact_email, is_active, create_date, notes from market where market_id = :market_id';
    //$lm->form_sql_param = array(':market_id' => intval(@$_REQUEST['market_id']));

    // optional, display a related table under the edit record form
    //$lm->child_title = 'Sub Markets';
    //$lm->child_table = 'sub_market';
    //$lm->child_identity_name = 'sub_market_id';
    //$lm->child_parent_identity_name = 'market_id';
    //$lm->child_input_control = array('photo' => '--image');

    // use the lm controller
    $lm->run();


    echo "</body></html>";
    ?>
    </div><!--#content-pane-->
    </div><!--.page.row-->
    </div>

    </div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php');?>