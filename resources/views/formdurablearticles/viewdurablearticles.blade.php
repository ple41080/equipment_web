@extends('layouts.master')

@section('tile','หน้าหลัก | ข้อมูลครุภัณฑ์')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">ข้อมูลครุภัณฑ์</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active"><a href="#">จัดการครุภัณฑ์</a></li></li>
            <li class="breadcrumb-item active">ข้อมูลครุภัณฑ์</li>
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
                <div class="card">
                    <div class="card-body">
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#per_details_tab">ข้อมูลครุภัณฑ์</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#get_tab">วิธีการได้มา</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#details_tab">รายละเอียดครุภัณฑ์</a> </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">
                            <div class="tab-pane fade show active" id="per_details_tab">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card shadow">
                                                <div class="card-header pt-4">
                                                    <h3 class="card-title"> 
                                                        <i class="fas fa fa-cube"></i>  
                                                        ข้อมูลครุภัณฑ์
                                                    </h3>
                                                </div>
                                                <div class="card-body px-5">
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">รหัสครุภัณฑ์:</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->number_id }}</p>
                                                        </div>
                                                    </div>		
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">หมวดหมู่ครุภัณฑ์ :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->category}}</p>
                                                        </div>
                                                    </div>							
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ประเภทครุภัณฑ์ :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->equipment}}</p>
                                                        </div>
                                                    </div>								
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">หน่วยนับ:</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->counting_unit}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">หน่วยงานหลัก :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->departments}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">หน่วยงงานย่อย :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->departments_small}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">อาคาร :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->building}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">หมายเลขอาคาร :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->building_numder}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ชั้น :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->building_floor}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ชื่อ/หมายเลขห้อง :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->room}}</p>
                                                        </div>
                                                    </div>																	
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                
                            </div>
                            <div id="get_tab" class="tab-pane fade">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card shadow">
                                                <div class="card-header pt-4">
                                                    <h3 class="card-title"> 
                                                        <i class="fas fa-cart-arrow-down"></i> 
                                                        วิธีการได้มา
                                                    </h3>
                                                </div>
                                                <div class="card-body px-5">
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ปีงบประมาณ:</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->fiscalyear }}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">วิธีได้มา :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->howtoget}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">รหัสงบประมาณ  :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->budget_code}}</p>
                                                        </div>
                                                    </div>		
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">โครงการ:</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->project}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ประเภทงบประมาณ  :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->budget}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ผู้ขาย/ห้างหุ่นส่วนจำกัด/บริษัท :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->seller}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">วันที่ตรวจรับ :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->checkdata}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="details_tab" class="tab-pane fade">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card shadow">
                                                <div class="card-header pt-4">
                                                    <h3 class="card-title"> 
                                                        <i class="fas fa fa-cube"></i> 
                                                        รายละเอียดครุภัณฑ์
                                                    </h3>
                                                </div>
                                                <div class="card-body px-5">
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ชื่อครุภัณฑ์:</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->name}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">S/N :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->serial_number}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">รุ่น :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->model_name}}</p>
                                                        </div>
                                                    </div>		
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ยี่ห้อ:</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->brand}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">มูลค่าได้มา :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ number_format($showdate->price,2) }}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">ทะเบียนรถ :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->vehicle_re}}</p>
                                                        </div>
                                                    </div>	
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">รายละเอียดเพิ่มเติม :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <p class="col-xl-3 text-muted">อายุการใช้งาน :</p>
                                                        <div class="col-xl-9">
                                                            <p>{{ $showdate->lifetime}}</p>
                                                        </div>
                                                    </div>																	
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('form/alldurablearticles')}}" class="btn btn-lg btn-primary  ">
                                <i class="fas fa-list"></i>
                                กลับหน้าหลัก
                            </a>
                        </div>
                    </div>
                </div>                
            </div>  
        </div>                                                                                                                                     	                                                                                                                                    	          
    </div>
  </div>
<!-- end Content Header (Page header) -->
  

@endsection