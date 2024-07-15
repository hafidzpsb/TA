<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raw;
use App\Models\Grade;

class GradeController extends Controller
{
    public function store()
    {
        // Set waktu request selama 1 jam
        ini_set('max_execution_time', 3600);

        if (Raw::count() > 0)
        {
            $table = Raw::select('STUDYPROGRAMID', 'COURSEID', 'CLOPLOID', 'CLOCLOID', 'QUESTIONNUMBER', 'CLOASSESSMENTTOOLSNAME', 'STUDENTID', 'CLOPOINT')
            ->where('STUDYPROGRAMID', '=', 22) // 22 diganti dengan id prodi user
            ->orderBy('COURSEID')
            ->get();

            foreach($table as $row)
            {
                Grade::updateOrCreate([
                    'STUDYPROGRAMID' => $row->STUDYPROGRAMID,
                    'COURSEID' => $row->COURSEID,
                    'CLOPLOID' => $row->CLOPLOID,
                    'CLOCLOID' => $row->CLOCLOID,
                    'QUESTIONNUMBER' => $row->QUESTIONNUMBER,
                    'CLOASSESSMENTTOOLSNAME' => $row->CLOASSESSMENTTOOLSNAME,
                    'STUDENTID' => $row->STUDENTID,
                    'CLOPOINT' => $row->CLOPOINT,
                ]);
            }
            return redirect()->back()->with('alert', 'Berhasil membuat tabel grade!');
        } 
        else 
        {
            return redirect()->back()->with('alert', 'Tidak ada tabel raw!');
        }
    }
}
