<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raw;
use App\Models\Question;

class QuestionController extends Controller
{
    public function store()
    {
        if (Raw::count() > 0)
        {
            $table = Raw::select('STUDYPROGRAMID', 'CLOPLOID', 'PLONAME', 'PLONUMBER', 'CLOCLOID', 'CLONAME', 'CLONUMBER', 'QUESTIONDESCRIPTION', 'QUESTIONNUMBER', 'QUESTION_PERCENTAGE', 'CLOASSESSMENTTOOLSNAME', 'COURSEID')
            ->where('STUDYPROGRAMID', '=', 22) // 22 diganti dengan id prodi user
            ->groupBy('COURSEID')
            ->groupBy('CLOPLOID')
            ->groupBy('CLOCLOID')
            ->groupBy('QUESTIONNUMBER')
            ->groupBy('QUESTION_PERCENTAGE')
            ->groupBy('CLOASSESSMENTTOOLSNAME')
            ->orderBy('CLOPLOID')
            ->get();

            foreach($table as $row)
            {
                Question::updateOrCreate([
                    'STUDYPROGRAMID' => $row->STUDYPROGRAMID,
                    'CLOPLOID' => $row->CLOPLOID,
                    'PLONAME' => $row->PLONAME,
                    'PLONUMBER' => $row->PLONUMBER,
                    'CLOCLOID' => $row->CLOCLOID,
                    'CLONAME' => $row->CLONAME,
                    'CLONUMBER' => $row->CLONUMBER,
                    'QUESTIONDESCRIPTION' => $row->QUESTIONDESCRIPTION,
                    'QUESTIONNUMBER' => $row->QUESTIONNUMBER,
                    'QUESTION_PERCENTAGE' => $row->QUESTION_PERCENTAGE,
                    'CLOASSESSMENTTOOLSNAME' => $row->CLOASSESSMENTTOOLSNAME,
                    'COURSEID' => $row->COURSEID,
                ]);
            }
            return redirect()->back()->with('alert', 'Berhasil membuat tabel question!');
        } 
        else 
        {
            return redirect()->back()->with('alert', 'Tidak ada tabel raw!');
        }
    }
}
