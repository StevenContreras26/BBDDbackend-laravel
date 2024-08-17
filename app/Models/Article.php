<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_id',
        'serie_id',
        'family_description_id',
        'stranding_id',
        'conductor_pair_triad_id',
        'conductor_gauge_id',
        'voltage',
        'temperature',
        'grounding',
        'shielded',
        'armour',
        'conductor_material',
        'color_code',
        'jacket_material',
    ];
}
