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
                                            <li class="breadcrumb-item active">Line Awesome</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Line Awesome</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-adjust"></i> la la-adjust
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-anchor"></i> la la-anchor
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-archive"></i> la la-archive
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-area-chart"></i> la la-area-chart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows"></i> la la-arrows
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows-h"></i> la la-arrows-h
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows-v"></i> la la-arrows-v
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-asterisk"></i> la la-asterisk
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-at"></i> la la-at
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-automobile"></i> la la-automobile
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-balance-scale"></i> la la-balance-scale
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ban"></i> la la-ban
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bank"></i> la la-bank
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bar-chart"></i> la la-bar-chart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bar-chart-o"></i> la la-bar-chart-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-barcode"></i> la la-barcode
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bars"></i> la la-bars
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-0"></i> la la-battery-0
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-1"></i> la la-battery-1
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-2"></i> la la-battery-2
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-3"></i> la la-battery-3
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-4"></i> la la-battery-4
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-empty"></i> la la-battery-empty
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-full"></i> la la-battery-full
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-half"></i> la la-battery-half
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-quarter"></i> la la-battery-quarter
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-battery-three-quarters"></i> la la-battery-three-quarters
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bed"></i> la la-bed
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-beer"></i> la la-beer
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bell"></i> la la-bell
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bell-o"></i> la la-bell-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bell-slash"></i> la la-bell-slash
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bell-slash-o"></i> la la-bell-slash-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bicycle"></i> la la-bicycle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-binoculars"></i> la la-binoculars
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-birthday-cake"></i> la la-birthday-cake
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bolt"></i> la la-bolt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bomb"></i> la la-bomb
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-book"></i> la la-book
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bookmark"></i> la la-bookmark
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bookmark-o"></i> la la-bookmark-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-briefcase"></i> la la-briefcase
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bug"></i> la la-bug
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-building"></i> la la-building
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-building-o"></i> la la-building-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bullhorn"></i> la la-bullhorn
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bullseye"></i> la la-bullseye
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bus"></i> la la-bus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cab"></i> la la-cab
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calculator"></i> la la-calculator
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calendar"></i> la la-calendar
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calendar-check-o"></i> la la-calendar-check-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calendar-minus-o"></i> la la-calendar-minus-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calendar-o"></i> la la-calendar-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calendar-plus-o"></i> la la-calendar-plus-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-calendar-times-o"></i> la la-calendar-times-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-camera"></i> la la-camera
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-camera-retro"></i> la la-camera-retro
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-car"></i> la la-car
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-down"></i> la la-caret-square-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-left"></i> la la-caret-square-o-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-right"></i> la la-caret-square-o-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-up"></i> la la-caret-square-o-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cart-arrow-down"></i> la la-cart-arrow-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cart-plus"></i> la la-cart-plus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc"></i> la la-cc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-certificate"></i> la la-certificate
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check"></i> la la-check
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check-circle"></i> la la-check-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check-circle-o"></i> la la-check-circle-o
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check-square"></i> la la-check-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check-square-o"></i> la la-check-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-child"></i> la la-child
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle"></i> la la-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-o"></i> la la-circle-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-o-notch"></i> la la-circle-o-notch
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-thin"></i> la la-circle-thin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-clock-o"></i> la la-clock-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-clone"></i> la la-clone
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-close"></i> la la-close
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cloud"></i> la la-cloud
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cloud-download"></i> la la-cloud-download
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cloud-upload"></i> la la-cloud-upload   
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-code"></i> la la-code
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-code-fork"></i> la la-code-fork
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-coffee"></i> la la-coffee
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cog"></i> la la-cog
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cogs"></i> la la-cogs
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-comment"></i> la la-comment
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-comment-o"></i> la la-comment-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-commenting"></i> la la-commenting
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-commenting-o"></i> la la-commenting-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-comments"></i> la la-comments
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-comments-o"></i> la la-comments-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-compass"></i> la la-compass
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-copyright"></i> la la-copyright
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-creative-commons"></i> la la-creative-commons
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-credit-card"></i> la la-credit-card
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-crop"></i> la la-crop
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-crosshairs"></i> la la-crosshairs
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cube"></i> la la-cube
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cubes"></i> la la-cubes
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cutlery"></i> la la-cutlery
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-dashboard"></i> la la-dashboard
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-database"></i> la la-database
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-desktop"></i> la la-desktop
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-diamond"></i> la la-diamond
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-o"></i> la la-circle-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-download"></i> la la-download
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-edit"></i> la la-edit
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ellipsis-h"></i> la la-ellipsis-h
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ellipsis-v"></i> la la-ellipsis-v
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-envelope"></i> la la-envelope
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-envelope-o"></i> la la-envelope-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-envelope-square"></i> la la-envelope-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eraser"></i> la la-eraser
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-exchange"></i> la la-exchange
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-exclamation"></i> la la-exclamation
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-exclamation-circle"></i> la la-exclamation-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-exclamation-triangle"></i> la la-exclamation-triangle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-external-link"></i> la la-external-link
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-external-link-square"></i> la la-external-link-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eye"></i> la la-eye
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eye-slash"></i> la la-eye-slash
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eyedropper"></i> la la-eyedropper
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fax"></i> la la-fax
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-feed"></i> la la-feed
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-female"></i> la la-female
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fighter-jet"></i> la la-fighter-jet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-archive-o"></i> la la-file-archive-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-audio-o"></i> la la-file-audio-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-code-o"></i> la la-file-code-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-excel-o"></i> la la-file-excel-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-image-o"></i> la la-file-image-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-movie-o"></i> la la-file-movie-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-pdf-o"></i> la la-file-pdf-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-photo-o"></i> la la-file-photo-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-picture-o"></i> la la-file-picture-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-powerpoint-o"></i> la la-file-powerpoint-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-sound-o"></i> la la-file-sound-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-video-o"></i> la la-file-video-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-word-o"></i> la la-file-word-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-zip-o"></i> la la-file-zip-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-film"></i> la la-film
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-filter"></i> la la-filter
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fire"></i> la la-fire
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fire-extinguisher"></i> la la-fire-extinguisher
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-flag"></i> la la-flag
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-flag-checkered"></i> la la-flag-checkered
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-flag-o"></i> la la-flag-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-flash"></i> la la-flash
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-flask"></i> la la-flask
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-folder"></i> la la-folder
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-folder-o"></i> la la-folder-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-folder-open"></i> la la-folder-open
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-folder-open-o"></i> la la-folder-open-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-frown-o"></i> la la-frown-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-futbol-o"></i> la la-futbol-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gamepad"></i> la la-gamepad
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gavel"></i> la la-gavel
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gear"></i> la la-gear
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gears"></i> la la-gears
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gift"></i> la la-gift
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-glass"></i> la la-glass
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-globe"></i> la la-globe
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-graduation-cap"></i> la la-graduation-cap
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-group"></i> la la-group
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-grab-o"></i> la la-hand-grab-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-lizard-o"></i> la la-hand-lizard-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-paper-o"></i> la la-hand-paper-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-peace-o"></i> la la-hand-peace-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-pointer-o"></i> la la-hand-pointer-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-rock-o"></i> la la-hand-rock-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-scissors-o"></i> la la-hand-scissors-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-spock-o"></i> la la-hand-spock-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-stop-o"></i> la la-hand-stop-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hdd-o"></i> la la-hdd-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-headphones"></i> la la-headphones
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-heart"></i> la la-heart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-heart-o"></i> la la-heart-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-heartbeat"></i> la la-heartbeat
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-history"></i> la la-history
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-home"></i> la la-home
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hotel"></i> la la-hotel
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass"></i> la la-hourglass
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-1"></i> la la-hourglass-1
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-2"></i> la la-hourglass-2
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-3"></i> la la-hourglass-3 
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-end"></i> la la-hourglass-end
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-half"></i> la la-hourglass-half
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-o"></i> la la-hourglass-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hourglass-start"></i> la la-hourglass-start
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-i-cursor"></i> la la-i-cursor
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-image"></i> la la-image
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-inbox"></i> la la-inbox
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-industry"></i> la la-industry
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-info"></i> la la-info
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-info-circle"></i> la la-info-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-institution"></i> la la-institution
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-key"></i> la la-key
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-keyboard-o"></i> la la-keyboard-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-language"></i> la la-language
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-laptop"></i> la la-laptop
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-leaf"></i> la la-leaf
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-legal"></i> la la-legal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-lemon-o"></i> la la-lemon-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-level-down"></i> la la-level-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-level-up"></i> la la-level-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-life-bouy"></i> la la-life-bouy
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-life-buoy"></i> la la-life-buoy
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-life-ring"></i> la la-life-ring
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-life-saver"></i> la la-life-saver
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-lightbulb-o"></i> la la-lightbulb-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-line-chart"></i> la la-line-chart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-location-arrow"></i> la la-location-arrow
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-lock"></i> la la-lock
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-magic"></i> la la-magic
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-magnet"></i> la la-magnet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mail-forward"></i> la la-mail-forward
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mail-reply"></i> la la-mail-reply
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mail-reply-all"></i> la la-mail-reply-all
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-male"></i> la la-male
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-map"></i> la la-map
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-map-marker"></i> la la-map-marker
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-map-o"></i> la la-map-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-map-pin"></i> la la-map-pin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-map-signs"></i> la la-map-signs
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-meh-o"></i> la la-meh-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-microphone"></i> la la-microphone
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-microphone-slash"></i> la la-microphone-slash
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-minus"></i> la la-minus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-minus-circle"></i> la la-minus-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-minus-square"></i> la la-minus-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-minus-square-o"></i> la la-minus-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mobile"></i> la la-mobile
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mobile-phone"></i> la la-mobile-phone
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-money"></i> la la-money
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-moon-o"></i> la la-moon-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mortar-board"></i> la la-mortar-board
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-motorcycle"></i> la la-motorcycle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mouse-pointer"></i> la la-mouse-pointer
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-music"></i> la la-music
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-navicon"></i> la la-navicon
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-newspaper-o"></i> la la-newspaper-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-object-group"></i> la la-object-group
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-object-ungroup"></i> la la-object-ungroup
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paint-brush"></i> la la-paint-brush
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paper-plane"></i> la la-paper-plane
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paper-plane-o"></i> la la-paper-plane-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paw"></i> la la-paw
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pencil"></i> la la-pencil
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pencil-square"></i> la la-pencil-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pencil-square-o"></i> la la-pencil-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-phone"></i> la la-phone
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-phone-square"></i> la la-phone-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-photo"></i> la la-photo
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-picture-o"></i> la la-picture-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pie-chart"></i> la la-pie-chart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plane"></i> la la-plane
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plug"></i> la la-plug
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus"></i> la la-plus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus-circle"></i> la la-plus-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus-square"></i> la la-plus-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus-square-o"></i> la la-plus-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-power-off"></i> la la-power-off
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-print"></i> la la-print
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-puzzle-piece"></i> la la-puzzle-piece
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-qrcode"></i> la la-qrcode
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-question"></i> la la-question
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-question-circle"></i> la la-question-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-quote-left"></i> la la-quote-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-quote-right"></i> la la-quote-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-random"></i> la la-random
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-recycle"></i> la la-recycle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-refresh"></i> la la-refresh
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-registered"></i> la la-registered
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-remove"></i> la la-remove
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-reorder"></i> la la-reorder
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-reply"></i> la la-reply
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-reply-all"></i> la la-reply-all
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-retweet"></i> la la-retweet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-road"></i> la la-road
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rocket"></i> la la-rocket
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rss"></i> la la-rss
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rss-square"></i> la la-rss-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-search"></i> la la-search
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-search-minus"></i> la la-search-minus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-search-plus"></i> la la-search-plus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-send"></i> la la-send
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-send-o"></i> la la-send-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-server"></i> la la-server
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share"></i> la la-share
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share-alt"></i> la la-share-alt 
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share-alt-square"></i> la la-share-alt-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share-square"></i> la la-share-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share-square-o"></i> la la-share-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-shield"></i> la la-shield
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ship"></i> la la-ship
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-shopping-cart"></i> la la-shopping-cart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sign-in"></i> la la-sign-in
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sign-out"></i> la la-sign-out
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-signal"></i> la la-signal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sitemap"></i> la la-sitemap
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sliders"></i> la la-sliders
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-smile-o"></i> la la-smile-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-soccer-ball-o"></i> la la-soccer-ball-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort"></i> la la-sort
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-alpha-asc"></i> la la-sort-alpha-asc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-alpha-desc"></i> la la-sort-alpha-desc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-amount-asc"></i> la la-sort-amount-asc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-amount-desc"></i> la la-sort-amount-desc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-asc"></i> la la-sort-asc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-desc"></i> la la-sort-desc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-down"></i> la la-sort-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-numeric-asc"></i> la la-sort-numeric-asc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-numeric-desc"></i> la la-sort-numeric-desc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sort-up"></i> la la-sort-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-space-shuttle"></i> la la-space-shuttle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-spinner"></i> la la-spinner
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-spoon"></i> la la-spoon
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-square"></i> la la-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-square-o"></i> la la-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-star"></i> la la-star
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-star-half"></i> la la-star-half
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-star-half-empty"></i> la la-star-half-empty
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-star-half-full"></i> la la-star-half-full
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-star-half-o"></i> la la-star-half-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-star-o"></i> la la-star-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sticky-note"></i> la la-sticky-note
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sticky-note-o"></i> la la-sticky-note-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-street-view "></i> la la-street-view
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-suitcase"></i> la la-suitcase
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sun-o"></i> la la-sun-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-support"></i> la la-support 
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tablet"></i> la la-tablet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tachometer"></i> la la-tachometer
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tag"></i> la la-tag
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tags"></i> la la-tags
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tasks"></i> la la-tasks
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-taxi"></i> la la-taxi
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-television"></i> la la-television
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-terminal"></i> la la-terminal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumb-tack"></i> la la-thumb-tack
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-down"></i> la la-thumbs-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-o-down"></i> la la-thumbs-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-o-up"></i> la la-thumbs-o-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-up"></i> la la-thumbs-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ticket"></i> la la-ticket
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-times"></i> la la-times
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-times-circle"></i> la la-times-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-times-circle-o"></i> la la-times-circle-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tint"></i> la la-tint
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-down"></i> la la-toggle-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-left"></i> la la-toggle-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-off"></i> la la-toggle-off
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-on"></i> la la-toggle-on
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-right"></i> la la-toggle-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-up"></i> la la-toggle-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-trademark"></i> la la-trademark
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-trash"></i> la la-trash
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-trash-o"></i> la la-trash-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tree"></i> la la-tree
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-trophy"></i> la la-trophy
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-truck"></i> la la-truck
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tty"></i> la la-tty
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tv"></i> la la-tv
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-umbrella"></i> la la-umbrella
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-university"></i> la la-university
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-unlock"></i> la la-unlock
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-unlock-alt"></i> la la-unlock-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-unsorted"></i> la la-unsorted
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-upload"></i> la la-upload
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-user"></i> la la-user
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-user-plus"></i> la la-user-plus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-user-secret"></i> la la-user-secret
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-user-times"></i> la la-user-times
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-users"></i> la la-users
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-video-camera"></i> la la-video-camera
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-volume-down"></i> la la-volume-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-volume-off"></i> la la-volume-off
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-volume-up"></i> la la-volume-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-warning"></i> la la-warning
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wheelchair"></i> la la-wheelchair
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wifi"></i> la la-wifi
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wrench"></i> la la-wrench
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Hand Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-grab-o"></i> la la-hand-grab-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-lizard-o"></i> la la-hand-lizard-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-paper-o"></i> la la-hand-paper-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-peace-o"></i> la la-hand-peace-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-pointer-o"></i> la la-hand-pointer-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-rock-o"></i> la la-hand-rock-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-scissors-o"></i> la la-hand-scissors-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-spock-o"></i> la la-hand-spock-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-stop-o"></i> la la-hand-stop-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-down"></i> la la-thumbs-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-o-down"></i> la la-thumbs-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-o-up"></i> la la-thumbs-o-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-thumbs-up"></i> la la-thumbs-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-down"></i> la la-hand-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-left"></i> la la-hand-o-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-right"></i> la la-hand-o-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-up"></i> la la-hand-o-up
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Transportation Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-automobile"></i> la la-automobile
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bicycle"></i> la la-bicycle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bus"></i> la la-bus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cab"></i> la la-cab
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-car"></i> la la-car
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fighter-jet"></i> la la-fighter-jet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-motorcycle"></i> la la-motorcycle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plane"></i> la la-plane
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rocket"></i> la la-rocket
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ship"></i> la la-ship
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-space-shuttle"></i> la la-space-shuttle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-taxi"></i> la la-taxi
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-truck"></i> la la-truck
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wheelchair"></i> la la-wheelchair
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ambulance"></i> la la-ambulance
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-subway"></i> la la-subway
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-train"></i> la la-train
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Gender Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-genderless"></i> la la-genderless
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-intersex"></i> la la-intersex
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mars"></i> la la-mars
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mars-double"></i> la la-mars-double
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mars-stroke"></i> la la-mars-stroke
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mars-stroke-h"></i> la la-mars-stroke-h
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mars-stroke-v"></i> la la-mars-stroke-v
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-mercury"></i> la la-mercury
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-neuter"></i> la la-neuter
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-transgender"></i> la la-transgender
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-transgender-alt"></i> la la-transgender-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-venus"></i> la la-venus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-venus-double"></i> la la-venus-double
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-venus-mars"></i> la la-venus-mars
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">File Type Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-archive-o"></i> la la-file-archive-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-audio-o"></i> la la-file-audio-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-code-o"></i> la la-file-code-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-excel-o"></i> la la-file-excel-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-image-o"></i> la la-file-image-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-movie-o"></i> la la-file-movie-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-pdf-o"></i> la la-file-pdf-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-photo-o"></i> la la-file-photo-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-picture-o"></i> la la-file-picture-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-powerpoint-o"></i> la la-file-powerpoint-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-sound-o"></i> la la-file-sound-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-video-o"></i> la la-file-video-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-word-o"></i> la la-file-word-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-zip-o"></i> la la-file-zip-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file"></i> la la-file
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-o"></i> la la-file-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-text"></i> la la-file-text
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-text-o"></i> la la-file-text-o
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Spinner Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-o-notch"></i> la la-circle-o-notch
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cog"></i> la la-cog
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gear"></i> la la-gear
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-refresh"></i> la la-refresh
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-spinner"></i> la la-spinner
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Form Control Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check-square"></i> la la-check-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-check-square-o"></i> la la-check-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle"></i> la la-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-o"></i> la la-circle-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-circle-o"></i> la la-circle-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-minus-square"></i> la la-minus-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-minus-square-o"></i> la la-minus-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus-square"></i> la la-plus-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus-square-o"></i> la la-plus-square-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-square"></i> la la-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-square-o"></i> la la-square-o
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Payment Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-credit-card"></i> la la-credit-card     
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-amex"></i> la la-cc-amex
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-diners-club"></i> la la-cc-diners-club
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-discover"></i> la la-cc-discover
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-jcb"></i> la la-cc-jcb
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-mastercard"></i> la la-cc-mastercard
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-paypal"></i> la la-cc-paypal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-stripe"></i> la la-cc-stripe
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-visa"></i> la la-cc-visa
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-google-wallet"></i> la la-google-wallet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paypal"></i> la la-paypal
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Chart Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-area-chart"></i> la la-area-chart
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bar-chart"></i> la la-bar-chart
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bar-chart-o"></i> la la-bar-chart-o
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-line-chart"></i> la la-line-chart
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pie-chart"></i> la la-pie-chart
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Currency Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-money"></i> la la-money
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bitcoin"></i> la la-bitcoin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-btc"></i> la la-btc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cny"></i> la la-cny
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-dollar"></i> la la-dollar
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eur"></i> la la-eur
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-euro"></i> la la-euro
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gbp"></i> la la-gbp
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gg"></i> la la-gg
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gg-circle"></i> la la-gg-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ils"></i> la la-ils
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-inr"></i> la la-inr
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-jpy"></i> la la-jpy
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-krw"></i> la la-krw
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rmb"></i> la la-rmb
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rouble"></i> la la-rouble
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rub"></i> la la-rub
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ruble"></i> la la-ruble
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rupee"></i> la la-rupee
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-shekel"></i> la la-shekel
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sheqel"></i> la la-sheqel
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-try"></i> la la-try
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-turkish-lira"></i> la la-turkish-lira
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-usd"></i> la la-usd
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-won"></i> la la-won
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-yen"></i> la la-yen
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Text Editor Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eraser"></i> la la-eraser
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file"></i> la la-file
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-o"></i> la la-file-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-text"></i> la la-file-text
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-file-text-o"></i> la la-file-text-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-align-center"></i> la la-align-center
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-align-justify"></i> la la-align-justify
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-align-left"></i> la la-align-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-align-right"></i> la la-align-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bold"></i> la la-bold
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chain"></i> la la-chain
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chain-broken"></i> la la-chain-broken
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-clipboard"></i> la la-clipboard
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-columns"></i> la la-columns
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-copy"></i> la la-copy
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cut"></i> la la-cut
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-dedent"></i> la la-dedent
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-files-o"></i> la la-files-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-floppy-o"></i> la la-floppy-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-font"></i> la la-font
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-header"></i> la la-header
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-indent"></i> la la-indent
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-italic"></i> la la-italic
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-link"></i> la la-link
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-list"></i> la la-list
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-list-alt"></i> la la-list-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-list-ol"></i> la la-list-ol
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-list-ul"></i> la la-list-ul
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-outdent"></i> la la-outdent
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paperclip"></i> la la-paperclip
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paragraph"></i> la la-paragraph
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paste"></i> la la-paste
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-repeat"></i> la la-repeat
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rotate-left"></i> la la-rotate-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rotate-right"></i> la la-rotate-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-save"></i> la la-save
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-scissors"></i> la la-scissors
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-strikethrough"></i> la la-strikethrough
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-subscript"></i> la la-subscript
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-superscript"></i> la la-superscript
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-table"></i> la la-table
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-text-height"></i> la la-text-height
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-text-width"></i> la la-text-width
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-th"></i> la la-th
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-th-large"></i> la la-th-large
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-list"></i> la la-list
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-underline"></i> la la-underline
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-undo"></i> la la-undo
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-unlink"></i> la la-unlink
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Directional Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows"></i> la la-arrows
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows-h"></i> la la-arrows-h
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows-v"></i> la la-arrows-v
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-down"></i> la la-caret-square-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-left"></i> la la-caret-square-o-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-right"></i> la la-caret-square-o-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-square-o-up"></i> la la-caret-square-o-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-exchange"></i> la la-exchange
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-down"></i> la la-toggle-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-left"></i> la la-toggle-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-right"></i> la la-toggle-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-toggle-up"></i> la la-toggle-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-down"></i> la la-hand-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-left"></i> la la-hand-o-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-right"></i> la la-hand-o-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hand-o-up"></i> la la-hand-o-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-double-down"></i> la la-angle-double-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-double-left"></i> la la-angle-double-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-double-right"></i> la la-angle-double-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-double-up"></i> la la-angle-double-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-down"></i> la la-angle-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-left"></i> la la-angle-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-right"></i> la la-angle-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angle-up"></i> la la-angle-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-down"></i> la la-arrow-circle-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-left"></i> la la-arrow-circle-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-o-down"></i> la la-arrow-circle-o-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-o-left"></i> la la-arrow-circle-o-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-o-right"></i> la la-arrow-circle-o-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-o-up"></i> la la-arrow-circle-o-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-right"></i> la la-arrow-circle-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-circle-up"></i> la la-arrow-circle-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-down"></i> la la-arrow-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-left"></i> la la-arrow-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-right"></i> la la-arrow-right
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrow-up"></i> la la-arrow-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows-alt"></i> la la-arrows-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-down"></i> la la-caret-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-left"></i> la la-caret-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-right"></i> la la-caret-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-caret-up"></i> la la-caret-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-circle-down"></i> la la-chevron-circle-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-circle-left"></i> la la-chevron-circle-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-circle-right"></i> la la-chevron-circle-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-circle-up"></i> la la-chevron-circle-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-down"></i> la la-chevron-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-left"></i> la la-chevron-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-right"></i> la la-chevron-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chevron-up"></i> la la-chevron-up
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-long-arrow-down"></i> la la-long-arrow-down
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-long-arrow-left"></i> la la-long-arrow-left
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-long-arrow-right"></i> la la-long-arrow-right
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-long-arrow-up"></i> la la-long-arrow-up
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Video Player Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-random"></i> la la-random
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-arrows-alt"></i> la la-arrows-alt
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-backward"></i> la la-backward
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-compress"></i> la la-compress
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-eject"></i> la la-eject
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-expand"></i> la la-expand
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fast-backward"></i> la la-fast-backward
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fast-forward"></i> la la-fast-forward
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-forward"></i> la la-forward
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pause"></i> la la-pause
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-play"></i> la la-play
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-play-circle"></i> la la-play-circle
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-play-circle-o"></i> la la-play-circle-o
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-step-backward"></i> la la-step-backward
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-step-forward"></i> la la-step-forward
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-stop"></i> la la-stop
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-youtube-play"></i> la la-youtube-play
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Brand Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share-alt"></i> la la-share-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-share-alt-square"></i> la la-share-alt-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-amex"></i> la la-cc-amex
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-diners-club"></i> la la-cc-diners-club
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-discover"></i> la la-cc-discover
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-jcb"></i> la la-cc-jcb
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-mastercard"></i> la la-cc-mastercard
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-paypal"></i> la la-cc-paypal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-stripe"></i> la la-cc-stripe
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-cc-visa"></i> la la-cc-visa
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-google-wallet"></i> la la-google-wallet
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-paypal"></i> la la-paypal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bitcoin"></i> la la-bitcoin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-btc"></i> la la-btc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gg"></i> la la-gg
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gg-circle"></i> la la-gg-circle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-youtube-play"></i> la la-youtube-play
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-500px"></i> la la-
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-adn"></i> la la-adn
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-amazon"></i> la la-amazon
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-android"></i> la la-android
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-angellist"></i> la la-angellist
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-apple"></i> la la-apple
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-behance"></i> la la-behance
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-behance-square"></i> la la-behance-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bitbucket"></i> la la-bitbucket
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-bitbucket-square"></i> la la-bitbucket-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-black-tie"></i> la la-black-tie
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-buysellads"></i> la la-buysellads
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-chrome"></i> la la-chrome
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-codepen"></i> la la-codepen
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-connectdevelop"></i> la la-connectdevelop
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-contao"></i> la la-contao
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-css3"></i> la la-css3
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-dashcube"></i> la la-dashcube
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-delicious"></i> la la-delicious
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-deviantart"></i> la la-deviantart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-digg"></i> la la-digg
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-dribbble"></i> la la-dribbble
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-dropbox"></i> la la-dropbox
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-drupal"></i> la la-drupal
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-empire"></i> la la-empire
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-expeditedssl"></i> la la-expeditedssl
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-facebook"></i> la la-facebook
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-facebook-f"></i> la la-facebook-f
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-facebook-official"></i> la la-facebook-official
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-facebook-square"></i> la la-facebook-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-firefox"></i> la la-firefox
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-flickr"></i> la la-flickr
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-fonticons"></i> la la-fonticons
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-forumbee"></i> la la-forumbee
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-foursquare"></i> la la-foursquare
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ge"></i> la la-ge
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-get-pocket"></i> la la-get-pocket
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-git"></i> la la-git
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-git-square"></i> la la-git-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-github"></i> la la-github
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-github-alt"></i> la la-github-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-github-square"></i> la la-github-square
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gittip"></i> la la-gittip
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-google"></i> la la-google
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-google-plus"></i> la la-google-plus
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-google-plus-square"></i> la la-google-plus-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-gratipay"></i> la la-gratipay
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hacker-news"></i> la la-hacker-news
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-houzz"></i> la la-houzz
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-html5"></i> la la-html5
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-instagram"></i> la la-instagram
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-internet-explorer"></i> la la-internet-explorer
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ioxhost"></i> la la-ioxhost
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-joomla"></i> la la-joomla
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-jsfiddle"></i> la la-jsfiddle
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-lastfm"></i> la la-lastfm
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-lastfm-square"></i> la la-lastfm-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-leanpub"></i> la la-leanpub
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-linkedin"></i> la la-linkedin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-linkedin-square"></i> la la-linkedin-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-linux"></i> la la-linux
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-maxcdn"></i> la la-maxcdn
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-meanpath"></i> la la-meanpath
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-medium"></i> la la-medium
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-odnoklassniki"></i> la la-odnoklassniki
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-odnoklassniki-square"></i> la la-odnoklassniki-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-opencart"></i> la la-opencart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-openid"></i> la la-openid
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-opera"></i> la la-opera
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-optin-monster"></i> la la-optin-monster
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pagelines"></i> la la-pagelines
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pied-piper"></i> la la-pied-piper
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pied-piper-alt"></i> la la-pied-piper-alt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pinterest"></i> la la-pinterest
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pinterest-p"></i> la la-pinterest-p
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-pinterest-square"></i> la la-pinterest-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-qq"></i> la la-qq
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ra"></i> la la-ra
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-rebel"></i> la la-rebel
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-reddit"></i> la la-reddit
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-reddit-square"></i> la la-reddit-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-renren"></i> la la-renren
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-safari"></i> la la-safari
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-sellsy"></i> la la-sellsy
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-shirtsinbulk"></i> la la-shirtsinbulk
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-simplybuilt"></i> la la-simplybuilt
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-skyatlas"></i> la la-skyatlas
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-skype"></i> la la-skype
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-slack"></i> la la-slack
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-slideshare"></i> la la-slideshare
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-soundcloud"></i> la la-soundcloud
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-spotify"></i> la la-spotify
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-stack-exchange"></i> la la-stack-exchange
                                        </div>
                                            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-stack-overflow"></i> la la-stack-overflow
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-steam"></i> la la-steam
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-steam-square"></i> la la-steam-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-stumbleupon"></i> la la-stumbleupon
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-stumbleupon-circle"></i> la la-stumbleupon-circle
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tencent-weibo"></i> la la-tencent-weibo
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-trello"></i> la la-trello
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tripadvisor"></i> la la-tripadvisor
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tumblr"></i> la la-tumblr
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-tumblr-square"></i> la la-tumblr-square
                                        </div>
            
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-twitch"></i> la la-twitch
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-twitter"></i> la la-twitter
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-twitter-square"></i> la la-twitter-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-viacoin"></i> la la-viacoin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-vimeo"></i> la la-vimeo
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-vimeo-square"></i> la la-vimeo-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-vine"></i> la la-vine
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-vk"></i> la la-vk
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wechat"></i> la la-wechat
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-weibo"></i> la la-weibo
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-weixin"></i> la la-weixin
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-whatsapp"></i> la la-whatsapp
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wikipedia-w"></i> la la-wikipedia-w
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-windows"></i> la la-windows
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wordpress"></i> la la-wordpress
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-xing"></i> la la-xing
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-xing-square"></i> la la-xing-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-y-combinator"></i> la la-y-combinator
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-y-combinator-square"></i> la la-y-combinator-square
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-yahoo"></i> la la-yahoo
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-yc"></i> la la-yc
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-yc-square"></i> la la-yc-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-yelp"></i> la la-yelp
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-youtube"></i> la la-youtube
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-youtube-square"></i> la la-youtube-square
                                        </div>
                                    </div>
                                
                                    <h4 class="header-title my-3 font-weight-bold">Medical Icons</h4>
            
                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-heart"></i> la la-heart
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-heart-o"></i> la la-heart-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-heartbeat"></i> la la-heartbeat
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-plus-square"></i> la la-plus-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-wheelchair"></i> la la-wheelchair
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-ambulance"></i> la la-ambulance
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-h-square"></i> la la-h-square
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-hospital-o"></i> la la-hospital-o
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-medkit"></i> la la-medkit
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-stethoscope"></i> la la-stethoscope
                                        </div>
            
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="la la-user-md"></i> la la-user-md
                                        </div>
                                    </div>
                                </div>
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