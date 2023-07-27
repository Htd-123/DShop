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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Basic Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Elements</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Input Types</h4>
                                        <p class="sub-header">
                                            Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form>

                                                    <div class="form-group mb-3">
                                                        <label for="simpleinput">Text</label>
                                                        <input type="text" id="simpleinput" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-email">Email</label>
                                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-password">Password</label>
                                                        <input type="password" id="example-password" class="form-control" value="password">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-palaceholder">Placeholder</label>
                                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-textarea">Text area</label>
                                                        <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-readonly">Readonly</label>
                                                        <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-disable">Disabled</label>
                                                        <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
                                                    </div>
    
                                                    <div class="form-group mb-3">
                                                        <label for="example-static">Static control</label>
                                                        <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="email@example.com">
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="example-helping">Helping text</label>
                                                        <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                                    </div>
        
                                                </form>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6">
                                                <form>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-select">Input Select</label>
                                                        <select class="form-control" id="example-select">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="example-multiselect">Multiple Select</label>
                                                        <select id="example-multiselect" multiple="" class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-fileinput">Default file input</label>
                                                        <input type="file" id="example-fileinput" class="form-control-file">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-date">Date</label>
                                                        <input class="form-control" id="example-date" type="date" name="date">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-month">Month</label>
                                                        <input class="form-control" id="example-month" type="month" name="month">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-time">Time</label>
                                                        <input class="form-control" id="example-time" type="time" name="time">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-week">Week</label>
                                                        <input class="form-control" id="example-week" type="week" name="week">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-number">Number</label>
                                                        <input class="form-control" id="example-number" type="number" name="number">
                                                    </div>
        
                                                    <div class="form-group mb-3">
                                                        <label for="example-color">Color</label>
                                                        <input class="form-control" id="example-color" type="color" name="color" value="#56c2d6">
                                                    </div>
        
                                                    <div class="form-group mb-0">
                                                        <label for="example-range">Range</label>
                                                        <input class="custom-range" id="example-range" type="range" name="range" min="0" max="100">
                                                    </div>
        
                                                </form>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="header-title">Select menu</h4>
                                                <p class="sub-header">
                                                    Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.custom-select</code> to trigger the custom styles.
                                                </p>
    
                                                <select class="custom-select ">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>

                                                <h4 class="header-title mt-4">Switches</h4>
                                                <p class="sub-header">
                                                    A switch has the markup of a custom checkbox but uses the <code>.custom-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.
                                                </p>

                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                                </div>
                                                <div class="custom-control custom-switch mt-1">
                                                    <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                                                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                                                </div>

                                            </div> <!-- end col -->
    
                                            <div class="col-md-6">
                                                <h4 class="header-title mt-5 mt-sm-0">Checkboxes and radios</h4>
                                                <div class="mt-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mt-1">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mt-1">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Input Sizes</h4>
                                        <p class="sub-header">
                                            Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                                        </p>

                                        <form>
                                            <div class="form-group mb-3">
                                                <label for="example-input-small">Small</label>
                                                <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-input-normal">Normal</label>
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-input-large">Large</label>
                                                <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="example-gridsize">Grid Sizes</label>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <input type="text" id="example-gridsize" class="form-control" placeholder=".col-sm-4">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Input Group</h4>
                                        <p class="sub-header">
                                            Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs
                                        </p>

                                        <form>
                                            
                                            <div class="form-group mb-3">
                                                <label>Static</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Dropdowns</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-primary waves-effect waves-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label>Buttons</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-dark waves-effect waves-light" type="button">Button</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0">
                                                <label>Custom file input</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mb-3 header-title">Basic Example</h4>

                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkmeout0">
                                                    <label class="custom-control-label" for="checkmeout0">Check me out !</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mb-3 header-title">Horizontal form</h4>

                                        <form class="form-horizontal">
                                            <div class="form-group row mb-3">
                                                <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                                                <div class="col-9">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                                                <div class="col-9">
                                                    <input type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3 justify-content-end">
                                                <div class="col-9">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="checkmeout">
                                                        <label class="custom-control-label" for="checkmeout">Check me out !</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 justify-content-end row">
                                                <div class="col-9">
                                                    <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>  <!-- end col -->

                        </div>
                        <!-- end row -->


                        <!-- Inline Form -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Inline Form</h4>

                                        <p class="sub-header">
                                            Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms vary slightly from their default states. Controls only appear inline in viewports that are at least 576px wide to account for narrow viewports on mobile devices.
                                        </p>

                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="staticEmail2" class="sr-only">Email</label>
                                                <input type="text" readonly="" class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                            </div>
                                            <div class="form-group mx-sm-3">
                                                <label for="inputPassword2" class="sr-only">Password</label>
                                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Confirm identity</button>
                                        </form>
    
                                        <h6 class="font-13 mt-3">Auto-sizing</h6>
    
                                        <form>
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                                </div>
                                                <div class="col-auto">
                                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">@</div>
                                                        </div>
                                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="custom-control custom-checkbox mb-2">
                                                        <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                                        <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mb-2">Submit</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form row</h4>
                                        <p class="text-muted font-13">
                                            You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                        </p>

                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress2" class="col-form-label">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">City</label>
                                                    <input type="text" class="form-control" id="inputCity">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">State</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Choose</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputZip" class="col-form-label">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                    <label class="custom-control-label" for="customCheck11">Check this custom checkbox</label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Sign in</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="header-title">Custom checkbox - Basic</h4>

                                            <p class="sub-header">
                                                Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                            </p>
                                            
                                            <div class="checkbox mb-2">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0">
                                                    Default
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-primary mb-2">
                                                <input id="checkbox2" type="checkbox" checked="">
                                                <label for="checkbox2">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-success mb-2">
                                                <input id="checkbox3" type="checkbox">
                                                <label for="checkbox3">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info mb-2">
                                                <input id="checkbox4" type="checkbox">
                                                <label for="checkbox4">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning mb-2">
                                                <input id="checkbox5" type="checkbox" checked="">
                                                <label for="checkbox5">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-danger mb-2">
                                                <input id="checkbox6" type="checkbox" checked="">
                                                <label for="checkbox6">
                                                    Danger
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-purple mb-2">
                                                <input id="checkbox6a" type="checkbox">
                                                <label for="checkbox6a">
                                                    Purple
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-pink mb-2">
                                                <input id="checkbox6b" type="checkbox" checked="">
                                                <label for="checkbox6b">
                                                    Pink
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-dark mb-2">
                                                <input id="checkbox6c" type="checkbox">
                                                <label for="checkbox6c">
                                                    Dark
                                                </label>
                                            </div>

                                            <p class="text-muted mt-3 mb-2">Checkboxes without label text <code>.checkbox-single</code></p>
                                            <div class="checkbox checkbox-single">
                                                <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                                <label></label>
                                            </div>
                                            <div class="checkbox checkbox-primary checkbox-single">
                                                <input type="checkbox" id="singleCheckbox2" value="option2" checked="" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>

                                            <p class="text-muted font-13 mt-3 mb-2">Inline checkboxes</p>
                                            <div class="checkbox form-check-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label for="inlineCheckbox1"> Inline One </label>
                                            </div>
                                            <div class="checkbox checkbox-success form-check-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                                <label for="inlineCheckbox2"> Inline Two </label>
                                            </div>
                                            <div class="checkbox checkbox-pink form-check-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                <label for="inlineCheckbox3"> Inline Three </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <h4 class="header-title mt-3 mt-md-0">Custom checkbox - Circled</h4>

                                            <p class="sub-header">
                                                <code>.checkbox-circle</code> for roundness.
                                            </p>
                                            <div class="checkbox checkbox-circle mb-2">
                                                <input id="checkbox7" type="checkbox">
                                                <label for="checkbox7">
                                                    Simply Rounded
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-info checkbox-circle mb-2">
                                                <input id="checkbox8" type="checkbox" checked="">
                                                <label for="checkbox8">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-primary checkbox-circle mb-2">
                                                <input id="checkbox-9" type="checkbox">
                                                <label for="checkbox-9">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                                <input id="checkbox-10" type="checkbox" checked="">
                                                <label for="checkbox-10">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning checkbox-circle mb-2">
                                                <input id="checkbox-11" type="checkbox">
                                                <label for="checkbox-11">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-danger checkbox-circle mb-2">
                                                <input id="checkbox-12" type="checkbox" checked="">
                                                <label for="checkbox-12">
                                                    Danger
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-purple checkbox-circle mb-2">
                                                <input id="checkbox-13" type="checkbox" checked="">
                                                <label for="checkbox-13">
                                                    Purple
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-pink checkbox-circle mb-2">
                                                <input id="checkbox-14" type="checkbox">
                                                <label for="checkbox-14">
                                                    Pink
                                                </label>
                                            </div>

                                            <div class="checkbox checkbox-dark checkbox-circle mb-2">
                                                <input id="checkbox-15" type="checkbox" checked="">
                                                <label for="checkbox-15">
                                                    Dark
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <h4 class="header-title mt-3 mt-md-0">Custom checkbox - Disabled</h4>

                                            <p class="sub-header">
                                                Disabled state also supported.
                                            </p>

                                            <div class="checkbox mb-2">
                                                <input id="checkbox9" type="checkbox" disabled="">
                                                <label for="checkbox9">
                                                    Can't check this
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-primary mb-2">
                                                <input id="checkbox10" type="checkbox" disabled="" checked="">
                                                <label for="checkbox10">
                                                    This too
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning checkbox-circle mb-2">
                                                <input id="checkbox110" type="checkbox" disabled="" checked="">
                                                <label for="checkbox110">
                                                    And this
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info mb-2">
                                                <input id="checkbox12" type="checkbox" disabled="" checked="">
                                                <label for="checkbox12">
                                                    Can't check this
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-pink mb-2">
                                                <input id="checkbox13" type="checkbox" disabled="" checked="">
                                                <label for="checkbox13">
                                                    This too
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-purple checkbox-circle mb-2">
                                                <input id="checkbox14" type="checkbox" disabled="" checked="">
                                                <label for="checkbox14">
                                                    And this
                                                </label>
                                            </div>
                                        </div>


                                    </div> <!-- end row-->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div> <!-- end row -->


                        <!-- RADIOS -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 class="header-title">Custom radio - Basic</h4>

                                            <p class="sub-header">
                                                Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                            </p>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="radio mb-2">
                                                        <input type="radio" name="radio" id="radio1" value="option1" checked="">
                                                        <label for="radio1">
                                                            Default
                                                        </label>
                                                    </div>

                                                    <div class="radio radio-primary mb-2">
                                                        <input type="radio" name="radio" id="radio3" value="option3">
                                                        <label for="radio3">
                                                            Primary
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-success mb-2">
                                                        <input type="radio" name="radio" id="radio4" value="option4">
                                                        <label for="radio4">
                                                            Success
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-info mb-2">
                                                        <input type="radio" name="radio" id="radio5" value="option5">
                                                        <label for="radio5">
                                                            Info
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-danger mb-2">
                                                        <input type="radio" name="radio" id="radio6" value="option6">
                                                        <label for="radio6">
                                                            Danger
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-warning mb-2">
                                                        <input type="radio" name="radio" id="radio7" value="option7">
                                                        <label for="radio7">
                                                            Warning
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-purple mb-2">
                                                        <input type="radio" name="radio" id="radio8" value="option8">
                                                        <label for="radio8">
                                                            Purple
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-pink mb-2">
                                                        <input type="radio" name="radio" id="radio9" value="option9">
                                                        <label for="radio9">
                                                            Pink
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-dark mb-2">
                                                        <input type="radio" name="radio" id="radio2" value="option2">
                                                        <label for="radio2">
                                                            Dark
                                                        </label>
                                                    </div>

                                                </div> <!-- end col -->

                                                <div class="col-sm-6">
                                                    <div class="radio mb-2">
                                                        <input type="radio" name="radio1" id="radio11" value="option1" checked="">
                                                        <label for="radio11">
                                                            Default
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="radio radio-primary mb-2">
                                                        <input type="radio" name="radio3" id="radio13" value="option3">
                                                        <label for="radio13">
                                                            Primary
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-success mb-2">
                                                        <input type="radio" name="radio4" id="radio14" value="option4" checked="">
                                                        <label for="radio14">
                                                            Success
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-info mb-2">
                                                        <input type="radio" name="radio5" id="radio15" value="option5" checked="">
                                                        <label for="radio15">
                                                            Info
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-danger mb-2">
                                                        <input type="radio" name="radio6" id="radio16" value="option6">
                                                        <label for="radio16">
                                                            Danger
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-warning mb-2">
                                                        <input type="radio" name="radio7" id="radio17" value="option7" checked="">
                                                        <label for="radio17">
                                                            Warning
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-purple mb-2">
                                                        <input type="radio" name="radio8" id="radio18" value="option8">
                                                        <label for="radio18">
                                                            Purple
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-pink mb-2">
                                                        <input type="radio" name="radio9" id="radio19" value="option9" checked="">
                                                        <label for="radio19">
                                                            Pink
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-dark mb-2">
                                                        <input type="radio" name="radio2" id="radio12" value="option2">
                                                        <label for="radio12">
                                                            Dark
                                                        </label>
                                                    </div>

                                                </div><!-- end col -->
                                            </div> <!-- end row-->


                                            <p class="text-muted mt-3 mb-2">Radios without label text <code>.radio-single</code></p>
                                            <div class="radio radio-single">
                                                <input type="radio" id="singleRadio1" value="option1.1" name="radioSingle1" aria-label="Single radio One">
                                                <label></label>
                                            </div>
                                            <div class="radio radio-success radio-single">
                                                <input type="radio" id="singleRadio2" value="option2.1" name="radioSingle1" checked="" aria-label="Single radio Two">
                                                <label></label>
                                            </div>


                                            <p class="text-muted mt-3 mb-2">Inline radios</p>
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                <label for="inlineRadio1"> Inline One </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                <label for="inlineRadio2"> Inline Two </label>
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-md-4">
                                            <h4 class="header-title mt-3 mt-md-0">Custom radio - Disabled</h4>
                                            <p class="sub-header">
                                                Disabled state also supported.
                                            </p>

                                            <div class="radio radio-danger mb-2">
                                                <input type="radio" name="radio31" id="radio51" value="option1" checked="" disabled="">
                                                <label for="radio51">
                                                    Zero
                                                </label>
                                            </div>
                                            <div class="radio mb-2">
                                                <input type="radio" name="radio41" id="radio61" value="option2" checked="" disabled="">
                                                <label for="radio61">
                                                    One
                                                </label>
                                            </div>
                                            <div class="radio radio-purple mb-2">
                                                <input type="radio" name="radio51" id="radio71" value="option3" checked="" disabled="">
                                                <label for="radio71">
                                                    Two
                                                </label>
                                            </div>
                                            <div class="radio radio-pink mb-2">
                                                <input type="radio" name="radio61" id="radio81" value="option4" checked="" disabled="">
                                                <label for="radio81">
                                                    Three
                                                </label>
                                            </div>
                                        </div> <!-- end col -->

                                    </div> <!-- end row-->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div><!-- end row -->
    
                        
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

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        
    </body>
</html>