<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login Page</title>
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
                        <a href="<?php echo site_url('admin/');?>" class="logo"><img src="<?php echo base_url('assets/images/logo-light.png');?>" height="90" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Login Administrator</p>
                        
                        <form id="form_login" class="form-horizontal m-t-30 login-form" method="post" action="<?php echo site_url('admin/login');?>">
                            <div id="notif_login"></div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="<?php echo site_url('admin/reset_password');?>"><i class="mdi mdi-lock"></i> Forgot your password?</a>
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
        <!-- <script>
         $("form#form_login").submit(function(e) {
            e.preventDefault();    
            if($("#username").val() == "" || $("#username").val() == null ||
            $("#password").val() == "" || $("#password").val() == null){
                createAlert("warning","Semua bidang harus diisi!");
            }else{
                var data = {
                    "username" : $("#username").val(),
                    "password" : $("#password").val()
                }

                // var data = {
                //     "admin" : data
                // }

                // var d =  new FormData();
                // d.append('username',$("#username").val());
                // d.append('password',$("#password").val());

                $.ajax({
                    url : '<?php echo URL_API;?>/login/v1/admin',
                    type : 'POST',
                    processData : false,
                    contentType : 'application/json',
                    headers : 
                    {
                        "Authorization": "Basic d2ViOndlYg=="
                    },
                    data : JSON.stringify(data),
                    // data : new FormData(this),
                    success : function(response){
                        console.log(response);
                        createAlert("success","login berhasil");
                        window.location = '<?php echo site_url("admin/dashboard/"); ?>';
                        if(response.statusCode != 200){
                            createAlert(response.severity,"login gagal");
                        }else{
                            window.location = '<?php echo site_url("admin/dashboard/"); ?>';
                        }
                    },
                    error : function(response){
                        console.log(response);
                        createAlert("danger","Error, terjadi kendala saat terhubung ke server!");
                    }
                });
            }
        });

        createAlert("success","Selamat datang, silakan login!");
    
        function createAlert(severity,message){
            $("#notif_login").html('<div class="alert alert-'+severity+'">'+message+'</div>');
        }
        </script> -->

    </body>
    
</html>