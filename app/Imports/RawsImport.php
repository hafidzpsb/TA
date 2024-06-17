<?php

namespace App\Imports;

use App\Models\Raw;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Illuminate\Support\Facades\DB;

class RawsImport implements ToModel, WithChunkReading, WithBatchInserts
{
    public function model(array $row)
    {
        if (!empty($row)) {
            DB::table('raws')->insert([
                'STUDYPROGRAMID' => $row[0],
                'STUDYPROGRAMNAME' => $row[1],
                'SUBJECTCODE' => $row[2],
                'CLOPLOID' => $row[3],
                'PLONAME' => $row[4],
                'PLONUMBER' => $row[5],
                'CLOCLOID' => $row[6],
                'CLONUMBER' => $row[7],
                'CLONAME' => $row[8],
                'QUESTIONDESCRIPTION' => $row[9],
                'QUESTIONNUMBER' => $row[10],
                'QUESTION_PERCENTAGE' => $row[11],
                'CLOASSESSMENTTOOLSNAME' => $row[12],
                'ASSESSMENT_PERCENTAGE' => $row[13],
                'STUDENTID' => $row[14],
                'FULLNAME' => $row[15],
                'CLOPOINT' => $row[16],
                'COURSEID' => $row[17],
                'CLASS' => $row[18],
            ]);
        }
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
