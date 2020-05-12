 <!-- =========================================================================================
  Name: KelasKita Website
  Author: Ahmad Saugi
  Author URL: http://ahmadsaugi.com
  Repository: https://github.com/zuramai/kelaskita
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
           <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ Storage::url('/images/logo/'.config('web_config')['WEB_LOGO_WHITE'])}}" alt="" height="30">
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                       

                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </div>                                                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                      
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
