<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view('home', compact('mahasiswa'));
    }

    public function join()
    {
        $mahasiswa2 = DB::table('mahasiswa')
            ->leftJoin('jurusan', 'mahasiswa.kodejur', '=', 'jurusan.kodejur')
            ->select('mahasiswa.*', 'namajur as jurusan_nama')
            // ->where('mahasiswa.ipk', '>', 3)
            // ->where('jurusan.namajur', '=', 'SISTEM INFORMASI')
            ->get();

        return view('join', compact('mahasiswa2'));
    }
}
