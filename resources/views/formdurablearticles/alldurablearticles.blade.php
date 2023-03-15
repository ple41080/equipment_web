@extends('layouts.master')

@section('tile','หน้าหลัก | จัดการครุภัณฑ์')

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
    	        <li class="breadcrumb-item active">จัดการครุภัณฑ์</li>
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
					<div class="card shadow">
						<div class="card-header border-0 pt-4">
							<h4>
								<i class="fas fa fa-cube"></i> 
								จัดการครุภัณฑ์
							</h4>
							<!-- Button add  -->		
							  <a href="{{route('form/adddurablearticles')}}" class="btn btn-primary mt-3 " role="button" aria-pressed="true"><i class="fa fa-plus"></i>เพิ่มข้อมูล</a>			
							  
							<!-- end Button add -->
						</div>
						<div class="card-body">
						  <table class="table" id="durablearticles_tb" width="100%">  
							<thead>
							  	<tr>
									<th style="width: 30px;">#</th>
									<th>หมายเลขครุภัณฑ์</th>
									<th>หมวดหมู่ครุภัณฑ์</th>
									<th>ประเภทครุภัณฑ์</th>
									<th>ชื่อครุภัณฑ์</th>
									<th>หน่วยงาน</th>
									<th>สถานะ</th>
									<th>มูลค่า</th>
									<th>ซ่อมบำรุง</th>
									<th>Actions</th>
							  	</tr>
							</thead> 
							<tbody>
								@foreach ($showdate as  $key=>$items)
									<tr>
										<td>{{ ++$key }}</td>
										<td>{{ $items->number_id }}</td>
										<td>{{ $items->category }}</td>
										<td>{{ $items->equipment }}</td>
										<td>{{ $items->name }}</td>
										<td>{{ $items->departments }}</td>
										<td>{{ $items->status }}</td>
										<td>{{ number_format($items->price,2) }}</td>
										<td>
											<div class="btn-group" role="group" >
												<a href="{{ url('form/viewmenddurablearticles/'.$items->id) }}" class="btn btn-info btn-sm"> 
													<i class="fas fa-search"></i> 
												</a>
											</div>
										</td>
										<td>
											<div class="btn-group" role="group" >
												<a href="{{ url('form/viewdurablearticles/'.$items->id) }}" type="button" class="btn btn-success btn-sm ">
												  <i class="far fa-eye"></i> 
												</a>
											{{-- </div> --}}
											{{-- <div class="btn-group" role="group" > --}}
												<a href="{{ url('form/durablearticles/edit/'.$items->id) }}" type="button" class="btn btn-warning btn-sm ">
												  <i class="far fa-edit"></i> 
												</a>
											{{-- </div> --}}
											{{-- <div class="btn-group" role="group" > --}}
												<a href="{{ url('form/adddurablearticles/delete/'.$items->id) }}" type="button" class="btn btn-danger btn-sm ">
												  <i class="far fa-trash-alt"></i> 
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
	<!-- start script -->
	@section('script')
	<script>
		$(document).ready( function () {
			$('#durablearticles_tb').DataTable();
		} );
	</script>
	@endsection
	<!-- stop script -->


@endsection




