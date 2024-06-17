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
            $table = Raw::where('STUDYPROGRAMID', '=', 22) // 22 diganti dengan id prodi user
            ->groupBy('SUBJECTCODE')
            ->groupBy('CLOPLOID')
            ->groupBy('CLOCLOID')
            ->groupBy('QUESTIONNUMBER')
            ->groupBy('QUESTION_PERCENTAGE')
            ->groupBy('CLOASSESSMENTTOOLSNAME')
            ->get();

            foreach($table as $row)
            {
                Question::updateOrCreate([
                    'STUDYPROGRAMID' => $row->STUDYPROGRAMID,
                    'SUBJECTCODE' => $row->SUBJECTCODE,
                    'CLOPLOID' => $row->CLOPLOID,
                    'PLONUMBER' => $row->PLONUMBER,
                    'CLOCLOID' => $row->CLOCLOID,
                    'CLONUMBER' => $row->CLONUMBER,
                    'QUESTIONNUMBER' => $row->QUESTIONNUMBER,
                    'QUESTION_PERCENTAGE' => $row->QUESTION_PERCENTAGE,
                    'CLOASSESSMENTTOOLSNAME' => $row->CLOASSESSMENTTOOLSNAME,
                    'COURSEID' => $row->COURSEID,
                ]);
            }
            return redirect()->back() ->with('alert', 'Berhasil membuat tabel question!');
        } 
        else 
        {
            return redirect()->back() ->with('alert', 'Tidak ada tabel raw!');
        }
    }
}
