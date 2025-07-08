<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Kampus;
use App\Models\Mahasiswa;
use App\Models\User;
use File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('visitor.pages.home');
    }

    public function daftar()
    {
        $kampus = Kampus::get();
        $fakultas = Fakultas::get();
        $jurusan = Jurusan::get();

        return view('visitor.pages.daftar',compact('kampus','fakultas','jurusan'));
    }

    public function daftar_store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required|unique:users,email|string',
                'no_hp' => 'required|unique:users,no_hp|numeric',
                'nik' => 'required|unique:mahasiswas,nik|numeric',
                'jenis_kelamin' => 'required',

                'asal_kampung' => 'required',
                'angkatan' => 'required',
                'nama_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'nama_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'password'  => 'required|confirmed|min:8',
                'password_confirmation' => 'same:password'
            ],
            [
                'nama.required' => 'Tidak boleh kosong',
                'email.required' => 'Tidak boleh kosong',
                'email.unique' => 'Sudah terdaftar',
                'no_hp.unique' => 'Sudah terdaftar',
                'no_hp.required' => 'Tidak boleh kosong',
                'no_hp.numeric' => 'Harus nomor/angka ',



                'nik.unique' => 'Sudah terdaftar',
                'nik.required' => 'Tidak boleh kosong',
                'nik.numeric' => 'Harus nomor/angka ',

                'jenis_kelamin.required' => 'Tidak boleh kosong',
                // 'ktp.required' => 'Tidak boleh kosong',
                'asal_kampung.required' => 'Tidak boleh kosong',
                'angkatan.required' => 'Tidak boleh kosong',
                'nama_ayah.required' => 'Tidak boleh kosong',
                'pekerjaan_ayah.required' => 'Tidak boleh kosong',
                'nama_ibu.required' => 'Tidak boleh kosong',
                'pekerjaan_ibu.required' => 'Tidak boleh kosong',
                'password.required' => 'Tidak boleh kosong',
                'password.confirmed' => 'Password tidak sama',
                'password_confirmation.same' => 'Password tidak sama',
            ]
        );

        $user = new User();
        $user->nama   = $request->nama;
        $user->email   = $request->email;
        $user->no_hp   = $request->no_hp;
        $user->password   = $request->password;
        $user->jenis_kelamin   = $request->jenis_kelamin;
        if (isset($request->foto)) {
            $fileName = $request->foto->getClientOriginalName();
            $path = public_path('gambar/mahasiswa/'. $user->foto);
            if (file_exists($path)) {
                File::delete($path);
            }
            $timestamp = now()->timestamp;
            $user->foto = 'gambar/mahasiswa/'.$timestamp.'-'.$fileName;
            $request->foto->move(public_path('gambar/mahasiswa/'), $timestamp.'-'.$fileName);
        }

        $user->assignRole('mahasiswa');
        $user->save();

        $data = new Mahasiswa();

        $data->asal_kampung   = $request->asal_kampung;
        $data->angkatan   = $request->angkatan;
        $data->kampus_id   = $request->kampus_id;
        $data->fakultas_id   = $request->fakultas_id;
        $data->jurusan_id   = $request->jurusan_id;
        $data->alamat   = $request->alamat;
        $data->nama_ayah   = $request->nama_ayah;
        $data->pekerjaan_ayah   = $request->pekerjaan_ayah;
        $data->nama_ibu   = $request->nama_ibu;
        $data->pekerjaan_ibu   = $request->pekerjaan_ibu;
        $data->nik   = $request->nik;
        $data->tanggal_lahir   = $request->tanggal_lahir;
        $data->tempat_lahir   = $request->tempat_lahir;
        $data->status   = 'Belum Verifikasi';
        $data->user_id   = $user->id;

         if (isset($request->ktp)) {
            $fileName = $request->ktp->getClientOriginalName();
            $path = public_path('gambar/ktp/'. $data->ktp);
            if (file_exists($path)) {
                File::delete($path);
            }
            $timestamp = now()->timestamp;
            $data->ktp = 'gambar/ktp/'.$timestamp.'-'.$fileName;
            $request->ktp->move(public_path('gambar/ktp/'), $timestamp.'-'.$fileName);
        }

        $data->save();
        alert()->success('Berhasil', 'Pendaftaran Berhasil')->autoclose(3000);
        return redirect()->route('home');
    }


    public function tentang()
    {

        return view('visitor.pages.tentang');
    }

    public function kontak()
    {

        return view('visitor.pages.kontak');

    }


    public function faq()
    {
        return view('visitor.pages.fqa');

    }
}
