<footer>
    <div class="container" id="footer-top">
        <div id="footer-credit-cards"></div>
        <div class="row" id="footer-menus">
            <div class="col-xs-2">
                <h3>About</h3>
                <a href="">About Us</a><br>
                <a href="">Blog</a>
            </div>
            <div class="col-xs-2">
                <h3>Support</h3>
                <a href="">FAQ</a><br>
                <a href="">Create Ticket</a><br>
                <a href="">Reset Password</a><br>
                <a href="">Contact Us</a>
            </div>
            <div class="col-xs-2">
                <h3>Advertisers</h3>
                <a href="">Buy Traffic</a><br>
                <a href="">Prices</a>

                <h3>Developers</h3>
                <a href="">API Docs</a>
            </div>
            <div class="col-xs-2">
                <h3>Publishers</h3>
                <a href="">Sell Traffic</a><br>
                <a href="">Trade Traffic</a><br>
                <a href="">Plugins</a>
            </div>
            <div class="col-xs-2">
                <h3>Payment Methods</h3>
                <a href="">Bank Wire</a><br>
                <a href="">Paxum</a><br>
                <a href="">Payoneer</a><br>
                <a href="">PayPal</a><br>
                <a href="">Redpass</a>
            </div>
            <div class="col-xs-2">
                <h3>Languages</h3>
                <a href="">English</a><br>
                <a href="">French</a><br>
                <a href="">German</a><br>
                <a href="">Norwegian</a><br>
                <a href="">Portuguese</a><br>
                <a href="">Russian</a><br>
                <a href="">Spanish</a>
            </div>
        </div>
        <!--.row-->
    </div>
    <!--.container#footer-top-->
    <div id="footer-bottom">
        <div class="container">
            <div class="pull-left">
                Copyright &copy; 2014 LoadPops. All Rights Reserved.
            </div>
            <div class="pull-right">
                <a href="terms">Terms of Service</a> &middot; <a href="privacy">Privacy Policy</a> &middot;
                <a href="refund">Refund Policy</a>
            </div>
        </div>
        <!--.container-->
    </div>
    <!--#footer-bottom-->
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.datetimepicker.js"></script>
<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php

if (ENVIRONMENT == 'development') {
    echo '<br/>';
    echo '<hr/>';
    echo '<div style="color:green">';
    echo '<h4 style="padding-left:10px;">Development Mode</h4>';
    include 'application/libraries/debug.php';

    $d = new Debug();
    $d->setTitle('Request')->setVariable($_REQUEST)->debug();
    $d->setTitle('Request')->setVariable($_SESSION)->debug();
    $d->setTitle('Request')->setVariable($_SERVER)->debug();
//
//    (new Debug())->setTitle('Request')->setVariable($_REQUEST)->debug();
//    (new Debug())->setTitle('Session')->setVariable($_SESSION)->debug();
//    (new Debug())->setTitle('Server')->setVariable($_SERVER)->debug();
    echo '</div>';
}

?>

</body>
</html>
