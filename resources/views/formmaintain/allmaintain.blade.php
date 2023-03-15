@extends('layouts.master')

@section('tile','หน้าหลัก | บันทึกการซ่อมบำรุงครุภัณฑ์')

@section('content')

{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> บันทึกการซ่อมบำรุงครุภัณฑ์</h1>
    	    </div>
    	    <!-- /.col -->
    	    <div class="col-sm-6">
    	      	<ol class="breadcrumb float-sm-right">
    	        	<li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
                	<li class="breadcrumb-item"><a href="#">ครุภัณฑ์</a></li>
    	        	<li class="breadcrumb-item active">บันทึกการซ่อมบำรุงครุภัณฑ์</li>
    	     	</ol>
    	    </div>
    	    <!-- /.col -->
    	  </div><!-- /.row -->
    	</div><!-- /.container-fluid -->
    </div>

	{{-- <div class="content"> --}}
		{{-- <div class="container-fluid"> --}}
			{{-- <div class="row"> --}}
				{{-- <div class="col-12"> --}}
					{{-- <div class="card shadow"> --}}
						{{-- <div class="card-header border-0 pt-4"> --}}
							{{-- <h4> --}}
								{{-- <i class="fas fa fa-cube"></i>  --}}
								{{-- บันทึกการซ่อมบำรุงครุภัณฑ์ --}}
							{{-- </h4> --}}
							<!-- Button add  -->		
							  {{-- <a href="{{route('form/add/maintain')}}" class="btn btn-primary mt-3 "><i class="fa fa-plus"></i>เพิ่มข้อมูล</a>			 --}}
							<!-- end Button add -->
						{{-- </div> --}}
						{{-- <div class="card-body"> --}}
						  {{-- <table class="table" id="allhowtogets" width="100%">   --}}
							{{-- <thead> --}}
							  {{-- <tr> --}}
								{{-- <th>#</th> --}}
								{{-- <th>วันที่ดำเนินการ</th> --}}
                                {{-- <th>เลขที่ใบสั่ง</th> --}}
								{{-- <th>รหัสครุภัณฑ์</th> --}}
                                {{-- <th>หน่วยงาน</th> --}}
								{{-- <th class="text-right">Actions</th> --}}
							  {{-- </tr> --}}
							{{-- </thead>  --}}
							{{-- <tbody> --}}
{{-- 								 --}}
									{{-- <tr>	 --}}
										{{-- <td style="width: 30px;"></td> --}}
                                        {{-- <td></td> --}}
                                        {{-- <td></td> --}}
										{{-- <td></td> --}}
										{{-- <td></td> --}}
										{{-- <td class="text-right"> --}}
                                            {{-- <div class="btn-group" role="group" > --}}
                                                {{-- <a href="" type="button" class="btn btn-secondary btn-sm "> --}}
                                                  {{-- <i class="far fa-eye"></i>  --}}
                                                {{-- </a> --}}
                                            {{-- </div> --}}
											{{-- <div class="btn-group" role="group" > --}}
												{{-- <a href="" type="button" class="btn btn-warning btn-sm "> --}}
												  {{-- <i class="far fa-edit"></i>  --}}
												{{-- </a> --}}
											{{-- </div> --}}
											{{-- <div class="btn-group" role="group" > --}}
												{{-- <a href="#" type="button" class="btn btn-danger btn-sm "> --}}
												  {{-- <i class="far fa-trash-alt"></i>  --}}
												{{-- </a> --}}
											{{-- </div> --}}
										{{-- </td> --}}
									{{-- </tr> --}}
{{-- 							 --}}
							{{-- </tbody>     --}}
						{{-- </table> --}}
					  {{-- </div> --}}
					{{-- </div> --}}
				{{-- </div> --}}
			{{-- </div> --}}
		{{-- </div> --}}
	  {{-- </div> --}}
	<!-- end Content Header (Page header) -->	

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card shadow">
						<div class="card-header border-0 pt-4">
							<h4>
								<i class="fas fa fa-cube"></i> 
								จัดการครุภัณฑ์
							</h4>
							<!-- Button add  -->		
							  <a href="{{route('form/add/maintain')}}" class="btn btn-primary mt-3 " role="button" aria-pressed="true"><i class="fa fa-plus"></i>เพิ่มข้อมูล</a>		
							  
							<!-- end Button add -->
						</div>
						<div class="card-body">
						  <table class="table" id="durablearticles_tb" width="100%">  
							<thead>
								  <tr>
									<th style="width: 30px;">#</th>
									<th>หมายเลขครุภัณฑ์</th>
									{{-- <th>หมวดหมู่ครุภัณฑ์</th> --}}
									{{-- <th>ประเภทครุภัณฑ์</th> --}}
									<th>ชื่อครุภัณฑ์</th>
									<th>หน่วยงานหลัก</th>
									<th>หน่วยงานย่อย</th>
									<th>สถานะ</th>
									{{-- <th>มูลค่า</th> --}}
									<th>Actions</th>
								  </tr>
							</thead> 
							<tbody>
								@foreach ($showdate as  $key=>$items)
									<tr>
										<td>{{ ++$key }}</td>
										<td>{{ $items->number_id }}</td>
										{{-- <td>{{ $items->category }}</td> --}}
										{{-- <td>{{ $items->equipment }}</td> --}}
										<td>{{ $items->name }}</td>
										<td>{{ $items->departments }}</td>
										<td>{{ $items->departments_small}}</td>
										<td>{{ $items->status }}</td>
										{{-- <td>{{ number_format($items->price,2) }}</td> --}}
										<td>
											<div class="btn-group" role="group" >
												<a href="{{ url('form/edit/maintain/addhistory/'.$items->id) }}" type="button" class="btn btn-primary btn-sm "> 
												  {{-- <i class="far fa-gear"></i>  --}}
												  <i class="fa fa-plus-circle"></i>
												</a>
											</div>
											<div class="btn-group" role="group" >
												<a href="{{ url('form/edit/maintain/'.$items->id) }}" type="button" class="btn btn-warning btn-sm ">
												  {{-- <i class="far fa-gear"></i>  --}}
												  <i class="fas fa-cogs"></i>
												</a>
											</div>
										</td>
									</tr>
								@endforeach
							</tbody>    
						</table>
					  </div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- end Content Header (Page header) -->																														





	

	@section('script')
		<script>
			$(document).ready( function () {
				$('#durablearticles_tb').DataTable();
			} );
		</script>
	@endsection




@endsection




