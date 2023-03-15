@extends('layouts.master')

@section('tile','หน้าหลัก | แบบฟอร์มขอเบิกพัสดุ')

@section('content')

{!! Toastr::message() !!}
<!-- Content Header (Page header) -->
	<div class="content-header">
    	<div class="container-fluid">
    	  <div class="row mb-2">
    	    <div class="col-sm-6">
    	      <h1 class="m-0"> แบบฟอร์มขอเบิกพัสดุ</h1>
    	    </div>
    	    	<div class="col-sm-6">
    	    	  	<ol class="breadcrumb float-sm-right">
    	    	    	<li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
            	    	<li class="breadcrumb-item"><a href="#">วัสดุ</a></li>
    	    	    	<li class="breadcrumb-item active">แบบฟอร์มขอเบิกพัสดุ</li>
    	    	 	</ol>
    	    	</div>
    	  	</div>
    	</div>
    </div>

	

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
						
					<div class="col-lg-12">
						<div class="card shadow-sm">
							<div class="card-header pt-4">
								<h3 class="card-title"> 
									<i class="fas fa-user"></i> 
									แบบฟอร์มขอเบิกพัสดุ
								</h3>
							</div>
							<div class="card-body px-5">
								<div class="row">
									<div class="col-12">
										<div class="form-row"> 
											<div class="col-md-4 mb-3 ">
											 	 <label for="validationDefault01">วันที่</label>
											  	<input type="date" class="form-control " id="validationDefault01" required>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-4 mb-3">
											  <label for="validationDefault01">ชื่อ-สกุล</label>
											  <input type="text" class="form-control " id="validationDefault01"  placeholder="ชื่อ - สกุล" required>
											</div>
											<div class="col-md-4 mb-3">
											  <label for="validationDefault02">ตำแหน่ง</label>
											  <input type="text" class="form-control " id="validationDefault02"  placeholder="ตำแหน่ง" required>
											</div>
											<div class="col-md-4 mb-3">
												<label for="validationDefault02">ฝ่าย/งาน </label>
												<input type="text" class="form-control " id="validationDefault02"  placeholder="ฝ่าย / งาน" required>
											  </div>
										</div>		             
										<div class="form-group">
											<label for="first_name">ขอเบิกเพื่อใช้ใน</label>
											<input type="text" class="form-control " name="first_name" id="first_name" placeholder="ขอเบิกเพื่อใช้ใน" required>
										</div>
										
										<div class="form-group">
											<label for="email">โดยมีรายการเบิกพัสดุ ดังนี้</label>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-white" id="tableEstimate">
												<thead>
													<tr>
														<th style="width: 20px">#</th>
														<th class="col-sm-6">รายการ</th>
														<th class="col-md-1">หน่วยนับ</th>
														<th style="width:100px;">จำนวน</th>
														<th style="width:80px;">ราคาหน่วยละ</th>
														<th>จำนวนเงิน</th>
														<th> </th>
													</tr>
												</thead>
												<tbody>
												<tr>
													<td>1</td>
													<td><input class="form-control" style="min-width:150px" type="text" id="item" name="item[]"></td>
													<td><input class="form-control"style="min-width:150px" type="text" id="description" name="description[]"></td>
													<td><input class="form-control unit_price" style="width:100px" type="text" id="unit_cost" name="unit_cost[]"></td>
													<td><input class="form-control qty" style="width:80px" type="text" id="qty" name="qty[]"></td>
													<td><input class="form-control total" style="width:120px" type="text" id="amount" name="amount[]" value="0" readonly></td>
													<td><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn"><i class="fa fa-plus"></i></a></td>
												</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td colspan="3" class="text-right">Total</td>
														<td>
															<input class="form-control text-right total" type="text" id="sum_total" name="total" value="0" readonly>
														</td>
													</tr>
												</tbody>
											</table>                               
										</div>														
										<div class="text-center ">
											<button type="submit" class="btn btn-lg btn-primary  ">บันทีก</button>
											<button type="button" class="btn btn-lg btn-danger ">ยกเลิก</button>
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





	

	@section('script')
		<script>
			$(document).ready( function () {
				$('#durablearticles_tb').DataTable();
			} );

			var rowIdx = 1;
$("#addBtn").on("click", function ()
{
    // Adding a row inside the tbody.
    $("#tableEstimate tbody").append(`
    <tr id="R${++rowIdx}">
        <td class="row-index text-center"><p> ${rowIdx}</p></td>
        <td><input class="form-control" type="text" style="min-width:150px" id="item" name="item[]"></td>
        <td><input class="form-control" type="text" style="min-width:150px" id="description" name="description[]"></td>
        <td><input class="form-control unit_price" style="width:100px" type="text" id="unit_cost" name="unit_cost[]"></td>
        <td><input class="form-control qty" style="width:80px" type="text" id="qty" name="qty[]"></td>
        <td><input class="form-control total" style="width:120px" type="text" id="amount" name="amount[]" value="0" readonly></td>
        <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="far fa-trash-alt"></i></a></td>
    </tr>`);
});
$("#tableEstimate tbody").on("click", ".remove", function ()
{
    // Getting all the rows next to the row
    // containing the clicked button
    var child = $(this).closest("tr").nextAll();
    // Iterating across all the rows
    // obtained to change the index
    child.each(function () {
    // Getting <tr> id.
    var id = $(this).attr("id");
    // Getting the <p> inside the .row-index class.
    var idx = $(this).children(".row-index").children("p");
    // Gets the row number from <tr> id.
    var dig = parseInt(id.substring(1));
    // Modifying row index.
    idx.html(`${dig - 1}`);
    // Modifying row id.
    $(this).attr("id", `R${dig - 1}`);
});
    // Removing the current row.
    $(this).closest("tr").remove();
    // Decreasing total number of rows by 1.
    rowIdx--;
});
$("#tableEstimate tbody").on("input", ".unit_price", function () {
    var unit_price = parseFloat($(this).val());
    var qty = parseFloat($(this).closest("tr").find(".qty").val());
    var total = $(this).closest("tr").find(".total");
    total.val(unit_price * qty);
    calc_total();
});
$("#tableEstimate tbody").on("input", ".qty", function () {
    var qty = parseFloat($(this).val());
    var unit_price = parseFloat($(this).closest("tr").find(".unit_price").val());
    var total = $(this).closest("tr").find(".total");
    total.val(unit_price * qty);
    calc_total();
});
function calc_total() {
    var sum = 0;
    $(".total").each(function () {
    sum += parseFloat($(this).val());
    });
    $(".subtotal").text(sum);
    
    // var amounts = sum;
    // var tax     = 100;
    // $(document).on("change keyup blur", "#qty", function() 
    // {
        // var qty = $("#qty").val();
        // var discount = $(".discount").val();
        // $(".total").val(amounts * qty);
        // $("#sum_total").val(amounts * qty);
        // $("#tax_1").val((amounts * qty)/tax);
        // $("#grand_total").val((parseInt(amounts)) - (parseInt(discount)));
    // }); 
}

			
		</script>
	@endsection



@endsection




