<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Kampus;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use File;
use RealRashid\SweetAlert\Facades\Alert;


class MahasiswaController extends Controller
{
    public function index(Request $request)
    {


    $datas = Mahasiswa::with(['kampus', 'fakultas', 'jurusan', 'user'])
        ->where(function ($query) use ($request) {
            if ($s = $request->s) {
                $query->Where('angkatan', 'like', '%' . $s . '%')
                    ->orWhere('asal_kampung', 'like', '%' . $s . '%')
                    ->orWhere('alamat', 'like', '%' . $s . '%')

                    ->orWhereHas('kampus', function ($q) use ($s) {
                        $q->where('nama_kampus', 'like', '%' . $s . '%');
                    })
                    ->orWhereHas('fakultas', function ($q) use ($s) {
                        $q->where('nama_fakultas', 'like', '%' . $s . '%');
                    })
                    ->orWhereHas('jurusan', function ($q) use ($s) {
                        $q->where('nama_jurusan', 'like', '%' . $s . '%');
                    })
                    ->orWhereHas('user', function ($q) use ($s) {
                        $q->where('nama', 'like', '%' . $s . '%')
                            ->orWhere('jenis_kelamin', 'like', '%' . $s . '%');
                    });
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('admin.mahasiswa.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {

        $kampus = Kampus::get();
        $fakultas = Fakultas::get();
        $jurusan = Jurusan::get();

        return view('admin.mahasiswa.create',compact('kampus','fakultas','jurusan'));
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'no_hp' => 'required',
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
                'no_hp.required' => 'Tidak boleh kosong',
                'jenis_kelamin.required' => 'Tidak boleh kosong',
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
        $data->user_id   = $user->id;

        $data->save();
        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.mahasiswa');
    }

    public function show(string $id)
    {
        $kampus = Kampus::get();
        $fakultas = Fakultas::get();
        $jurusan = Jurusan::get();

        return view('admin.mahasiswa.create',compact('kampus','fakultas','jurusan'));
    }


    public function edit(string $id)
    {
        $data = Mahasiswa::where('id',$id)->first();
        $judul = 'Ubah Data Mahasiswa';
        return view('admin.mahasiswa.create', compact('data','judul'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate(
            [
                'nama_distrik' => 'required',
                'geojson' => 'json',
            ],
            [
                'nama_mahasiswa.required' => 'Tidak boleh kosong',
                'geojson.json' => 'Harus format json',
            ]
        );
        $data = Mahasiswa::find($id);
        $data->nama_distrik   = $request->nama_distrik;
        $data->keterangan   = $request->keterangan;
        $data->geojson   = $request->geojson;

        $data->update();
        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.fakultas');
    }


    public function destroy(string $id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->back();
    }

}
