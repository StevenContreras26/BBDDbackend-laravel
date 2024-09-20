<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmAluAstmB801Table1 extends Model
{
    use HasFactory;
    protected $table = 'cm_alu_astm_b801_table1';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cmil',
        'awg',
        'mm2',
        'lbs_per_1000_ft',
        'kg_per_km',
    ];
}
