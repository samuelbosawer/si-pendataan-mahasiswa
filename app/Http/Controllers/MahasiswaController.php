<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Carbon\Carbon;


class MahasiswaController extends Controller
{
    public function index(Request $request)
    {


    $datas = Mahasiswa::with(['kampus', 'fakultas', 'jurusan', 'user'])
        ->where(function ($query) use ($request) {
            if ($s = $request->s) {
                $query->Where('angkatan', 'like', '%' . $s . '%')
                    ->orWhere('asal_kampung', 'like', '%' . $s . '%')
                    ->orWhere('alamat_distrik', 'like', '%' . $s . '%')
                    ->orWhere('alamat_jalan', 'like', '%' . $s . '%')
                    ->orWhere('jenis_kelamin', 'like', '%' . $s . '%')
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
                        $q->where('name', 'like', '%' . $s . '%');
                    });
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('admin.mahasiswa.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {

        return view('admin.mahasiswa.create');
    }

    public function store(Request $request)
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
        $data = new Mahasiswa();

        $data->nama_distrik   = $request->nama_distrik;
        $data->keterangan   = $request->keterangan;
        $data->geojson   = $request->geojson;

        $data->save();
        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.mahasiswa');
    }

    public function show(string $id)
    {
        $judul = 'Detail Data Mahasiswa';
        $data = Mahasiswa::where('id',$id)->first();
        return view('admin.mahasiswa.create', compact('data','judul'));
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
