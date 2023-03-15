@extends('layouts.master')

@section('tile','หน้าหลัก | จัดการผู้ใช้งาน')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> จัดการผู้ใช้งาน</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home')}}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">จัดการผู้ใช้งาน</li>
                </ol>
            </div>
        </div>
    </div>
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
                                จัดการผู้ใช้งาน
                            </h4>
                            <!-- Button trigger modal -->
                              <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#add_user">
                                <i class="fa fa-plus"></i> เพิ่มข้อมูล
                              </button>
                              {{-- <a href="#" class="btn btn-primary float-right veiwbutton" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add User</a> --}}
                            <!-- end Button trigger modal -->
                        </div>
                        <div class="card-body">
                            <table id="table_id" class="table table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        <th>phone</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result as $key=>$user )
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->rec_id }}</td>
                                        <td><a href="#"> <img src="{{ URL::to('/assets/images/'. $user->avatar) }}"alt="{{ $user->avatar }}"width="40px" class="rounded-circle" >
                                            <span class="font-weight-light pl-1">{{ $user->name }}</span>
                                        </a></td> 
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->position }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>
                                            @if ($user->role_name=='Admin')
                                                <span class="badge badge-pill badge-primary">{{ $user->role_name }}</span>
                                                @elseif ($user->role_name=='Super Admin')
                                                <span class="badge badge-pill badge-success">{{ $user->role_name }}</span>
                                                @elseif ($user->role_name=='Normal User')
                                                <span class="badge badge-pill badge-warning">{{ $user->role_name }}</span>
                                                @elseif ($user->role_name=='Client')
                                                <span class="badge badge-pill badge-info">{{ $user->role_name }}</span>
                                                @elseif ($user->role_name=='Employee')
                                                <span class="badge badge-pill badge-light">{{ $user->role_name }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->status=='Active')
                                                <a class="btn btn-success btn-sm  " 
                                                    href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="status">{{ $user->status }}</span>
                                                </a>
                                                @elseif ($user->status=='Inactive')
                                                <a class="btn btn-info btn-sm  " 
                                                   href="#" data-toggle="dropdown" aria-expanded="false">    
                                                    <span class="status">{{ $user->status }}</span>
                                                </a>
                                                @elseif ($user->status=='Disable')
                                                <a class="btn btn-danger btn-sm  " 
                                                   href="#" data-toggle="dropdown" aria-expanded="false">    
                                                    <span class="status">{{ $user->status }}</span>
                                                </a>
                                                @elseif ($user->status=='')
                                                <a class="btn btn-secondary btn-sm  " 
                                                   href="#" data-toggle="dropdown" aria-expanded="false"> 
                                                    <span class="status">N/A</span>
                                                </a>
                                            @endif                                                                       
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                <a class="btn btn-warning edit_user" href="#" data-toggle="modal" data-target="#edit_user{{ $user->rec_id }}"><i class="far fa-edit"></i></a>
                                                <a class="btn btn-danger userDelete" href="{{ url('user/delete/'.$user->id)}}"><i class="far fa-trash-alt"></i> </a>
                                               
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
<!-- Add User Modal -->
    <div id="add_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user/add/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Emaill Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <label>Role Name</label>
                                <select class="custom-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name" value="{{ old('role_name') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($role_name as $role )
                                    <option value="{{ $role->role_type }}">{{ $role->role_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Position</label>
                                <select class="custom-select @error('position') is-invalid @enderror" name="position" id="position" value="{{ old('position') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($position as $positions )
                                    <option value="{{ $positions->position }}">{{ $positions->position }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="number" id="" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Department</label>
                                <select class="custom-select @error('phone') is-invalid @enderror" name="department" id="department" value="{{ old('phone') }}" >
                                    <option selected disabled> --Select --</option>
                                    @foreach ($department_type as $department )
                                    <option value="{{ $department->department_type  }}">{{ $department->department_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <label>Status</label>
                                <select class="custom-select @error('status') is-invalid @enderror" name="status" id="status" value="{{ old('status') }}">
                                    <option selected disabled> --Select --</option>
                                    @foreach ($status_user as $status )
                                    <option value="{{ $status->type_name }}">{{ $status->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Photo</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                        </div>
                        <br>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Repeat Password</label>
                                <input type="password" class="form-control " name="password_confirmation" 
                                       placeholder="Choose Repeat Password">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Add User Modal -->
<!-- Edit User Modal -->
@foreach ($result as $key=>$user )
    <div id="edit_user{{ $user->rec_id }}" class="modal custom-modal fade" role="dialog">
       <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Edit User</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <form action="{{route('update')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                   <div class="modal-body">
                   <input type="hidden" name="rec_id" id="e_id" value="{{ $user->rec_id }}">
                   <div class="row"> 
                       <div class="col-sm-6"> 
                           <div class="form-group">
                               <label>Full Name <span class="text-danger">*</span></label>
                               <input class="form-control" type="text" name="name" id="e_name" value="{{$user->name}}" />
                           </div>
                       </div>
                       <div class="col-sm-6"> 
                           <label>Emaill Address</label>
                           <input class="form-control" type="text" name="email" id="e_email" value="{{$user->email}}"/>
                       </div>
                   </div>
                   <div class="row"> 
                       <div class="col-sm-6"> 
                           <label>Role Name</label>
                           <select class="custom-select" name="role_name" id="e_role_name">
                               @foreach ($role_name as $role )
                               <option value="{{ $role->role_type }}">{{ $role->role_type }}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="col-sm-6"> 
                           <label>Position</label>
                           <select class="custom-select" name="position" id="e_position">
                               @foreach ($position as $positions )
                                    <option value="{{ $positions->position }}">{{ $positions->position }}</option>
                               @endforeach
                           </select>
                       </div>
                   </div>
                   <br>
                   <div class="row"> 
                       <div class="col-sm-6"> 
                           <div class="form-group">
                               <label>Phone</label>
                               <input class="form-control" type="text" id="e_phone_number" name="phone" value="{{$user->phone_number }}" placeholder="Enter Phone">
                          </div>
                       </div>
                       <div class="col-sm-6"> 
                           <label>Department</label>
                           <select class="custom-select" name="department" id="department">
                               <option selected disabled> --Select --</option>
                               @foreach ($department_type as $department )
                               <option value="{{ $department->department_type  }}">{{ $department->department_type }}</option>
                               @endforeach
                           </select>
                       </div>
                   </div>
                   <div class="row"> 
                       <div class="col-sm-6"> 
                           <label>Status</label>
                           <select class="custom-select" name="status" id="e_status">
                               @foreach ($status_user as $status )
                               <option value="{{ $status->type_name }}">{{ $status->type_name }}</option>
                               @endforeach
                           </select>
                       </div>
                       <div class="col-sm-6"> 
                           <label>Photo</label>
                           <input  type="file" class="form-control" name="hidden_image" id="e_image"  value="" />
                       </div>
                   </div>
                   <br>
                   <div class="submit-section">
                       <button type="submit" class="btn btn-primary submit-btn">Update</button>
                   </div>
               </form>
               </div>
            </div>
        </div>
    </div>
@endforeach
<!-- /Edit User Modal -->

    @section('script')
    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
           $("#table_id").DataTable();       //capital "D"
         });
    </script>
    <script>
        $(document).on('click','.edit_user',function() { 
                var _this = $(this).parents('tr');
                $('#e_id').val(_this.find('.id').text());
                $('#e_name').val(_this.find('.name').text());
                $('#e_email').val(_this.find('.email').text());
                $('#e_phone_number').val(_this.find('.phone_number').text());
                $('#e_image').val(_this.find('.image').text());
                var name_role = (_this.find(".role_name").text());
                var _option = '<option selected value="' + name_role+ '">' + _this.find('.role_name').text() + '</option>'
                $( _option).appendTo("#e_role_name");
                var position = (_this.find(".position").text());
                var _option = '<option selected value="' +position+ '">' + _this.find('.position').text() + '</option>'
                $( _option).appendTo("#e_position");
                var department = (_this.find(".department").text());
                var _option = '<option selected value="' +department+ '">' + _this.find('.department').text() + '</option>'
                $( _option).appendTo("#e_department");
                var statuss = (_this.find(".statuss").text());
                var _option = '<option selected value="' +statuss+ '">' + _this.find('.statuss').text() + '</option>'
                $( _option).appendTo("#e_status");
        });
        $('.userDelete').on('click', function (e) {
         e.preventDefault();
         const url = $(this).attr('href');
            swal({
                 title: 'Are you sure?',
                 text: 'This record and it`s details will be permanantly deleted!',
                 icon: 'warning',
                 buttons: ["Cancel", "Yes!"],
                 }).then(function(value) {
                 if (value) {
                 window.location.href = url;
               }
            });
        });
       
       
       
       
       
    </script>
     
    @endsection


  @endsection