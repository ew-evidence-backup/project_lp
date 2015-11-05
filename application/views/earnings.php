<?php include('application/libraries/includes_alt/header.php');?>

    <div class="container page">
        <?php include('application/libraries/includes_alt/menu.php');?>
        <?php include('application/libraries/includes_alt/advertiser_menu.php'); ?>

        <div class="title-wrap">
            <div class="pull-left">
                <h1>Earnings</h1>
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


                    <div><!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a></td></tr></table><!-- PayPal Logo --></div>

                    <div>
                        <form id="paypal_form" class="paypal" action="payments.php" method="post">
                            <input name="cmd" type="hidden" value="_xclick" />
                            <input name="no_note" type="hidden" value="1" />
                            <input name="lc" type="hidden" value="UK" />
                            <input name="currency_code" type="hidden" value="GBP" />
                            <input name="bn" type="hidden" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                            <input name="first_name" type="hidden" value="Customer's First Name" />
                            <input name="last_name" type="hidden" value="Customer's Last Name" />
                            <input name="payer_email" type="hidden" value="customer@example.com" />
                            <input name="item_number" type="hidden" value="123456" />
                            <input type="submit" value="Submit Payment" />
                        </form>

                    </div>
                </div><!--#content-pane-->
            </div><!--.page.row-->
        </div>

    </div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php');?>