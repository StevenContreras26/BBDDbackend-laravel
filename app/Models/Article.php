<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
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

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function familyDescription()
    {
        return $this->belongsTo(FamilyDescription::class);
    }

    public function stranding()
    {
        return $this->belongsTo(StrandingType::class);
    }

    public function conductorPairTriad()
    {
        return $this->belongsTo(ConductorPairTriad::class);
    }

    public function conductorGauge()
    {
        return $this->belongsTo(ConductorGauge::class);
    }

    public function scopeWhenCodeSimilarTo($query, $code)
    {
        if(!$code)return;
        return $query->where('code', 'like', '%' . $code . '%');
    }
}
