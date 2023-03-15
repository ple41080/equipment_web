@extends('layouts.master')

@section('tile','หน้าหลัก | บันทึกการซ่อมบำรุงครุภัณฑ์')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="content-header">
    	    <div class="container-fluid">
    	        <div class="row mb-2">
    	            <div class="col-sm-6">
    	              <h1 class="m-0"> บันทึกการซ่อมบำรุงครุภัณฑ์</h1>
    	            </div>
    	            <div class="col-sm-6"><!-- /.col -->
    	              	<ol class="breadcrumb float-sm-right">
    	                	<li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
                        	<li class="breadcrumb-item"><a href="#">ครุภัณฑ์</a></li>
    	                	<li class="breadcrumb-item active">บันทึกการซ่อมบำรุงครุภัณฑ์</li>
    	             	</ol>
    	            </div><!-- /.col -->   
    	        </div><!-- /.row -->
    	    </div><!-- /.container-fluid -->
        </div>
    </div>                             
   <!--Content data -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        {{-- <div class="card shadow"> --}}
                            {{-- <div class="card-header border-0 pt-4">
                                <h4>
                                    <i class="fas fa fa-cube"></i> 
                                    ฐานข้อมูลผู้ค้าภาครัฐ
                                </h4>
                            </div> --}}
                            <!--ข้อมูลผู้ค้า-->
                                <div class="card-body px-1 px-md-5">
                                    <div class="row">
                                        <!--ข้อมูลผู้ขาย-->
                                        <div class="col-lg-6">
                                            <div class="card shadow-sm">
                                                <div class="card-header pt-4">
                                                    <h3 class="card-title"> 
                                                        <i class="fab fa-dropbox"></i> 
                                                        ข้อมูลครุภัณฑ์
                                                    </h3>
                                                </div>
                                                <div class="card-body px-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="first_name">รหัสครุภัณฑ์</label>
                                                                <input type="text" class="form-control form-control-border"  value="{{ $showdate->number_id }}" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="first_name">หมวดหมู่</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->category }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="first_name">ประเภทครุภัณฑ์</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->equipment }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">หน่วยงานหลัก</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->departments }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">หน่วยงานย่อย</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->departments_small }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">อาคาร</label>
                                                                <input type="text" class="form-control form-control-border" value="{{  $showdate->building }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">หมายเลขอาคาร</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->building_numder }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">ชั้น</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->building_floor }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">ชื่อห้อง/หมายเลขห้อง</label>
                                                                <input type="text" class="form-control form-control-border" value="{{ $showdate->room }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <!--ข้อมูลที่อยู่-->  
                                        <div class="col-lg-6">
                                            <div class="card shadow-sm">
                                                <div class="card-header pt-4">
                                                    <h3 class="card-title"> 
                                                        <i class="fas fa-clipboard-list"></i> 
                                                        รายละเอียดครุภัณฑ์
                                                    </h3>
                                                </div>
                                                <div class="card-body px-5">
                                                    <div class="form-group">
                                                        <label for="district">ชื่อครุภัณฑ์</label>
                                                        <input type="text" class="form-control form-control-border" value="{{ $showdate->name }}" > 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="district">หมายเลขเครื่อง S/N</label>
                                                        <input type="text" class="form-control form-control-border" value="{{ $showdate->serial_number }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="district">รุ่น</label>
                                                        <input type="text" class="form-control form-control-border" value="{{ $showdate->model_name }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="district">ยี่ห้อ</label>
                                                        <input type="text" class="form-control form-control-border" value="{{ $showdate->brand }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="amphoe">มูลค่า (บาท)</label>
                                                        <input type="text" class="form-control form-control-border" value="{{ number_format($showdate->price,2) }}"> 
                                                    </div> 
                                                    <div class="form-group">
                                                        <label for="province">ทะเบียนรถ</label>
                                                        <input type="text" class="form-control form-control-border" value="{{ $showdate->vehicle_re }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="zipcode">รายละเอียดเพิ่มเติม</label>
                                                        <input type="number" class="form-control form-control-border" value="{{ $showdate->description }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="zipcode">อายุการใช้งาน</label>
                                                        <input type="number" class="form-control form-control-border" value="{{ $showdate->lifetime }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--ข้อมูลทางธนาคาร-->  
                                        <div class="col-12">
                                            <div class="card shadow">
                                                <div class="card-header border-0 ">
                                                    <div class="card-header ">
                                                        <h3 class="card-title"> 
                                                            <i class="fas fa-wrench"></i> 
                                                            ประวัติการซ่อมบำรุงรักษาทรัพย์สิน
                                                        </h3>
                                                        <div class="text-right">
                                                            <!-- Button trigger modal -->
                                                            {{-- <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#addModal_bank"> --}}
                                                                {{-- <i class="fas fa-plus"></i>  --}}
                                                            {{-- </button> --}}
                                                            <a href="{{ url('form/edit/maintain/addhistory') }}" class="btn btn-primary mt-3 " role="button" aria-pressed="true">
                                                                <i class="fa fa-plus"></i>เพิ่มข้อมูล</a>
                                                            <!-- end Button trigger modal --> 
                                                        </div>
                                                    </div>            
                                                    <div class="card-body">
                                                        <table class="table text-center" id="history" width="100%">  
                                                            <thead>
                                                              <tr>
                                                                <th>ครั้ง</th>
                                                                <th>วัน เดือน ปี</th>
                                                                <th>รายการ</th>
                                                                <th>จำนวนเงิน</th>
                                                                <th>หมายเหตุ</th>
                                                                <th>จัดการ</th>
                                                              </tr>
                                                            </thead> 
                                                            <tbody>
                                                              <tr>
                                                                <th>1</th>
                                                                <th> 11-01-2566</th>
                                                                <th>ทาสีพื้น</th>
                                                                <th>1,500</th>
                                                                <th>-</th>   
                                                                <th>
                                                                    <div class="btn-group" role="group" >
                                                                        <a href="#" type="button" class="btn btn-success btn-sm ">
                                                                            <i class="far fa-eye"></i> 
                                                                        </a>
                                                                    </div>
                                                                    <div class="btn-group" role="group" >
                                                                        <a href="#" type="button" class="btn btn-warning btn-sm">
                                                                            <i class="far fa-edit"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="btn-group" role="group" >
                                                                        <a href="#" type="button" class="btn btn-danger btn-sm">
                                                                            <i class="far fa-trash-alt"></i>
                                                                        </a>
                                                                    </div>
                                                                </th>
                                                              </tr>
                                                            </tbody>   
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                              <!-- Button trigger modal -->
                                              <div class="text-center">
                                                <button class="btn btn-outline-primary" type="button">บันทึกร่าง</button>
                                                <button class="btn btn-outline-success" type="button">ขั้นตอนต่อไป</button>
                                                <button class="btn btn-outline-danger" type="button">ยกเลิก</button>
                                            </div>
                                        <!-- end Button trigger modal -->
                                        </div>
                                    </div>
                                </div>

                            <!--End ข้อมูลผู้ค้า-->
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
          </div>

            <!-- add Modal เพิ่มบัญชีธนาคาร -->
            <div class="modal fade" id="addModal_bank" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มบัญชีธนาคาร</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                        <label for="sharpen_id" class="col-3">รหัสธนาคาร:</label>
                            <div class="col-9">
                                <input type="number" id="sharpen_id" class="form-control" placeholder="กรอกรหัสธนาคาร">
                                @error('sharpen_id')
                                <span class="text-danger" style="font-size: 11.5px;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>   
                        <div class="form-group row">
                        <label for="sharpen_name" class="col-3">ชื่อธนาคาร</label>
                            <div class="col-9">
                                <select class="form-control " name="status" id="permission" required>
                                    <option value disabled selected>เลือกบัญชีธนาคาร</option>
                                    <option >ธนาคารกรุงเทพ จำกัด (มหาชน)</option>
                                    <option >ธนาคารกรุงไทย จำกัด (มหาชน)</option>
                                    <option >ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)</option>
                                    <option >ธนาคารกสิกรไทย จำกัด (มหาชน)</option>
                                    <option >ธนาคารทหารไทยธนชาต จำกัด (มหาชน)</option>
                                    <option >ธนาคารไทยพาณิชย์ จำกัด (มหาชน)</option>
                                    <option >ธนาคารซีไอเอ็มบี ไทย จำกัด (มหาชน)</option>
                                    <option >ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย) จำกัด (มหาชน)</option>
                                    <option >ธนาคารยูโอบี จำกัด (มหาชน) </option>
                                    <option >ธนาคารทิสโก้ จำกัด (มหาชน) </option>
                                    <option >ธนาคารเกียรตินาคินภัทร จำกัด (มหาชน) </option>
                                    <option >ธนาคารแลนด์ แอนด์ เฮ้าส์ จำกัด (มหาชน)  </option>
                                    <option >ธนาคารไอซีบีซี (ไทย) จำกัด (มหาชน) </option>
                                    <option >ธนาคารไทยเครดิต เพื่อรายย่อย จำกัด (มหาชน)</option>
                                    <option >ธนาคารเมกะ สากลพาณิชย์ จำกัด (มหาชน)  </option>
                                    <option >ธนาคารแห่งประเทศจีน (ไทย) จำกัด (มหาชน)</option>
                                    <option >ธนาคารเอเอ็นแซด (ไทย) จำกัด (มหาชน) </option>
                                    <option >ธนาคารซูมิโตโม มิตซุย ทรัสต์ (ไทย) จำกัด (มหาชน)  </option>
                                </select> 
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="sharpen_name" class="col-3">หมายเลขบัญชีธนาคาร</label>
                            <div class="col-9">
                                <input type="number" name="sharpen_name" class="form-control"placeholder="กรอกหมายเลขบัญชีธนาคาร">
                                @error('sharpen_name')
                                <span class="text-danger" style="font-size: 11.5px;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sharpen_name" class="col-3">ชื่อสาขาธนาคาร</label>
                            <div class="col-9">
                                <input type="text" name="sharpen_name" class="form-control" placeholder="ชื่อสาขาธนาคาร">
                                @error('sharpen_name')
                                <span class="text-danger" style="font-size: 11.5px;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sharpen_name" class="col-3">ชื่อเจ้าของบัญชีธนาคาร</label>
                            <div class="col-9">
                                <input type="text" name="sharpen_name" class="form-control" placeholder="ระบุชื่อเจ้าของบัญชีเป็นภาษาอังกฤษเท่านั้น">
                                @error('sharpen_name')
                                <span class="text-danger" style="font-size: 11.5px;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-success">บันทึกข้อมูล</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
                </div>
            </div>
            <!-- end Modal Merchant_information -->
    <!--Content data -->


    @section('script')
    	<script>
    		$(document).ready( function () {
    			$('#history').DataTable();
    		} );
    	</script>
    @endsection

@endsection