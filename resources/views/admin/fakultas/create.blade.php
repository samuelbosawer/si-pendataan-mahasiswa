@extends('admin.layout.tamplate')
@section('title')
{{$judul ?? 'Tambah Data Fakultas' }} - Admin
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
                                        <h4 class="fw-bolder ">  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> {{$judul ?? 'Tambah Data Fakultas' }} </h4>
                                    </div>
                                </div>
                            </div>


                            <div class="widget-content widget-content-area">

                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('dashboard.fakultas.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data" class="row g-3">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('dashboard.fakultas.store') }}" method="post"
                                            enctype="multipart/form-data" class="row g-3">
                                @endif
                                @csrf
                                <div class="col-md-12">
                                    <label for="nama_fakultas" class="form-label">Nama Fakultas <span class="text-danger" >*</span> </label>
                                    <input type="text" name="nama_fakultas" @if (Request::segment(3) == 'detail') disabled @endif  value="{{old('nama_fakultas') ?? ($data->nama_fakultas ?? '')}}" class="form-control" id="nama_fakultas">
                                    @if ($errors->has('nama_fakultas'))
                                        <label class="text-danger"> {{ $errors->first('nama_fakultas') }}
                                        </label>
                                    @endif
                                </div>


                                 <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="keterangan"> Keterangan
                                        </label>
                                        <textarea id="keterangan" @if (Request::segment(3) == 'detail') disabled @endif name="keterangan"
                                            placeholder="Masukan keterangan" rows="5" class="form-control">{{ old('keterangan') ?? ($data->keterangan ?? '') }} </textarea>

                                        @if ($errors->has('keterangan'))
                                            <label class="text-danger">
                                                {{ $errors->first('keterangan') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    @if (Request::segment(3) == 'detail')

                                    <a href="{{route('dashboard.fakultas.ubah',$data->id)}}" class="btn btn-primary"> Ubah Data</a>
                                    <a href="{{route('dashboard.fakultas')}}" class="btn btn-success"> Kembali</a>
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
