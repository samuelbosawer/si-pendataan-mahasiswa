<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index(Request $request)
    {

        $datas = Jurusan::where(function ($query) use ($request) {
            if ($s = $request->s) {
                $query->Where('nama_jurusan', 'like', '%' . $s . '%')
                    ->orWhere('keterangan', 'like', '%' . $s . '%');
            }
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('admin.jurusan.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {

        return view('admin.jurusan.create');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'nama_jurusan' => 'required',
            ],
            [
                'nama_jurusan.required' => 'Tidak boleh kosong',
            ]
        );
        $data = new Jurusan();
        $data->nama_jurusan   = $request->nama_jurusan;
        $data->keterangan   = $request->keterangan;
        $data->save();
        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.jurusan');
    }

    public function show(string $id)
    {
        $judul = 'Detail Data Jurusan';
        $data = Jurusan::where('id',$id)->first();
        return view('admin.jurusan.create', compact('data','judul'));
    }


    public function edit(string $id)
    {
        $data = Jurusan::where('id',$id)->first();
        $judul = 'Ubah Data Jurusan';
        return view('admin.jurusan.create', compact('data','judul'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate(
            [
                'nama_jurusan' => 'required',
            ],
            [
                'nama_jurusan.required' => 'Tidak boleh kosong',
            ]
        );
        $data = Jurusan::find($id);
        $data->nama_jurusan   = $request->nama_jurusan;
        $data->keterangan   = $request->keterangan;
        $data->update();
        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('dashboard.jurusan');
    }


    public function destroy(string $id)
    {
        $data = Jurusan::find($id);
        $data->delete();
        return redirect()->back();
    }
}
