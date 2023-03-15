@extends('layouts.master')

@section('tile','หน้าหลัก | Dashboard')


@section('content')
<div class="content">
    <div class="container-fluid">
        {{-- message--}}
        {!! Toastr::message()!!}
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span> 
                <div class="info-box-content">
                  <span class="info-box-text">Employee</span>
                  <span class="info-box-number">0</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">User Activity log</span>
                  <span class="info-box-number">{{ $user_activity_logs }}</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Activity Log</span>
                  <span class="info-box-number">{{ $activity_logs }}</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">User Total</span>
                  <span class="info-box-number">{{$users}}</span>
                </div>
              </div>
            </div>
        </div>
        {{-- <div class="row"> --}}
            {{-- <div class="col-lg-3 col-6"> --}}
                {{-- <div class="small-box bg-info shadow"> --}}
                    {{-- <div class="inner text-center"> --}}
                        {{-- <h1 class="py-3">&nbsp;ผู้ดูแลระบบ&nbsp;</h1> --}}
                    {{-- </div> --}}
                    {{-- <a href="../manager/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-3 col-6"> --}}
                {{-- <div class="small-box bg-primary shadow"> --}}
                    {{-- <div class="inner text-center"> --}}
                        {{-- <h1 class="py-3">สายวิชาการ</h1> --}}
                    {{-- </div> --}}
                    {{-- <a href="../members/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a> --}}
                {{-- </div> --}}
            {{-- </div> --}}

            {{-- <div class="col-lg-3 col-6"> --}}
                {{-- <div class="small-box bg-success shadow"> --}}
                    {{-- <div class="inner text-center"> --}}
                        {{-- <h1 class="py-3">สายสนับสนุน</h1> --}}
                    {{-- </div> --}}
                    {{-- <a href="../products/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-3 col-6"> --}}
                {{-- <div class="small-box bg-danger shadow"> --}}
                    {{-- <div class="inner text-center"> --}}
                        {{-- <h1 class="py-3">รายการสั่งซื้อ</h1> --}}
                    {{-- </div> --}}
                    {{-- <a href="../orders/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            {{-- <div class="col-lg-3"> --}}
                {{-- <div class="small-box py-3 bg-white shadow"> --}}
                    {{-- <div class="inner"> --}}
                        {{-- <h3>3,500 บาท</h3> --}}
                        {{-- <p class="text-danger">ยอดขายประจำวัน</p> --}}
                    {{-- </div> --}}
                    {{-- <div class="icon"> --}}
                        {{-- <i class="fas fa-chart-bar"></i> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-3"> --}}
                {{-- <div class="small-box py-3 bg-white shadow"> --}}
                    {{-- <div class="inner"> --}}
                        {{-- <h3>25,000 บาท</h3> --}}
                        {{-- <p class="text-danger">ยอดขาย 7 วันที่ผ่านมา</p> --}}
                    {{-- </div> --}}
                    {{-- <div class="icon"> --}}
                        {{-- <i class="fas fa-chart-area"></i> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-3"> --}}
                {{-- <div class="small-box py-3 bg-white shadow"> --}}
                    {{-- <div class="inner"> --}}
                        {{-- <h3>5 รายการ</h3> --}}
                        {{-- <p class="text-danger">ยอดคำสั่งซื้อประจำวัน</p> --}}
                    {{-- </div> --}}
                    {{-- <div class="icon"> --}}
                        {{-- <i class="fas fa-cart-arrow-down"></i> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-3"> --}}
                {{-- <div class="small-box py-3 bg-white shadow"> --}}
                    {{-- <div class="inner"> --}}
                        {{-- <h3>10 คน</h3> --}}
                        {{-- <p class="text-danger">ลูกค้าหน้าใหม่ในเดือนนี้</p> --}}
                    {{-- </div> --}}
                    {{-- <div class="icon"> --}}
                        {{-- <i class="fas fa-users"></i> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div>  --}}
        {{-- <div class="row"> --}}
            {{-- <div class="col-lg-12"> --}}
                {{-- <div class="card shadow"> --}}
                    {{-- <div class="card-body"> --}}
                        {{-- <div class="d-flex"> --}}
                            {{-- <p class="d-flex flex-column"> --}}
                                {{-- <span class="text-bold text-xl" id="salesReport"></span> --}}
                                {{-- <span class="text-danger" id="salesTextReport"></span> --}}
                            {{-- </p> --}}
                            {{-- <p class="ml-auto flex-row" id="salesbtn"> --}}
                                {{-- <button class="btn btn-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-month.php', this, 'line')">ยอดขายเดือนนี้</button> --}}
                                {{-- <button class="btn btn-outline-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-sixmonths.php', this, 'bar')">6 เดือน</button> --}}
                                {{-- <button class="btn btn-outline-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-twelvemonths.php', this, 'bar')">12 เดือน</button> --}}
                                {{-- <button class="btn btn-outline-secondary m-1 d-block d-md-inline ml-auto" onclick="selectReport('report-year.php', this, 'bar')">2021</button> --}}
                            {{-- </p> --}}
                        {{-- </div> --}}
                        {{-- <div class="position-relative"> --}}
                            {{-- <canvas id="visitors-chart" height="350"></canvas> --}}
                        {{-- </div> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
                       
    </div>
</div>
    
@endsection