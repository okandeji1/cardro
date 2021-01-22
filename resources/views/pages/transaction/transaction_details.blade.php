@extends('layouts.page')
@section('content')
    <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Transaction details</h4>
            </li>
          </ul>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a href="/generate-receipt/{{$transaction->uuid}}" class="btn btn-success mr-1" type="submit">Generate Receipt</a>
                    <button class="btn btn-info mr-1" type="reset">Order Details</button>
                    <!-- <button class="btn btn-danger" type="reset">Delete Order</button> -->
                    <!-- <button class="btn btn-secondary" type="reset"></button> -->
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="form-group col-6">
                      <label>Customer ID</label>
                      <input type="text" value="{{$transaction->customer->uuid}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Transaction Date</label>
                      <input type="text" value="{{$transaction->transactionDate}}" disabled class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Order ID</label>
                      <input type="text" value="{{$transaction->order->uuid}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Amount (NGN)</label>
                      <input type="text" value="{{$transaction->amount}}" disabled class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Transaction Reference</label>
                      <input type="text" value="{{$transaction->reference}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Transaction Status</label>
                      <input type="text" value="{{$transaction->status}}" disabled class="form-control">
                    </div>
                  </div>
                    <div class="row">
                    <div class="form-group col-6">
                      <label>Customer Name</label>
                      <input type="text" value="{{$transaction->customer->fullname}}" disabled class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Customer Phone</label>
                      <input type="text" value="{{$transaction->customer->phoneNumber}}" disabled class="form-control">
                    </div>
                  </div>
                   <div class="row">
                    <div class="form-group col-6">
                      <label>Payment Type</label>
                      <input type="text" value="{{$transaction->paymentType}}" disabled class="form-control">
                    </div>
                  </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-danger" type="reset">Cancel</button>
                    <!-- <button class="btn btn-primary mr-1" type="submit">Submit</button> -->
                  </div>
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
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
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
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
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
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
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