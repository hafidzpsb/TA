<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peo;

class PeoController extends Controller
{
    public function index()
    {
        $peos = Peo::all();
        return view('peo.peo_index', compact('peos'));
    }
    public function create()
    {
        return view('peo.peo_create');    
    }
    public function store(Request $request)
    {
        Peo::create([
            'kurikulum_id' => $request->kurikulum_id,
            'kode_peo' => $request->kode_peo,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/peo/index');
    }
    public function edit($peo_id)
    {
        $peo = Peo::find($peo_id);
        return view('peo.peo_edit', compact('peo')); 
    }
    public function update(Request $request, $peo_id)
    {
        $peo = Peo::find($peo_id);
        $peo -> update([
            'kurikulum_id' => $request->kurikulum_id,
            'kode_peo' => $request->kode_peo,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/peo/index');
    }
    public function destroy($peo_id)
    {
        $peo = Peo::find($peo_id);
        $peo -> delete();
        return redirect('/peo/index');
    }
}
