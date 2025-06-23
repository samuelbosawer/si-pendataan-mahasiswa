<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index(Request $request)
    {

      $datas = Fakultas::where(function ($query) use ($request) {
            if ($s = $request->s) {
                $query->Where('nama_fakultas', 'like', '%' . $s . '%')
                    ->orWhere('keterangan', 'like', '%' . $s . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('admin.fakultas.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {

        return view('admin.fakultas.create');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'nama_fakultas' => 'required',
            ],
            [
                'nama_fakultas.required' => 'Tidak boleh kosong',
            ]
        );
        $data = new Fakultas();

        $data->nama_fakultas   = $request->nama_fakultas;
        $data->keterangan   = $request->keterangan;
        $data->save();
        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.fakultas');
    }

    public function show(string $id)
    {
        $judul = 'Detail Data Fakultas';
        $data = Fakultas::where('id',$id)->first();
        return view('admin.fakultas.create', compact('data','judul'));
    }


    public function edit(string $id)
    {
        $judul = 'Ubah Data Fakultas';
        $data = Fakultas::where('id',$id)->first();
        return view('admin.fakultas.create', compact('data','judul'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate(
            [
                'nama_fakultas' => 'required',
            ],
            [
                'nama_fakultas.required' => 'Tidak boleh kosong',
            ]
        );
        $data = Fakultas::find($id);
        $data->nama_fakultas   = $request->nama_fakultas;
        $data->keterangan   = $request->keterangan;
        $data->update();
        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.fakultas');
    }


    public function destroy(string $id)
    {
        $data = Fakultas::find($id);
        $data->delete();
        return redirect()->back();
    }
}
