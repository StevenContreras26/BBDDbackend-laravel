<?php

namespace App\Imports;

use App\Models\CmAluAstmB801Table1;
use App\Models\CodeStructure;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class CmAluAstmB801Table1Import implements ToCollection
{
      /**
     * Import data from the Excel file.
     *
     * @param Collection $rows
     * @return void
     */
    public function collection(Collection $rows)
    {
            // Skip the first row if it contains headers
            $rows->shift();

            foreach ($rows as $row) {
                // Create a new CodeStructure entry using numerical indices
                CmAluAstmB801Table1::create([
                'cmil'           => $row[0], // 'CMIL'
                'awg'            => $row[1]??'', // 'AWG'
                'mm2'            => $row[2], // 'mm2'
                'lbs_per_1000_ft' => $row[3], // 'LBS/1000 FT'
                'kg_per_km'      => $row[4], // 'KG/KM'
                ]); }
    }
}
