
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link href="<?php echo base_url('assets/vendor/simplebar.min.css" rel="stylesheet')?>">

    <!-- App CSS -->
    <link href="<?php echo base_url('css/app.css" rel="stylesheet')?>">
    <link href="<?php echo base_url('css/app.rtl.css" rel="stylesheet')?>">

    <!-- Material Design Icons -->
    <link href="<?php echo base_url('css/material-icons.css" rel="stylesheet')?>">
    <link href="<?php echo base_url('css/material-icons.rtl.css" rel="stylesheet')?>">

    <!-- Font Awesome FREE Icons -->
    <link href="<?php echo base_url('css/fontawesome.css" rel="stylesheet')?>">
    <link href="<?php echo base_url('css/fontawesome.rtl.css" rel="stylesheet')?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133433427-1');
</script>


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '327167911228268');
  fbq('track', 'PageView');
</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=327167911228268&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Flatpickr -->
    <link href="<?php echo base_url('demo/css/flatpickr.css" rel="stylesheet')?>">
    <link href="<?php echo base_url('demo/css/flatpickr.rtl.css" rel="stylesheet')?>">
    <link href="<?php echo base_url('demo/css/flatpickr-airbnb.css" rel="stylesheet')?>">
    <link href="<?php echo base_url('demo/css/flatpickr-airbnb.rtl.css" rel="stylesheet')?>">

    <!-- Vector Maps -->
    <link href="<?php echo base_url('assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet')?>">



</head>

