<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>后台中心 </title>

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/Admin/assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="/Admin/assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/Admin/assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/Admin/assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/Admin/assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="/Admin/assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="/Admin/assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/Admin/assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/Admin/assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/Admin/assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/Admin/assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/Admin/assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/Admin/assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/Admin/assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/Admin/assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/Admin/assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="/Admin/assets/js/plugins/slick/slick-theme.min.css">

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="/Admin/assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="/Admin/assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="side-header side-content">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <span>
                            <img class="img-avatar img-avatar32" src="/Admin/assets/img/avatars/avatar10.jpg" alt="">
                            <span class="font-w600 push-10-l">Roger Hart</span>
                        </span>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content remove-padding-t">
                        <!-- Notifications -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Recent Activity</h3>
                            </div>
                            <div class="block-content">
                                <!-- Activity List -->
                                <ul class="list list-activity">
                                    <li>
                                        <i class="si si-wallet text-success"></i>
                                        <div class="font-w600">New sale ($15)</div>
                                        <div><a href="javascript:void(0)">Admin Template</a></div>
                                        <div><small class="text-muted">3 min ago</small></div>
                                    </li>
                                    <li>
                                        <i class="si si-pencil text-info"></i>
                                        <div class="font-w600">You edited the file</div>
                                        <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                                        <div><small class="text-muted">15 min ago</small></div>
                                    </li>
                                    <li>
                                        <i class="si si-close text-danger"></i>
                                        <div class="font-w600">Project deleted</div>
                                        <div><a href="javascript:void(0)">Line Icon Set</a></div>
                                        <div><small class="text-muted">4 hours ago</small></div>
                                    </li>
                                    <li>
                                        <i class="si si-wrench text-warning"></i>
                                        <div class="font-w600">Core v2.5 is available</div>
                                        <div><a href="javascript:void(0)">Update now</a></div>
                                        <div><small class="text-muted">6 hours ago</small></div>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <small><a href="javascript:void(0)">Load More..</a></small>
                                </div>
                                <!-- END Activity List -->
                            </div>
                        </div>
                        <!-- END Notifications -->

                        <!-- Online Friends -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                    </li>
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Online Friends</h3>
                            </div>
                            <div class="block-content block-content-full">
                                <!-- Users Navigation -->
                                <ul class="nav-users">
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar4.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Rebecca Gray
                                            <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar10.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Dennis Ross
                                            <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar6.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Denise Watson
                                            <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar1.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> Denise Watson
                                            <div class="font-w400 text-muted"><small>Photographer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar10.jpg" alt="">
                                            <i class="fa fa-circle text-warning"></i> John Parker
                                            <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Users Navigation -->
                            </div>
                        </div>
                        <!-- END Online Friends -->

                        <!-- Quick Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-gray-lighter">
                                <ul class="block-options">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Quick Settings</h3>
                            </div>
                            <div class="block-content">
                                <!-- Quick Settings Form -->
                                <form class="form-bordered" action="index.html" method="post" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">Online Status</div>
                                                <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                            </div>
                                            <div class="Fcol-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">Auto Updates</div>
                                                <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">Notifications</div>
                                                <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <div class="font-s13 font-w600">API Access</div>
                                                <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <label class="css-input switch switch-sm switch-primary push-10-t">
                                                    <input type="checkbox" checked><span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Quick Settings Form -->
                            </div>
                        </div>
                        <!-- END Quick Settings -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group pull-right">
                                <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                    <li>
                                        <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/Admin/assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/Admin/assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/Admin/assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/Admin/assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/Admin/assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class=" text-white" href="##">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class=" font-w100 sidebar-mini-hide">路途乐后台管理中心</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                            <ul class="nav-main">
                                <li>
                                    <a class="active" href="##"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">管理中心</span></a>
                                </li>
                                <li class="@yield('user')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">用户管理</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('Admin/User/index')}}" class="@yield('userList')">用户列表</a>
                                        </li>
                                        <li>
                                            <a href="{{url('Admin/User/add')}}" class="@yield('userAdd')">添加用户</a>
                                        </li>
                                        <li>
                                            <a href="{{url('Admin/User/recycle')}}"  class="@yield('userHui')">回收站</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('type')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">商城管理</span></a>
                                    <ul>
                                        <li class="@yield('good')">
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="##">分类管理</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('Admin/Type/index')}}" class="@yield('typeList')">浏览分类</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('Admin/Type/add')}}/0" class="@yield('typeAdd')">添加分类</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="##">品牌管理</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('goods')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">商品管理</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('Admin/Goods/new')}}" class="@yield('goodsNew')">浏览上新商品</a>
                                        </li>
                                        <li>
                                            <a href="{{url('Admin/Goods/index')}}" class="@yield('goodsList')">浏览出售商品</a>
                                        </li>
                                        <li>
                                            <a href="{{url('Admin/Goods/recycle')}}" class="@yield('goodsRecycle')">浏览仓库商品</a>
                                        </li>
                                        <li>
                                            <a href="{{url('Admin/Goods/add')}}" class="@yield('goodsAdd')">添加商品</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('orders')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">订单管理</span></a>
                                    <ul>
                                        <li>
                                            <a class="@yield('ordersList')" href="{{url('Admin/Orders/index')}}">浏览订单</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('cart')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">购物车管理</span></a>
                                    <ul>
                                        <li>
                                            <a class="@yield('cartList')" href="{{url('/Admin/Index/cart')}}">浏览购物车</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('friendlink')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-magic-wand"></i><span class="sidebar-mini-hide">友情链接</span></a>
                                    <ul>
                                        <li>
                                            <a class="@yield('friendList')"  href="{{url('Admin/Friendlink/index')}}">浏览链接</a>
                                        </li>
                                        <li>
                                            <a class="@yield('friendAdd')"  href="{{url('Admin/Friendlink/add')}}">添加链接</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('setting')">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">网站配置</span></a>
                                    <ul>
                                        <li>
                                            <a class="@yield('settingList')"  href="{{url('Admin/Index/setting')}}">浏览网站配置</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="/Admin/assets/img/avatars/avatar10.jpg" alt="Avatar">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profile</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_inbox.html">
                                        <i class="si si-envelope-open pull-right"></i>
                                        <span class="badge badge-primary pull-right">3</span>Inbox
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="base_pages_profile.html">
                                        <i class="si si-user pull-right"></i>
                                        <span class="badge badge-success pull-right">1</span>Profile
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-settings pull-right"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Actions</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_lock.html">
                                        <i class="si si-lock pull-right"></i>Lock Account
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="base_pages_login.html">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                            <i class="fa fa-tasks"></i>
                        </button>
                    </li>
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                        <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                            <i class="si si-grid"></i>
                        </button>
                    </li>
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li class="js-header-search header-search">
                        <form class="form-horizontal" action="base_pages_search.html" method="post">
                            <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                                <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container" style="min-height: 447px;">
            @section('container')

                @show
            </main>

            {{--<main id="main-container">
                <!-- Page Header -->
                <div class="content bg-image overflow-hidden" style="background-image: url('/Admin/assets/img/photos/photo3@2x.jpg');">
                    <div class="push-50-t push-15">
                        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
                        <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
                    </div>
                </div>

                <!-- END Page Header -->

                <!-- Stats -->
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">8,790</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Total Earnings</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">$ 93,880</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Average Sale</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">$ 270</a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Main Dashboard Chart -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Weekly Overview</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter text-center">
                                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                                    <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                                </div>
                                <div class="block-content text-center">
                                    <div class="row items-push text-center">
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-10"><i class="si si-graph fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 205 Sales</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3">
                                            <div class="push-10"><i class="si si-users fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 25% Clients</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 visible-lg">
                                            <div class="push-10"><i class="si si-star fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 10 Ratings</div>
                                        </div>
                                        <div class="col-xs-6 col-lg-3 visible-lg">
                                            <div class="push-10"><i class="si si-share fa-2x"></i></div>
                                            <div class="h5 font-w300 text-muted">+ 35 Followers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Main Dashboard Chart -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Latest Sales Widget -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Latest Sales</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <div class="row items-push">
                                        <div class="col-xs-4">
                                            <div class="text-muted"><small><i class="si si-calendar"></i> 24 hrs</small></div>
                                            <div class="font-w600">18 Sales</div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="text-muted"><small><i class="si si-calendar"></i> 7 days</small></div>
                                            <div class="font-w600">78 Sales</div>
                                        </div>
                                        <div class="col-xs-4 h1 font-w300 text-right">$769</div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="pull-t pull-r-l">
                                        <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
                                        <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                                        <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="2500">
                                            <div>
                                                <table class="table remove-margin-b font-s13">
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600">
                                                                <a href="javascript:void(0)">Admin Template</a>
                                                            </td>
                                                            <td class="hidden-xs text-muted text-right" style="width: 70px;">23:01</td>
                                                            <td class="font-w600 text-success text-right" style="width: 70px;">+ $21</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">22:15</td>
                                                            <td class="font-w600 text-success text-right">+ $52</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">22:01</td>
                                                            <td class="font-w600 text-success text-right">+ $16</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">21:45</td>
                                                            <td class="font-w600 text-success text-right">+ $23</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">21:15</td>
                                                            <td class="font-w600 text-success text-right">+ $48</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">20:11</td>
                                                            <td class="font-w600 text-success text-right">+ $23</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">20:01</td>
                                                            <td class="font-w600 text-success text-right">+ $50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">19:35</td>
                                                            <td class="font-w600 text-success text-right">+ $16</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">19:17</td>
                                                            <td class="font-w600 text-success text-right">+ $60</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">17:49</td>
                                                            <td class="font-w600 text-success text-right">+ $59</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>
                                                <table class="table remove-margin-b font-s13">
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600">
                                                                <a href="javascript:void(0)">Admin Template</a>
                                                            </td>
                                                            <td class="hidden-xs text-muted text-right" style="width: 70px;">16:10</td>
                                                            <td class="font-w600 text-success text-right" style="width: 70px;">+ $21</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">16:06</td>
                                                            <td class="font-w600 text-success text-right">+ $48</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">15:21</td>
                                                            <td class="font-w600 text-success text-right">+ $52</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">12:10</td>
                                                            <td class="font-w600 text-success text-right">+ $23</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">12:09</td>
                                                            <td class="font-w600 text-success text-right">+ $23</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">11:39</td>
                                                            <td class="font-w600 text-success text-right">+ $16</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">11:33</td>
                                                            <td class="font-w600 text-success text-right">+ $23</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">Admin Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">11:18</td>
                                                            <td class="font-w600 text-success text-right">+ $23</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">WP Theme</a></td>
                                                            <td class="hidden-xs text-muted text-right">09:49</td>
                                                            <td class="font-w600 text-success text-right">+ $50</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600"><a href="javascript:void(0)">HTML Template</a></td>
                                                            <td class="hidden-xs text-muted text-right">09:35</td>
                                                            <td class="font-w600 text-success text-right">+ $16</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END Slick slider -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Latest Sales Widget -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- News -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title"> Updates</h3>
                                </div>
                                <div class="block-content bg-gray-lighter">
                                    <!-- Slick slider (.js-slider class is initialized in App() -> uiHelperSlick()) -->
                                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                                    <div class="js-slider remove-margin-b" data-slider-autoplay="true" data-slider-autoplay-speed="4000">
                                        <div>
                                            <blockquote>
                                                <p>Be yourself; everyone else is already taken.</p>
                                                <footer>Oscar Wilde</footer>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>Don't cry because it's over, smile because it happened.</p>
                                                <footer>Dr. Seuss</footer>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>Strive not to be a success, but rather to be of value.</p>
                                                <footer>Albert Einstein</footer>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>Every child is an artist. The problem is how to remain an artist once he grows up.</p>
                                                <footer>Pablo Picasso</footer>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p>There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                                                <footer>Aristotle</footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <!-- END Slick slider -->
                                </div>
                                <div class="block-content">
                                    <ul class="list list-timeline pull-t">
                                        <!-- Twitter Notification -->
                                        <li>
                                            <div class="list-timeline-time">12 hrs ago</div>
                                            <i class="fa fa-twitter list-timeline-icon bg-info"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 1150 Followers</p>
                                                <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                                            </div>
                                        </li>
                                        <!-- END Twitter Notification -->

                                        <!-- Generic Notification -->
                                        <li>
                                            <div class="list-timeline-time">4 hrs ago</div>
                                            <i class="fa fa-briefcase list-timeline-icon bg-city"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 3 New Products were added!</p>
                                                <p class="font-s13">Congratulations!</p>
                                            </div>
                                        </li>
                                        <!-- END Generic Notification -->

                                        <!-- System Notification -->
                                        <li>
                                            <div class="list-timeline-time">1 day ago</div>
                                            <i class="fa fa-check list-timeline-icon bg-success"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">Database backup completed!</p>
                                                <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->

                                        <!-- Facebook Notification -->
                                        <li>
                                            <div class="list-timeline-time">3 hrs ago</div>
                                            <i class="fa fa-facebook list-timeline-icon bg-default"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 290 Page Likes</p>
                                                <p class="font-s13">This is great, keep it up!</p>
                                            </div>
                                        </li>
                                        <!-- END Facebook Notification -->

                                        <!-- Social Notification -->
                                        <li>
                                            <div class="list-timeline-time">2 days ago</div>
                                            <i class="fa fa-user-plus list-timeline-icon bg-modern"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">+ 3 Friend Requests</p>
                                                <ul class="nav-users push-10-t push">
                                                    <li>
                                                        <a href="base_pages_profile.html">
                                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar15.jpg" alt="">
                                                            <i class="fa fa-circle text-success"></i> John Parker
                                                            <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="base_pages_profile.html">
                                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar4.jpg" alt="">
                                                            <i class="fa fa-circle text-warning"></i> Julia Cole
                                                            <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="base_pages_profile.html">
                                                            <img class="img-avatar" src="/Admin/assets/img/avatars/avatar11.jpg" alt="">
                                                            <i class="fa fa-circle text-danger"></i> Roger Hart
                                                            <div class="font-w400 text-muted"><small>UI Designer</small></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- END Social Notification -->

                                        <!-- System Notification -->
                                        <li class="push-5">
                                            <div class="list-timeline-time">1 week ago</div>
                                            <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                            <div class="list-timeline-content">
                                                <p class="font-w600">System updated to v2.02</p>
                                                <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                            </div>
                                        </li>
                                        <!-- END System Notification -->
                                    </ul>
                                </div>
                            </div>
                            <!-- END News -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Content Grid -->
                            <div class="content-grid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!-- Author of the Month -->
                                        <a class="block block-link-hover2" href="base_pages_profile.html">
                                            <div class="block-header">
                                                <h3 class="block-title text-center">Author of the Month</h3>
                                            </div>
                                            <div class="block-content block-content-full text-center bg-image" style="background-image: url('/Admin/assets/img/photos/photo2.jpg');">
                                                <div>
                                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="/Admin/assets/img/avatars/avatar1.jpg" alt="">
                                                </div>
                                                <div class="h5 text-white push-15-t push-5">Megan Dean</div>
                                                <div class="h5 text-white-op">Web Developer</div>
                                            </div>
                                            <div class="block-content">
                                                <div class="row items-push text-center">
                                                    <div class="col-xs-6">
                                                        <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                                                        <div class="h5 font-w300 text-muted">9 Projects</div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="push-5"><i class="si si-camera fa-2x"></i></div>
                                                        <div class="h5 font-w300 text-muted">74 Photos</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- END Author of the Month -->

                                        <!-- Mini Stats -->
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-graph fa-3x text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 78</div>
                                                            <div class="h5 text-muted text-uppercase push-5-t">Sales</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-social-dribbble fa-3x text-smooth"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 69</div>
                                                            <div class="h5 text-muted text-uppercase push-5-t">Likes</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-social-youtube fa-3x text-city"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 88</div>
                                                            <div class="h5 text-muted text-uppercase push-5-t">Subs</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <a class="block block-link-hover3" href="javascript:void(0)">
                                            <table class="block-table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;">
                                                            <div class="push-30 push-30-t">
                                                                <i class="si si-users fa-3x text-primary-dark"></i>
                                                            </div>
                                                        </td>
                                                        <td class="bg-gray-lighter" style="width: 50%;">
                                                            <div class="h1 font-w700"><span class="h2 text-muted">+</span> 96</div>
                                                            <div class="h5 text-muted text-uppercase push-5-t"> Followers</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </a>
                                        <!-- END Mini Stats -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Content Grid -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>--}}
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="index.html">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="frontend_home.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="/Admin/assets/js/core/jquery.min.js"></script>
        <script src="/Admin/assets/js/core/bootstrap.min.js"></script>
        <script src="/Admin/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="/Admin/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="/Admin/assets/js/core/jquery.appear.min.js"></script>
        <script src="/Admin/assets/js/core/jquery.countTo.min.js"></script>
        <script src="/Admin/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="/Admin/assets/js/core/js.cookie.min.js"></script>
        <script src="/Admin/assets/js/app.js"></script>

        <!-- Page Plugins -->
        <script src="/Admin/assets/js/plugins/slick/slick.min.js"></script>
        <script src="/Admin/assets/js/plugins/chartjs/Chart.min.js"></script>

        <!-- Page JS Code -->
        <script src="/Admin/assets/js/pages/base_pages_dashboard.js"></script>
        <script>
            $(function () {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
        @section('editorjs')
        @show
    </body>
</html>