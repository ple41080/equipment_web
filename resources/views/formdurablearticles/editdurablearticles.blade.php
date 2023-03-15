@extends('layouts.master')

@section('tile','หน้าหลัก | แก้ไขรายการครุภัณฑ์')

@section('content')
{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> แก้ไขครุภัณฑ์</h1>
    	    </div>
    	    <!-- /.col -->
    	    <div class="col-sm-6">
    	      <ol class="breadcrumb float-sm-right">
    	        <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
              <li class="breadcrumb-item"><a href="{{ route('form/alldurablearticles')}}">จัดการครุภัณฑ์</a></li>
    	        <li class="breadcrumb-item active"> แก้ไขรายการครุภัณฑ์</li>
    	      </ol>
    	    </div>
    	    <!-- /.col -->
    	  </div><!-- /.row -->
    	</div><!-- /.container-fluid -->
  </div>										
  <div class="content">
    <div class="container-fluid">    
        <form action="{{ route('form/adddurablearticles/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $editdurablearticles->id }}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold text-primary">ข้อมูลครุภัณฑ์</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class=" form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">รหัสครุภัณฑ์<span class="text-danger">*</label>
                                  <input type="text" class="form-control form-control-sm" name="number_id" id="number_id" value="{{ $editdurablearticles->number_id }}" readonly>
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">หมวดหมู่ครุภัณฑ์<span class="text-danger">*</label>                                                               
                                  <select class="custom-select" name="category" id="category"> 
                                    <option selected value="{{ $editdurablearticles->category }}">{{ $editdurablearticles->category }}</option>
                                    @foreach ($categoryings_type  as $categoryings )
                                    <option value="{{ $categoryings->categoryings_type }}">{{ $categoryings->categoryings_type }}</option>
                                    @endforeach
                                  </select>                                                                                                                                                                                                                                                                                      
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ประเภทครุภัณฑ์<span class="text-danger">*</label>
                                  <input type="text" class="form-control form-control-sm" id="equipmen" name="equipment" value="{{ $editdurablearticles->equipment }}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">หน่วยนับ<span class="text-danger">*</label>
                                  <input type="text" class="form-control form-control-sm" id="counting_unit" name="counting_unit" value="{{ $editdurablearticles->counting_unit }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">หน่วยงานหลัก<span class="text-danger">*</label>                                                                                 
                                  <select class="custom-select @error('departments') is-invalid @enderror" name="departments" id="departments" value="{{ old('departments') }}">
                                    <option selected value="{{ $editdurablearticles->departments }}">{{ $editdurablearticles->departments }}</option>
                                    @foreach ($department_type as $departments)
                                    <option value="{{ $departments->department_type }}">{{ $departments->department_type }}</option>
                                    @endforeach
                                  </select>                                                                                                                            
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">หน่วยงานย่อย<span class="text-danger">*</label>
                                  <select class="custom-select @error('departments_small') is-invalid @enderror" name="departments_small" id="departments_small" value="{{ old('departments_small') }}">
                                    <option selected value="{{ $editdurablearticles->departments_small }}">{{ $editdurablearticles->departments_small }}</option>
                                    @foreach ($departments_smalls_type as $departments_smalls )
                                    <option value="{{ $departments_smalls->departments_smalls_type }}">{{ $departments_smalls->departments_smalls_type}}</option>
                                    @endforeach
                                  </select>                                                                                                                   
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">อาคาร</label>
                                  <input type="text" class="form-control form-control-sm" id="building" name="building" value="{{ $editdurablearticles->building }}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">หมายเลขอาคาร</label>
                                  <input type="text" class="form-control form-control-sm" id="building_numder" name="building_numder" value="{{ $editdurablearticles->building_numder }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ชั้น</label>
                                  <input type="text" class="form-control form-control-sm" id="building_floor" name="building_floor" value="{{ $editdurablearticles->building_floor }}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">ชื่อห้อง/หมายเลขห้อง</label>
                                  <input type="text" class="form-control form-control-sm" id="room" name="room" value="{{ $editdurablearticles->room}}">
                                </div>
                            </div>
                            <div class="form-group col-md-4 px-md-5">
                              <label class="col-form-label col-form-label-sm">สถานะ<span class="text-danger">*</label>
                              <select class="custom-select @error('status') is-invalid @enderror" name="status" id="status" value="{{ old('status') }}">
                                <option selected value="{{ $editdurablearticles->status }}">{{ $editdurablearticles->status }}</option>
                                  @foreach ($durablearticles_statuses_type as $durablearticles_statuses )
                                    <option value="{{ $durablearticles_statuses->durablearticles_statuses_type }}">{{ $durablearticles_statuses->durablearticles_statuses_type}}</option>
                                  @endforeach
                              </select>       
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold text-primary" >วิธีได้มา</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ปีงบประมาณ<span class="text-danger">*</label>
                                    <select class="custom-select" name="fiscalyear" id="fiscalyear"> 
                                      <option selected value="{{ $editdurablearticles->fiscalyear }}">{{ $editdurablearticles->fiscalyear }}</option>
                                      @foreach ($fiscalyears_type  as $fiscalyear )
                                      <option value="{{ $fiscalyear->fiscalyears_type }}">{{ $fiscalyear->fiscalyears_type }}</option>
                                      @endforeach
                                    </select>                                                                                                        
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">วิธีได้มา</label>
                                  <select class="custom-select" name="howtoget" id="howtoget"> 
                                    <option selected value="{{ $editdurablearticles->howtoget }}">{{ $editdurablearticles->howtoget}}</option>
                                    @foreach ($howtogets_type   as $howtogets )
                                    <option value="{{ $howtogets->howtogets_type }}">{{ $howtogets->howtogets_type }}</option>
                                    @endforeach
                                  </select>                                                                                                        
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">รหัสงบประมาณ</label>
                                  <input type="text" class="form-control form-control-sm" id="budget_code" name="budget_code" value="{{ $editdurablearticles->budget_code}}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">โครงการ</label>
                                  <input type="text" class="form-control form-control-sm" id="project" name="project" value="{{ $editdurablearticles->project}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ประเภทงบประมาณ<span class="text-danger">*</label>
                                  <select class="custom-select" name="budget" id="budget"> 
                                    <option selected value="{{ $editdurablearticles->budget}}">{{ $editdurablearticles->budget}}</option>
                                    @foreach ($budgets_type as $budgets )
                                    <option value="{{ $budgets->budgets_type }}">{{ $budgets->budgets_type }}</option>
                                    @endforeach
                                  </select>                                                                                                       
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ผู้ขาย/ห้างหุ่นส่วนจำกัด/บริษัท </label>
                                  <input type="text" class="form-control form-control-sm" id="seller" name="seller" value="{{ $editdurablearticles->seller}}">
                                </div>   
                            </div>
                            <div class="form-row">   
                              <div class="form-group col-md-4 px-md-5">
                                <label for="inputPassword4" class="col-form-label col-form-label-sm">วันที่ตรวจรับ</label>
                                <input type="date" class="form-control form-control-sm" id="checkdata" name="checkdata" value="{{ $editdurablearticles->checkdata}}">
                              </div>
                            </div>
                        </div>
                    </div>                            
                </div> 
            </div>  
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold text-primary" >รายละเอียดครุภัณฑ์</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ชื่อครุภัณฑ์<span class="text-danger">*</label>
                                  <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ $editdurablearticles->name}}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">หมายเลขเครื่อง S/N</label>
                                  <input type="text" class="form-control form-control-sm" id="serial_number" name="serial_number" value="{{ $editdurablearticles->serial_number}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">รุ่น</label>
                                  <input type="text" class="form-control form-control-sm" id="model_name" name="model_name" value="{{ $editdurablearticles->model_name}}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputPassword4" class="col-form-label col-form-label-sm">ยี่ห้อ</label>
                                  <input type="text" class="form-control form-control-sm" id="brand" name="brand" value="{{ $editdurablearticles->brand}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">มูลค่า (บาท)<span class="text-danger">*</label>
                                  <input type="number" class="form-control form-control-sm" id="price" name="price" value="{{ $editdurablearticles->	price}}">
                                </div>
                                <div class="form-group col-md-6 px-md-5">
                                  <label for="inputEmail4" class="col-form-label col-form-label-sm">ทะเบียนรถ</label>
                                  <input type="text" class="form-control form-control-sm" id="vehicle_re" name="vehicle_re" value="{{ $editdurablearticles->vehicle_re}}">
                                  <small id="vehicle_re" class="form-text text-danger">
                                    กรณีที่เป็นประเภท ครุภัณฑ์ยานพาหนะ
                                  </small>
                                </div>   
                            </div>
                            <div class="form-row">   
                              <div class="form-group col-md-12 px-md-5">
                                <label for="inputPassword4" class="col-form-label col-form-label-sm">รายละเอียดเพิ่มเติม</label>
                                <input type="text" class="form-control form-control-sm" id="description" name="description" value="{{ $editdurablearticles->description}}">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-3 px-md-5">
                                <label for="inputPassword4" class="col-form-label col-form-label-sm">อายุการใช้งาน<span class="text-danger">*</label>
                                <input type="text" class="form-control form-control-sm" id="lifetime" name="lifetime" value="{{ $editdurablearticles->lifetime}}">
                              </div>
                            </div>                     
                        </div>
                    </div>                            
                </div> 
            </div>  
          <div class=" page my-4">
            <div class="text-center ">      
              <button type="submit" class="btn btn-success">อับเดท</button>
              <a href="{{route('form/alldurablearticles')}}" class="btn btn-danger"> ยกเลิก </a>
            </div>       
          </div>
        </form>                      
    </div>
</div>



@endsection