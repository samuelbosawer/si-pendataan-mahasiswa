<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak" />
    <meta name="keywords" content="Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak" />
    <meta name="author" content="Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak" />

    <!-- Site Title -->
    <title>
          @yield('title' ?? ' Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak')
    </title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="assets/images/logo.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

    <!-- Youtube Css -->
    <link rel="stylesheet" href="assets/css/ytplayer.css">

    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />

    <!-- Pe7 Icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7.css">

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css" />

     @stack('script-header')
</head>
<body>
        @include('sweetalert::alert')
    <!--Navbar Start-->

      @if (Request::segment(1) == null)

    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
 @else

    <nav class="navbar navbar-expand-lg  custom-nav bg-dark text-white  shadow">
  @endif

        <div class="container">
            <!-- LOGO -->
            <a class="logo navbar-brand" href="/">
                <img src="assets/images/logo.png" alt=""  class=" logo-light">
                <img src="assets/images/logo.png" alt="" class=" logo-dark">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                    <li class="nav-item  @if (Request::segment(1) == null) active @endif ">
                        <a href="/" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item  @if (Request::segment(1) == 'tentang') active @endif" >
                        <a href="{{route('tentang')}}" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item @if (Request::segment(1) == 'kontak') active @endif ">
                        <a href="{{route('kontak')}}" class="nav-link">Kontak</a>
                    </li>
                    <li class="nav-item @if (Request::segment(1) == 'faq') active @endif">
                        <a href="{{route('faq')}}" class="nav-link">FAQ</a>
                    </li>
                     @if (!Auth::user())
                  <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link">Login</a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('daftar') }}" class="nav-link">Daftar</a>
                  </li>
              @else
                  <li class="nav-item">
                      <a href="{{ route('dashboard.home') }}" class="nav-link">Dashboard</a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('logout') }}"class="nav-link"
                          onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Logout</a>
                  </li>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    @if (Request::segment(1) == null)
   @include('visitor.layout.hero')
   @endif

