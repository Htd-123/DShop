﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upvex - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">

    <!-- Custom box css -->
    <link href="assets\libs\custombox\custombox.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
        
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                <span class="float-right">
                                    <a href="" class="text-white">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="assets\images\users\user-1.jpg" class="img-fluid rounded-circle" alt=""> </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="assets\images\users\user-4.jpg" class="img-fluid rounded-circle" alt=""> </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart text-danger"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-dark">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets\images\users\user-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Marcia J. <i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0 text-white">
                                Welcome !
                            </h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets\images\logo-light.png" alt="" height="24">
                        <!-- <span class="logo-lg-text-light">Upvex</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="assets\images\logo-sm.png" alt="" height="28">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </li>
        
                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        Reports
                        <i class="mdi mdi-chevron-down"></i> 
                    </a>
                    <div class="dropdown-menu">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Finance Report
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Monthly Report
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Revenue Report
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Settings
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            Help & Support
                        </a>

                    </div>
                </li>

                <li class="dropdown dropdown-mega d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        Mega Menu
                        <i class="mdi mdi-chevron-down"></i> 
                    </a>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-8">
                        
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-dark mt-0">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list mt-2">
                                            <li>
                                                <a href="javascript:void(0);">Widgets</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Nestable List</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Range Sliders</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Masonry Items</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sweet Alerts</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Treeview Page</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tour Page</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="text-dark mt-0">Applications</h5>
                                        <ul class="list-unstyled megamenu-list mt-2">
                                            <li>
                                                <a href="javascript:void(0);">Email Pages</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Profile</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Team Contacts</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Coming Soon Page</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="text-dark mt-0">Layouts</h5>
                                        <ul class="list-unstyled megamenu-list mt-2">
                                            <li>
                                                <a href="javascript:void(0);">Small Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Dark Topbar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Preloader</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sidebar Collapsed</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center mt-3">
                                    <h3 class="text-dark">Launching Discount Sale!</h3>
                                    <p class="font-16">Save up to 55% off.</p>
                                    <button class="btn btn-primary mt-1">Download Now <i class="mdi mdi-arrow-right-bold-outline ml-1"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-dashboard"></i>
                                <span class="badge badge-info badge-pill float-right">2</span>
                                <span> Dashboards </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="dashboard-2.html">Dashboard 2</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-cube"></i>
                                <span> Apps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="apps-contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="apps-tickets.html">Tickets</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-clone"></i>
                                <span> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="layouts-sidebar-sm.html">Small Sidebar</a>
                                </li>
                                <li>
                                    <a href="layouts-light-sidebar.html">Light Sidebar</a>
                                </li>
                                <li>
                                    <a href="layouts-dark-topbar.html">Dark Topbar</a>
                                </li>
                                <li>
                                    <a href="layouts-preloader.html">Preloader</a>
                                </li>
                                <li>
                                    <a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a>
                                </li>
                                <li>
                                    <a href="layouts-boxed.html">Boxed</a>
                                </li>
                            </ul>
                        </li>
                
                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-envelope"></i>
                                <span> Email </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="email-read.html">Read Email</a>
                                </li>
                                <li>
                                    <a href="email-compose.html">Compose Email</a>
                                </li>
                                <li>
                                    <a href="email-templates.html">Email Templates</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-file-text-o"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="pages-starter.html">Starter</a>
                                </li>
                                <li>
                                    <a href="pages-login.html">Log In</a>
                                </li>
                                <li>
                                    <a href="pages-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="pages-recoverpw.html">Recover Password</a>
                                </li>
                                <li>
                                    <a href="pages-lock-screen.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="pages-logout.html">Logout</a>
                                </li>
                                <li>
                                    <a href="pages-confirm-mail.html">Confirm Mail</a>
                                </li>
                                <li>
                                    <a href="pages-404.html">Error 404</a>
                                </li>
                                <li>
                                    <a href="pages-404-alt.html">Error 404-alt</a>
                                </li>
                                <li>
                                    <a href="pages-500.html">Error 500</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-diamond"></i>
                                <span class="badge badge-danger float-right">New</span>
                                <span> Extra Pages </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="extras-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="extras-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="extras-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="extras-faqs.html">FAQs</a>
                                </li>
                                <li>
                                    <a href="extras-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="extras-maintenance.html">Maintenance</a>
                                </li>
                                <li>
                                    <a href="extras-coming-soon.html">Coming Soon</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title mt-2">Components</li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-briefcase"></i>
                                <span> UI Elements </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="ui-general.html">General UI</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="widgets.html">
                                <i class="la la-coffee"></i>
                                <span> Widgets </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-bullhorn"></i>
                                <span class="badge badge-info float-right">Hot</span>
                                <span> Admin UI </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="admin-sweet-alert.html">Sweet Alert</a>
                                </li>
                                <li>
                                    <a href="admin-nestable.html">Nestable List</a>
                                </li>
                                <li>
                                    <a href="admin-range-slider.html">Range Slider</a>
                                </li>
                                <li>
                                    <a href="admin-tour.html">Tour Page</a>
                                </li>
                                <li>
                                    <a href="admin-lightbox.html">Lightbox</a>
                                </li>
                                <li>
                                    <a href="admin-treeview.html">Treeview</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-bullseye"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="icons-feather.html">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons-lineawesome.html">Line Awesome</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design Icons</a>
                                </li>
                                <li>
                                    <a href="icons-font-awesome.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="icons-simple-line.html">Simple Line</a>
                                </li>
                            </ul>
                        </li>
                
                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-wrench"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="forms-elements.html">General Elements</a>
                                </li>
                                <li>
                                    <a href="forms-advanced.html">Advanced</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="forms-pickers.html">Pickers</a>
                                </li>
                                <li>
                                    <a href="forms-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="forms-masks.html">Masks</a>
                                </li>
                                <li>
                                    <a href="forms-summernote.html">Summernote</a>
                                </li>
                                <li>
                                    <a href="forms-quilljs.html">Quilljs Editor</a>
                                </li>
                                <li>
                                    <a href="forms-file-uploads.html">File Uploads</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatables.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="tables-editable.html">Editable Tables</a>
                                </li>
                                <li>
                                    <a href="tables-responsive.html">Responsive Tables</a>
                                </li>
                                <li>
                                    <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-bar-chart"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="charts-apex.html">Apex Charts</a>
                                </li>
                                <li>
                                    <a href="charts-flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs Charts</a>
                                </li>
                                <li>
                                    <a href="charts-bright.html">Bright Charts</a>
                                </li>
                                <li>
                                    <a href="charts-chartist.html">Chartist Charts</a>
                                </li>
                                <li>
                                    <a href="charts-peity.html">Peity Charts</a>
                                </li>
                                <li>
                                    <a href="charts-sparklines.html">Sparklines Charts</a>
                                </li>
                                <li>
                                    <a href="charts-knob.html">Jquery Knob Charts</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-map"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a href="maps-mapael.html">Mapael Maps</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="la la-plus-square-o"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level nav" aria-expanded="false">
                                <li>
                                    <a href="javascript: void(0);">Level 1.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-third-level nav" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Level 2.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Level 2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Contacts</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Contacts</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="inputPassword2" class="sr-only">Search</label>
                                                <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <div class="form-group mx-sm-3">
                                                <label for="status-select" class="mr-2">Sort By</label>
                                                <select class="custom-select" id="status-select">
                                                    <option selected="">All</option>
                                                    <option value="1">Name</option>
                                                    <option value="2">Job Success</option>
                                                    <option value="3">Total Earned</option>
                                                    <option value="4">Hours Worked</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-right mt-3 mt-lg-0">
                                            <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-settings"></i></button>
                                            <a href="#custom-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                        </div>
                                    </div><!-- end col-->
                                </div> <!-- end row -->
                            </div> <!-- end card-box -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-3.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Freddie J. Plourde</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-primary badge-pill">UI Developer</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>98%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$29.8k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>1125</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-4.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Christopher
                                            Gallardo</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-danger badge-pill">Vue Js</span>
                                        <span class="badge badge-light-info badge-pill">PHP</span>
                                        <span class="badge badge-light badge-pill">Nodejs</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>100%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$65.3k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>2184</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-5.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Joseph M. Rohr</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-info badge-pill">PHP</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>95%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$25.6k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>325</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-6.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Mark K. Horne</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-danger badge-pill">Vue Js</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>99%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$16.7k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>5846</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-7.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">James M. Fonville</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-info badge-pill">PHP</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>97.5%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$10.2k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>895</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-8.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jade M. Walker</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-primary badge-pill">UI Developer</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>95.8%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$15.3k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>742</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-2.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Marie E. Tate</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-primary badge-pill">UI Developer</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>99%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$4587</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>423</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-9.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Elyse D. Davidson</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-danger badge-pill">Vue Js</span>
                                        <span class="badge badge-light-info badge-pill">PHP</span>
                                        <span class="badge badge-light badge-pill">Nodejs</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>100%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$16.8k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>1036</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2">
                                    <img src="assets\images\users\user-10.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Sarah E. Goin</a></h4>
                                    <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> United Kingdom</p>

                                    <div class="font-14">
                                        <span class="badge badge-light-info badge-pill">PHP</span>
                                        <span class="badge badge-light-success badge-pill">React</span>
                                        <span class="badge badge-light-secondary badge-pill">Angular</span>
                                    </div>

                                    <p class="text-muted mt-3">Traditional heading elements are designed to work best
                                        in the meat of your page content. When you need a heading to stand out.</p>

                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>87.5%</h4>
                                                <p class="mb-0 text-muted text-truncate">Job Success</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>$29.5k</h4>
                                                <p class="mb-0 text-muted text-truncate">Total Earned</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>11k</h4>
                                                <p class="mb-0 text-muted text-truncate">Hours Worked</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->

                                </div> <!-- end .padding -->
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-12">
                            <div class="text-right">
                                <ul class="pagination pagination-rounded justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- Modal -->
                    <div id="custom-modal" class="modal-demo">
                        <button type="button" class="close" onclick="Custombox.modal.close();">
                            <span>&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="custom-modal-title">Add Members</h4>
                        <div class="custom-modal-text text-left">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Enter location">
                                </div>
                                <div class="form-group">
                                    <label for="skill">Skill</label>
                                    <input type="text" class="form-control" id="skill" placeholder="Enter skill with comma">
                                </div>
                                <div class="form-group">
                                    <label for="about-details">About </label>
                                    <textarea class="form-control" id="about-details" rows="3" placeholder="Enter about"></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.modal.close();">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h5 class="m-0 text-white">Settings</h5>
        </div>
        <div class="slimscroll-menu">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets\images\users\user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>
            
                <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                <p class="text-muted mb-0"><small>Product Owner</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0">
            <div class="row">
                <div class="col-6 text-center">
                    <h4 class="mb-1 mt-0">8,504</h4>
                    <p class="m-0">Balance</p>
                </div>
                <div class="col-6 text-center">
                    <h4 class="mb-1 mt-0">8,504</h4>
                    <p class="m-0">Balance</p>
                </div>
            </div>
            <hr class="mb-0">

            <div class="p-3">
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                    <label class="custom-control-label" for="customSwitch1">Notifications</label>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">API Access</label>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                    <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                    <label class="custom-control-label" for="customSwitch4">Online Status</label>
                </div>
            </div>

            <!-- Timeline -->
            <hr class="mt-0">
            <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
            <hr class="mb-0">
            <div class="p-3">
                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets\images\users\user-2.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets\images\users\user-3.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets\images\users\user-4.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets\images\users\user-5.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets\images\users\user-6.jpg" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end .p-3-->

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>

    <!-- Modal-Effect -->
    <script src="assets\libs\custombox\custombox.min.js"></script>

    <!-- App js -->
    <script src="assets\js\app.min.js"></script>

</body>

</html>