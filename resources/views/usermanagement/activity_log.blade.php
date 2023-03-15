@extends('layouts.master')

@section('tile','หน้าหลัก | Activity User')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Activity User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a href="#">จัดการผู้ใช้งาน</a></li>
            <li class="breadcrumb-item active">Activity User</li>
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
                            Activity User
                        </h4>            
                    </div>
                    <div class="card-body">
                      <table class="table " id="users_log" width="100%">  
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Date Time</th>
                          </tr>
                        </thead> 
                        <tbody>
                          @foreach ($activityLog as $key => $item)
                            <tr>
                              <td>{{ ++$key }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->email }}</td>
                              <td>
                                @if ($item->description =='Online')
                                    <a class="badge badge-success" 
                                        href="#" data-toggle="dropdown" aria-expanded="false">
                                        <span class="status">{{ $item->description }}</span>
                                    </a>
                                    @elseif ($item->description =='Offline')
                                    <a class="badge badge-danger" 
                                       href="#" data-toggle="dropdown" aria-expanded="false">    
                                        <span class="status">{{ $item->description }}</span>
                                    </a>
                                @endif                                                              
                              </td>
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
      $('#users_log').DataTable();
    } );
  </script>
@endsection

@endsection