<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>TanGroup - Administrator</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url('plugins/chartist/css/chartist.min.css');?>">
        <!-- datepicker  -->
        <link href="<?php echo base_url('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>" rel="stylesheet" type="text/css">
        <!--calendar css-->
        <link href="<?php echo base_url('plugins/fullcalendar/css/fullcalendar.min.css');?>" rel="stylesheet">
        <!-- Dropzone css -->
        <link href="<?php echo base_url('plugins/dropzone/dist/dropzone.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/metisMenu.min.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/icons.css');?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="<?php echo base_url('plugins/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('plugins/datatables/buttons.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url('plugins/datatables/responsive.bootstrap4.min.css');?>" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" /> -->
        
        
        <link href="<?php echo base_url('plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                                <img src="<?php echo base_url('assets/images/logo-light.png');?>" alt="" height="90">
                            </span>
                        <i>
                                <!-- <img src="<?php echo base_url('assets/images/logo-sm.png');?>" alt="" height="22"> -->
                                <p style="font-size: 30">TAN</p>
                            </i>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>

                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-fullscreen noti-icon"></i>
                            </a>
                        </li>

                        <!-- notification -->
                        
                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url('assets/images/users/user-4.jpg');?>" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a> -->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="<?php echo site_url('admin/logout');?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">

                            
                                <li class="menu-title">Main</li>
                                <li>
                                    <a href="<?php echo site_url('admin/dashboard');?>" class="waves-effect">
                                        <i class="ti-home"></i> <span> Dashboard </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="javascript:void(0)" class="waves-effect"><i class="ti-clipboard"></i><span> Data KK <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('admin/report');?>"> Tambah Data KK</a></li>
                                        <li><a href="<?php echo site_url('admin/report_membership');?>"> List Data KK </a></li>
                                        
                                    </ul>
                                    
                                    
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="waves-effect"><i class="ti-clipboard"></i><span> Mutasi<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                                    <ul class="submenu">
                                        <li><a href="<?php echo site_url('admin/report');?>"> Tambah Mutasi </a></li>
                                        <li><a href="<?php echo site_url('admin/report_membership');?>"> List Mutasi</a></li>
                                        
                                    </ul>
                                    
                                    
                                </li>  
                                <li>
                                    <a href="<?php echo site_url('admin/');?>" class="waves-effect">
                                        <i class="ti-clipboard"></i> <span> Riwayat </span>
                                    </a>
                                </li>
                            
                            
                            
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->