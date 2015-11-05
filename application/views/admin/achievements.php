<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trivia">
    <meta name="author" content="Evin Weissenberg - Venice Data">
    <meta name="revisit-after" content="7 days">
    <META name="robots" CONTENT="INDEX, FOLLOW">
    <meta name="keywords" content="Trivia, Trivia games">
    <title>InboxTrivia</title>
    <?php include('application/libraries/includes/css.php');?>
</head>

<body>

<div id="wrapper">

    <?php include('application/libraries/includes/shell.php');?>

    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1>Achievements <small> Available to players.</small></h1>
<!--                <ol class="breadcrumb">-->
<!--                    <li><a href=""><i class="icon-dashboard"></i> Dashboard</a></li>-->
<!--                    <li class="active"><i class="icon-file-alt"></i> Blank Page</li>-->
<!--                </ol>-->

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
                $lm->table = 'AchievementTypes';


                // identity / primary key for table
                $lm->identity_name = 'AchievementITypeID';


                // optional, define grid sort order
                $lm->grid_default_order_by = 'AchievementITypeID desc';


                // optional, make friendly names for fields
                $lm->rename = array('AchievementITypeID' => 'ID');


                // optional, define input controls on the form
                $lm->form_input_control = array('Image' => '--image', 'IsPrize' => '--checkbox', 'CategoryID' => 'select CategoryID, Name from Categories; --select');


                // optional, define editable input controls on the grid
                $lm->grid_input_control = array('IsPrize' => '--checkbox','CategoryID' => 'select CategoryID, Name from Categories; --select');


                // optional, define output control on the grid; make email clickable and the photo a clickable link
                $lm->grid_output_control = array('contact_email' => '--email', 'Image' => '--image');


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

            </div>
            <?php include('application/libraries/includes/footer.php');?>
        </div><!-- /.row -->

    </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

<!-- JavaScript -->
<?php include('application/libraries/includes/js.php');?>

</body>
</html>