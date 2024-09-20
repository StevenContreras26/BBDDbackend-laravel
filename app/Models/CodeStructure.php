<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeStructure extends Model
{
    use HasFactory;
    protected $fillable = [
        'section',                   // 'SECTION'
        'serie',                     // 'SERIE'
        'family_description',        // 'FAMILY DESCRIPTION'
        'stranding_type',            // 'STRANDING TYPE'
        'conductors_or_pairs_or_triad', // '#CONDUCTORS, #PAIR, #TRIAD'
        'conductor_gauge',           // 'CONDUCTOR GAUGE'
        'conductor_material',        // 'CONDUCTOR MATERIAL'
        'insulation_material',       // 'INSULATION MATERIAL'
        'voltage',                   // 'VOLTAGE'
        'temperature',               // 'TEMPERATURE'
        'color_code',                // 'COLOR CODE'
        'grounding',                 // 'GROUNDING'
        'shielded',                  // 'SHIELDED'
        'armour',                    // 'ARMOUR'
        'jacket_material',           // 'JACKET MATERIAL'
        'jacket_color',              // 'JACKET COLOR'
        'installation_type',         // 'INSTALLATION TYPE'
        'standard',                  // 'STANDARD'
        'construction',              // 'CONSTRUCTION'
        'ekabel_part_number',        // 'EKABEL PART NUMBER'
        'complete_description',      // 'COMPLETE DESCRIPTION'
    ];
}
