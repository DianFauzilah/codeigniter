

          <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
              <div class="flex">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staff</li>
                  </ol>
                </nav>
                <h1 class="m-0">Staff</h1>
              </div>
              <a href="" class="btn btn-success ml-3">Add Staff</a>
            </div>
          </div>

          <div class="container-fluid page__container">
            <div class="row card-group-row">
              <div class="col-lg-4 col-md-6 card-group-row__col">
                <div class="card card-group-row__card">
                  <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                    <div class="flex">
                      <div class="card-header__title text-muted mb-2 d-flex">Budget <span
                          class="badge badge-warning ml-2">20%</span></div>
                      <span class="h4 m-0">&dollar;24,000 <small class="text-muted"> / &dollar;50,000</small> </span>
                    </div>
                    <div><i class="material-icons icon-muted icon-40pt ml-3">monetization_on</i></div>
                  </div>
                  <div class="progress" style="height: 3px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-group-row__col">
                <div class="card card-group-row__card">
                  <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                    <div class="flex">
                      <div class="card-header__title text-muted d-flex mb-2">Current Target <span
                          class="badge badge-primary ml-2">2018</span></div>
                      <span class="h4 m-0">&dollar;50,000 </span>
                    </div>
                    <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                  </div>
                  <div class="progress" style="height: 3px;">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 card-group-row__col">
                <div class="card card-group-row__card">
                  <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                    <div class="flex">
                      <div class="card-header__title text-muted mb-2">Top Grossing</div>

                      <div class="d-flex align-items-center">
                        <div class="h4 m-0">&dollar;13,531 </div>
                        <div class="progress ml-1" style="width:100%;height: 3px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                    <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header bg-white d-flex align-items-center">
                <h4 class="card-header__title mb-0">Earnings</h4>
                <div class="flatpickr-wrapper flatpickr-calendar-right d-flex ml-auto">
                  <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true"
                    data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y"
                    data-flatpickr-date-format="d/m/Y">
                    <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 to 20/03/2018</a>
                    <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="ordersChart" class="chart-canvas"></canvas>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <form class="form-inline">
                  <label class="mr-sm-2" for="inlineFormFilterBy">Filter by:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormFilterBy"
                    placeholder="Type a name">

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


              <div class="table-responsive border-bottom" data-toggle="lists"
                data-lists-values='["js-lists-values-employee-name"]'>

                <table class="table mb-0 thead-border-top-0">
                  <thead>
                    <tr>

                      <th style="width: 18px;">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff"
                            id="customCheckAll">
                          <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle
                              all</span></label>
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
                          <input type="checkbox" class="custom-control-input js-check-selected-row" checked=""
                            id="customCheck1_1">
                          <label class="custom-control-label" for="customCheck1_1"><span
                              class="text-hide">Check</span></label>
                        </div>
                      </td>

                      <td>

                        <div class="media align-items-center">
                          <div class="avatar avatar-xs mr-2">
                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar"
                              class="avatar-img rounded-circle">
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
                          <label class="custom-control-label" for="customCheck2_1"><span
                              class="text-hide">Check</span></label>
                        </div>
                      </td>

                      <td>

                        <div class="media align-items-center">
                          <img src="assets/images/avatar/green.svg" class="mr-2" alt="avatar" />
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
                          <label class="custom-control-label" for="customCheck3_1"><span
                              class="text-hide">Check</span></label>
                        </div>
                      </td>

                      <td>

                        <div class="media align-items-center">

                          <div class="avatar avatar-xs mr-2">
                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar"
                              class="avatar-img rounded-circle">
                          </div>
                          <div class="media-body">

                            <span class="js-lists-values-employee-name">John Connor</span>

                          </div>
                        </div>

                      </td>

                      <td>
                        <div class="media align-items-center">
                          <a href="">Frontted</a>
                          <a href="#" class="rating-link"
                            onclick="document.getElementById('box').classList.toggle('grow');"><i
                              class="material-icons ml-2">star</i></a>
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
                          <input type="checkbox" class="custom-control-input js-check-selected-row" checked=""
                            id="customCheck1_2">
                          <label class="custom-control-label" for="customCheck1_2"><span
                              class="text-hide">Check</span></label>
                        </div>
                      </td>

                      <td>

                        <div class="media align-items-center">
                          <div class="avatar avatar-xs mr-2">
                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar"
                              class="avatar-img rounded-circle">
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
                          <label class="custom-control-label" for="customCheck2_2"><span
                              class="text-hide">Check</span></label>
                        </div>
                      </td>

                      <td>

                        <div class="media align-items-center">
                          <img src="assets/images/avatar/green.svg" class="mr-2" alt="avatar" />
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
                          <label class="custom-control-label" for="customCheck3_2"><span
                              class="text-hide">Check</span></label>
                        </div>
                      </td>

                      <td>

                        <div class="media align-items-center">

                          <div class="avatar avatar-xs mr-2">
                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar"
                              class="avatar-img rounded-circle">
                          </div>
                          <div class="media-body">

                            <span class="js-lists-values-employee-name">John Connor</span>

                          </div>
                        </div>

                      </td>

                      <td>
                        <div class="media align-items-center">
                          <a href="">Frontted</a>
                          <a href="#" class="rating-link"
                            onclick="document.getElementById('box').classList.toggle('grow');"><i
                              class="material-icons ml-2">star</i></a>
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
                15 <span class="text-muted">of 1,430</span> <a href="#" class="text-muted-light"><i
                    class="material-icons ml-1">arrow_forward</i></a>
              </div>


            </div>
          </div>


        </div>
        <!-- // END drawer-layout__content -->
