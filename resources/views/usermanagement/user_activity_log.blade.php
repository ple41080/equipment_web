@extends('layouts.master')

@section('tile','หน้าหลัก | Activity log')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Activity log</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a href="#">จัดการผู้ใช้งาน</a></li>
            <li class="breadcrumb-item active">Activity log</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Content Header (Page header) -->
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header border-0 pt-4">
                        <h4>
                            <i class="fas fa fa-cube"></i> 
                            Activity log
                        </h4>
                    </div>
                    <div class="card-body">
                      <table class="table" id="users_Activity_log" width="100%">  
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Role Name</th>
                            <th>Modify</th>
                            <th>Date Time</th>		
                          </tr>
                        </thead> 
                        <tbody>
                            @foreach ($activityLog as $key => $item)
                              <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->role_name }}</td>
                                <td>{{ $item->modify_user }}</td>
                                
                                <td>{{ thaidate('j-m-y',$item->date_time) }}</td>     
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
      $('#users_Activity_log').DataTable();
    });
  </script>
@endsection

@endsection