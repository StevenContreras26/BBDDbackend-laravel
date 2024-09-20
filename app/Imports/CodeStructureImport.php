<?php

namespace App\Imports;

use App\Models\CodeStructure;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CodeStructureImport implements ToCollection
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
            CodeStructure::create([
                'section'                 => $row[0], // 'SECTION'
                'serie'                   => $row[1], // 'SERIE'
                'family_description'      => $row[2], // 'FAMILY DESCRIPTION'
                'stranding_type'          => $row[3], // 'STRANDING TYPE'
                'conductors_or_pairs_or_triad' => $row[4], // '#CONDUCTORS, #PAIR, #TRIAD'
                'conductor_gauge'         => $row[5], // 'CONDUCTOR GAUGE'
                'conductor_material'      => $row[6], // 'CONDUCTOR MATERIAL'
                'insulation_material'     => $row[7], // 'INSULATION MATERIAL'
                'voltage'                 => $row[8], // 'VOLTAGE'
                'temperature'             => $row[9], // 'TEMPERATURE'
                'color_code'              => $row[10], // 'COLOR CODE'
                'grounding'               => $row[11], // 'GROUNDING'
                'shielded'                => $row[12], // 'SHIELDED'
                'armour'                  => $row[13], // 'ARMOUR'
                'jacket_material'         => $row[14], // 'JACKET MATERIAL'
                'jacket_color'            => $row[15], // 'JACKET COLOR'
                'installation_type'       => $row[16], // 'INSTALLATION TYPE'
                'standard'                => $row[17], // 'STANDARD'
                'construction'            => $row[18], // 'CONSTRUCTION'
                'ekabel_part_number'      => $row[19], // 'EKABEL PART NUMBER'
                'complete_description'    => $row[20], // 'COMPLETE DESCRIPTION'
            ]);
        }
    }
}