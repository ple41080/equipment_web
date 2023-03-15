@extends('layouts.master')

@section('tile','หน้าหลัก | เพิ่มรายการครุภัณฑ์')

@section('content')
{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> จัดการครุภัณฑ์</h1>
    	    </div>
    	    <!-- /.col -->
    	    <div class="col-sm-6">
    	      <ol class="breadcrumb float-sm-right">
    	        <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
              <li class="breadcrumb-item"><a href="{{ route('form/alldurablearticles')}}">รายการครุภัณฑ์</a></li>
    	        <li class="breadcrumb-item active"> เพิ่มรายการครุภัณฑ์</li>
    	      </ol>
    	    </div>
    	    <!-- /.col -->
    	  </div><!-- /.row -->
    	</div><!-- /.container-fluid -->
  </div>										
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
<div class="card sadow">
      <div class="card-header border-0 pt-4">
        <h4>
          <i class="fas fa fa-cube"></i> 
          เพิ่มรายการครุภัณฑ์
        </h4>
        <a href="{{route('form/alldurablearticles')}}" class="btn btn-sm btn-info  my-4">
            <i class="fas fa-list"></i>
            กลับหน้าหลัก
        </a>
        <form action="{{ route('form/adddurablearticles/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card-shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold text-primary">ข้อมูลครุภัณฑ์</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class=" form-group col-md-6 px-md-5">
                                  <label for="number_id" class="col-form-label col-form-label-sm">รหัสครุภัณฑ์  <span class="text-danger">*</span></label>
                                  <input class="form-control @error('number_id') is-invalid @enderror" type="text" id="number_id" name="number_id" value="{{ old('number_id') }}" placeholder="กรอกรหัสครุภัณฑ์">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">หมวดหมู่ครุภัณฑ์ <span class="text-danger">*</span></label>
                                  <select class="custom-select  @error('category') is-invalid @enderror " name="category" id="category" value="{{ old('category') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($categoryings_type  as $categoryings )
                                    <option value="{{ $categoryings->categoryings_type }}">{{ $categoryings->categoryings_type }}</option>
                                    @endforeach
                                  </select>                                                                                                                                                                          
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">ประเภทครุภัณฑ์  <span class="text-danger">*</span></label>  
                                  <input type="text" class="form-control form-control-sm  @error('equipment') is-invalid @enderror " name="equipment" id="equipment" value="{{ old('equipment') }}" placeholder="กรอกประเภทครุภัณฑ์">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">หน่วยนับ  <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control form-control-sm  @error('counting_unit') is-invalid @enderror " name="counting_unit" id="counting_unit" value="{{ old('counting_unit') }}" placeholder="กรอกหน่วยนับ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">หน่วยงานหลัก <span class="text-danger">*</span></label>
                                  <select class="custom-select @error('departments') is-invalid @enderror" name="departments" id="departments" value="{{ old('departments') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($department_type as $departments )
                                    <option value="{{ $departments->department_type}}">{{ $departments->department_type}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">หน่วยงานย่อย <span class="text-danger">*</span></label>
                                  <select class="custom-select @error('departments_small') is-invalid @enderror" name="departments_small" id="departments_small" value="{{ old('departments_small') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($departments_smalls_type as $departments_smalls )
                                    <option value="{{ $departments_smalls->departments_smalls_type }}">{{ $departments_smalls->departments_smalls_type}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">อาคาร</label>
                                  <input type="text" class="form-control form-control-sm" name="building" id="building" >
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">หมายเลขอาคาร</label>
                                  <input type="text" class="form-control form-control-sm " name="building_numder" id="building_numder">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ชั้น</label>
                                  <input type="text" class="form-control form-control-sm " name="building_floor" id="building_floor">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">ชื่อห้อง/หมายเลขห้อง</label>
                                  <input type="text" class="form-control form-control-sm " name="room" id="room" >
                                </div>
                            </div>
                            <div class="form-group col-md-4 px-md-5">
                              <label class="col-form-label col-form-label-sm">สถานะ <span class="text-danger">*</span></label>
                              <select class="custom-select @error('status') is-invalid @enderror" name="status" id="status" value="{{ old('status') }}">
                                <option selected disabled> --Select --</option>
                                  @foreach ($durablearticles_statuses_type as $durablearticles_statuses )
                                    <option value="{{ $durablearticles_statuses->durablearticles_statuses_type }}">{{ $durablearticles_statuses->durablearticles_statuses_type}}</option>
                                  @endforeach
                              </select>    
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card-shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold text-primary" >วิธีได้มา</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ปีงบประมาณ <span class="text-danger">*</span></label>
                                  <select class="custom-select @error('fiscalyear') is-invalid @enderror" name="fiscalyear" id="fiscalyear" value="{{ old('fiscalyear') }}">
                                    <option selected disabled> --Select --</option> 
                                    @foreach ($fiscalyears_type  as $fiscalyears )
                                    <option value="{{ $fiscalyears->fiscalyears_type  }}">{{ $fiscalyears->fiscalyears_type }}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">วิธีได้มา <span class="text-danger">*</span></label>
                                  <select class="custom-select @error('howtoget') is-invalid @enderror" name="howtoget" id="howtoget" value="{{ old('howtoget') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($howtogets_type as $howtogets )
                                    <option value="{{ $howtogets->howtogets_type }}">{{ $howtogets->howtogets_type}}</option>
                                    @endforeach
                                  </select>
                                </div>  
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 px-md-5">
                                <label for="inputEmail4" class="col-form-label col-form-label-sm">รหัสงบประมาณ <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm @error('budget_code') is-invalid @enderror" name="budget_code" id="budget_code" value="{{ old('budget_code') }}">
                              </div>
                              <div class="form-group col-md-6 px-md-5">
                                <label for="inputEmail4" class="col-form-label col-form-label-sm">โครงการ <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm @error('project') is-invalid @enderror" name="project" id="project" value="{{ old('project') }}">
                              </div>                                                                                                                        
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ประเภทงบประมาณ <span class="text-danger">*</span></label>
                                  <select class="custom-select  @error('budget') is-invalid @enderror" name="budget" id="budget" value="{{ old('budget') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($budgets_type as $budgets )
                                    <option value="{{ $budgets->budgets_type }}">{{ $budgets->budgets_type}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm ">ผู้ขาย/ห้างหุ่นส่วนจำกัด/บริษัท <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control form-control-sm @error('seller') is-invalid @enderror" name="seller" id="seller" value="{{ old('seller') }}">
                                </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 px-md-5">
                                <label class="col-form-label col-form-label-sm">วันที่ตรวจรับ <span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-sm @error('checkdata') is-invalid @enderror" name="checkdata" id="checkdata" value="{{ old('checkdata') }}">
                              </div>
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card-shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold text-primary" >รายละเอียดครุภัณฑ์</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ชื่อครุภัณฑ์ <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">หมายเลขเครื่อง S/N</label>
                                  <input type="text" class="form-control form-control-sm " name="serial_number" id="serial_number" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">รุ่น</label>
                                  <input type="text" class="form-control form-control-sm " name="model_name" id="model_name">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label class="col-form-label col-form-label-sm">ยี่ห้อ</label>
                                  <input type="text" class="form-control form-control-sm " name="brand" id="brand">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">มูลค่า (บาท)  <span class="text-danger">*</span></label>
                                  <input type="number" class="form-control form-control-sm @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ทะเบียนรถ</label>
                                  <input type="text" class="form-control form-control-sm " name="vehicle_re" id="vehicle_re" >
                                  <small id="vehicle_re" class="form-text text-danger">
                                    กรณีที่เป็นประเภท ครุภัณฑ์ยานพาหนะ
                                  </small>
                                </div>    
                            </div>
                            <div class="form-group col-md-12 px-md-5">
                              <label class="col-form-label col-form-label-sm">รายละเอียดเพิ่มเติม</label>
                              <input type="text" class="form-control form-control-sm " name="description" id="description" >
                            </div> 
                            <div class="form-group col-md-3 px-md-5">
                              <label class="col-form-label col-form-label-sm">อายุการใช้งาน <span class="text-danger">*</span></label>
                              <input type="text" class="form-control form-control-sm @error('lifetime') is-invalid @enderror" name="lifetime" id="lifetime" value="{{ old('lifetime') }}">
                            </div>                                                                                                                                                                                                                 </div>
                        </div>
                    </div>                            
                </div> 
            </div>  
          <div class=" card-header">
            <div class="text-center ">
              <button type="submit" class="btn btn-lg btn-primary  ">บันทีก</button>
              <button type="button" class="btn btn-lg btn-danger ">ยกเลิก</button>
            </div>      
          </div>
        </form>                      
      </div>
    </div>
    </div>
    </div>
    </div>




@endsection