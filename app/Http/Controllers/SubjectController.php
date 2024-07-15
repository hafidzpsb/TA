<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raw;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function store()
    {
        if (Raw::count() > 0)
        {
            $table = Raw::select('STUDYPROGRAMID', 'SUBJECTCODE', 'COURSEID')
            ->where('STUDYPROGRAMID', '=', 22) // 22 diganti dengan id prodi user
            ->groupBy('SUBJECTCODE')
            ->orderBy('SUBJECTCODE')
            ->get();

            foreach($table as $row)
            {
                Subject::updateOrCreate([
                    'STUDYPROGRAMID' => $row->STUDYPROGRAMID,
                    'SUBJECTCODE' => $row->SUBJECTCODE,
                    'COURSEID' => $row->COURSEID,
                ]);
            }
            return redirect()->back()->with('alert', 'Berhasil membuat tabel subject!');
        } 
        else 
        {
            return redirect()->back()->with('alert', 'Tidak ada tabel raw!');
        }
    }
}
