@extends('layouts.master')

@section('tile','หน้าหลัก | บันทึกการซ่อมบำรุงครุภัณฑ์')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="content-header">
    	    <div class="container-fluid">
    	        <div class="row mb-2">
    	            <div class="col-sm-6">
    	              <h1 class="m-0"> ประวัติการซ่อมบำรุงครุภัณฑ์</h1>
    	            </div>
    	            <div class="col-sm-6"><!-- /.col -->
    	              	<ol class="breadcrumb float-sm-right">
    	                	<li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
                        	<li class="breadcrumb-item"><a href="#">ครุภัณฑ์</a></li>
    	                	<li class="breadcrumb-item active">ประวัติการซ่อมบำรุงครุภัณฑ์</li>
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
                        <div class="card shadow">
                            <div class="card-header border-0 pt-4">
                                {{-- <h4> --}}
                                    {{-- <i class="fas fa fa-cube"></i>  --}}
                                    {{-- ประวัติการซ่อมบำรุงรักษาครุภัณฑ์ --}}
                                {{-- </h4> --}}
                                <div class="text">
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#staticBackdrop">
                                            <i class="fas fa-plus"></i> เพื่มรายการ
                                        </button>
                                    <!-- end Button trigger modal --> 
                                </div>
                                {{-- <div class="col-auto float-right ml-auto"> --}}
                                    {{-- <div class="btn-group btn-group-sm"> --}}
                                        {{-- <button class="btn btn-outline-primary">CSV</button> --}}
                                        {{-- <button class="btn btn-outline-primary"><a href=""@click.prevent="printme" target="_blank">PDF</a></button> --}}
                                        {{-- <button class="btn btn-outline-primary"><i class="fa fa-print fa-lg"></i><a href="" @click.prevent="printme" target="_blank"> Print</a></button> --}}
                                    {{-- </div> --}}
                                {{-- </div>   --}}
                            </div> 
                            <div class="card-body">
                                <table class="table text-center" id="viewmend" width="100%">  
                                    <thead>
                                      <tr>
                                        <th style="width: 20px">#</th>
                                        <th class="col-md-2">วัน เดือน ปี</th>
                                        <th class="col-md-3">รายการ</th>
                                        <th>จำนวนเงิน</th>
                                        <th>หมายเหตุ</th>
                                        <th>พิมพ์</th>
                                        <th>จัดการ</th>
                                      </tr>
                                    </thead> 
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="text-left"><a href="#">#INV-0002</a></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                <button class="btn btn-outline-primary btn-sm"><i class="fa fa-print fa-lg"></i><a href=""> Print</a></button>
                                            </th>   
                                            <th>
                                                {{-- <div class="btn-group" role="group" > --}}
                                                    {{-- <a href="#" type="button" class="btn btn-success btn-sm "> --}}
                                                        {{-- <i class="far fa-eye"></i>  --}}
                                                    {{-- </a> --}}
                                                {{-- </div> --}}
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
                </div>
            </div>
          </div>

    <!--Content data -->



    <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">ประวัติการซ่อมบำรุงรักษาครุภัณฑ์</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body px-1 px-md-5">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                          <label for="repairnotice">เลขที่ใบแจ้งซ่อม</label>
                                          <input type="text" id="repairnotice" name="repairnotice" class="form-control" placeholder="เลขที่ใบแจ้งซ่อม">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="name">ชื่อร้าน/หจก/บริษัท</label>
                                          <input type="text" class="form-control" name="name" id="name" placeholder="ชื่อร้าน/หจก/บริษัท">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="repairdate">วันที่ซ่อม</label>
                                            <input type="date" class="form-control" id="repairdate"  placeholder="วันที่ซ่อม">
                                          </div>
                                      </div>
                                      
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
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
                                </div>
                            </div>
                        </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    <!-- Button trigger modal -->
    @section('script')
        <script>
            $(document).ready( function () {
                $('#viewmend').DataTable();
            } );
        </script>

        {{-- add multiple row --}}
        <script>
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