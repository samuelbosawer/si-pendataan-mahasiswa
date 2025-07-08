
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Daftar Akun </title>
    <link rel="icon" type="image/x-icon" href="/src/assets/img/logo.svg"/>
    <link href="/layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="/layouts/semi-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="/layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />

    <link href="/layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

      <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />

</head>
<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-8 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <form method="POST" action="{{ route('daftarStore') }}" enctype="multipart/form-data">
                                @csrf

                            <div class="row">
                                <div class="col-md-12 mb-3 text-center">

                                    <h2 class="fw-bolder text-success">Buat Akun Baru</h2>
                                    <p>Daftarkan diri anda sebagai bagian dari Komunitas Mahasiswa Pelajar Puncak</p>

                                </div>


                                <div class="p-2 col-md-12 bg-dark rounded p-2 ">
                                    <span class="text-white fw-bolder">Data Mahasiswa</span>
                                </div>
                                <div class="p-2 col-md-12">
                                    <label for="nama" class="form-label">Nama Mahasiswa <span class="text-danger"> *
                                        </span> </label>
                                    <input type="text" name="nama" @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('nama') ?? ($data->user->nama ?? '') }}" class="form-control"
                                        id="nama">
                                    @if ($errors->has('nama'))
                                        <label class="text-danger"> {{ $errors->first('nama') }}
                                        </label>
                                    @endif
                                </div>

                                <div class="p-2 col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger"> * </span>
                                    </label>
                                    <input type="text" name="email" @if (Request::segment(3) == 'detail' || Request::segment(4) == 'ubah') disabled @endif
                                        value="{{ old('email') ?? ($data->user->email ?? '') }}" class="form-control"
                                        id="email">
                                    @if ($errors->has('email'))
                                        <label class="text-danger"> {{ $errors->first('email') }}
                                        </label>
                                    @endif
                                </div>

                                <div class="p-2 col-md-6">
                                    <label for="no_hp" class="form-label">No Hp <span class="text-danger"> * </span>
                                    </label>
                                    <input type="text" name="no_hp" @if (Request::segment(3) == 'detail' || Request::segment(4) == 'ubah') disabled @endif
                                        value="{{ old('no_hp') ?? ($data->user->no_hp ?? '') }}" class="form-control"
                                        id="no_hp">
                                    @if ($errors->has('no_hp'))
                                        <label class="text-danger"> {{ $errors->first('no_hp') }}
                                        </label>
                                    @endif
                                </div>


                                <div class="p-2 col-md-6">
                                    <label for="nik" class="form-label">NIK <span class="text-danger"> * </span>
                                    </label>
                                    <input type="text" name="nik" @if (Request::segment(3) == 'detail' || Request::segment(4) == 'ubah') disabled @endif
                                        value="{{ old('nik') ?? ($data->nik ?? '') }}" class="form-control" id="nik">
                                    @if ($errors->has('nik'))
                                        <label class="text-danger"> {{ $errors->first('nik') }}
                                        </label>
                                    @endif
                                </div>

                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">

                                        <label for="jenis_kelamin"> Jenis Kelamin <span class="text-danger"> * </span>
                                        </label>
                                        <select class="form-control" aria-label="Default select example"
                                            name="jenis_kelamin"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Jenis Kelamin
                                            </option>
                                            <option value="Pria"
                                                {{ (old('jenis_kelamin') ?? ($data->user->jenis_kelamin ?? '')) == 'Pria' ? 'selected' : '' }}>
                                                Pria</option>
                                            <option value="Wanita"
                                                {{ (old('jenis_kelamin') ?? ($data->user->jenis_kelamin ?? '')) == 'Wanita' ? 'selected' : '' }}>
                                                Wanita</option>
                                        </select>
                                        @if ($errors->has('jenis_kelamin'))
                                            <label class="text-danger">
                                                {{ $errors->first('jenis_kelamin') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>

                                <div class="p-2 col-md-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="text-danger">
                                        </span> </label>
                                    <input type="text" name="tempat_lahir"
                                        @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('tempat_lahir') ?? ($data->tempat_lahir ?? '') }}"
                                        class="form-control" id="tempat_lahir">
                                    @if ($errors->has('tempat_lahir'))
                                        <label class="text-danger"> {{ $errors->first('tempat_lahir') }}
                                        </label>
                                    @endif
                                </div>

                                <div class="p-2 col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">
                                        </span> </label>
                                    <input type="date" name="tanggal_lahir"
                                        @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('tanggal_lahir') ?? ($data->tanggal_lahir ?? '') }}"
                                        class="form-control" id="tanggal_lahir">
                                    @if ($errors->has('tanggal_lahir'))
                                        <label class="text-danger"> {{ $errors->first('tanggal_lahir') }}
                                        </label>
                                    @endif
                                </div>


                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">

                                        <label for="asal_kampung"> Asal Kampung <span class="text-danger"> * </span>
                                        </label>
                                        <select class="form-control" name="asal_kampung"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Kampung</option>

                                            <optgroup label="Agandugume">
                                                <option value="Agandugume"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Agandugume' ? 'selected' : '' }}>
                                                    Agandugume</option>
                                                <option value="Bina"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Bina' ? 'selected' : '' }}>
                                                    Bina</option>
                                                <option value="Bunagi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Bunagi' ? 'selected' : '' }}>
                                                    Bunagi</option>
                                                <option value="Digilome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Digilome' ? 'selected' : '' }}>
                                                    Digilome</option>
                                                <option value="Kimak"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Kimak' ? 'selected' : '' }}>
                                                    Kimak</option>
                                                <option value="Langgineri"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Langgineri' ? 'selected' : '' }}>
                                                    Langgineri</option>
                                                <option value="Muligime"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Muligime' ? 'selected' : '' }}>
                                                    Muligime</option>
                                            </optgroup>

                                            <optgroup label="Beoga">
                                                <option value="Beoga"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Beoga' ? 'selected' : '' }}>
                                                    Beoga</option>
                                                <option value="Beoga Barat"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Beoga Barat' ? 'selected' : '' }}>
                                                    Beoga Barat</option>
                                                <option value="Beoga Timur"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Beoga Timur' ? 'selected' : '' }}>
                                                    Beoga Timur</option>
                                                <option value="Ogamki"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Ogamki' ? 'selected' : '' }}>
                                                    Ogamki</option>
                                                <option value="Jambul"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Jambul' ? 'selected' : '' }}>
                                                    Jambul</option>
                                                <option value="Duwitagi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Duwitagi' ? 'selected' : '' }}>
                                                    Duwitagi</option>
                                            </optgroup>

                                            <optgroup label="Doufu">
                                                <option value="Doufu"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Doufu' ? 'selected' : '' }}>
                                                    Doufu</option>
                                                <option value="Delemage"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Delemage' ? 'selected' : '' }}>
                                                    Delemage</option>
                                                <option value="Nigilome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Nigilome' ? 'selected' : '' }}>
                                                    Nigilome</option>
                                                <option value="Owaleme"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Owaleme' ? 'selected' : '' }}>
                                                    Owaleme</option>
                                            </optgroup>

                                            <optgroup label="Gome">
                                                <option value="Gome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Gome' ? 'selected' : '' }}>
                                                    Gome</option>
                                                <option value="Gome Utara"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Gome Utara' ? 'selected' : '' }}>
                                                    Gome Utara</option>
                                                <option value="Nelekom"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Nelekom' ? 'selected' : '' }}>
                                                    Nelekom</option>
                                                <option value="Nigilome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Nigilome' ? 'selected' : '' }}>
                                                    Nigilome</option>
                                            </optgroup>

                                            <optgroup label="Ilaga">
                                                <option value="Ilaga"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Ilaga' ? 'selected' : '' }}>
                                                    Ilaga</option>
                                                <option value="Kago"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Kago' ? 'selected' : '' }}>
                                                    Kago</option>
                                                <option value="Kimak"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Kimak' ? 'selected' : '' }}>
                                                    Kimak</option>
                                                <option value="Mabugi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Mabugi' ? 'selected' : '' }}>
                                                    Mabugi</option>
                                                <option value="Milawak"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Milawak' ? 'selected' : '' }}>
                                                    Milawak</option>
                                                <option value="Numbume"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Numbume' ? 'selected' : '' }}>
                                                    Numbume</option>
                                                <option value="Ogoneyiburu"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Ogoneyiburu' ? 'selected' : '' }}>
                                                    Ogoneyiburu</option>
                                                <option value="Ondek"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Ondek' ? 'selected' : '' }}>
                                                    Ondek</option>
                                            </optgroup>

                                            <optgroup label="Lambewi">
                                                <option value="Lambewi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Lambewi' ? 'selected' : '' }}>
                                                    Lambewi</option>
                                                <option value="Deyombou"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Deyombou' ? 'selected' : '' }}>
                                                    Deyombou</option>
                                                <option value="Libume"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Libume' ? 'selected' : '' }}>
                                                    Libume</option>
                                                <option value="Winim"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Winim' ? 'selected' : '' }}>
                                                    Winim</option>
                                            </optgroup>

                                            <optgroup label="Pogoma">
                                                <option value="Pogoma"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Pogoma' ? 'selected' : '' }}>
                                                    Pogoma</option>
                                                <option value="Kumlagupa"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Kumlagupa' ? 'selected' : '' }}>
                                                    Kumlagupa</option>
                                                <option value="Mikuleme"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Mikuleme' ? 'selected' : '' }}>
                                                    Mikuleme</option>
                                                <option value="Wangumage"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Wangumage' ? 'selected' : '' }}>
                                                    Wangumage</option>
                                            </optgroup>

                                            <optgroup label="Sinak">
                                                <option value="Sinak"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Sinak' ? 'selected' : '' }}>
                                                    Sinak</option>
                                                <option value="Agiyome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Agiyome' ? 'selected' : '' }}>
                                                    Agiyome</option>
                                                <option value="Gigobak"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Gigobak' ? 'selected' : '' }}>
                                                    Gigobak</option>
                                                <option value="Mabugi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Mabugi' ? 'selected' : '' }}>
                                                    Mabugi</option>
                                                <option value="Magalome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Magalome' ? 'selected' : '' }}>
                                                    Magalome</option>
                                                <option value="Tagaloa"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Tagaloa' ? 'selected' : '' }}>
                                                    Tagaloa</option>
                                            </optgroup>

                                            <optgroup label="Wangbe">
                                                <option value="Wangbe"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Wangbe' ? 'selected' : '' }}>
                                                    Wangbe</option>
                                                <option value="Bugi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Bugi' ? 'selected' : '' }}>
                                                    Bugi</option>
                                                <option value="Lome"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Lome' ? 'selected' : '' }}>
                                                    Lome</option>
                                                <option value="Yanggandur"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Yanggandur' ? 'selected' : '' }}>
                                                    Yanggandur</option>
                                            </optgroup>

                                            <optgroup label="Yambi">
                                                <option value="Yambi"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Yambi' ? 'selected' : '' }}>
                                                    Yambi</option>
                                                <option value="Gekesiga"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Gekesiga' ? 'selected' : '' }}>
                                                    Gekesiga</option>
                                                <option value="Ilame"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Ilame' ? 'selected' : '' }}>
                                                    Ilame</option>
                                                <option value="Wandoga"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Wandoga' ? 'selected' : '' }}>
                                                    Wandoga</option>
                                                <option value="Wuloni"
                                                    {{ (old('asal_kampung') ?? ($data->asal_kampung ?? '')) == 'Wuloni' ? 'selected' : '' }}>
                                                    Wuloni</option>
                                            </optgroup>
                                        </select>

                                        @if ($errors->has('asal_kampung'))
                                            <label class="text-danger">
                                                {{ $errors->first('asal_kampung') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="angkatan"> Tahun Angkatan <span class="text-danger"> * </span></label>

                                        <select class="form-control" name="angkatan"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Tahun Angkatan</option>

                                            @for ($year = 2010; $year <= 2030; $year++)
                                                <option value="{{ $year }}"
                                                    {{ (old('angkatan') ?? ($data->angkatan ?? '')) == $year ? 'selected' : '' }}>
                                                    {{ $year }}
                                                </option>
                                            @endfor
                                        </select>

                                        @if ($errors->has('angkatan'))
                                            <label class="text-danger">
                                                {{ $errors->first('angkatan') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>



                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="kampus_id"> Kampus <span class="text-danger"> </span></label>
                                        <select class="form-control" name="kampus_id"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Kampus</option>

                                            @foreach ($kampus as $k)
                                                <option value="{{ $k->id }}"
                                                    {{ (old('kampus_id') ?? ($data->kampus_id ?? '')) == $k->id ? 'selected' : '' }}>
                                                    {{ $k->nama_kampus }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('kampus_id'))
                                            <label class="text-danger">
                                                {{ $errors->first('kampus_id') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>


                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="fakultas_id"> Fakultas <span class="text-danger"> </span></label>
                                        <select class="form-control" name="fakultas_id"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Fakultas</option>

                                            @foreach ($fakultas as $f)
                                                <option value="{{ $f->id }}"
                                                    {{ (old('fakultas_id') ?? ($data->fakultas_id ?? '')) == $f->id ? 'selected' : '' }}>
                                                    {{ $f->nama_fakultas }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('fakultas_id'))
                                            <label class="text-danger">
                                                {{ $errors->first('fakultas_id') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>

                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="jurusan_id"> Jurusan <span class="text-danger"> </span></label>
                                        <select class="form-control" name="jurusan_id"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Jurusan</option>

                                            @foreach ($jurusan as $j)
                                                <option value="{{ $j->id }}"
                                                    {{ (old('jurusan_id') ?? ($data->jurusan_id ?? '')) == $j->id ? 'selected' : '' }}>
                                                    {{ $j->nama_jurusan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('jurusan_id'))
                                            <label class="text-danger">
                                                {{ $errors->first('jurusan_id') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>

                                <div class="p-2 col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="alamat"> Alamat
                                        </label>
                                        <textarea id="summernote" @if (Request::segment(3) == 'detail') disabled @endif name="alamat"
                                            placeholder="Masukan alamat" rows="5" class="form-control">{{ old('alamat') ?? ($data->alamat ?? '') }} </textarea>

                                        @if ($errors->has('alamat'))
                                            <label class="text-danger">
                                                {{ $errors->first('alamat') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>


                                <div class="p-2 col-md-8">
                                    <label for="foto" class="form-label">Foto Diri <span class="text-danger"> </span>
                                    </label>

                                    @if (!empty($data->user->foto))
                                        <br>
                                        <img src="{{ asset($data->user->foto) }}" alt="Foto"
                                            class="img-fluid mt-2 p-2 rounded" style="max-height: 200px;">
                                        <br>
                                    @endif


                                    <input type="file" name="foto"
                                        @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('foto') ?? ($data->foto ?? '') }}" class="form-control"
                                        id="foto">
                                    @if ($errors->has('foto'))
                                        <label class="text-danger"> {{ $errors->first('foto') }}
                                        </label>
                                    @endif
                                </div>

                                <div class="p-2 col-md-8">
                                    <label for="ktp" class="form-label">KTP <span class="text-danger"> </span>
                                    </label>

                                    @if (!empty($data->ktp))
                                        <br>
                                        <img src="{{ asset($data->ktp) }}" alt="ktp"
                                            class="img-fluid mt-2 p-2 rounded" style="max-height: 200px;">
                                        <br>
                                    @endif


                                    <input type="file" name="ktp"
                                        @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('ktp') ?? ($data->ktp ?? '') }}" class="form-control"
                                        id="ktp">
                                    @if ($errors->has('ktp'))
                                        <label class="text-danger"> {{ $errors->first('ktp') }}
                                        </label>
                                    @endif
                                </div>

                                <div class="p-2 col-md-12 bg-dark rounded p-2 ">
                                    <span class="text-white fw-bolder">Data Orang Tua</span>
                                </div>


                                <div class="p-2 col-md-6">
                                    <label for="nama_ayah" class="form-label">Nama Ayah <span class="text-danger"> *
                                        </span> </label>
                                    <input type="text" name="nama_ayah"
                                        @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('nama_ayah') ?? ($data->nama_ayah ?? '') }}" class="form-control"
                                        id="nama_ayah">
                                    @if ($errors->has('nama_ayah'))
                                        <label class="text-danger"> {{ $errors->first('nama_ayah') }}
                                        </label>
                                    @endif
                                </div>


                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">

                                        <label for="pekerjaan_ayah"> Pekerjaan Ayah <span class="text-danger"> * </span>
                                        </label>
                                        <select class="form-control" aria-label="Default select example"
                                            name="pekerjaan_ayah"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Pekerjaan Ayah
                                            </option>
                                            <option value="Petani" value="Petani"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Petani' ? 'selected' : '' }}>
                                                Petani</option>
                                            <option value="Nelayan"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Nelayan' ? 'selected' : '' }}>
                                                Nelayan</option>
                                            <option value="Peternak"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Peternak' ? 'selected' : '' }}>
                                                Peternak</option>
                                            <option value="Pedagang"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Pedagang' ? 'selected' : '' }}>
                                                Pedagang</option>
                                            <option value="Guru"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Guru' ? 'selected' : '' }}>
                                                Guru</option>
                                            <option value="Dosen"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Dosen' ? 'selected' : '' }}>
                                                Dosen</option>
                                            <option value="PNS"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'PNS' ? 'selected' : '' }}>
                                                PNS</option>
                                            <option value="TNI"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'TNI' ? 'selected' : '' }}>
                                                TNI</option>
                                            <option value="Polri"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Polri' ? 'selected' : '' }}>
                                                Polri</option>
                                            <option value="Karyawan Swasta"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Karyawan Swasta' ? 'selected' : '' }}>
                                                Karyawan Swasta</option>
                                            <option value="Wirausaha"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Wirausaha' ? 'selected' : '' }}>
                                                Wirausaha</option>
                                            <option value="Sopir"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Sopir' ? 'selected' : '' }}>
                                                Sopir</option>
                                            <option value="Buruh Harian"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Buruh Harian' ? 'selected' : '' }}>
                                                Buruh Harian</option>
                                            <option value="Buruh Tani"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Buruh Tani' ? 'selected' : '' }}>
                                                Buruh Tani</option>
                                            <option value="Buruh Bangunan"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Buruh Bangunan' ? 'selected' : '' }}>
                                                Buruh Bangunan</option>
                                            <option value="Montir"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Montir' ? 'selected' : '' }}>
                                                Montir</option>
                                            <option value="Tukang Kayu"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Tukang Kayu' ? 'selected' : '' }}>
                                                Tukang Kayu</option>
                                            <option value="Tidak Bekerja"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Tidak Bekerja' ? 'selected' : '' }}>
                                                Tidak Bekerja</option>
                                            <option value="Sudah Meninggal"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Sudah Meninggal' ? 'selected' : '' }}>
                                                Sudah Meninggal</option>
                                            <option value="Lainnya"
                                                {{ (old('pekerjaan_ayah') ?? ($data->pekerjaan_ayah ?? '')) == 'Lainnya' ? 'selected' : '' }}>
                                                Lainnya</option>

                                        </select>
                                        @if ($errors->has('pekerjaan_ayah'))
                                            <label class="text-danger">
                                                {{ $errors->first('pekerjaan_ayah') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>


                                <div class="p-2 col-md-6">
                                    <label for="nama_ibu" class="form-label">Nama Ibu <span class="text-danger"> *
                                        </span> </label>
                                    <input type="text" name="nama_ibu"
                                        @if (Request::segment(3) == 'detail') disabled @endif
                                        value="{{ old('nama_ibu') ?? ($data->nama_ibu ?? '') }}" class="form-control"
                                        id="nama_ibu">
                                    @if ($errors->has('nama_ibu'))
                                        <label class="text-danger"> {{ $errors->first('nama_ibu') }}
                                        </label>
                                    @endif
                                </div>


                                <div class="p-2 col-md-6">
                                    <div class="form-group mb-3">

                                        <label for="pekerjaan_ibu"> Pekerjaan Ibu <span class="text-danger"> * </span>
                                        </label>
                                        <select class="form-control" aria-label="Default select example"
                                            name="pekerjaan_ibu"
                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif>
                                            <option value="" hidden>Pilih Pekerjaan Ibu
                                            </option>
                                            <option value="Petani" value="Petani"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Petani' ? 'selected' : '' }}>
                                                Petani</option>
                                            <option value="Nelayan"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Nelayan' ? 'selected' : '' }}>
                                                Nelayan</option>
                                            <option value="Peternak"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Peternak' ? 'selected' : '' }}>
                                                Peternak</option>
                                            <option value="Pedagang"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Pedagang' ? 'selected' : '' }}>
                                                Pedagang</option>
                                            <option value="Guru"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Guru' ? 'selected' : '' }}>
                                                Guru</option>
                                            <option value="Dosen"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Dosen' ? 'selected' : '' }}>
                                                Dosen</option>
                                            <option value="PNS"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'PNS' ? 'selected' : '' }}>
                                                PNS</option>
                                            <option value="TNI"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'TNI' ? 'selected' : '' }}>
                                                TNI</option>
                                            <option value="Polri"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Polri' ? 'selected' : '' }}>
                                                Polri</option>
                                            <option value="Karyawan Swasta"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Karyawan Swasta' ? 'selected' : '' }}>
                                                Karyawan Swasta</option>
                                            <option value="Wirausaha"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Wirausaha' ? 'selected' : '' }}>
                                                Wirausaha</option>
                                            <option value="Sopir"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Sopir' ? 'selected' : '' }}>
                                                Sopir</option>
                                            <option value="Buruh Harian"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Buruh Harian' ? 'selected' : '' }}>
                                                Buruh Harian</option>
                                            <option value="Buruh Tani"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Buruh Tani' ? 'selected' : '' }}>
                                                Buruh Tani</option>
                                            <option value="Buruh Bangunan"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Buruh Bangunan' ? 'selected' : '' }}>
                                                Buruh Bangunan</option>
                                            <option value="Montir"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Montir' ? 'selected' : '' }}>
                                                Montir</option>
                                            <option value="Tukang Kayu"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Tukang Kayu' ? 'selected' : '' }}>
                                                Tukang Kayu</option>
                                            <option value="Tidak Bekerja"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Tidak Bekerja' ? 'selected' : '' }}>
                                                Tidak Bekerja</option>
                                            <option value="Sudah Meninggal"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Sudah Meninggal' ? 'selected' : '' }}>
                                                Sudah Meninggal</option>
                                            <option value="Lainnya"
                                                {{ (old('pekerjaan_ibu') ?? ($data->pekerjaan_ibu ?? '')) == 'Lainnya' ? 'selected' : '' }}>
                                                Lainnya
                                            </option>

                                        </select>
                                        @if ($errors->has('pekerjaan_ibu'))
                                            <label class="text-danger">
                                                {{ $errors->first('pekerjaan_ibu') }}
                                            </label>
                                        @endif
                                    </div>
                                </div>



                                    <div class="p-2 col-md-12 bg-dark rounded p-2 ">
                                        <span class="text-white fw-bolder">Password Akun</span>
                                    </div>

                                    <div class="p-2 col-md-6">
                                        <label for="password" class="form-label">Password <span class="text-danger"> *
                                            </span> </label>
                                        <input type="password" name="password"
                                            @if (Request::segment(3) == 'detail') disabled @endif value=""
                                            class="form-control" id="password">
                                        @if ($errors->has('password'))
                                            <label class="text-danger"> {{ $errors->first('password') }}
                                            </label>
                                        @endif
                                    </div>


                                    <div class="p-2 col-md-6">
                                        <label for="password_confirmation" class="form-label">Ulangi Password <span
                                                class="text-danger"> *
                                            </span> </label>
                                        <input type="password" name="password_confirmation"
                                            @if (Request::segment(3) == 'detail') disabled @endif value=""
                                            class="form-control" id="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <label class="text-danger"> {{ $errors->first('password_confirmation') }}
                                            </label>
                                        @endif
                                    </div>



                                      <div class="col-12 text-center">
                                    <div class="mb-4 mt-4">
                                        <button class="btn btn-success w-50">Daftar <span class="mdi mdi-account-plus"></span></button>
                                    </div>
                                </div>












                            </div>
                          </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>
