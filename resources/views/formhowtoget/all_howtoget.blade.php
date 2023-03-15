@extends('layouts.master')

@section('tile','หน้าหลัก | จัดการวิธีได้มา')

@section('content')

{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> จัดการวิธีได้มา</h1>
    	    </div>
    	    <!-- /.col -->
    	    <div class="col-sm-6">
    	      <ol class="breadcrumb float-sm-right">
    	        <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
    	        <li class="breadcrumb-item active">จัดการวิธีได้มา</li>
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
								จัดการวิธีได้มา
							</h4>
							<!-- Button add  -->		
							  <a href="" class="btn btn-primary mt-3 " data-toggle="modal" data-target="#add_department"><i class="fa fa-plus"></i>เพิ่มข้อมูล</a>			
							  
							<!-- end Button add -->
						</div>
						<div class="card-body">
						  <table class="table" id="allhowtogets" width="100%">  
							<thead>
							  <tr>
								<th>ID</th>
								<th>ชื่อวิธีได้มา</th>
								<th class="text-right">Actions</th>
							  </tr>
							</thead> 
							<tbody>
								@foreach ($show as  $items)
									<tr>	
										<td>{{ $items->id }}</td>
										<td>{{ $items->howtogets_type }}</td>
										<td class="text-right">
											<div class="btn-group" role="group" >
												<a href="" type="button" class="btn btn-warning btn-sm ">
												  <i class="far fa-edit"></i> 
												</a>
											</div>
											<div class="btn-group" role="group" >
												<a href="#" type="button" class="btn btn-danger btn-sm ">
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
	<!-- Add Training Type Modal -->
	<div id="add_department" class="modal custom-modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add New</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('form/all/main_agency/save') }}" method="POST">  
						@csrf
						<div class="form-group">
							<label>ชื่อวิธีได้มา <span class="text-danger">*</span></label>
							<input class="form-control" type="text" id="howtogets_type" name="howtogets_type">
						</div>
						<div class="submit-section">
							<button type="submit" class="btn btn-primary submit-btn">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Training Type Modal -->
	

	@section('script')
		<script>
			$(document).ready( function () {
				$('#allhowtogets').DataTable();
			} );
		</script>
	@endsection




@endsection




