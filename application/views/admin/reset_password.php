<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Page Reset Password</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/metismenu.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css">
    </head>

    <body>
        
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                        <a href="<?php echo site_url('admin/');?>" class="logo"><img src="<?php echo base_url('assets/images/logo-dark.png');?>" height="22" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Reset Password</h4>
                        <div class="alert alert-success m-t-30" role="alert">
                            Enter your Email and instructions will be sent to you!
                        </div>
    

                        <form class="form-horizontal m-t-30" action="index.html">

                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>© 2020 Ganesh Lab Solution.</p>
            </div>

        </div>
        <!-- end wrapper-page -->

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/metisMenu.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js'); ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>

    </body>

</html>