@extends('admin.layout.tamplate')
@section('title')
    Mahasiswa - Admin
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing">
                    @include('admin.layout.breadcumb')


                    <div id="" class="col-lg-12 col-12 layout-spacing p-3 mt-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg> Data Mahasiswa</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="widget-content widget-content-area">

                                <div class="d-flex justify-content-between">
                                    <div class="col-6">
                                        <a href="{{ route('dashboard.mahasiswa.tambah') }}" class="btn btn-primary"> Tambah
                                            Data </a>
                                    </div>
                                    <div class="col-6">
                                        @include('admin.layout.seraching')
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-primary text-white">
                                                <th scope="col " width="5" class="text-light fw-bolder">No</th>
                                                <th scope="col " class="text-light fw-bolder">Foto</th>
                                                <th scope="col " class="text-light fw-bolder">Nama Mahasiswa</th>
                                                <th scope="col " class="text-light fw-bolder">Angkatan</th>
                                                <th scope="col " class="text-light fw-bolder">Kampus</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ( $datas as $data )
                                            <tr>
                                                <td> {{++$i}}</td>
                                                <td>

                                                        @if (!empty($data->user->foto))
                                                            <br>
                                                            <img src="{{ asset($data->user->foto) }}" alt="Foto" class="img-fluid mt-2 p-2 rounded"
                                                                style="max-height: 50px;">
                                                            <br>
                                                        @else
                                                         <br>
                                                            <img src="{{ asset('assets/default.png') }}" alt="Foto" class="img-fluid mt-2 p-2 rounded"
                                                                style="max-height: 50px;">
                                                            <br>
                                                        @endif;
                                                </td>
                                                <td> {{ $data->user->nama ?? '' }}</td>
                                                <td> {{ $data->angkatan ?? ''}}</td>
                                                <td>
                                                    {{ $data->kampus->nama_kampus ?? ''}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="action-btns">
                                                        <a href="{{route('dashboard.mahasiswa.detail',$data->id)}}" class="action-btn btn-view bs-tooltip me-2"
                                                            data-toggle="tooltip" data-placement="top" title="Detail">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </a>
                                                        <a href="{{route('dashboard.mahasiswa.ubah',$data->id)}}" class="action-btn btn-edit bs-tooltip me-2"
                                                            data-toggle="tooltip" data-placement="top" title="Ubah">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit-2">
                                                                <path
                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                </path>
                                                            </svg>
                                                        </a>

                                                            <form class="d-inline"
                                                                action="{{ route('dashboard.mahasiswa.hapus', $data->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                class="action-btn btn-delete border-0 bg-transparent bs-tooltip"
                                                                data-toggle="tooltip" data-placement="top" title="Hapus"
                                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"
                                                                type="submit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path
                                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                    </path>
                                                                    <line x1="10" y1="11" x2="10"
                                                                        y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14"
                                                                        y2="17"></line>
                                                                </svg>

                                                            </button>
                                                        </form>



                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center"> Data tidak ada</td>
                                                </tr>

                                                @endforelse


                                            </tbody>
                                        </table>

                                        <div>
                                            {{ $datas->links() }}
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>


                    </div>
                </div>

            </div>
        @endsection
