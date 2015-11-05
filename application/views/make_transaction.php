<?php include('application/libraries/includes_alt/header.php');?>

<div class="container page">

    <?php include('application/libraries/includes_alt/menu.php');?>

    <div class="title-wrap">
        <div class="pull-left">
            <h1>Transactions</h1>
            <span class="colon">:</span>
            <a href="" class="btn-orange">Load Funds</a>
            <a href="" class="btn-orange">Withdraw Funds</a>
        </div>
        <div class="clearfix"></div>
    </div><!--.title-wrap-->

    <div class="container" style="width:930px!important;">
        <div class="page-full row">
            <div id="content-pane" class="col-xs-9 ads transactions">

                <div class="content-pane-inner">

                    <h2>Make a Transaction</h2>

                    <p class="intro">Use this form to load or withdraw funds</p>

                    <form role="form">

                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" class="form-control">
                                <option>LoadFunds</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Method</label>
                            <select name="method" class="form-control">
                                <option>WireTransfer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Information regarding: PayPal</label>
                            <p class="form-help">In order to receive money to your Paypal account you need to add it to PlugRush<br>
                                                 Please update your payment information <a href="">here</a>.</p>
                        </div>

                        <div class="form-group">
                            <br>
                            <input type="submit" value="Proceed" class="btn-green">
                        </div>

                    </form>

                </div><!--.content-pane-inner-->

            </div><!--#content-pane-->
        </div><!--.page.row-->
    </div>

</div><!--.container#advertisers-->

<?php include('application/libraries/includes_alt/footer.php');?>