
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="<?php echo base_url('assets/vendor/simplebar.min.css')?>" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="<?php echo base_url('assets/css/app.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/css/app.rtl.css')?>" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="<?php echo base_url('assets/css/vendor-material-icons.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/css/vendor-material-icons.rtl.css')?>" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="<?php echo base_url('assets/css/vendor-fontawesome-free.css')?>" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url('assets/css/vendor-fontawesome-free.rtl.css')?>" rel="stylesheet">

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


</head>

<body class="layout-login">


    <div class="layout-login__overlay"></div>
    <div class="layout-login__form bg-white" data-simplebar>
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand" style="min-width: 0">
                <img class="navbar-brand-icon" src="<?php echo base_url('assets/images/stack-logo-blue.svg')?>" width="25" alt="Stack">
                <span>Stack</span>
            </a>
        </div>

        <h4 class="m-0">Welcome back!</h4>
        <p class="mb-5">Login to access your Stack Account </p>

        <form action="index.html" novalidate>
            <div class="form-group">
                <label class="text-label" for="email_2">Email Address:</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label" for="password_2">Password:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked="" id="remember">
                    <label class="custom-control-label" for="remember">Remember me</label>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary mb-5" type="submit">Login</button><br>
                <a href="">Forgot password?</a> <br>
                Don't have an account? <a class="text-body text-underline" href="signup.html">Sign up!</a>
            </div>
        </form>
    </div>


    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendor/jquery.min.js')?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendor/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap.min.js')?>"></script>

    <!-- Simplebar -->
    <script src="<?php echo base_url('assets/vendor/simplebar.min.js')?>"></script>

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





</body>

</html>