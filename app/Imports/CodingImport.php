<?php

namespace App\Imports;

use App\Models\ConductorGauge;
use App\Models\ConductorPairTriad;
use App\Models\FamilyDescription;
use App\Models\Section;
use App\Models\Serie;
use App\Models\StrandingType;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class CodingImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        for ($i=0; $i <$rows->count() ; $i++) { 
            if($i==0)continue;
            $row=$rows[$i];
            
            Section::createUniqueName($row[0]);
            Serie::createUniqueName($row[1]);
            FamilyDescription::createUniqueName($row[2]);
            StrandingType::createUniqueName($row[3]);
            ConductorPairTriad::createUniqueName($row[4]);
            ConductorGauge::createUniqueName($row[5]);

            
            
        }
        
            
        
    }
}
