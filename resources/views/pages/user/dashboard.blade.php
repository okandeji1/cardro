@extends('layouts.page')
@section('content')
    <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Dashboard</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index.html">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ul>
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Pending Orders</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">
                        30
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-car"></i></div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Completed Orders</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">
                        578
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Transactions Today</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">
                        N1,161
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                  <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                  <div class="mb-4">
                    <h5 class="card-title mb-0">Customers</h5>
                  </div>
                  <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                      <h2 class="d-flex align-items-center mb-0">
                        15.07k
                      </h2>
                    </div>
                   
                  </div>
                  <!-- <div class="progress mt-1 " data-height="8">
                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div> -->
                </div>
              </div>
            </div>
            
            
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Transactions</h4>
                </div>
                <div class="card-body">
                  <div id="schart1"></div>
                  <div class="row">
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Total</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$15.3k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Today
                        </p>
                      <h5>
                        N2.8k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted text-truncate">This Month</p>
                      <h5>
                        N12.5k
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Orders</h4>
                </div>
                <div class="card-body">
                  <div id="schart2"></div>
                  <div class="row">
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Total</p>
                      <h5>
                        2300
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Today
                        </p>
                      <h5>
                        15
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted text-truncate">Last
                        Month</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>202
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h4>Orders Today</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive" id="proTeamScroll">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Tracking ID</th>
                          <th>Customer ID</th>
                          <th>Customer Name</th>
                          <th>Order Date</th>
                          <th>Pickup </th>
                          <th>Delivery</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tr>
                        <td class="table-img">62420LLOP
                        </td>
                        <td>
                          ASDNOSD9921
                        </td>
                        <td>Tolu Animashaun</td>
                        <td class="text-truncate">
                          06/24/2020
                        </td>
                        <td>
                          <div class="badge-outline col-red">Lagos Island</div>
                        </td>
                        <td class="align-middle">
                         <div class="badge-outline col-green">Agege</div>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Delivered</div>
                        </td>
                        <td>
                          <a data-toggle="tooltip" title="view" data-original-title="Edit"><i
                              class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img">62420LLOP
                        </td>
                        <td>
                          ASDNOSD9921
                        </td>
                        <td>Tolu Animashaun</td>
                        <td class="text-truncate">
                          06/24/2020
                        </td>
                        <td>
                          <div class="badge-outline col-red">Lagos Island</div>
                        </td>
                        <td class="align-middle">
                         <div class="badge-outline col-green">Agege</div>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Picked up</div>
                        </td>
                        <td>
                          <a data-toggle="tooltip" title="view" data-original-title="Edit"><i
                              class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img">62420LLOP
                        </td>
                        <td>
                          ASDNOSD9921
                        </td>
                        <td>Tolu Animashaun</td>
                        <td class="text-truncate">
                          06/24/2020
                        </td>
                        <td>
                          <div class="badge-outline col-red">Lagos Island</div>
                        </td>
                        <td class="align-middle">
                         <div class="badge-outline col-green">Agege</div>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Delayed</div>
                        </td>
                        <td>
                          <a data-toggle="tooltip" title="view" data-original-title="Edit"><i
                              class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                       <tr>
                        <td class="table-img">62420LLOP
                        </td>
                        <td>
                          ASDNOSD9921
                        </td>
                        <td>Tolu Animashaun</td>
                        <td class="text-truncate">
                          06/24/2020
                        </td>
                        <td>
                          <div class="badge-outline col-red">Lagos Island</div>
                        </td>
                        <td class="align-middle">
                         <div class="badge-outline col-green">Agege</div>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Delayed</div>
                        </td>
                        <td>
                          <a data-toggle="tooltip" title="view" data-original-title="Edit"><i
                              class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                       <tr>
                        <td class="table-img">62420LLOP
                        </td>
                        <td>
                          ASDNOSD9921
                        </td>
                        <td>Tolu Animashaun</td>
                        <td class="text-truncate">
                          06/24/2020
                        </td>
                        <td>
                          <div class="badge-outline col-red">Lagos Island</div>
                        </td>
                        <td class="align-middle">
                         <div class="badge-outline col-green">Agege</div>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Delayed</div>
                        </td>
                        <td>
                          <a data-toggle="tooltip" title="view" data-original-title="Edit"><i
                              class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                       <tr>
                        <td class="table-img">62420LLOP
                        </td>
                        <td>
                          ASDNOSD9921
                        </td>
                        <td>Tolu Animashaun</td>
                        <td class="text-truncate">
                          06/24/2020
                        </td>
                        <td>
                          <div class="badge-outline col-red">Lagos Island</div>
                        </td>
                        <td class="align-middle">
                         <div class="badge-outline col-green">Agege</div>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Delayed</div>
                        </td>
                        <td>
                          <a data-toggle="tooltip" title="view" data-original-title="Edit"><i
                              class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>Revenue Chart</h4>
                </div>
                <div class="card-body">
                  <div id="barChart"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>User Visit </h4>
                </div>
                <div class="card-body">
                  <div id="lineChart"></div>
                </div>
              </div>
            </div>
          </div>

        
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
                                    checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                                    checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
