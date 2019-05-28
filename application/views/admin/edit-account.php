

                    <div class="container-fluid  page__heading-container">
                        <div class="page__heading">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">Edit Account</h1>
                        </div>
                    </div>




                    <div class="container-fluid page__container">
                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Basic Information</strong></p>
                                    <p class="text-muted">Edit your account details and settings.</p>
                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="fname">First name</label>
                                                <input id="fname" type="text" class="form-control" placeholder="First name" value="Adrian">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="lname">Last name</label>
                                                <input id="lname" type="text" class="form-control" placeholder="Last name" value="Demian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Bio / Description</label>
                                        <textarea id="desc" rows="4" class="form-control" placeholder="Bio / description ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label><br>
                                        <select id="country" class="custom-select" style="width: auto;">
                                            <option value="usa">United States</option>
                                        </select>
                                        <small class="form-text text-muted">The country is not visible to other users.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="subscribe">Subscribe to newsletter</label><br>
                                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                            <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                            <label class="custom-control-label" for="subscribe">Yes</label>
                                        </div>
                                        <label for="subscribe" class="mb-0">Yes</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Update Your Password</strong></p>
                                    <p class="text-muted">Change your password.</p>
                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="form-group">
                                        <label for="opass">Old Password</label>
                                        <input style="width: 270px;" id="opass" type="password" class="form-control" placeholder="Old password" value="****">
                                    </div>
                                    <div class="form-group">
                                        <label for="npass">New Password</label>
                                        <input style="width: 270px;" id="npass" type="password" class="form-control is-invalid">
                                        <small class="invalid-feedback">The new password must not be empty.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpass">Confirm Password</label>
                                        <input style="width: 270px;" id="cpass" type="password" class="form-control" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body">
                                    <p><strong class="headings-color">Profile Settings</strong></p>
                                    <p class="text-muted">Update your public profile with relevant and meaningful information.</p>
                                </div>
                                <div class="col-lg-8 card-form__body card-body">
                                    <div class="form-group">
                                        <label>Avatar</label>
                                        <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["<?php echo base_url('assets/images/account-add-photo.svg')?>"]'>
                                            <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                                <div class="avatar" style="width: 80px; height: 80px;">
                                                    <img src="<?php echo base_url('assets/images/account-add-photo.svg')?>" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Description</label>
                                        <textarea id="desc2" rows="4" class="form-control" placeholder="Description ..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="social1">Social links</label>
                                        <div class="input-group input-group-merge mb-2" style="width: 270px;">
                                            <input id="social1" type="text" class="form-control form-control-prepended" placeholder="Facebook">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <span class="fab fa-facebook"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge mb-2" style="width: 270px;">
                                            <input id="social2" type="text" class="form-control form-control-prepended" placeholder="Twitter">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <span class="fab fa-twitter"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge mb-2" style="width: 270px;">
                                            <input id="social3" type="text" class="form-control form-control-prepended" placeholder="Instagram">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <span class="fab fa-instagram"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="customCheck1">Available for freelance?</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                            <label class="custom-control-label" for="customCheck1">Yes, show me as available for freelance!</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mb-5">
                            <a href="" class="btn btn-success">Save</a>
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
                                        <img src="<?php echo base_url('assets/images/avatar/demi.png')?>" alt="avatar" class="avatar-img rounded-circle">
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
                                        <a class="dropdown-item" href="index.html">Dashboard</a>
                                        <a class="dropdown-item" href="profile.html">My profile</a>
                                        <a class="dropdown-item active" href="edit-account.html">Edit account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="login.html">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-heading sidebar-m-t">Menu</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboards</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="dashboards_menu">
                                        <li class="sidebar-menu-item">
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

                                <li class="sidebar-menu-item active open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Pages</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show " id="pages_menu">
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
                                        <li class="sidebar-menu-item active">
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
                                            <a class="sidebar-menu-button" href="edit-account.html">
                                                <span class="sidebar-menu-text">Default</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fluid-edit-account.html">
                                                <span class="sidebar-menu-text">Full Width Navs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fixed-edit-account.html">
                                                <span class="sidebar-menu-text">Fixed Navs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="mini-edit-account.html">
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
