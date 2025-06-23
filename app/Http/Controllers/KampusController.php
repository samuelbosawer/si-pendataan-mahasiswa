<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;


class KampusController extends Controller
{
    public function index(Request $request)
    {

        $datas = Kampus::where(function ($query) use ($request) {
            if ($s = $request->s) {
                $query->Where('nama_kampus', 'like', '%' . $s . '%')
                    ->orWhere('alamat_kampus', 'like', '%' . $s . '%')
                    ->orWhere('keterangan', 'like', '%' . $s . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('admin.kampus.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {

        return view('admin.kampus.create');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'nama_kampus' => 'required',
            ],
            [
                'nama_kampus.required' => 'Tidak boleh kosong',
            ]
        );
        $data = new Kampus();

        $data->nama_kampus   = $request->nama_kampus;
        $data->keterangan   = $request->keterangan;
        $data->alamat_kampus   = $request->alamat_kampus;

        $data->save();
        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.kampus');
    }

    public function show(string $id)
    {
        $judul = 'Detail Data Kampus';
        $data = Kampus::where('id',$id)->first();
        return view('admin.kampus.create', compact('data','judul'));
    }


    public function edit(string $id)
    {
        $data = Kampus::where('id',$id)->first();
        $judul = 'Ubah Data Kampus';
        return view('admin.kampus.create', compact('data','judul'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate(
            [
                'nama_kampus' => 'required',
            ],
            [
                'nama_kampus.required' => 'Tidak boleh kosong',
            ]
        );
        $data = Kampus::find($id);
        $data->nama_kampus   = $request->nama_kampus;
        $data->keterangan   = $request->keterangan;
        $data->alamat_kampus   = $request->alamat_kampus;

        $data->update();
        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.kampus');
    }


    public function destroy(string $id)
    {
        $data = Kampus::find($id);
        $data->delete();
        return redirect()->route('dashboard.kampus');
    }
}
