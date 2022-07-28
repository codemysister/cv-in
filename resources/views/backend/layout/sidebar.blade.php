@php
  $route = Route::current()->getName();
  $prefix = Request::route()->getPrefix();
 
@endphp

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
        @hasrole('Admin')
        <li class=" {{$route == 'dashboard' ? 'active' : ''}}">
          <a href="{{route('dashboard')}}">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class=" {{$prefix == 'admin/cv' ? 'active' : ''}}">
          <a href="{{route('cv.index')}}">
            <i class="fa-solid fa-file-signature"></i>
            <span>CV</span>
          </a>
        </li>


        {{-- <li class=" {{$route == 'pendidikan' ? 'active' : ''}}">
          <a href="#">
            <i class="fa-solid fa-graduation-cap"></i>
            <span>Pendidikan</span>
          </a>
        </li>

        <li class=" {{$route == 'pengalaman' ? 'active' : ''}}">
          <a href="#">
            <i class="fa-solid fa-network-wired"></i>
            <span>Pengalaman</span>
          </a>
        </li> --}}

        <li class=" {{$route == 'transaksi' ? 'active' : ''}}">
          <a href="{{route('transaksi')}}">
            <i class="fa-solid fa-hand-holding-dollar"></i>
            <span>Transaksi</span>
          </a>
        </li>

        
		  @endhasrole
       
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
        <a class="link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ti-lock"></i> 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
		{{-- <a href="javascript:void(0)"  data-toggle="tooltip" title="" data-original-title="Logout"></a> --}}
	</div>
  </aside>