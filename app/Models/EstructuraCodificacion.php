<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstructuraCodificacion extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'estructura_codificacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section',
        'serie',
        'family_description',
        'stranding',
        'conductor_pair_triad',
        'conductor_gauge',
        'voltage',
        'insulation_material',
        'temperature',
        'grounding',
        'shielded',
        'armour',
        'conductor_material',
        'color_code',
        'jacket_material',
    ];
}
