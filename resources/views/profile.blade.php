<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="http://localhost/StockBAE/public/images/ico/sb-icon-b.png">

    <title>StockBAE - Dashboard</title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="http://localhost/StockBAE/public/css/plugins/pace.css">
    <script src="http://localhost/StockBAE/public/js/pace.min.js"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="http://localhost/StockBAE/public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/StockBAE/public/css/plugins/bootstrap-progressbar-3.1.1.css">
    <link rel="stylesheet" href="http://localhost/StockBAE/public/css/plugins/jquery-jvectormap.css">

    <!--AmaranJS Css Start-->
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/jquery.amaran.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/all-themes.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/awesome.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/default.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/blur.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/user.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/rounded.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/readmore.css" rel="stylesheet">
    <link href="http://localhost/StockBAE/public/css/plugins/amaranjs/theme/metro.css" rel="stylesheet">
    <!--AmaranJS Css End -->

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="http://localhost/StockBAE/public/css/style.css" rel="stylesheet">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="http://localhost/StockBAE/public/css/responsive.css" rel="stylesheet">
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
<!--Navigation Top Bar Start-->
<nav class="navigation">
    <div class="container-fluid">
        <!--Logo text start-->
        <div class="header-logo">
            <a href="index.html" title="">
                <h1>StockBae</h1>
            </a>
        </div>
        <!--Logo text End-->
        <div class="top-navigation">
            <!--Collapse navigation menu icon start -->
            <div class="menu-control hidden-xs">
                <a href="javascript:void(0)">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="search-box">
                <ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                            <span class="fa fa-search"></span>
                        </a>

                        <div class="dropdown-menu  top-dropDown-1">
                            <h4>Search</h4>

                            <form>
                                <input type="search" placeholder="what you want to see ?">
                            </form>
                        </div>

                    </li>
                </ul>
            </div>

            <!--Collapse navigation menu icon end -->
            <!--Top Navigation Start-->

            <ul>
                <li class="dropdown">
                    <!--All task drop down start-->

                    <div class="dropdown-menu right top-dropDown-1">
                        <h4>All Task</h4>
                        <ul class="goal-item">
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="goal-content">
                                        Wordpress Theme
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar ls-light-blue-progress six-sec-ease-in-out"
                                                 aria-valuetransitiongoal="100"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="goal-content">
                                        PSD Designe
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar ls-red-progress six-sec-ease-in-out"
                                                 aria-valuetransitiongoal="40"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="goal-content">
                                        Wordpress PLugin
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar ls-light-green-progress six-sec-ease-in-out"
                                                 aria-valuetransitiongoal="60"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="only-link">
                                <a href="javascript:void(0)">View All</a>
                            </li>
                        </ul>
                    </div>
                    <!--All task drop down end-->
                </li>
                <li class="dropdown">
                    <!--Notification drop down start-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                        <span class="fa fa-bell-o"></span>
                        <span class="badge badge-red">6</span>
                    </a>

                    <div class="dropdown-menu right top-notification">
                        <h4>Notification</h4>
                        <ul class="ls-feed">
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-red">
                                            <i class="fa fa-check white"></i>
                                        </span>
                                    Sample Data
                                    <span class="date">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-light-green">
                                            <i class="fa fa-bar-chart-o"></i>
                                        </span>
                                    Sample Data
                                    <span class="date">30 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-lightBlue">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    Sample Data
                                    <span class="date">45 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-lightBlue">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    Sample Data
                                    <span class="date">50 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-red">
                                            <i class="fa fa-bell"></i>
                                        </span>
                                    Sample Data
                                    <span class="date">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-blue">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                    Sample Data
                                    <span class="lightGreen"></span>
                                    <span class="date">5 hrs</span>
                                </a>
                            </li>
                            <li class="only-link">
                                <a href="javascript:void(0)">View All</a>
                            </li>
                        </ul>
                    </div>
                    <!--Notification drop down end-->
                </li>
                <li class="dropdown">
                    <!--Email drop down start-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                        <span class="fa fa-envelope-o"></span>
                        <span class="badge badge-red">3</span>
                    </a>

                    <div class="dropdown-menu right email-notification">
                        <h4>Email</h4>
                        <ul class="email-top">
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="email-top-content">
                                        John Doe
                                        <div>Sample Mail 1</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="email-top-content">
                                        John Doe
                                        <div>Sample Mail 2</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="email-top-content">
                                        John Doe
                                        <div> Sample Mail 4</div>
                                    </div>
                                </a>
                            </li>
                            <li class="only-link">
                                <a href="mail.html">View All</a>
                            </li>
                        </ul>
                    </div>
                    <!--Email drop down end-->
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-power-off"></i>
                    </a>
                </li>

            </ul>
            <!--Top Navigation End-->
        </div>
    </div>
