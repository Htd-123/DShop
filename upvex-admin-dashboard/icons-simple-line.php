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
                                            <li class="breadcrumb-item active">Simple Line</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Simple Line Icons</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Examples</h4>
                                    <p class="sub-header">
                                        Use <code>&lt;i class="icon-user-female"&gt;&lt;/i&gt;</code>.
                                    </p>

                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-user"></i>icon-user
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-people"></i>icon-people

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-user-female"></i>
                                                icon-user-female
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-user-follow"></i>
                                                icon-user-follow
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-user-following"></i>
                                                icon-user-following
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-user-unfollow"></i>
                                                icon-user-unfollow
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-login"></i>
                                                icon-login
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-logout"></i>
                                                icon-logout
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-emotsmile"></i>
                                                icon-emotsmile
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-phone"></i>
                                                icon-phone
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-call-end"></i>
                                                icon-call-end
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-call-in"></i>
                                                icon-call-in
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-call-out"></i>
                                                icon-call-out
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-map"></i>
                                                icon-map
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-location-pin"></i>
                                                icon-location-pin
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-direction"></i>
                                                icon-direction
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-directions"></i>
                                                icon-directions
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-compass"></i>
                                                icon-compass
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-layers"></i>
                                                icon-layers
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-menu"></i>
                                                icon-menu
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-list"></i>
                                                icon-list
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-options-vertical"></i>
                                                icon-options-vertical
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-options"></i>
                                                icon-options
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-down"></i>
                                                icon-arrow-down
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-left"></i>
                                                icon-arrow-left
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-right"></i>
                                                icon-arrow-right
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-up"></i>
                                                icon-arrow-up
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-up-circle"></i>
                                                icon-arrow-up-circle
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-left-circle"></i>
                                                icon-arrow-left-circle
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-right-circle"></i>
                                                icon-arrow-right-circle
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-arrow-down-circle"></i>
                                                icon-arrow-down-circle
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-check"></i>
                                                icon-check
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-clock"></i>
                                                icon-clock
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-plus"></i>
                                                icon-plus
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-close"></i>
                                                icon-close
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-trophy"></i>
                                                icon-trophy
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-screen-smartphone"></i>
                                                icon-screen-smartphone
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-screen-desktop"></i>
                                                icon-screen-desktop
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-plane"></i>
                                                icon-plane
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-notebook"></i>
                                                icon-notebook
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-mustache"></i>
                                                icon-mustache
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-mouse"></i>
                                                icon-mouse
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-magnet"></i>
                                                icon-magnet
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-energy"></i>
                                                icon-energy
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-disc"></i>
                                                icon-disc
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-cursor"></i>
                                                icon-cursor
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-cursor-move"></i>
                                                icon-cursor-move
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-crop"></i>
                                                icon-crop
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-chemistry"></i>
                                                icon-chemistry
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-speedometer"></i>
                                                icon-speedometer
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-shield"></i>
                                                icon-shield
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-screen-tablet"></i>
                                                icon-screen-tablet
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-magic-wand"></i>
                                                icon-magic-wand
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-hourglass"></i>
                                                icon-hourglass
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-graduation"></i>
                                                icon-graduation
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-ghost"></i>
                                                icon-ghost
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-game-controller"></i>
                                                icon-game-controller
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-fire"></i>
                                                icon-fire
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-eyeglass"></i>
                                                icon-eyeglass
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-envelope-open"></i>
                                                icon-envelope-open
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-bell"></i>
                                                icon-bell
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-badge"></i>
                                                icon-badge
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-anchor"></i>
                                                icon-anchor
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-wallet"></i>
                                                icon-wallet
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-vector"></i>
                                                icon-vector
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-speech"></i>
                                                icon-speech
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-puzzle"></i>
                                                icon-puzzle
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-printer"></i>
                                                icon-printer
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-present"></i>
                                                icon-present
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-playlist"></i>
                                                icon-playlist
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-pin"></i>
                                                icon-pin
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-picture"></i>
                                                icon-picture
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-handbag"></i>
                                                icon-handbag
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-globe-alt"></i>
                                                icon-globe-alt
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-globe"></i>
                                                icon-globe
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-folder-alt"></i>
                                                icon-folder-alt
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-folder"></i>
                                                icon-folder
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-film"></i>
                                                icon-film
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-feed"></i>
                                                icon-feed
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-drop"></i>
                                                icon-drop
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-drawar"></i>
                                                icon-drawar
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-docs"></i>
                                                icon-docs
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-doc"></i>
                                                icon-doc
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-diamond"></i>
                                                icon-diamond
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-cup"></i>
                                                icon-cup
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-calculator"></i>
                                                icon-calculator
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-bubbles"></i>
                                                icon-bubbles
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-briefcase"></i>
                                                icon-briefcase
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-book-open"></i>
                                                icon-book-open
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-basket-loaded"></i>
                                                icon-basket-loaded
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-basket"></i>
                                                icon-basket
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-bag"></i>
                                                icon-bag
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-action-undo"></i>
                                                icon-action-undo
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-action-redo"></i>
                                                icon-action-redo
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-wrench"></i>
                                                icon-wrench
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-umbrella"></i>
                                                icon-umbrella
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-trash"></i>
                                                icon-trash
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-tag"></i>
                                                icon-tag
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-support"></i>
                                                .icon-support
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-frame"></i>
                                                icon-frame
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-size-fullscreen"></i>
                                                icon-size-fullscreen
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-size-actual"></i>
                                                icon-size-actual
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-shuffle"></i>
                                                icon-shuffle
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-share-alt"></i>
                                                icon-share-alt
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-share"></i>
                                                icon-share
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-rocket"></i>
                                                icon-rocket
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-question"></i>
                                                icon-question
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-pie-chart"></i>
                                                icon-pie-chart
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-pencil"></i>
                                                icon-pencil
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-note"></i>
                                                icon-note
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-loop"></i>
                                                icon-loop
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-home"></i>
                                                icon-home
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-grid"></i>
                                                icon-grid
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-graph"></i>
                                                icon-graph
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-microphone"></i>
                                                icon-microphone
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-music-tone-alt"></i>
                                                icon-music-tone-alt
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-music-tone"></i>
                                                icon-music-tone
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-earphones-alt"></i>
                                                icon-earphones-alt
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-earphones"></i>
                                                icon-earphones
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-equalizer"></i>
                                                icon-equalizer
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-like"></i>
                                                icon-like
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-dislike"></i>
                                                icon-dislike
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-control-start"></i>
                                                icon-control-start
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-control-rewind"></i>
                                                icon-control-rewind
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-control-play"></i>
                                                icon-control-play
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-control-pause"></i>
                                                icon-control-pause
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-control-forward"></i>
                                                icon-control-forward
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-control-end"></i>
                                                icon-control-end
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-volume-1"></i>
                                                icon-volume-1
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-volume-2"></i>
                                                icon-volume-2
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-volume-off"></i>
                                                icon-volume-off
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-calender"></i>
                                                icon-calender
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-bulb"></i>
                                                icon-bulb
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-chart"></i>
                                                icon-chart
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-ban"></i>
                                                icon-ban
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-bubble"></i>
                                                icon-bubble
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-camrecorder"></i>
                                                icon-camrecorder
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-camera"></i>
                                                icon-camera
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-cloud-download"></i>
                                                icon-cloud-download
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-cloud-upload"></i>
                                                icon-cloud-upload
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-eye"></i>
                                                icon-eye
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-flag"></i>
                                                icon-flag
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-heart"></i>
                                                icon-heart
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-info"></i>
                                                icon-info
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-key"></i>
                                                icon-key
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-link"></i>
                                                icon-link
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-lock"></i>
                                                icon-lock
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-lock-open"></i>
                                                icon-lock-open
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-magnifier"></i>
                                                icon-magnifier
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-magnifier-add"></i>
                                                icon-magnifier-add
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-magnifier-remove"></i>
                                                icon-magnifier-remove
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-paper-clip"></i>
                                                icon-paper-clip
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-paper-plane"></i>
                                                icon-paper-plane
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-power"></i>
                                                icon-power
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-refresh"></i>
                                                icon-refresh
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-reload"></i>
                                                icon-reload
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-settings"></i>
                                                icon-settings
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-star"></i>
                                                icon-star
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-symble-female"></i>
                                                icon-symble-female
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-symbol-male"></i>
                                                icon-symbol-male
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-target"></i>
                                                icon-target
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-credit-card"></i>
                                                icon-credit-card
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-paypal"></i>
                                                icon-paypal
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-tumblr"></i>
                                                icon-social-tumblr
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-twitter"></i>
                                                icon-social-twitter
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-facebook"></i>
                                                icon-social-facebook
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-instagram"></i>
                                                icon-social-instagram
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-linkedin"></i>
                                                icon-social-linkedin
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-pintarest"></i>
                                                icon-social-pintarest
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-github"></i>
                                                icon-social-github
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-gplus"></i>
                                                icon-social-gplus
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-reddit"></i>
                                                icon-social-reddit
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-skype"></i>
                                                icon-social-skype
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-dribbble"></i>
                                                icon-social-dribbble
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-behance"></i>
                                                icon-social-behance
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-foursqare"></i>
                                                icon-social-foursqare
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-soundcloud"></i>
                                                icon-social-soundcloud
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-spotify"></i>
                                                icon-social-spotify
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-stumbleupon"></i>
                                                icon-social-stumbleupon
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-youtube"></i>
                                                icon-social-youtube
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="preview">
                                                <i class="icon-social-dropbox"></i>
                                                icon-social-dropbox
                                            </div>
                                        </div>

                                    </div> <!-- end row -->

                                </div> <!-- end card -->

                            </div><!-- end col -->
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