<body class="layout-default">













    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand ">
                            <img class="navbar-brand-icon" src="assets/images/stack-logo-white.svg" width="22" alt="Stack">
                            <span>Stack</span>
                        </a>




                        <form class="search-form d-none d-sm-flex flex" action="index.html">
                            <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                            <input type="text" class="form-control" placeholder="Search">
                        </form>


                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="material-icons">help_outline</i> Get Help
                                </a>
                            </li>
                            <li class="nav-item mr-3">
                                <a href="pricing.html" class="btn btn-outline-warning">
                                    <i class="material-icons">star</i> PRO
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                    </div>
                                    <div class="navbar-notifications-menu__content" data-simplebar>
                                        <div class="py-2">

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                    <div>Hey, how are you? What about our next meeting</div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <img src="assets/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                    <span class="ml-1 d-flex-inline">
                                        <span class="text-light">Adrian D.</span>
                                    </span>
                                </a>
                                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-item-text dropdown-item-text--lh">
                                        <div><strong>Adrian Demian</strong></div>
                                        <div>@adriandemian</div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item active" href="index.html">Dashboard</a>
                                    <a class="dropdown-item" href="profile.html">My profile</a>
                                    <a class="dropdown-item" href="edit-account.html">Edit account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.html">Logout</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">





                    <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex align-items-center">
                            <div class="flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">Dashboard</h1>
                            </div>
                            <a href="" class="btn btn-success ml-3">New Report</a>
                        </div>
                    </div>




                    <div class="container-fluid page__container">

                        <div class="alert alert-soft-warning d-flex align-items-center card-margin" role="alert">
                            <i class="material-icons mr-3">error_outline</i>
                            <div class="text-body"><strong>API gateways are now Offline.</strong> Please try the API later. If you want to stay up to date follow our <a href="">Status Page </a></div>
                        </div>

                        <div class="row card-group-row">
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Current Target</div>
                                        <div class="text-amount">&dollar;12,920</div>
                                        <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div>
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Earnings</div>
                                        <div class="text-amount">&dollar;3,642</div>
                                        <div class="text-stats text-success">51.5% <i class="material-icons">arrow_upward</i></div>
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">monetization_on</i></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Website Traffic</div>
                                        <div class="text-amount">8,391</div>
                                        <div class="text-stats text-danger">3.5% <i class="material-icons">arrow_downward</i></div>
                                    </div>
                                    <div><i class="material-icons icon-muted icon-40pt ml-3">perm_identity</i></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <div class="card dashboard-area-tabs" id="dashboard-area-tabs">
                                    <div class="card-header p-0 bg-white nav">
                                        <div class="row no-gutters flex" role="tablist">
                                            <div class="col" data-toggle="chart" data-target="#earningsTrafficChart" data-update='{"data":{"datasets":[{"label": "Traffic", "data":[10,2,5,15,10,12,15,25,22,30,25,40]}]}}' data-prefix="" data-suffix="k">
                                                <a href="#" data-toggle="tab" role="tab" aria-selected="true" class="dashboard-area-tabs__tab card-body text-center active">
                                                    <span class="card-header__title m-0">Sessions</span>
                                                    <span class="text-amount">18,391</span>
                                                </a>
                                            </div>
                                            <div class="col border-left" data-toggle="chart" data-target="#earningsTrafficChart" data-update='{"data":{"datasets":[{"label": "Earnings", "data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}' data-prefix="$" data-suffix="k">
                                                <a href="#" data-toggle="tab" role="tab" aria-selected="false" class="dashboard-area-tabs__tab card-body text-center">
                                                    <span class="card-header__title m-0">Orders</span>
                                                    <span class="text-amount">&dollar;8,942</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-muted" style="height: 280px;">
                                        <div class="chart" style="height: calc(280px - 1.25rem * 2);">
                                            <canvas id="earningsTrafficChart">
                                                <span style="font-size: 1rem;"><strong>Website Traffic / Earnings</strong> area chart goes here.</span>
                                            </canvas>
                                        </div>
                                    </div>
                                </div>



                                <div class="card-group">
                                    <div class="card card-body text-center">
                                        <div class="mb-1"><i class="material-icons icon-muted icon-40pt">assessment</i></div>
                                        <div class="text-amount">3,642 </div>
                                        <div class="card-header__title mb-2">Visits</div>
                                    </div>
                                    <div class="card card-body text-center">
                                        <div class="mb-1"><i class="material-icons icon-muted icon-40pt">shopping_basket</i></div>
                                        <div class="text-amount">&dollar;12,311</div>
                                        <div class="card-header__title  mb-2">Purchases</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white">
                                        <h4 class="card-header__title">Revenue by location</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="vector-map-revenue" class="map mb-3" data-toggle="vector-map" data-vector-map-map="world_en" data-vector-map-show-tooltip="false" data-vector-map-enable-zoom="true" data-vector-map-scale="1.1" data-vector-map-pins='{
              "it": "<div class=\"map-pin blue\"><span>Vatican City</span></div>",
              "us": "<div class=\"map-pin blue\"><span>New York</span></div>",
              "au": "<div class=\"map-pin blue\"><span>Sydney</span></div>"
            }'>
                                        </div>

                                        <ul class="list-unstyled dashboard-location-tabs nav flex-column m-0" role="tablist">
                                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="us" data-animate="true">
                                                <div class="dashboard-location-tabs__tab active" data-toggle="tab" role="tab" aria-selected="true">
                                                    <div><strong>New York</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>72k</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="it" data-animate="true">
                                                <div class="dashboard-location-tabs__tab" data-toggle="tab" role="tab" aria-selected="true">
                                                    <div><strong>Vatican City</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>39k</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-toggle="vector-map-focus" data-target="#vector-map-revenue" data-focus="au" data-animate="true">
                                                <div class="dashboard-location-tabs__tab" data-toggle="tab" role="tab" aria-selected="true">
                                                    <div><strong>Sydney</strong></div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex mr-2">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div>25k</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Recent Activity</h4>
                                        <div data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                                            <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 <span class="text-muted mx-1">to</span> 20/03/2018</a>
                                            <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                                        </div>
                                    </div>
                                    <div class="card-header card-header-tabs-basic nav" role="tablist">
                                        <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">All</a>
                                        <a href="#activity_purchases" data-toggle="tab" role="tab" aria-controls="activity_purchases" aria-selected="false">Purchases</a>
                                        <a href="#activity_emails" data-toggle="tab" role="tab" aria-controls="activity_emails" aria-selected="false">Emails</a>
                                        <a href="#activity_quotes" data-toggle="tab" role="tab" aria-controls="activity_quotes" aria-selected="false">Quotes</a>
                                    </div>
                                    <div class="list-group tab-content list-group-flush">
                                        <div class="tab-pane active show fade" id="activity_all">


                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>
                                                    </div>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div>$573</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>
                                                    </div>
                                                    <small>Improve spacings on Projects page</small>
                                                </div>
                                                <small class="text-muted">3 days ago</small>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>
                                                    </div>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div>$244</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>
                                                    </div>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div>$664</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">description</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>
                                                    </div>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                                <div>$631</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="card-footer text-center border-0">
                                                <a class="text-muted" href="">View All (54)</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="activity_purchases">

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                    </div>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div>$573</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                    </div>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div>$612</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                    </div>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div>$244</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                    </div>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div>$664</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1"></strong>

                                                    </div>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                                <div>$631</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="activity_emails">

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>

                                                    </div>
                                                    <small>Confirmation required for design</small>
                                                </div>
                                                <small class="text-muted">4 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                    </div>
                                                    <small>Improve spacings on Projects page</small>
                                                </div>
                                                <small class="text-muted">3 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                    </div>
                                                    <small>You unlocked a new Badge</small>
                                                </div>
                                                <small class="text-muted">2 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                    </div>
                                                    <small>Meeting on Friday</small>
                                                </div>
                                                <small class="text-muted">1 day ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                    </div>
                                                    <small>Design a new Brochure</small>
                                                </div>
                                                <small class="text-muted">just now</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="activity_quotes"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="row card-group-row">
                                    <div class="col-lg-6 card-group-row__col">
                                        <div class="card card-group-row__card card-body card-body-x-lg" style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                            <div class="card-header__title text-muted mb-2">Products</div>
                                            <div class="text-amount">&dollar;8,391</div>
                                            <div class="text-stats text-success">31.5% <i class="material-icons">arrow_upward</i></div>
                                            <div class="chart" style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                                <canvas id="productsChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 card-group-row__col">
                                        <div class="card card-group-row__card card-body card-body-x-lg" style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                            <div class="card-header__title text-muted mb-2">Courses</div>
                                            <div class="text-amount">15,021</div>
                                            <div class="text-stats text-danger">31.5% <i class="material-icons">arrow_downward</i></div>
                                            <div class="chart" style="height: 80px; position: absolute; left: 0; right: 0; bottom: 0;">
                                                <canvas id="coursesChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Stats by Location</h4>
                                        <i class="material-icons icon-muted ml-3">expand_more</i>
                                    </div>
                                    <div class="card-header card-header-tabs-basic nav justify-content-center" role="tablist">
                                        <div data-toggle="chart" data-target="#locationDoughnutChart" data-update='{"data":{
              "labels": ["United States", "United Kingdom", "Germany", "India"], 
              "datasets": [{"label": "Traffic", "data":[25,25,15,35]}]
            }}'>
                                            <a href="#" class="active" data-toggle="tab" role="tab" aria-selected="true">
                                                Traffic
                                            </a>
                                        </div>
                                        <div data-toggle="chart" data-target="#locationDoughnutChart" data-update='{"data":{
              "labels": ["United States", "United Kingdom", "Germany", "India"], 
              "datasets": [{"label": "Purchases", "data":[15,17,25,43]}]
            }}'>
                                            <a href="#" data-toggle="tab" role="tab" aria-selected="false">
                                                Purchases
                                            </a>
                                        </div>
                                        <div data-toggle="chart" data-target="#locationDoughnutChart" data-update='{"data":{
              "labels": ["United States", "United Kingdom", "Germany", "India"], 
              "datasets": [{"label": "Quotes", "data":[53,17,25,5]}]
            }}'>
                                            <a href="#" data-toggle="tab" role="tab" aria-selected="false">
                                                Quotes
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center" style="height: 210px;">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="chart" style="height: calc(210px - 1.25rem * 2);">
                                                    <canvas id="locationDoughnutChart" data-chart-legend="#locationDoughnutChartLegend">
                                                        <span style="font-size: 1rem;" class="text-muted"><strong>Location</strong> doughnut chart goes here.</span>
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div id="locationDoughnutChartLegend" class="chart-legend chart-legend--vertical"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">TODO List</h4>
                                        <div><a href="#" data-target="#todo" class="js-toggle-check-all">Mark All as Completed</a></div>
                                    </div>
                                    <div class="card-body bg-light">
                                        <ul class="list-unstyled list-todo" id="todo">
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Wireframe the CRM application pages</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Design a new page in Sketch</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Quote the custom work</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4">Interview John for Full-Stack Developer</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5">Research the success of CRM</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        15 <span class="text-muted">of 100</span> <a href="#"><i class="material-icons icon-muted float-right">arrow_forward</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white">
                                        <h4 class="card-header__title">Team Skills</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled list-skills">
                                            <li>
                                                <div>HTML</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>61%</strong></div>
                                            </li>
                                            <li>
                                                <div>CSS/SCSS</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>39%</strong></div>
                                            </li>
                                            <li>
                                                <div>JAVASCRIPT</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-dark-gray" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>76%</strong></div>
                                            </li>
                                            <li>
                                                <div>RUBY ON RAILS</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>28%</strong></div>
                                            </li>
                                            <li>
                                                <div>VUEJS</div>
                                                <div class="flex">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="text-dark-gray"><strong>50%</strong></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center border-0">
                                        <a href="#">
                                            <span class="text-muted">View All</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header card-header-large bg-white">
                                <h4 class="card-header__title">Current Users</h4>
                            </div>
                            <div class="card-header">
                                <form class="form-inline">
                                    <label class="mr-sm-2" for="inlineFormFilterBy">Filter by:</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormFilterBy" placeholder="Type a name">

                                    <label class="sr-only" for="inlineFormRole">Role</label>
                                    <select id="inlineFormRole" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                                        <option value="All Roles">All Roles</option>
                                    </select>

                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" id="inlineFormPurchase">
                                        <label class="custom-control-label" for="inlineFormPurchase">Made a Purchase?</label>
                                    </div>
                                </form>
                            </div>


                            <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                <table class="table mb-0 thead-border-top-0">
                                    <thead>
                                        <tr>

                                            <th style="width: 18px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                                    <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                </div>
                                            </th>

                                            <th>Employee</th>
                                            <th style="width: 150px;">Current Employer</th>
                                            <th style="width: 48px;">Projects</th>
                                            <th style="width: 37px;">Status</th>
                                            <th style="width: 120px;">Last Activity</th>
                                            <th style="width: 51px;">Earnings</th>
                                            <th style="width: 24px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="staff">

                                        <tr class="selected">

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                                    <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                    <div class="media-body">

                                                        <span class="js-lists-values-employee-name">Michael Smith</span>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="">Black Ops</a>
                                                    <a href="#" class="rating-link"><i class="material-icons ml-2">star</i></a>
                                                </div>
                                            </td>

                                            <td>12</td>
                                            <td><span class="badge badge-warning">ADMIN</span></td>
                                            <td><small class="text-muted">3 days ago</small></td>
                                            <td>&dollar;12,402</td>
                                            <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck2_1">
                                                    <label class="custom-control-label" for="customCheck2_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media align-items-center">
                                                    <img src="assets/images/green.svg" class="mr-2" alt="avatar" />
                                                    <div class="media-body">

                                                        <span class="js-lists-values-employee-name">Connie Smith</span>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="#">Backend Ltd</a>
                                                    <a href="#" class="rating-link active"><i class="material-icons ml-2">star</i></a>
                                                </div>
                                            </td>

                                            <td>42</td>
                                            <td><span class="badge badge-success">USER</span></td>
                                            <td><small class="text-muted">1 week ago</small></td>
                                            <td>&dollar;1,943</td>
                                            <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck3_1">
                                                    <label class="custom-control-label" for="customCheck3_1"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media align-items-center">

                                                    <div class="avatar avatar-xs mr-2">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                    <div class="media-body">

                                                        <span class="js-lists-values-employee-name">John Connor</span>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="">Frontted</a>
                                                    <a href="#" class="rating-link" onclick="document.getElementById('box').classList.toggle('grow');"><i class="material-icons ml-2">star</i></a>
                                                </div>
                                            </td>

                                            <td>42</td>
                                            <td><span class="badge badge-primary">MANAGER</span></td>
                                            <td><small class="text-muted">1 week ago</small></td>
                                            <td>&dollar;1,943</td>
                                            <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                        </tr>

                                        <tr class="selected">

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_2">
                                                    <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media align-items-center">
                                                    <div class="avatar avatar-xs mr-2">
                                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                    <div class="media-body">

                                                        <span class="js-lists-values-employee-name">Michael Smith</span>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="">Black Ops</a>
                                                    <a href="#" class="rating-link"><i class="material-icons ml-2">star</i></a>
                                                </div>
                                            </td>

                                            <td>12</td>
                                            <td><span class="badge badge-warning">ADMIN</span></td>
                                            <td><small class="text-muted">3 days ago</small></td>
                                            <td>&dollar;12,402</td>
                                            <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck2_2">
                                                    <label class="custom-control-label" for="customCheck2_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media align-items-center">
                                                    <img src="assets/images/green.svg" class="mr-2" alt="avatar" />
                                                    <div class="media-body">

                                                        <span class="js-lists-values-employee-name">Connie Smith</span>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="#">Backend Ltd</a>
                                                    <a href="#" class="rating-link active"><i class="material-icons ml-2">star</i></a>
                                                </div>
                                            </td>

                                            <td>42</td>
                                            <td><span class="badge badge-success">USER</span></td>
                                            <td><small class="text-muted">1 week ago</small></td>
                                            <td>&dollar;1,943</td>
                                            <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck3_2">
                                                    <label class="custom-control-label" for="customCheck3_2"><span class="text-hide">Check</span></label>
                                                </div>
                                            </td>

                                            <td>

                                                <div class="media align-items-center">

                                                    <div class="avatar avatar-xs mr-2">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                    </div>
                                                    <div class="media-body">

                                                        <span class="js-lists-values-employee-name">John Connor</span>

                                                    </div>
                                                </div>

                                            </td>

                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="">Frontted</a>
                                                    <a href="#" class="rating-link" onclick="document.getElementById('box').classList.toggle('grow');"><i class="material-icons ml-2">star</i></a>
                                                </div>
                                            </td>

                                            <td>42</td>
                                            <td><span class="badge badge-primary">MANAGER</span></td>
                                            <td><small class="text-muted">1 week ago</small></td>
                                            <td>&dollar;1,943</td>
                                            <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="card-body text-right">
                                15 <span class="text-muted">of 1,430</span> <a href="#" class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a>
                            </div>


                        </div>
                    </div>



                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                                <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                                    <span class="avatar mr-3">
                                        <img src="assets/images/demi.png" alt="avatar" class="avatar-img rounded-circle">
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        <strong>Adrian Demian</strong>
                                        <small class="text-muted text-uppercase">Account Manager</small>
                                    </span>
                                </a>
                                <div class="dropdown ml-auto">
                                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Adrian Demian</strong></div>
                                            <div>@adriandemian</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item active" href="index.html">Dashboard</a>
                                        <a class="dropdown-item" href="profile.html">My profile</a>
                                        <a class="dropdown-item" href="edit-account.html">Edit account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-heading sidebar-m-t">Menu</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item active open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboards</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="dashboards_menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="index.html">
                                                <span class="sidebar-menu-text">Default</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="staff.html">
                                                <span class="sidebar-menu-text">CRM/Staff</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="analytics.html">
                                                <span class="sidebar-menu-text">E-commerce</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Apps</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="apps_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-trello.html">
                                                <span class="sidebar-menu-text">Trello</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-projects.html">
                                                <span class="sidebar-menu-text">Projects</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-fullcalendar.html">
                                                <span class="sidebar-menu-text">Event Calendar</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="app-chat.html">
                                                <span class="sidebar-menu-text">Chat</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item ">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#course_menu">
                                                <span class="sidebar-menu-text">Education</span>
                                                <span class="ml-auto d-flex align-items-center">
                                                    <span class="badge badge-primary">NEW</span>
                                                    <span class="sidebar-menu-toggle-icon"></span>
                                                </span>
                                            </a>
                                            <ul class="sidebar-submenu collapse " id="course_menu">
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-course.html">
                                                        <span class="sidebar-menu-text">Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item ">
                                                    <a class="sidebar-menu-button" href="app-lesson.html">
                                                        <span class="sidebar-menu-text">Lesson</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Pages</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="pages_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="stories.html">
                                                <span class="sidebar-menu-text">Stories</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="invoice.html">
                                                <span class="sidebar-menu-text">Invoice</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="pricing.html">
                                                <span class="sidebar-menu-text">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="edit-account.html">
                                                <span class="sidebar-menu-text">Edit Account</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="profile.html">
                                                <span class="sidebar-menu-text">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="digital-product.html">
                                                <span class="sidebar-menu-text">Digital Product</span>
                                                <span class="badge badge-primary ml-auto">NEW</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#login_menu">
                                                <span class="sidebar-menu-text">Login</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse" id="login_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="login.html">
                                                        <span class="sidebar-menu-text">Login / Background Image</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="login-centered-boxed.html">
                                                        <span class="sidebar-menu-text">Login / Centered Boxed</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#signup_menu">
                                                <span class="sidebar-menu-text">Sign Up</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse" id="signup_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="signup.html">
                                                        <span class="sidebar-menu-text">Sign Up / Background Image</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button" href="signup-centered-boxed.html">
                                                        <span class="sidebar-menu-text">Sign Up / Centered Boxed</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Layouts</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="layouts_menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="index.html">
                                                <span class="sidebar-menu-text">Default</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fluid-dashboard.html">
                                                <span class="sidebar-menu-text">Full Width Navs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fixed-dashboard.html">
                                                <span class="sidebar-menu-text">Fixed Navs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="mini-dashboard.html">
                                                <span class="sidebar-menu-text">Mini Sidebar + Navs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="sidebar-heading">UI Components</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu" id="components_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-buttons.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                            <span class="sidebar-menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-alerts.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                            <span class="sidebar-menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-avatars.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                            <span class="sidebar-menu-text">Avatars</span>
                                            <span class="badge badge-primary ml-auto">NEW</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-modals.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                            <span class="sidebar-menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-charts.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                            <span class="sidebar-menu-text">Charts</span>
                                            <span class="badge badge-warning ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-icons.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                            <span class="sidebar-menu-text">Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-forms.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                            <span class="sidebar-menu-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-range-sliders.html">
                                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            <span class="sidebar-menu-text">Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-datetime.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                            <span class="sidebar-menu-text">Time &amp; Date</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-tables.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                            <span class="sidebar-menu-text">Tables</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-loaders.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                            <span class="sidebar-menu-text">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-drag.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                            <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-pagination.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                            <span class="sidebar-menu-text">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-vector-maps.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                            <span class="sidebar-menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sidebar-p-a sidebar-b-y">
                                    <div class="d-flex align-items-top mb-2">
                                        <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                                        <div class="font-weight-bold text-success">60%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-p-a">
                                <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011" class="btn btn-outline-primary btn-block">Purchase Stack &dollar;49</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery.min.js')?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendor/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap.min.js')?>"></script>

    <!-- Simplebar -->
    <script src="<?php echo base_url ('assets/vendor/simplebar.min.js')?>"></script>

    <!-- DOM Factory -->
    <script src="<?php echo base_url('assets/vendor/dom-factory.js')?>"></script>

    <!-- MDK -->
    <script src="<?php echo base_url('assets/vendor/material-design-kit.js')?>"></script>

    <!-- App -->
    <script src="<?php echo base_url('assets/js/toggle-check-all.js')?>"></script>
    <script src="<?php echo base_url('assets/js/check-selected-row.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dropdown.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar-mini.js')?>"></script>

    <script>
        (function() {
            'use strict';
            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()

            // Connect button(s) to drawer(s)
            var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')
            sidebarToggle = Array.prototype.slice.call(sidebarToggle)

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        drawer.mdkDrawer.toggle()
                    }
                })
            })

            let drawers = document.querySelectorAll('.mdk-drawer')
            drawers = Array.prototype.slice.call(drawers)
            drawers.forEach((drawer) => {
                drawer.addEventListener('mdk-drawer-change', (e) => {
                    if (!e.target.mdkDrawer) {
                        return
                    }
                    document.querySelector('body').classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('has-drawer-opened')
                    let button = document.querySelector('[data-target="#' + e.target.id + '"]')
                    if (button) {
                        button.classList[e.target.mdkDrawer.opened ? 'add' : 'remove']('active')
                    }
                })
            })

            // SIDEBAR COLLAPSE MENUS
            $('.sidebar .collapse').on('show.bs.collapse', function(e) {
                e.stopPropagation()
                var parent = $(this).parents('.sidebar-submenu').get(0) || $(this).parents('.sidebar-menu').get(0)
                $(parent).find('.open').find('.collapse').collapse('hide');
                $(this).closest('li').addClass('open');
            });
            $('.sidebar .collapse').on('hidden.bs.collapse', function(e) {
                e.stopPropagation()
                $(this).closest('li').removeClass('open');
            });

            // ENABLE TOOLTIPS
            $('[data-toggle="tooltip"]').tooltip()

            // PRELOADER
            window.addEventListener('load', function() {
                $('.preloader').fadeOut()
                domFactory.handler.upgradeAll()
            })

        })()
    </script>

    <!-- App Settings (safe to remove) -->
    <script src="<?php echo base_url('assets/js/app-settings.js')?>"></script>



    <script>
        (function() {
            'use strict';

            $('[data-toggle="tab"]').on('hide.bs.tab', function(e) {
                $(e.target).removeClass('active')
            })

        })()
    </script>

    <!-- Flatpickr -->
    <script src="<?php echo base_url('assets/vendor/flatpickr/flatpickr.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/flatpickr.js')?>"></script>

    <!-- Global Settings -->
    <script src="<?php echo base_url('assets/js/settings.js')?>"></script>

    <!-- Chart.js -->
    <script src="<?php echo base_url('assets/vendor/Chart.min.js')?>"></script>

    <!-- App Charts JS -->
    <script src="<?php echo base_url('assets/js/charts.js')?>"></script>

    <!-- Chart Samples -->
    <script>
        (function() {
            'use strict';

            Charts.init()

            var EarningsTraffic = function(id, type = 'line', options = {}) {
                options = Chart.helpers.merge({
                    elements: {
                        line: {
                            fill: 'start',
                            backgroundColor: settings.charts.colors.area
                        }
                    }
                }, options)

                var data = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Traffic",
                        data: [10, 2, 5, 15, 10, 12, 15, 25, 22, 30, 25, 40]
                    }]
                }

                Charts.create(id, type, options, data)
            }

            var Products = function(id, type = 'line', options = {}, data) {
                options = Chart.helpers.merge({
                    elements: {
                        line: {
                            fill: 'start',
                            backgroundColor: settings.charts.colors.area,
                            tension: 0,
                            borderWidth: 1
                        },
                        point: {
                            pointStyle: 'circle',
                            radius: 5,
                            hoverRadius: 5,
                            backgroundColor: settings.colors.white,
                            borderColor: settings.colors.primary[700],
                            borderWidth: 2
                        }
                    },
                    scales: {
                        yAxes: [{
                            display: false
                        }],
                        xAxes: [{
                            display: false
                        }]
                    }
                }, options)

                data = data || {
                    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    datasets: [{
                        label: "Earnings",
                        data: [400, 200, 450, 460, 220, 380, 800]
                    }]
                }

                Charts.create(id, type, options, data)
            }

            var Courses = function(id, type = 'line', options = {}) {
                options = Chart.helpers.merge({
                    elements: {
                        line: {
                            borderColor: settings.colors.success[700],
                            backgroundColor: settings.hexToRGB(settings.colors.success[100], 0.5)
                        },
                        point: {
                            borderColor: settings.colors.success[700]
                        }
                    }
                }, options)

                Products(id, type, options)
            }

            var LocationDoughnut = function(id, type = 'doughnut', options = {}) {
                options = Chart.helpers.merge({
                    tooltips: {
                        callbacks: {
                            title: function(a, e) {
                                return e.labels[a[0].index]
                            },
                            label: function(a, e) {
                                var t = "";
                                return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "%</span>"
                            }
                        }
                    }
                }, options)

                var data = {
                    labels: ["United States", "United Kingdom", "Germany", "India"],
                    datasets: [{
                        data: [25, 25, 15, 35],
                        backgroundColor: [settings.colors.success[400], settings.colors.danger[400], settings.colors.primary[500], settings.colors.gray[300]],
                        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
                    }]
                }

                Charts.create(id, type, options, data)
            }

            ///////////////////
            // Create Charts //
            ///////////////////

            EarningsTraffic('#earningsTrafficChart')
            LocationDoughnut('#locationDoughnutChart')
            Products('#productsChart')
            Courses('#coursesChart')

        })()
    </script>

    <!-- Vector Maps -->
    <script src="<?php echo base_url('assets/vendor/jqvmap/jquery.vmap.min.js')?>"></script>
    <script src="<?php echo base_urlassets/vendor/jqvmap/maps/jquery.vmap.world.js')?>"></script>
    <script src="<?php echo base_urlassets/js/vector-maps.js')?>"></script>

</body>

</html>