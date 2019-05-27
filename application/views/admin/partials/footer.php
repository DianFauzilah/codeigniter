<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
          <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
              <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                  <span class="avatar mr-3">
                    <img src="<?php echo base_url('assets/images/demi.png')?>" alt="avatar"
                      class="avatar-img rounded-circle">
                  </span>
                  <span class="flex d-flex flex-column">
                    <strong>Adrian Demian</strong>
                    <small class="text-muted text-uppercase">Account Manager</small>
                  </span>
                </a>
                <div class="dropdown ml-auto">
                  <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i
                      class="material-icons">more_vert</i></a>
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
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/index')?>">
                        <span class="sidebar-menu-text">Default</span>
                      </a>
                    </li>
                    <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/staff')?>">
                        <span class="sidebar-menu-text">CRM/Staff</span>
                      </a>
                    </li>
                    <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/analytics')?>">
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
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/trello')?>">
                        <span class="sidebar-menu-text">Trello</span>
                      </a>
                    </li>
                    <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/project')?>">
                        <span class="sidebar-menu-text">Projects</span>
                      </a>
                    </li>
                    <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/calendar')?>">
                        <span class="sidebar-menu-text">Event Calendar</span>
                      </a>
                    </li>
                    <li class="sidebar-menu-item">
                      <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/chat')?>">
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
                          <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/course')?>">
                            <span class="sidebar-menu-text">Course</span>
                          </a>
                        </li>
                        <li class="sidebar-menu-item ">
                          <a class="sidebar-menu-button" href="<?php echo base_url('index.php/welcome/lesson')?>">
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
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <div class="sidebar-p-a">
                <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                  class="btn btn-outline-primary btn-block">Purchase Stack &dollar;49</a>
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
  <!-- <div id="app-settings">
    <app layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app>
  </div> -->

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
        document.querySelector('body').classList[e.target.mdkDrawer.opened ? 'add' : 'remove'](
          'has-drawer-opened')
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
          backgroundColor: [settings.colors.success[400], settings.colors.danger[400], settings.colors
            .primary[500], settings.colors.gray[300]
          ],
          hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings
            .colors.white
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
  <script src="<?php echo base_url('assets/vendor/jqvmap/maps/jquery.vmap.world.js')?>"></script>
  <script src="<?php echo base_url('assets/js/vector-maps.js')?>"></script>

</body>

</html>