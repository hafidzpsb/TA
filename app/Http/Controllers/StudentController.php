<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raw;
use App\Models\Student;

class StudentController extends Controller
{
    public function store()
    {
        if (Raw::count() > 0)
        {
            $table = Raw::where('STUDYPROGRAMID', '=', 22) // 22 diganti dengan id prodi user
            ->groupBy('SUBJECTCODE')
            ->groupBy('STUDENTID')
            ->groupBy('CLASS')
            ->get();

            foreach($table as $row)
            {
                Student::updateOrCreate([
                    'STUDYPROGRAMID' => $row->STUDYPROGRAMID,
                    'STUDENTID' => $row->STUDENTID,
                    'FULLNAME' => $row->FULLNAME,
                    'CLASS' => $row->CLASS,
                ]);
            }
            return redirect()->back() ->with('alert', 'Berhasil membuat tabel student!');
        } 
        else 
        {
            return redirect()->back() ->with('alert', 'Tidak ada tabel raw!');
        }
    }
}
