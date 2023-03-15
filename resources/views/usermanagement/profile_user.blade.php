@extends('layouts.master')

@section('tile','หน้าหลัก | Profile User')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a href="#">จัดการผู้ใช้งาน</a></li>
            <li class="breadcrumb-item active">Profile User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Content Header (Page header) -->
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header border-0 pt-4">
                        <h4>
                            <i class="fas fa fa-user"></i> 
                            Profile User
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto profile-image">
                                            <a href="#"></a> <img class="rounded-circle" alt="User Image" src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" width="100" height="100" > </a>
                                        </div>
                                        <div class="col ml-md-n2 profile-user-info">
                                            <h4 class="user-name mb-3">{{ Auth::user()->name }}</h4>
                                        </div>
                                    </div>  
                                    <div class="card mt-5">                                      
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>ข้อมูลพื้นฐาน</span>
                                                {{-- <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a> --}}
                                                </h5>
                                            <div class="row mt-5">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">ชื่อ-สกุล</p>
                                                <p class="col-sm-9">{{ Auth::user()->name }}</p>
                                            </div>
                                            {{-- <div class="row"> --}}
                                                {{-- <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p> --}}
                                                {{-- <p class="col-sm-9">{{ Auth::user()->join_date }}</p> --}}
                                            {{-- </div> --}}
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                                <p class="col-sm-9">{{ Auth::user()->email}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">เบอร์โทร</p>
                                                <p class="col-sm-9">{{ Auth::user()->phone_number }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">ตำแหน่ง</p>
                                                <p class="col-sm-9">{{ Auth::user()->position }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">หน่วยงานหลัก</p>
                                                <p class="col-sm-9">{{ Auth::user()->department }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Status</p>
                                                <p class="col-sm-9">{{ Auth::user()->status }}</p>
                                            </div>    
                                        </div> 
                                    </div>   
                                </div>                            
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- end Content Header (Page header) -->
  

@endsection