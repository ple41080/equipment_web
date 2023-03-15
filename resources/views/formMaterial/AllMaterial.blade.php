@extends('layouts.master')

@section('tile','หน้าหลัก | ทะเบียนวัสดุ')

@section('content')

{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> ทะเบียนวัสดุ</h1>
    	    </div>
    	    	<div class="col-sm-6">
    	    	  	<ol class="breadcrumb float-sm-right">
    	    	    	<li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
            	    	<li class="breadcrumb-item"><a href="#">วัสดุ</a></li>
    	    	    	<li class="breadcrumb-item active">ทะเบียนวัสดุ</li>
    	    	 	</ol>
    	    	</div>
    	  	</div>
    	</div>
    </div>

	

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card shadow">
						<div class="card-header border-0 pt-4">
							<h4>
								<i class="fas fa fa-cube"></i> 
								จัดการทะเบียนวัสดุ
							</h4>
							<!-- Button add  -->		
							  <a href="" class="btn btn-primary mt-3 " role="button" aria-pressed="true"><i class="fa fa-plus"></i>เพิ่มข้อมูล</a>		
							  
							<!-- end Button add -->
						</div>
						<div class="card-body">
						  <table class="table" id="durablearticles_tb" width="100%">  
							<thead>
								  <tr>
									<th style="width: 30px;">#</th>
									<th>หมายเลขวัสดุ</th>
									<th>ประเภทวัสดุ</th>
									<th>ชื่อวัสดุ</th>
									<th>หน่วยนับ</th>
									<th>จำนวนคงเหลือ</th>
									<th>Actions</th>
								  </tr>
							</thead> 
							<tbody>
								
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>			
										<td>
											<div class="btn-group" role="group" >
												<a href="#" type="button" class="btn btn-warning btn-sm"> 
													<i class="far fa-edit"></i> 
												</a>
											</div>
											<div class="btn-group" role="group" >
												<a href="#" type="button" class="btn btn-danger btn-sm">
												  {{-- <i class="far fa-gear"></i>  --}}
												  <i class="far fa-trash-alt"></i> 
												</a>
											</div>
										</td>
									</tr>
								
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




