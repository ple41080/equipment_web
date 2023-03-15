@extends('layouts.master')

@section('tile','หน้าหลัก | ประเภทวัสดุ')

@section('content')

{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> ประเภทวัสดุ</h1>
    	    </div>
    	    <!-- /.col -->
    	    <div class="col-sm-6">
    	      <ol class="breadcrumb float-sm-right">
    	        <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
                <li class="breadcrumb-item"><a href="#">ตั้งค่า</a></li>
    	        <li class="breadcrumb-item active">ประเภทวัสดุ</li>
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
								ประเภทวัสดุ
							</h4>
							<!-- Button add  -->		
							  <a href="#" class="btn btn-primary mt-3 " data-toggle="modal" data-target="#add_materialtype"><i class="fa fa-plus"></i>เพิ่มข้อมูล</a>		
							  
							<!-- end Button add -->
						</div>
						<div class="card-body">
						  <table class="table data-table" id="allmaterialtype" width="100%">  
							<thead>
							  <tr>
								<th>#</th>
								<th>ชื่อประเภทวัสดุ</th>
                                <th>status</th>
								<th class="text-right">Actions</th>
							  </tr>
							</thead> 
							<tbody>
                                @foreach ($show as  $items)
                                	<tr>	
                                		<td>{{ $items->id }}</td>
                                		<td>{{ $items->material_name}}</td>
										<td class="e_status">
											@if ($items->status=='Active')
												<span class=" badge-pill badge-success">{{ $items->status }}</span>
												@elseif ($items->status=='Inactive')
												<span class=" badge-pill badge-secondary">{{ $items->status }}</span>
											@endif
										</td>
                                		<td class="text-right">
                                			<div class="btn-group" role="group" >
												<a class="btn btn-warning btn-sm edit_material_name"  href="#" data-toggle="modal" data-target="#edit_material_name{{$items->id}}">	
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

		<!-- Add ประเภทวัสดุ Modal -->
			<div id="add_materialtype" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="{{ route('form/store/materialtype/save')}}"  method="POST" enctype="multipart/form-data">  
								@csrf
								<div class="form-group">
									<label>ชื่อประเภทวัสดุ<span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="material_name" name="material_name">
								</div>
								<div class="submit-section">
									<button type="submit" class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!-- /Add ประเภทวัสดุ Modal -->
		@foreach ($show as  $items)
		<!-- Edit departments_small Modal -->
			<div id="edit_material_name{{$items->id}}" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="{{ route('form/store/materialtype/update') }}" method="POST">   
								@csrf
								<input type="hidden" name="id" id="e_id" value="{{ $items->id }}"/>
								<div class="form-group">
									<label>ชื่อหน่วยงานย่อย<span class="text-danger">*</span></label>
									<input class="form-control" type="text" id="e_material_name" name="material_name" value="{{ $items->material_name}}"/>
								</div>
								<div class="form-group ">
									<label class="col-form-label col-form-label-sm">สถานะ <span class="text-danger">*</span></label>
									<select class="custom-select " name="status" id="e_status">
											<option value="Active">Active</option>
											<option value="Inactive">Inactive</option>
									</select>    
								  </div>
								<div class="submit-section"> 
									<button type="submit" class="btn btn-primary submit-btn">Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<!-- Edit departments_small Modal  -->
		@endforeach
	
	  </div>
	<!-- end Content Header (Page header) -->	
	

	@section('script')
		<script>
			$(document).ready( function () {
				$('#allmaterialtype').DataTable();
			} );
		</script>
		 {{-- update --}}
		 <script>
			$(document).on('click','.edit_material_name',function()
			{
				var _this = $(this).parents('tr');
				$('#e_id').val(_this.find('.e_id').text());
				$('#e_material_name').val(_this.find('.material_name').text());
				// status
				var status = (_this.find(".status").text());
				var _option = '<option selected value="' +status+ '">' + _this.find('.status').text() + '</option>'
				$( _option).appendTo("#e_status");
			});
		</script>
	@endsection

@endsection




