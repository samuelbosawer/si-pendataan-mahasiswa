@extends('admin.layout.tamplate')
@section('title')
{{$judul ?? 'Tambah Data Mahasiswa' }} - Admin
@endsection
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing">
                    @include('admin.layout.breadcumb')


                    <div id="" class="col-lg-12 col-12 layout-spacing p-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4 class="fw-bolder "> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-map">
                                                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                                <line x1="8" y1="2" x2="8" y2="18"></line>
                                                <line x1="16" y1="6" x2="16" y2="22"></line>
                                            </svg> {{$judul ?? 'Tambah Data Mahasiswa' }} </h4>
                                    </div>
                                </div>
                            </div>


                            <div class="widget-content widget-content-area">

                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('dashboard.mahasiswa.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data" class="row g-3">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('dashboard.mahasiswa.store') }}" method="post"
                                            enctype="multipart/form-data" class="row g-3">
                                @endif
                                @csrf
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" name="name" @if (Request::segment(3) == 'detail') disabled @endif  value="{{old('name') ?? ($data->name ?? '')}}" class="form-control" id="name">
                                    @if ($errors->has('name'))
                                        <label class="text-danger"> {{ $errors->first('name') }}
                                        </label>
                                    @endif
                                </div>


                                <div class="col-md-6">
                                    @if (Request::segment(3) == 'detail')

                                    <a href="{{route('dashboard.mahasiswa.ubah',1)}}" class="btn btn-primary"> Ubah Data</a>
                                    <a href="{{route('dashboard.mahasiswa')}}" class="btn btn-success"> Kembali</a>
                                    @else

                                    <button class="btn btn-primary">Simpan </button>

                                    @endif

                                </div>



                                </form>




                            </div>



                        </div>
                    </div>


                </div>
            </div>

        </div>
    @endsection
