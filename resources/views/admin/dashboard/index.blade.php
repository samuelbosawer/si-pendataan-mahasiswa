@extends('admin.layout.tamplate')
@section('title')
    Dashboard - Admin
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing">
                    @include('admin.layout.breadcumb')

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                        <div class="widget widget-t-sales-widget widget-m-sales">
                            <div class="media">
                                <div class="icon ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <div class="media-body">
                                    <p class="widget-text">Mahasiswa</p>
                                    <p class="widget-numeric-value">3</p>
                                </div>
                            </div>
                            <div class="d-flex w-bottom text-center">
                                <p class="widget-total-stats"></p>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="statistics"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu left" aria-labelledby="statistics"
                                            style="will-change: transform;">
                                            <a class="dropdown-item" href="{{route('dashboard.mahasiswa')}}">Lihat Data</a>
                                            <a class="dropdown-item" href="{{route('dashboard.mahasiswa.tambah')}}">Tambah Data</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                        <div class="widget widget-t-sales-widget widget-m-sales">
                            <div class="media">
                                <div class="icon ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                </div>
                                <div class="media-body">
                                    <p class="widget-text">Kampus</p>
                                    <p class="widget-numeric-value">3</p>
                                </div>
                            </div>
                            <div class="d-flex w-bottom text-center">
                                <p class="widget-total-stats"></p>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="statistics"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu left" aria-labelledby="statistics"
                                            style="will-change: transform;">
                                            <a class="dropdown-item" href="{{route('dashboard.kampus')}}">Lihat Data</a>
                                            <a class="dropdown-item" href="{{route('dashboard.kampus.tambah')}}">Tambah Data</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                        <div class="widget widget-t-sales-widget widget-m-sales">
                            <div class="media">
                                <div class="icon ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                </div>
                                <div class="media-body">
                                    <p class="widget-text">Fakultas</p>
                                    <p class="widget-numeric-value">3</p>
                                </div>
                            </div>
                            <div class="d-flex w-bottom text-center">
                                <p class="widget-total-stats"></p>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="statistics"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu left" aria-labelledby="statistics"
                                            style="will-change: transform;">
                                            <a class="dropdown-item" href="{{route('dashboard.fakultas')}}">Lihat Data</a>
                                            <a class="dropdown-item" href="{{route('dashboard.fakultas.tambah')}}">Tambah Data</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 layout-spacing">
                        <div class="widget widget-t-sales-widget widget-m-sales">
                            <div class="media">
                                <div class="icon ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                </div>
                                <div class="media-body">
                                    <p class="widget-text">Jurusan</p>
                                    <p class="widget-numeric-value">3</p>
                                </div>
                            </div>
                            <div class="d-flex w-bottom text-center">
                                <p class="widget-total-stats"></p>
                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="statistics"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu left" aria-labelledby="statistics"
                                            style="will-change: transform;">
                                            <a class="dropdown-item" href="{{route('dashboard.jurusan')}}">Lihat Data</a>
                                            <a class="dropdown-item" href="{{route('dashboard.jurusan.tambah')}}">Tambah Data</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>













                </div>
            </div>

        </div>
    @endsection
