     <!--  BEGIN SIDEBAR  -->
     <div class="sidebar-wrapper sidebar-theme">

         <nav id="sidebar">

             <div class="navbar-nav theme-brand flex-row  text-center">
                 <div class="nav-logo">
                     <div class="nav-item theme-logo">
                         <a href="#">
                             <img src="{{asset('src/assets/img/logo.svg')}}" class="navbar-logo" alt="logo" hidden>
                             <img src="{{asset('src/assets/img/logo.svg')}}" class="navbar-logo" alt="logo">
                         </a>
                     </div>
                     <div class="nav-item theme-text">
                         <a href="#" class="nav-link"> SIPM </a>
                     </div>
                 </div>
                 <div class="nav-item sidebar-toggle">
                     <div class="btn-toggle sidebarCollapse">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevrons-left">
                             <polyline points="11 17 6 12 11 7"></polyline>
                             <polyline points="18 17 13 12 18 7"></polyline>
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="shadow-bottom"></div>
             <ul class="list-unstyled menu-categories" id="accordionExample">
                 <ul class="list-unstyled menu-categories" id="accordionExample">
                     <li class="menu
                     @if (Request::segment(1) == 'dashboard' && Request::segment(2) == null) active @endif">
                         <a href="{{route('dashboard.home')}}" aria-expanded="false" class="dropdown-toggle">
                             <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                     <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                     <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                 </svg>
                                 <span>Dashboard</span>
                             </div>
                         </a>
                     </li>
                     <li class="menu menu-heading">
                         <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                             </svg><span>Data Mahasiswa</span></div>
                     </li>


                     <li class="menu @if (Request::segment(2) == 'mahasiswa' OR Request::segment(3) == 'mahasiswa') active @endif">
                         <a href="{{route('dashboard.mahasiswa')}}" aria-expanded="false" class="dropdown-toggle">
                             <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                 <span>Data Mahasiswa</span>
                             </div>
                         </a>
                     </li>


                     <li class="menu menu-heading">
                         <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                 <line x1="5" y1="12" x2="19" y2="12"></line>
                             </svg><span>Data Master</span></div>
                     </li>

                     <li class="menu @if (Request::segment(2) == 'kampus' OR Request::segment(3) == 'kampus') active @endif"">
                         <a href="{{route('dashboard.kampus')}}" aria-expanded="false" class="dropdown-toggle">
                             <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                 <span>Data Kampus</span>
                             </div>
                         </a>
                     </li>
                      <li class="menu @if (Request::segment(2) == 'fakultas' OR Request::segment(3) == 'fakultas') active @endif ">
                         <a href="{{route('dashboard.fakultas')}}" aria-expanded="false" class="dropdown-toggle">
                             <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                 <span>Data Fakultas </span>
                             </div>
                         </a>
                     </li>
                      <li class="menu ">
                           <li class="menu @if (Request::segment(2) == 'jurusan' OR Request::segment(3) == 'jurusan') active @endif ">
                         <a href="{{route('dashboard.jurusan')}}" aria-expanded="false" class="dropdown-toggle">
                             <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                 <span>Data Jurusan </span>
                             </div>
                         </a>
                     </li>



                 </ul>


             </ul>

         </nav>

     </div>
     <!--  END SIDEBAR  -->
