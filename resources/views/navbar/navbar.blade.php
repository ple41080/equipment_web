<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars fa-2x"></i></a>
        </li>  
        <li class="nav-item d-md-block ">
            <a class="nav-link">ระบบงานพัสดุ / จัดซื้อจัดจ้าง   </a>
        </li> 
    </ul>
    <ul class="navbar-nav ml-auto ">
        {{-- <li class="nav-item d-md-none d-block"> --}}
            {{-- <a href="{{ route('home')}}"> --}}
                {{-- <img src="{{URL::to('images/lrulogo1.png')}}"  --}}
                    {{-- alt="Admin Logo"  --}}
                    {{-- width="50px" --}}
                    {{-- class="img-circle elevation-3"> --}}
                {{-- <span class="font-weight-light pl-1">LRU | Parcel</span> --}}
            {{-- </a> --}}
        {{-- </li>        --}}
        {{-- <li class="nav-item d-md-block d-none"> --}}
            {{-- <a class="nav-link">เข้าสู่ระบบครั้งล่าสุด:   </a> --}}
        {{-- </li>  --}}
        <li class="nav-item dropdown has-arrow main-drop">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<span class="user-img">
				<img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" class="rounded-circle"  width="25" height="25" alt="{{ Auth::user()->name }}">
				<span class="status online"></span></span>
				<span>{{ Auth::user()->name }}</span>
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="{{ route('profile_user') }}">My Profile</a>
				<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
			</div>
		</li>
    </ul>
</nav>