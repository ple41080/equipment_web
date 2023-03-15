    <!--sidebar-->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('home')}}" class="brand-link">
                <img src="{{URL::to('assets/images/lrulogo1.png')}}" 
                     alt="Admin Logo" 
                     class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">LRU | INVEN</span>
            </a>
            <div class="sidebar">
                
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home')}}" class="nav-link ">
                                <i class="nav-icon fas fa-home"></i>
                                <p>หน้าหลัก</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{url('admin/procurement')}}" class="nav-link ">
                                <i class="nav-icon fa fa-cart-arrow-down"></i>
                                <p>จัดซื้อ - จัดจ้าง</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/publicsector')}}" class="nav-link ">
                                <i class="nav-icon fas fa fa fa-users"></i>
                                <p>ฐานข้อมูลผู้ค่าภาครัฐ</p>
                            </a>
                        </li> --}}
                        <li class="nav-item "> 
                            <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa fa-cubes"></i>
                              <p>
                                ครุภัณฑ์
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- <li class="nav-item">
                                    <a href="./index.html" class="nav-link ">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>ประเภทครุภัณฑ์</p>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{route('form/alldurablearticles')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>รายการครุภัณฑ์</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item"> --}}
                                    {{-- <a href="{{route('form/all/maintain')}}" class="nav-link"> --}}
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        {{-- <p>บันทึกการบำรุงครุภัณฑ์</p> --}}
                                    {{-- </a> --}}
                                {{-- </li> --}}
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ตัดจำหน่ายครุภัณฑ์</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>โอนย้ายครุภัณฑ์</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa fa-cube"></i>
                              <p>
                                วัสดุ
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('form/all/Material')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ทะเบียนวัสดุ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('form/Create/Material')}}" class="nav-link">  
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>เบิกวัสดุ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>รับวัสดุ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ยืมวัสดุ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>คืนวัสดุ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ตัดจำหน่ายพัสดุ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        @if (Auth::user()->role_name=='Admin')
                            <li class="nav-item ">
                                <a href="#" class="nav-link ">
                                  <i class="nav-icon fas fa-cog"></i>
                                  <p>
                                    ตั้งค่าระบบ
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('form/all/materialtype')}}" class="nav-link "> 
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>ประเภทวัสดุ</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('form/all/category')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>หมวดหมู่ครุภัณฑ์</p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item"> --}}
                                        {{-- <a href="{{url('admin/Merchant_information')}}" class="nav-link"> --}}
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            {{-- <p>คณะ</p> --}}
                                        {{-- </a> --}}
                                    {{-- </li> --}}
                                    <li class="nav-item">
                                        <a href="{{route('form/all/main_agency')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>หน่วยงานหลัก</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('form/all/departments_small')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>หน่วยงานย่อย</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('form/all/budgets')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>ประเภทงบประมาณ</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('form/all/howtoget')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>วิธีได้มา</p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item"> --}}
                                        {{-- <a href="" class="nav-link"> --}}
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            {{-- <p>จัดการตำแหน่ง</p> --}}
                                        {{-- </a> --}}
                                    {{-- </li> --}}
                                </ul>
                            </li>
                        @endif 
                        @if (Auth::user()->role_name=='Admin')       
                            <li class="nav-item ">
                                <a href="#" class="nav-link ">
                                  <i class="nav-icon fas fa-user-cog"></i>
                                  <p>
                                    ผู้ใช้งาน
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('userManagement') }}" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>All Users</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('activity/log') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Activity Log</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('activity/login/logout') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Activity User</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-header">บัญชีของเรา</li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" method="POST" class="nav-link"> 
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>ออกจากระบบ</p>
                            </a>
                        </li> 
                    </ul>
                </nav>
            </div>
        </aside>
    <!--end sidebar-->