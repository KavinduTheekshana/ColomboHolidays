<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Colombo Holidays | {{$titleIdentity}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by themesbrand" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('admin/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" type="text/css">



    <!-- App css -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('admin/css/metismenu.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" type="text/css">

    <!-- Dropzone css -->
    <link rel="stylesheet" href="{{asset('admin/plugins/dropzone/dist/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/dropify/css/dropify.min.css')}}">


    <!-- DataTables -->
    <link href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Multipal Select -->
    <link href="{{asset('admin/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/tagsinput/jquery.tagsinput.css')}}" rel="stylesheet" />

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ url('Dashboard') }}" class="logo">
                <span>
                    <img src="{{asset('admin/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{asset('admin/images/logo.png')}}" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>

        <!-- Navbar -->
        <nav class="navbar-custom">

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input" type="search" placeholder="Search here.." />
                    <a href="javascript:void(0);" class="close-search search-btn" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li>
                    <a class="nav-link waves-effect waves-light search-btn" href="javascript:void(0);"
                        data-target="#search-wrap">
                        <i class="mdi mdi-magnify nav-icon"></i>
                    </a>
                </li>



                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline nav-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notifications (258)
                        </h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long
                                        established fact that a reader will</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of
                                        the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87
                                        unread messages</small></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="hidden-sm">
                    <a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen">
                        <i class="mdi mdi-fullscreen nav-icon"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="admin/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>

            <ul class="list-unstyled topbar-nav mb-0">

                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light">
                        <i class="mdi mdi-menu nav-icon"></i>
                    </button>
                </li>



            </ul>

        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <div class="page-wrapper">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu" id="side-nav">

                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ url('Dashboard') }}"><i class="mdi mdi-speedometer"></i><span>Dashboards</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-star-circle"></i><span>Testimonials</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('AddTestimonials') }}">Add Testimonials</a></li>
                        <li><a href="{{ url('EditTestimonials') }}">Edit Testimonials</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-image-multiple"></i><span>Gallery</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('AddGallery') }}">Add Gallery</a></li>
                        <li><a href="{{ url('EditGallery') }}">Edit Gallery</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-newspaper"></i><span>News</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ url('AddNews') }}">Add News</a></li>
                        <li><a href="{{ url('EditNews') }}">Edit News</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-briefcase-check"></i><span>UI Elements</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-progress.html">Progress</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-video.html">Videos</a></li>
                        <li><a href="ui-colors.html">Colors</a></li>
                        <li><a href="ui-grid.html">Grid System</a></li>
                        <li><a href="ui-spinners.html">Spinners</a></li>
                        <li><a href="ui-toasts.html">Toasts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="advanced-nestable.html">Nestable List</a></li>
                        <li><a href="advanced-ratings.html">Ratings</a></li>
                        <li><a href="advanced-highlight.html">Highlight</a></li>
                        <li><a href="advanced-clipboard.html">Clipboard</a></li>
                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
                        <li><a href="advanced-session.html">Session Timeout</a></li>
                        <li><a href="advanced-scrollbars.html">Scrollbars</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span
                            class="badge badge-info float-right">8</span><span>Forms</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="forms-elements.html">Basic Elements</a></li>
                        <li><a href="forms-advanced.html">Advance Elements</a></li>
                        <li><a href="forms-validation.html">Validation</a></li>
                        <li><a href="forms-wizard.html">Wizard</a></li>
                        <li><a href="forms-editors.html">Editors</a></li>
                        <li><a href="forms-repeater.html">Repeater</a></li>
                        <li><a href="forms-x-editable.html">X Editable</a></li>
                        <li><a href="forms-uploads.html">File Upload</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-chart-arc"></i><span>Charts</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="charts-morris.html">Morris</a></li>
                        <li><a href="charts-chartist.html">Chartist</a></li>
                        <li><a href="charts-flot.html">Flot</a></li>
                        <li><a href="charts-peity.html">Peity</a></li>
                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                        <li><a href="charts-sparkline.html">Sparkline</a></li>
                        <li><a href="charts-knob.html">Jquery Knob</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i
                            class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic</a></li>
                        <li><a href="tables-datatable.html">Datatables</a></li>
                        <li><a href="tables-responsive.html">Responsive</a></li>
                        <li><a href="tables-editable.html">Editable</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-album"></i><span>Icons</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                        <li><a href="icons-themify.html">Themify</a></li>
                        <li><a href="icons-typicons.html">Typicons</a></li>
                    </ul>
                </li>

                <li class="menu-title">More</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i
                            class="mdi mdi-account-location"></i><span>Authentication</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                        <li><a href="auth-404.html">Error 404</a></li>
                        <li><a href="auth-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-google-pages"></i><span>Pages</span><span
                            class="badge badge-success float-right">Hot</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="page-tour.html">Tour</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-treeview.html">Treeview</a></li>
                        <li><a href="page-profile.html">Profile</a></li>
                        <li><a href="page-starter.html">Starter Page</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-faq.html">FAQs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                        <li><a href="email-templates-alert.html">Alert Email</a></li>
                        <li><a href="email-templates-billing.html">Billing Email</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- end left-sidenav-->

        @yield('content')

        <footer class="footer text-center text-sm-left">
            © 2019-2020 Colombo Holidays <span class="text-muted d-none d-sm-inline-block float-right">Developed by
                <a href="www.inovora.uk">Inovora Technologies</a></span>
        </footer>
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->


    <!-- jQuery  -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/js/waves.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('admin/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('admin/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('admin/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('admin/plugins/peity-chart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/pages/jquery.dashboard2.init.js')}}"></script>


    <!-- App js -->
    <script src="{{asset('admin/js/app.js')}}"></script>

    <!--Wysiwig js-->
    <script src="{{asset('admin/plugins/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('admin/pages/jquery.form-editor.js')}}"></script>

    <!-- Dropzone js -->
    <script src="{{asset('admin/plugins/dropzone/dist/dropzone.js')}}"></script>
    <script src="{{asset('admin/plugins/dropify/js/dropify.min.js')}}"></script>
    <script src="{{asset('admin/pages/jquery.dropzone.init.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('admin/pages/jquery.table-datatable.js')}}"></script>

    <!-- Multipal Select -->
    <script src="{{asset('admin/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
    <script src="{{asset('admin/pages/jquery.form-advanced.init.js')}}"></script>








</body>

</html>