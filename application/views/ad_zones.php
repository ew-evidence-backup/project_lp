<?php include('application/libraries/includes_alt/header.php');?>

<div class="container page">

    <?php include('application/libraries/includes_alt/menu.php');?>

<?php include('application/libraries/includes_alt/publisher_menu.php'); ?>


    <div class="title-wrap">
        <div class="pull-left">
            <h1>Publishers</h1>
            <span class="colon">:</span>
            <a href="/create_ad_zone" class="btn-orange">Create Adzone</a>
        </div>
        <div class="clearfix"></div>
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 adzones">

                <div class="content-pane-inner">

                    <div class="row header">
                        <?
                        include('config.php');
                        echo "<table border=0 class='table' >";
                        echo "<tr>";
                        echo "<td><b>Adzone Id</b></td>";
                        echo "<td><b>Adzone Type Id</b></td>";
                        echo "<td><b>Popunder Id</b></td>";
                        echo "<td><b>Widget Id</b></td>";
                        echo "<td><b>Slider Widget Id</b></td>";
                        echo "<td><b>Mobile Redirect Id</b></td>";
                        echo "<td><b>Adblock Redirect Id</b></td>";
                        echo "<td><b>Is Active</b></td>";
                        echo "<td><b>Date</b></td>";
                        echo "</tr>";
                        $result = mysql_query("SELECT * FROM `ad_zones` WHERE user_id =  ". $_SESSION['data']->id."  ") or trigger_error(mysql_error());
                        while($row = mysql_fetch_array($result)){
                            foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
                            echo "<tr>";
                            echo "<td valign='top'>" . nl2br( $row['adzone_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['adzone_type_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['popunder_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['widget_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['slider_widget_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['mobile_redirect_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['adblock_redirect_id']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['is_active']) . "</td>";
                            echo "<td valign='top'>" . nl2br( $row['date']) . "</td>";
                            echo "<td valign='top'><a href=edit_ad_zone?adzone_id={$row['adzone_id']}>Edit</a></td><td><a href=delete_ad_zone?adzone_id={$row['adzone_id']}>Delete</a></td> ";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "<a href=create_ad_zone>New AdZone</a>";
                        ?>

</div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php');?>