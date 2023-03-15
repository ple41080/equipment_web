@extends('layouts.app')

@section('content')
<style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
      }
      body{
        margin: 0;
        padding: 0;
        background: linear-gradient(120deg,#66CCFF, #FF99FF);
        height: 100vh;
        overflow: hidden;
    }
  </style>
@section('content')

  <section class="d-flex align-items-center min-vh-100">
    <div class="container">
      <div class="row justify-content-center">
        <section class="col-lg-6" >
          <div class="card shadow p-3 p-md-4" >
               {{-- message --}}
            {!! Toastr::message() !!} 
            <div class="text-center">
                <a href=""><img src="{{ URL::to('assets/images/lrulogo1.png') }}" width="150" height="150" alt=""></a>
            </div>
            <h1 class="text-center text-primary font-weight-bold"><b>LRU</b>-INVEN</h1>
            <h4 class="text-center">ระบบบริหารจัดการครุภัณฑ์</h4> 
            <div class="card-body" >
              <!-- HTML Form Login --> 
              <form  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group col-sm-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text px-2">ชื่อผู้ใช้งาน</div>
                    </div>
                    <input  type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" placeholder="Enter email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  </div>
                </div>
                <div class="form-group col-sm-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text px-3">รหัสผ่าน</div>
                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                            name="password" placeholder="Enter Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block"> เข้าสู่ระบบ</button>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

@endsection
