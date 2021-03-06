

                    <div class="container page__heading-container">
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




                    <div class="container page__container">

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
                                                            <img src="<?php echo base_url('assets/images/256_rsz_1andy-lee-642320-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_jeremy-banks-798787-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_joao-silas-636453-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_luke-porter-261779-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_rsz_1andy-lee-642320-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_jeremy-banks-798787-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_joao-silas-636453-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_michael-dam-258165-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_rsz_1andy-lee-642320-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_jeremy-banks-798787-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_joao-silas-636453-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                            <img src="<?php echo base_url('assets/images/256_luke-porter-261779-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                        <img src="<?php echo base_url('assets/images/256_luke-porter-261779-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                    <img src="<?php echo base_url('assets/images/avatar/green.svg')?>" class="mr-2" alt="avatar" />
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
                                                        <img src="<?php echo base_url('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                        <img src="<?php echo base_url('assets/images/256_luke-porter-261779-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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
                                                    <img src="<?php echo base_url('assets/images/avatar/green.svg')?>" class="mr-2" alt="avatar" />
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
                                                        <img src="<?php echo base_url('assets/images/256_daniel-gaffey-1060698-unsplash.jpg')?>" alt="Avatar" class="avatar-img rounded-circle">
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

                <!-- drawer -->
                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content js-sidebar-mini" data-responsive-width="992px">

                        <div class="sidebar sidebar-mini sidebar-primary sidebar-left simplebar" data-simplebar>
                            <ul class="nav flex-column sidebar-menu mt-3" id="sidebar-mini-tabs" role="tablist">
                                <li class="sidebar-menu-item active" data-toggle="tooltip" data-title="Dashboards" data-placement="right" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_dashboards" data-toggle="tab" role="tab" aria-controls="sm_dashboards" aria-selected="true">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Apps" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_apps" data-toggle="tab" role="tab" aria-controls="sm_apps" aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                        <span class="sidebar-menu-text">Apps</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item " data-toggle="tooltip" data-title="Pages" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_pages" data-toggle="tab" role="tab" aria-controls="sm_pages">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                        <span class="sidebar-menu-text">Pages</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="UI Components" data-placement="right" data-container="body" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_components" data-toggle="tab" role="tab" aria-controls="sm_components">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>
                                        <span class="sidebar-menu-text">UI Components</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item" data-toggle="tooltip" data-title="Layouts" data-placement="right" data-boundary="window">
                                    <a class="sidebar-menu-button" href="#sm_layouts" data-toggle="tab" role="tab" aria-controls="sm_layouts" aria-selected="false">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Layouts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar sidebar-light sidebar-left simplebar flex sidebar-secondary" data-simplebar>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="sm_dashboards">
                                    <div class="sidebar-heading">Dashboards</div>
                                    <div class="sidebar-block p-0">
                                        <ul class="sidebar-menu">
                                            <li class="sidebar-menu-item active">
                                                <a class="sidebar-menu-button" href="mini-dashboard.html">
                                                    <span class="sidebar-menu-text">Default</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-staff.html">
                                                    <span class="sidebar-menu-text">CRM/Staff</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-analytics.html">
                                                    <span class="sidebar-menu-text">E-commerce</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sm_apps">
                                    <div class="sidebar-heading">Apps</div>
                                    <div class="sidebar-block p-0">
                                        <ul class="sidebar-menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-app-trello.html">
                                                    <span class="sidebar-menu-text">Trello</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-app-projects.html">
                                                    <span class="sidebar-menu-text">Projects</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-app-fullcalendar.html">
                                                    <span class="sidebar-menu-text">Event Calendar</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-app-chat.html">
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
                                                        <a class="sidebar-menu-button" href="mini-app-course.html">
                                                            <span class="sidebar-menu-text">Course</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-menu-item ">
                                                        <a class="sidebar-menu-button" href="mini-app-lesson.html">
                                                            <span class="sidebar-menu-text">Lesson</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane " id="sm_pages">
                                    <div class="sidebar-heading">Pages</div>
                                    <div class="sidebar-block p-0">
                                        <ul class="sidebar-menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-stories.html">
                                                    <span class="sidebar-menu-text">Stories</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-invoice.html">
                                                    <span class="sidebar-menu-text">Invoice</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-pricing.html">
                                                    <span class="sidebar-menu-text">Pricing</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-edit-account.html">
                                                    <span class="sidebar-menu-text">Edit Account</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-profile.html">
                                                    <span class="sidebar-menu-text">User Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-digital-product.html">
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
                                        <div class="sidebar-p-a sidebar-b-y layout-mini__d-none">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="sidebar-heading m-0 p-0 flex">Progress</div>
                                                <div>60%</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sm_components">
                                    <div class="sidebar-heading">UI Components</div>
                                    <div class="sidebar-block p-0">
                                        <ul class="sidebar-menu" id="components_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-buttons.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                                    <span class="sidebar-menu-text">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-alerts.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                                    <span class="sidebar-menu-text">Alerts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-avatars.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                                    <span class="sidebar-menu-text">Avatars</span>
                                                    <span class="badge badge-primary ml-auto">NEW</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-modals.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                                    <span class="sidebar-menu-text">Modals</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-charts.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                                    <span class="sidebar-menu-text">Charts</span>
                                                    <span class="badge badge-warning ml-auto">PRO</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-icons.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                                    <span class="sidebar-menu-text">Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-forms.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                                    <span class="sidebar-menu-text">Forms</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-range-sliders.html">
                                                    <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                                    <span class="sidebar-menu-text">Range Sliders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-datetime.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                                    <span class="sidebar-menu-text">Time &amp; Date</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-tables.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                                    <span class="sidebar-menu-text">Tables</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-loaders.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                                    <span class="sidebar-menu-text">Loaders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-drag.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                                    <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-pagination.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                                    <span class="sidebar-menu-text">Pagination</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="mini-ui-vector-maps.html">
                                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                                    <span class="sidebar-menu-text">Vector Maps</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sm_layouts">
                                    <div class="sidebar-heading">Layouts</div>
                                    <div class="sidebar-block p-0">
                                        <ul class="sidebar-menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="index.html">Default</a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="fluid-dashboard.html">Fluid</a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="fixed-dashboard.html">Fixed</a>
                                            </li>
                                            <li class="sidebar-menu-item active">
                                                <a class="sidebar-menu-button" href="mini-dashboard.html">Mini</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- // END drawer -->
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->