</nav>
<!--Navigation Top Bar End-->
<section id="main-container">

    <!--Left navigation section start-->


    <section id="left-navigation">
        <!--Left navigation user details start-->
        <div class="circle-image-4"></div>
        <h5 style="text-Pearsongn: center;" >Scott Pearson</h5> <p class="text-center">Database Manager</p>

        <!--Left navigation user details end-->

        <!--Phone Navigation Menu icon start-->
        <div class="phone-nav-box visible-xs">
            <a class="phone-logo" href="profile.html" title="">
                <h1>StockBAE</h1>
            </a>

            <div class="clearfix"></div>
        </div>
        <!--Phone Navigation Menu icon start-->

        <!--Left navigation start-->
        <ul class="mainNav">
            <li>
                <a href="profile">
                    <i class="fa fa-dashboard"></i> <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="portfolio">
                    <i class="fa fa-dashboard"></i> <span>Client Portfolio</span>
                </a>
            </li>
            <li>
                <a href="calendar">
                    <i class="fa fa-dashboard"></i> <span>Calender</span>
                </a>
            </li>
            <li>
                <a href="fa">
                    <i class="fa fa-dashboard"></i> <span>Financial Advisors</span>
                </a>
            </li>
            <li>
                <a href="client">
                    <i class="fa fa-dashboard"></i> <span>Clients</span>
                </a>
            </li>
        </ul>
        <!--Left navigation end-->
    </section>
    <!--Left navigation section end-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">Profile</h3>
                        <!--Top header end -->

                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Profile</li>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <!--User Details Start-->
                        <div class="ls-user-details">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <!--User Name-->
                                    <div class="ls-user-name">
                                        <h1>Mr. Scott Pearson</h1>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                </div>
                            </div>


                            <div class="row">
                                <!--User Details start-->
                                <div class="user-detail col-md-4 col-sm-5">
                                    <div class="ls-user-position">
                                        <h4>Administrator</h4>
                                    </div>

                                    <!--Address-->
                                    <address>
                                        <i class="fa fa-map-marker"></i>
                                        123 Sesame Street<br>
                                        San Francisco, CA 420<br>
                                        <abbr title="Phone"><i class="fa fa-mobile"></i> P:</abbr> (123) 456-7890
                                    </address>


                                    <!--User Image-->
                                    <div class="user-pic">
                                        <img src="http://localhost/StockBAE/public/images/userimage/team4.jpg" alt="image">
                                    </div>
                                </div>

                                <!--User Details Finish-->

                            </div>


                        </div>
                        <!--User Details Finish-->
                    </div>
                </div>


                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="ls-header">Summary</h3>

                        <p>
                                                    <span class="about-me-text">
                                                    </span>
                        </p>

                        <p>Specialties:<br>Independent financial advice in areas such as pension transfers <br>
                            (QROPS, SIPPS, QNUPS), inheritance tax planning, asset protection, tax free <br>
                            regular savings, lump sum investments, life assurance, critical illness protection.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div id="user-locator" class="user-map-locator"></div>
                    </div>
                </div>

                <hr>

                <!-- Main Content Element  End-->

            </div>
        </div>


    </section>


    <!--Page main section end -->
    <!--Right hidden  section start-->
    <section id="right-wrapper">
        <!--Right hidden  section close icon start-->
        <div class="close-right-wrapper">
            <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
        </div>
        <!--Right hidden  section close icon end-->

        <!--Tab navigation start-->
        <ul class="nav nav-tabs" id="setting-tab">
            <li class="active"><a href="#chatTab" data-toggle="tab"><i class="fa fa-comment-o"></i> Chat</a></li>
            <li><a href="#settingTab" data-toggle="tab"><i class="fa fa-cogs"></i> Setting</a></li>
        </ul>
        <!--Tab navigation end -->


    </section>
    <!--Right hidden  section end -->
</section>

<!--Layout Script start -->
<script type="text/javascript" src="http://localhost/StockBAE/public/js/color.js"></script>
<script type="text/javascript" src="http://localhost/StockBAE/public/js/lib/jquery-1.11.min.js"></script>
<script type="text/javascript" src="http://localhost/StockBAE/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/StockBAE/public/js/multipleAccordion.js"></script>

<!--easing Library Script Start -->
<script src="http://localhost/StockBAE/public/js/lib/jquery.easing.js"></script>
<!--easing Library Script End -->

<!--Nano Scroll Script Start -->
<script src="http://localhost/StockBAE/public/js/jquery.nanoscroller.min.js"></script>
<!--Nano Scroll Script End -->

<!--switchery Script Start -->
<script src="http://localhost/StockBAE/public/js/switchery.min.js"></script>
<!--switchery Script End -->

<!--bootstrap switch Button Script Start-->
<script src="http://localhost/StockBAE/public/js/bootstrap-switch.js"></script>
<!--bootstrap switch Button Script End-->

<!--easypie Library Script Start -->
<script src="http://localhost/StockBAE/public/js/jquery.easypiechart.min.js"></script>
<!--easypie Library Script Start -->

<!--bootstrap-progressbar Library script Start-->
<script src="http://localhost/StockBAE/public/js/bootstrap-progressbar.min.js"></script>
<!--bootstrap-progressbar Library script End-->

<!--FLoat library Script Start -->
<script type="text/javascript" src="http://localhost/StockBAE/public/js/chart/flot/jquery.flot.js"></script>
<script type="text/javascript" src="http://localhost/StockBAE/public/js/chart/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="http://localhost/StockBAE/public/js/chart/flot/jquery.flot.resize.js"></script>
<!--FLoat library Script End -->

<script type="text/javascript" src="http://localhost/StockBAE/public/js/pages/layout.js"></script>
<!--Layout Script End -->


<script src="http://localhost/StockBAE/public/js/countUp.min.js"></script>

<!-- skycons script start -->
<script src="http://localhost/StockBAE/public/js/skycons.js"></script>
<!-- skycons script end   -->

<!--Vector map library start-->
<script src="http://localhost/StockBAE/public/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://localhost/StockBAE/public/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!--Vector map library end-->

<!--AmaranJS library script Start -->
<script src="http://localhost/StockBAE/public/js/jquery.amaran.js"></script>
<!--AmaranJS library script End   -->
<script src="http://localhost/StockBAE/public/js/pages/dashboard.js"></script>
</body>

</html>