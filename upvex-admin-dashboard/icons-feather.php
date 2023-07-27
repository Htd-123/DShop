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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                            <li class="breadcrumb-item active">Feather Icons</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Feather Icons</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-alert-octagon"></i> fe-alert-octagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-alert-circle"></i> fe-alert-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-activity"></i> fe-activity
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-alert-triangle"></i> fe-alert-triangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-align-center"></i> fe-align-center
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-airplay"></i> fe-airplay
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-align-justify"></i> fe-align-justify
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-align-left"></i> fe-align-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-align-right"></i> fe-align-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-down-left"></i> fe-arrow-down-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-down-right"></i> fe-arrow-down-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-anchor"></i> fe-anchor
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-aperture"></i> fe-aperture
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-left"></i> fe-arrow-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-right"></i> fe-arrow-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-down"></i> fe-arrow-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-up-left"></i> fe-arrow-up-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-up-right"></i> fe-arrow-up-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-up"></i> fe-arrow-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-award"></i> fe-award
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bar-chart"></i> fe-bar-chart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-at-sign"></i> fe-at-sign
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bar-chart-2"></i> fe-bar-chart-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-battery-charging"></i> fe-battery-charging
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bell-off"></i> fe-bell-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-battery"></i> fe-battery
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bluetooth"></i> fe-bluetooth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bell"></i> fe-bell
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-book"></i> fe-book
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-briefcase"></i> fe-briefcase
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-camera-off"></i> fe-camera-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-calendar"></i> fe-calendar
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bookmark"></i> fe-bookmark
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-box"></i> fe-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-camera"></i> fe-camera
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-check-circle"></i> fe-check-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-check"></i> fe-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-check-square"></i> fe-check-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cast"></i> fe-cast
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevron-down"></i> fe-chevron-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevron-left"></i> fe-chevron-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevron-right"></i> fe-chevron-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevron-up"></i> fe-chevron-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevrons-down"></i> fe-chevrons-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevrons-right"></i> fe-chevrons-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevrons-up"></i> fe-chevrons-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chevrons-left"></i> fe-chevrons-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-circle"></i> fe-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-clipboard"></i> fe-clipboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-chrome"></i> fe-chrome
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-clock"></i> fe-clock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cloud-lightning"></i> fe-cloud-lightning
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cloud-drizzle"></i> fe-cloud-drizzle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cloud-rain"></i> fe-cloud-rain
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cloud-off"></i> fe-cloud-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-codepen"></i> fe-codepen
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cloud-snow"></i> fe-cloud-snow
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-compass"></i> fe-compass
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-copy"></i> fe-copy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-down-right"></i> fe-corner-down-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-down-left"></i> fe-corner-down-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-left-down"></i> fe-corner-left-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-left-up"></i> fe-corner-left-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-up-left"></i> fe-corner-up-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-up-right"></i> fe-corner-up-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-right-down"></i> fe-corner-right-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-corner-right-up"></i> fe-corner-right-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cpu"></i> fe-cpu
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-credit-card"></i> fe-credit-card
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-crosshair"></i> fe-crosshair
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-disc"></i> fe-disc
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-delete"></i> fe-delete
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-download-cloud"></i> fe-download-cloud
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-download"></i> fe-download
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-droplet"></i> fe-droplet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-edit-2"></i> fe-edit-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-edit"></i> fe-edit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-edit-1"></i> fe-edit-1
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-external-link"></i> fe-external-link
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-eye"></i> fe-eye
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-feather"></i> fe-feather
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-facebook"></i> fe-facebook
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-file-minus"></i> fe-file-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-eye-off"></i> fe-eye-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-fast-forward"></i> fe-fast-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-file-text"></i> fe-file-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-film"></i> fe-film
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-file"></i> fe-file
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-file-plus"></i> fe-file-plus 
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-folder"></i> fe-folder
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-filter"></i> fe-filter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-flag"></i> fe-flag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-globe"></i> fe-globe
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-grid"></i> fe-grid
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-heart"></i> fe-heart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-home"></i> fe-home
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-github"></i> fe-github
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-image"></i> fe-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-inbox"></i> fe-inbox
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-layers"></i> fe-layers
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-info"></i> fe-info
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-instagram"></i> fe-instagram
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-layout"></i> fe-layout
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-link-2"></i> fe-link-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-life-buoy"></i> fe-life-buoy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-link"></i> fe-link
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-log-in"></i> fe-log-in
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-list"></i> fe-list
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-lock"></i> fe-lock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-log-out"></i> fe-log-out
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-loader"></i> fe-loader
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-mail"></i> fe-mail
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-maximize-2"></i> fe-maximize-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-map"></i> fe-map
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-maximize"></i> fe-maximize
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-map-pin"></i> fe-map-pin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-menu"></i> fe-menu
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-message-circle"></i> fe-message-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-message-square"></i> fe-message-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-minimize-2"></i> fe-minimize-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-minimize"></i> fe-minimize
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-mic-off"></i> fe-mic-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-minus-circle"></i> fe-minus-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-mic"></i> fe-mic
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-minus-square"></i> fe-minus-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-minus"></i> fe-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-moon"></i> fe-moon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-monitor"></i> fe-monitor
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-more-vertical"></i> fe-more-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-more-horizontal"></i> fe-more-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-move"></i> fe-move
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-music"></i> fe-music
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-navigation-2"></i> fe-navigation-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-navigation"></i> fe-navigation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-octagon"></i> fe-octagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-package"></i> fe-package
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-pause-circle"></i> fe-pause-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-pause"></i> fe-pause
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-percent"></i> fe-percent
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone-call"></i> fe-phone-call
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone-forwarded"></i> fe-phone-forwarded
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone-missed"></i> fe-phone-miss
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone-off"></i> fe-phone-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone-incoming"></i> fe-phone-incoming
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone"></i> fe-phone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-phone-outgoing"></i> fe-phone-outgoing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-pie-chart"></i> fe-pie-chart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-play-circle"></i> fe-play-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-play"></i> fe-play
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-plus-square"></i> fe-plus-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-plus-circle"></i> fe-plus-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-plus"></i> fe-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-pocket"></i> fe-pocket
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-printer"></i> fe-printer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-power"></i> fe-power
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-radio"></i> fe-radio
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-repeat"></i> fe-repeat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-refresh-ccw"></i> fe-refresh-ccw
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-rewind"></i> fe-rewind
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-rotate-ccw"></i> fe-rotate-ccw
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-refresh-cw"></i> fe-refresh-cw
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-rotate-cw"></i> fe-rotate-cw
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-save"></i> fe-save
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-search"></i> fe-search
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-server"></i> fe-server
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-scissors"></i> fe-scissors
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-share-2"></i> fe-share-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-share"></i> fe-share
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-shield"></i> fe-shield
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-settings"></i> fe-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-skip-back"></i> fe-skip-back
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-shuffle"></i> fe-shuffle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-sidebar"></i> fe-sidebar
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-skip-forward"></i> fe-skip-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-slack"></i> fe-slack
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-slash"></i> fe-slash
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-smartphone"></i> fe-smartphone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-square"></i> fe-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-speaker"></i> fe-speaker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-star"></i> fe-star
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-stop-circle"></i> fe-stop-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-sun"></i> fe-sun
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-sunrise"></i> fe-sunrise
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-tablet"></i> fe-tablet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-tag"></i> fe-tag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-sunset"></i> fe-sunset
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-target"></i> fe-target
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-thermometer"></i> fe-thermometer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-thumbs-up"></i> fe-thumbs-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-thumbs-down"></i> fe-thumbs-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-toggle-left"></i> fe-toggle-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-toggle-right"></i> fe-toggle-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-trash-2"></i> fe-trash-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-trash"></i> fe-trash
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-trending-up"></i> fe-trending-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-trending-down"></i> fe-trending-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-triangle"></i> fe-triangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-type"></i> fe-type
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-twitter"></i> fe-twitter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-upload"></i> fe-upload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-umbrella"></i> fe-umbrella
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-upload-cloud"></i> fe-upload-cloud
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-unlock"></i> fe-unlock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-user-check"></i> fe-user-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-user-minus"></i> fe-user-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-user-plus"></i> fe-user-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-user-x"></i> fe-user-x
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-user"></i> fe-user
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-users"></i> fe-users
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-video-off"></i> fe-video-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-video"></i> fe-video
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-voicemail"></i> fe-voicemail
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-volume-x"></i> fe-volume-x
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-volume-1"></i> fe-volume-1
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-volume-2"></i> fe-volume-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-volume"></i> fe-volume
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-watch"></i> fe-watch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-wifi"></i> fe-wifi
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-x-square"></i> fe-x-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-wind"></i> fe-wind
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-x"></i> fe-x
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-x-circle"></i> fe-x-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-zap"></i> fe-zap
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-zoom-in"></i> fe-zoom-in
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-zoom-out"></i> fe-zoom-out
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-command"></i> fe-command
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-cloud"></i> fe-cloud
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-hash"></i> fe-hash
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-headphones"></i> fe-headphones
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-underline"></i> fe-underline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-italic"></i> fe-italic
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bold"></i> fe-bold
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-crop"></i> fe-crop
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-help-circle"></i> fe-help-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-paperclip"></i> fe-paperclip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-shopping-cart"></i> fe-shopping-cart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-tv"></i> fe-tv
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-wifi-off"></i> fe-wifi-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-gitlab"></i> fe-gitlab
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-sliders"></i> fe-sliders
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-star-on"></i> fe-star-on
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-heart-on"></i> fe-heart-on
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-archive"></i> fe-archive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-down-circle"></i> fe-arrow-down-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-up-circle"></i> fe-arrow-up-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-left-circle"></i> fe-arrow-left-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-arrow-right-circle"></i> fe-arrow-right-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bar-chart-line-"></i> fe-bar-chart-line-
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-bar-chart-line"></i> fe-bar-chart-line
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-book-open"></i> fe-book-open
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-code"></i> fe-code
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-database"></i> fe-database
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-dollar-sign"></i> fe-dollar-sign
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-folder-plus"></i> fe-folder-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-gift"></i> fe-gift
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-folder-minus"></i> fe-folder-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-git-commit"></i> fe-git-commit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-git-branch"></i> fe-git-branch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-git-pull-request"></i> fe-git-pull-request
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-git-merge"></i> fe-git-merge
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-linkedin"></i> fe-linkedin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-hard-drive"></i> fe-hard-drive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-more-vertical-"></i> fe-more-vertical-
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-more-horizontal-"></i> fe-more-horizontal-
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-rss"></i> fe-rss
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-send"></i> fe-send
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-shield-off"></i> fe-shield-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-shopping-bag"></i> fe-shopping-bag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-terminal"></i> fe-terminal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-truck"></i> fe-truck
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-zap-off"></i> fe-zap-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="fe-youtube"></i> fe-youtube
                                        </div>
                                        
                                    </div>
                                    <!-- end row -->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->    
                        
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