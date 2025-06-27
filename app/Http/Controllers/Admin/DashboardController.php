<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Kampus;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $mahasiswa=Mahasiswa::get()->count();
        $kampus = Kampus::get()->count();
        $fakultas = Fakultas::get()->count();
        $jurusan = Jurusan::get()->count();
        return view('admin.dashboard.index',compact('mahasiswa', 'kampus','jurusan','fakultas'));
    }
}
