<?php include('application/libraries/includes_alt/header.php'); ?>

    <div class="container page">

        <?php include('application/libraries/includes_alt/menu.php'); ?>

        <script type="text/javascript">


            $(document).ready(function () {
                $("th:contains('Edit Record')").css("display", "none");
            });

        </script>

        <div class="title-wrap">
            <div class="pull-left">
                <h1>Account</h1>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--.title-wrap-->

        <div class="container" style="width:930px!important;">
            <div class="page-full row">
                <div id="content-pane" class="col-xs-9 account">

                    <div class="content-pane-inner">

                        <?php include('application/libraries/includes_alt/sub_menu.php'); ?>

                        <h2>Verification</h2>
                        <form action="" method="POST">

                            <table class="table">

                                <tr>

                                    <td>

                                        <p class="intro">Account verification area.</p>

                                    </td>

                                </tr>

                                <tr>

                                    <td>

                                        <input type="text" name="email"/>

                                    </td>

                                <tr>


                                    <td>

                                        <input class="btn" type="submit" value="verify"/>

                                    </td>


                                </tr>

                                </tr>

                            </table>

                        </form>

                    </div>
                    <!--.content-pane-inner-->





                </div>
                <!--#content-pane-->
            </div>
            <!--.page.row-->
        </div>

    </div><!--.container-->

<?php include('application/libraries/includes_alt/footer.php'); ?>