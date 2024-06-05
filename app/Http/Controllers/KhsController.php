<?php

namespace App\Http\Controllers;

use App\Models\khs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhsController extends Controller
{
    public function index(){
        $khs = DB::table('khs')
            ->rightJoin('mahasiswa', 'mahasiswa.nim', '=', 'khs.nim')
            ->leftJoin('matkul', 'matkul.kodemk', '=', 'khs.kodemk')
            ->select('khs.nilai as nilai','khs.semester', 'mahasiswa.nama as nama','mahasiswa.nim as nim', 'matkul.namamk as matkul', 'matkul.sks as Sks')
            ->get();
        return view('khs/index', compact('khs'));
    }
}
