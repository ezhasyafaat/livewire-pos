<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name') }}</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('codebase/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('codebase/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('codebase/media/favicons/apple-touch-icon-180x180.png') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ asset('codebase/css/codebase.min.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="codebase/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <div id="page-container" class="sidebar-r sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed rtl-support">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow bg-black-op-10">
                        <div class="content-header-section text-center align-parent">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-l" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">{{ config('app.first_name') }}</span><span class="font-size-xl text-primary">{{ config('app.last_name') }}</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                    </div>
                    <!-- END Side Header -->

                    <!-- Sidebar Scrolling -->
                    <div class="js-sidebar-scroll">
                        <!-- Side Main Navigation -->
                        <div class="content-side content-side-full">
                            <!--
                            Mobile navigation, desktop navigation can be found in #page-header

                            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                            -->
                            <ul class="nav-main">
                                <li>
                                    <a href="gs_landing.html"><i class="si si-cup"></i>Home</a>
                                </li>
                                <li class="nav-main-heading">Heading</li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Dropdown</a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Link #1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Link #2</a>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Dropdown</a>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">Link #1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Link #2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading">Vital</li>
                                <li>
                                    <a href="javascript:void(0)"><i class="si si-wrench"></i>Page</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="si si-wrench"></i>Page</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="si si-wrench"></i>Page</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Main Navigation -->
                    </div>
                    <!-- END Sidebar Scrolling -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700 mr-5" href="">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">{{ config('app.first_name') }}</span><span class="font-size-xl text-primary">{{ config('app.last_name') }}</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Right Section -->

                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Header Navigation -->
                        <!--
                        Desktop Navigation, mobile navigation can be found in #sidebar

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        If your sidebar menu includes headings, they won't be visible in your header navigation by default
                        If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                        -->
                        <ul class="nav-main-header">
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                        <!-- END Header Navigation -->

                        <!-- Color Themes (used just for demonstration) -->
                        <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                        <div class="btn-group mr-5" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center">
                                    <div class="col-4 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="codebase/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="codebase/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="codebase/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="codebase/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="codebase/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Color Themes -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form onsubmit="return false;">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-square btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-square btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-gd-primary overflow-hidden">
                    <div class="hero bg-black-op-25">
                        <div class="hero-inner">
                            <div class="content content-full text-center">
                                <h1 class="display-3 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">{{ config('app.name') }}</h1>
                                <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown">{{ config('app.description') }}</h2>
                                <a class="btn btn-hero btn-noborder btn-rounded btn-success ml-5 mb-10" href="{{ route('login') }}">
                                    <i class="fa fa-rocket ml-10"></i> Log In
                                </a>
                                {{-- <a class="btn btn-hero btn-noborder btn-rounded btn-primary mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="javascript:void(0)">
                                    <i class="fa fa-rocket ml-10"></i> Call to Action
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Content #1 -->
                <div class="bg-white">
                    <div class="content content-full">
                        <div class="py-50 text-center">
                            <h3 class="font-w700 mb-10">Title #1</h3>
                            <h4 class="font-w400 text-muted mb-0">Content..</h4>
                        </div>
                    </div>
                </div>
                <!-- END Content #1 -->

                <!-- Content #2 -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="py-50 text-center">
                            <h3 class="font-w700 mb-10">Title #2</h3>
                            <h4 class="font-w400 text-muted mb-0">Content..</h4>
                        </div>
                    </div>
                </div>
                <!-- END Content #2 -->

                <!-- Content #3 -->
                <div class="bg-white">
                    <div class="content content-full">
                        <div class="py-50 text-center">
                            <h3 class="font-w700 mb-10">Title #3</h3>
                            <h4 class="font-w400 text-muted mb-0">Content..</h4>
                        </div>
                    </div>
                </div>
                <!-- END Content #3 -->

                <!-- Call to Action -->
                <div class="bg-body-light">
                    <div class="content content-full text-center">
                        <div class="py-50">
                            <h3 class="font-w700 mb-10">Title</h3>
                            <h4 class="font-w400 text-muted mb-30">Subtitle.</h4>
                            <a class="btn btn-hero btn-rounded btn-alt-primary" href="">Call to Action</a>
                        </div>
                    </div>
                </div>
                <!-- END Call to Action -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white">
                <div class="content content-full">
                    <!-- Footer Navigation -->
                    <div class="row items-push-2x mt-30">
                        <div class="col-6 col-md-4">
                            <h3 class="h5 font-w700">Heading</h3>
                            <ul class="list list-simple-mini font-size-sm">
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4">
                            <h3 class="h5 font-w700">Heading</h3>
                            <ul class="list list-simple-mini font-size-sm">
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                                </li>
                                <li>
                                    <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="h5 font-w700">Company LTD</h3>
                            <div class="font-size-sm mb-30">
                                1080 Sunshine Valley, Suite 2563<br>
                                San Francisco, CA 85214<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </div>
                            <h3 class="h5 font-w700">Our Newsletter</h3>
                            <form>
                                <div class="input-group">
                                    <input type="email" class="form-control rounded-0" id="ld-subscribe-email" name="ld-subscribe-email" placeholder="Your email..">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-square btn-secondary">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Footer Navigation -->

                    <!-- Copyright Info -->
                    <div class="font-size-sm clearfix border-t pt-20 pb-10">
                        <div class="float-right">
                            <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase</a> &copy; <span class="js-year-copy"></span>
                        </div>
                        <div class="float-left">
                            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                    </div>
                    <!-- END Copyright Info -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase JS -->
        <script src="{{ asset('codebase/js/codebase.core.min.js') }}"></script>
        <script src="{{ asset('codebase/js/codebase.app.min.js') }}"></script>
    </body>
</html>
