<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIMOLEV</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="build/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="build/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="build/assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="build/assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="build/assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="build/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="build/assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="build/assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="build/assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="build/assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.html" class="logo">
                <h1>SIMOLEV</h1>
            </a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <!-- Navbar Right Menu-->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="navbar-custom-menu f-right">
                        <ul class="top-nav">
                            <!--Notification Menu-->

                            <li class="dropdown notification-menu">
                                <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-danger header-badge">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                                    <li class="bell-notification">
                                        <a href="javascript:;" class="media">
                                            <span class="media-left media-icon">
                                                <img class="img-circle" src="assets/images/avatar-1.png"
                                                    alt="User Image">
                                            </span>
                                            <div class="media-body"><span class="block">Lisa sent you a
                                                    mail</span><span class="text-muted block-time">2min ago</span></div>
                                        </a>
                                    </li>
                                    <li class="bell-notification">
                                        <a href="javascript:;" class="media">
                                            <span class="media-left media-icon">
                                                <img class="img-circle" src="assets/images/avatar-2.png"
                                                    alt="User Image">
                                            </span>
                                            <div class="media-body"><span class="block">Server Not
                                                    Working</span><span class="text-muted block-time">20min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="bell-notification">
                                        <a href="javascript:;" class="media"><span class="media-left media-icon">
                                                <img class="img-circle" src="assets/images/avatar-3.png"
                                                    alt="User Image">
                                            </span>
                                            <div class="media-body"><span class="block">Transaction xyz
                                                    complete</span><span class="text-muted block-time">3 hours
                                                    ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="not-footer">
                                        <a href="#!">See all notifications.</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- chat dropdown -->
                            <li class="pc-rheader-submenu ">
                                <a href="#!" class="drop icon-circle displayChatbox">
                                    <i class="icon-bubbles"></i>
                                    <span class="badge badge-danger header-badge">5</span>
                                </a>

                            </li>
                            <!-- window screen -->
                            <li class="pc-rheader-submenu">
                                <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                    <i class="icon-size-fullscreen"></i>
                                </a>

                            </li>
                            <!-- User Menu-->
                            <li class="dropdown">
                                <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true"
                                    aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                    <span>Sadhara <b>Dhaneswari</b> <i class=" icofont icofont-simple-down"></i></span>

                                </a>
                                <ul class="dropdown-menu settings-menu">
                                    <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                    <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                                    <li class="p-0">
                                        <div class="dropdown-divider m-0"></div>
                                    </li>
                                    <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    this.closest('form').submit();"><i
                                                class="icon-logout"></i> Logout</a></li>

                                </ul>
                            </li>
                        </ul>

                        <!-- search -->
                        <div id="morphsearch" class="morphsearch">
                            <div class="morphsearch-content">
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img class="round"
                                            src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                            alt="Sara Soueidan" />
                                        <h3>Sara Soueidan</h3>
                                    </a>

                                    <a class="dummy-media-object" href="#!">
                                        <img class="round"
                                            src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                            alt="Shaun Dona" />
                                        <h3>Shaun Dona</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                        <h3>Page Preloading Effect</h3>
                                    </a>

                                    <a class="dummy-media-object" href="#!">
                                        <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                        <h3>Draggable Dual-View Slideshow</h3>
                                    </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                        <h3>Tooltip Styles Inspiration</h3>
                                    </a>
                                    <a class="dummy-media-object" href="#!">
                                        <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                                        <h3>Notification Styles Inspiration</h3>
                                    </a>
                                </div>
                            </div>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                </form>
    </div>
    </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print ">
        <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">--- Navigation</li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>
                </li>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                            class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i
                                    class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>

                        <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i
                                    class="icon-arrow-right"></i> Form Elements Advance</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a class="waves-effect waves-dark" href="basic-table.html">
                        <i class="icon-list"></i><span> Table</span>
                    </a>
                </li>


                <li class="nav-level">--- More</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                            class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span>
                                    Authentication</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i
                                            class="icon-arrow-right"></i> Register 1</a></li>

                                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i
                                            class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i
                                            class="icon-arrow-right"></i><span> Forgot
                                            Password</span></a></li>

                            </ul>
                        </li>

                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i
                                    class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i
                                    class="icon-arrow-right"></i> Sample Page</a></li>

                    </ul>
                </li>
                </li>
            </ul>
        </section>
    </aside>
    <!-- Sidebar chat start -->
    <div id="sidebar" class="p-fixed header-users showChat">
        <div class="had-container">
            <div class="card card_main header-users-main">
                <div class="card-content user-box">
                    <div class="md-group-add-on p-20">
                        <span class="md-add-on">
                            <i class="icofont icofont-search-alt-2 chat-search"></i>
                        </span>
                        <div class="md-input-wrapper">
                            <input type="text" class="md-form-control" name="username" id="search-friends">
                            <label>Search</label>
                        </div>

                    </div>
                    <div class="media friendlist-main">

                        <h6>Friend List</h6>

                    </div>
                    <div class="main-friend-list">
                        <div class="media friendlist-box" data-id="6" data-status="offline"
                            data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left"
                            title="Sara Tancredi">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-5.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-danger"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Deehan Dhaninjaya</div>
                                <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online"
                            data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Aksara Mahiari</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                            data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Raditya Baskara</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online"
                            data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Giandra Semesta Atmaja</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                            data-toggle="tooltip" data-placement="left" title="Alice">
                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Mahawira Dhaneswara</div>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online"
                            data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Abisena Mahari</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online"
                            data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Dega Bhadrika Nasution</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online"
                            data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                            <div class="media-body">
                                <div class="friend-header">Dega Bhadrika Nasution</div>
                                <span>20min ago</span>
                            </div>
                        </div>
                        <div class="media friendlist-box" data-id="1" data-status="online"
                            data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                            title="Josephin Doe">

                            <a class="media-left" href="#!">
                                <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                    alt="Generic placeholder image">
                                <div class="live-status bg-success"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png"
                    alt="Generic placeholder image">
                <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                    <p class="chat-time">8:20 a.m.</p>
                </div>
            </div>
            <div class="media-right photo-table">
                <a href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png"
                        alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
            </div>
        </div>
        <div class="media chat-reply-box">
            <div class="md-input-wrapper">
                <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
                <label>Share your thoughts</label>
                <span class="highlight"></span>
                <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>

                <button type="button" class="chat-send waves-effect waves-light">
                    <i class="icofont icofont-location-arrow f-20 "></i>
                </button>
            </div>

        </div>
    </div>
    <!-- Sidebar chat end-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">4500</h2>
                        <span class="label label-warning">Sales</span>Arriving Today
                        <div class="side-box">
                            <i class="ti-signal text-warning-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">37,500</h2>
                        <span class="label label-primary">Views</span>View Today
                        <div class="side-box ">
                            <i class="ti-gift text-primary-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                        <span class="label label-success">Sales</span>Reviews
                        <div class="side-box">
                            <i class="ti-direction-alt text-success-color"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                        <span class="label label-danger">Sales</span>Reviews
                        <div class="side-box">
                            <i class="ti-rocket text-danger-color"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4-blocks row end -->
            <!-- 1-3-block row start -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="user-block-2">
                            <h6>Customer</h6>
                            <h5>Sadhara Dhaneswari</h5>
                            <h6>Booking for : </h6>
                        </div>
                        <div class="card-block">
                            <div style="margin: 10% auto"></div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-building"></i> Wedding
                                </div>
                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-picture"></i> 24 April 2023
                                </div>
                            </div>

                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-ui-clock"></i> 17.00 - 21.00
                                </div>

                            </div>
                            <div class="user-block-2-activities">
                                <div class="user-block-2-active">
                                    <i class="icofont icofont-home"></i> Gedung Mahika
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button"
                                    class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                    Accept
                                </button>
                                <button type="button"
                                    class="btn btn-primary waves-effect waves-light text-uppercase">
                                    Ignore
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Bar chart</h5>
                        </div>
                        <div class="card-block">
                            <div id="barchart" style="min-width: 250px; height: 330px; margin: 2% auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 1-3-block row end -->

            <!-- 2-1 block start -->
            <div class="row">
                <div class="col-xl-20 col-lg-12">
                    <!-- jfjgf-->
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table m-b-0 photo-table">

                                    <tbody>
                                        <tr>
                                            @if (auth()->user()->role_id == '1')
                                                <main class="container">
                                                    <!-- START FORM -->
                                                    <form action="{{ route('dashboard.store') }}" method="post">
                                                        @csrf
                                                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                                                            <div class="mb-3 row">
                                                                <label for="judul_lagu"
                                                                    class="col-sm-2 col-form-label">Judul Lagu</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                        name='judul_lagu' id="judullagu">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="penyanyi"
                                                                    class="col-sm-2 col-form-label">Penyanyi</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"
                                                                        name='penyanyi' id="penyanyi">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="tahun_rilis"
                                                                    class="col-sm-2 col-form-label">Tahun Rilis</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control"
                                                                        name='tahun_rilis' id="tahunrilis">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for=""
                                                                    class="col-sm-2 col-form-label"></label>
                                                                <div class="col-sm-10"><button type="submit"
                                                                        class="btn btn-primary"
                                                                        name="submit">SIMPAN</button></div>
                                                            </div>
                                                    </form>
                            </div>
                            <!-- AKHIR FORM -->
                            </main>
                            @endif
                            </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2-1 block end -->
        <div class="row">
            <div class="col-xl-20 col-lg-12">
                <!-- jfjgf-->
                <div class="card">
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table m-b-0 photo-table">

                                <tbody>
                                    <tr>
                                        <main class="container">
                                            <!-- START FORM -->
                                            <div class="my-3 p-3 bg-body rounded shadow-sm">


                                                <br>

                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Judul Lagu</th>
                                                            <th>Penyanyi</th>
                                                            <th>Tahun Rilis</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data_song as $song)
                                                            <tr>
                                                                <td>{{ $song->id }}</td>
                                                                <td>{{ $song->judul_lagu }}</td>
                                                                <td>{{ $song->penyanyi }}</td>
                                                                <td>{{ $song->tahun_rilis }}</td>
                                                                <td>
                                                                    @if (auth()->user()->role_id == '1')
                                                                        <button type="button"
                                                                            class="btn btn-warning btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#modal-edit{{ $song->id }}">
                                                                            Edit
                                                                        </button>

                                                                        <button type="button"
                                                                            class="btn btn-red btn-primary">

                                                                            Delete
                                                                        </button>
                                                                    @endif
                                                                </td>

                                                                <!-- Modal edit  -->
                                                                <div class="modal fade text-left" tabindex="-1"
                                                                    role="dialog" aria-labelledby="myModalLabel33"
                                                                    aria-hidden="true"
                                                                    id="modal-edit{{ $song->id }}">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <form
                                                                                action="{{ route('dashboard.update', $song->id) }}"
                                                                                method="POST">
                                                                                {{ method_field('PATCH') }}
                                                                                @csrf
                                                                                <div class="modal-body">
                                                                                    <div class="form-group row">
                                                                                        <label for="judul_lagu"
                                                                                            class="col-sm-3 col-form-label">Judul
                                                                                            Lagu</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="judul_lagu"
                                                                                                name="judul_lagu"
                                                                                                value="{{ $song->judul_lagu }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="penyanyi"
                                                                                            class="col-sm-3 col-form-label">Penyanyi</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="penyanyi"
                                                                                                name="penyanyi"
                                                                                                value="{{ $song->penyanyi }}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="tahun_rilis"
                                                                                            class="col-sm-3 col-form-label">Tahun
                                                                                            Rilis</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="tahun_rilis"
                                                                                                class="form-control"
                                                                                                id="tahun_rilis"
                                                                                                name="tahun_rilis"
                                                                                                value="{{ $song->tahun_rilis }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-footer justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-default"
                                                                                        data-dismiss="modal">Batal</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Simpan</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Modal edit -->

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- AKHIR FORM -->
                                        </main>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Main content ends -->
    <!-- Container-fluid ends -->
    </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jqurey -->
    <script src="build/assets/plugins/Jquery/dist/jquery.min.js"></script>
    <script src="build/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="build/assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="build/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="build/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="build/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="build/assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="build/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Sparkline charts -->
    <script src="build/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="build/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="build/assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- Echart js -->
    <script src="build/assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="build/assets/js/main.min.js"></script>
    <script type="text/javascript" src="build/assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="build/assets/pages/elements.js"></script>
    <script src="build/assets/js/menu.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>

</body>

</html>
