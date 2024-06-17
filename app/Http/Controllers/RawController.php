<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RawsImport;

class RawController extends Controller
{
    public function index(Request $request)
    {
        return view('raw.index');
    }
    public function import(Request $request)
    {
        // Set waktu request selama 1 jam
        ini_set('max_execution_time', 3600);

        // Masukkan file excel ke database
        Excel::import(new RawsImport, $request->file('excel'));

        // Ambil nama file
        $excel = $request->file('excel')->getClientOriginalName();

        // Pindahkan file ke public/raw
        $request->file('excel')->move(public_path('/raw/excel'), $excel);

        return redirect()->back() ->with('alert', 'Berhasil membuat tabel raw!');
    }
}
