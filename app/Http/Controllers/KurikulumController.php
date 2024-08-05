<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulums = Kurikulum::all();
        return view('kurikulum.kurikulum_index', compact('kurikulums'));
    }
    public function create()
    {
        return view('kurikulum.kurikulum_create');    
    }
    public function store(Request $request)
    {
        Kurikulum::create([
            'tahun' => $request->tahun
        ]);
        return redirect('/kurikulum/index');
    }
    public function edit($kurikulum_id)
    {
        $kurikulum = Kurikulum::find($kurikulum_id);
        return view('kurikulum.kurikulum_edit', compact('kurikulum')); 
    }
    public function update(Request $request, $kurikulum_id)
    {
        $kurikulum = Kurikulum::find($kurikulum_id);
        $kurikulum -> update([
            'tahun' => $request->tahun
        ]);
        return redirect('/kurikulum/index');
    }
    public function destroy($kurikulum_id)
    {
        $kurikulum = Kurikulum::find($kurikulum_id);
        $kurikulum -> delete();
        return redirect('/kurikulum/index');
    }
}
