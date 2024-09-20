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

    /**
     * Ensure the name is unique and in lowercase.
     *
     * @param string $value
     * @param string $field
     * @return string
     */
    public static function createUniqueName($value, $field)
    {
        $value = strtolower($value);
        if (!self::where($field, $value)->exists()) {
            self::create([$field => $value]);
        }
        return $value;
    }
}

namespace App\Imports;

use App\Models\EstructuraCodificacion;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CodingImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        for ($i = 0; $i < $rows->count(); $i++) {
            if ($i == 0) continue;
            $row = $rows[$i];

            EstructuraCodificacion::createUniqueName($row[0], 'section');
            EstructuraCodificacion::createUniqueName($row[1], 'serie');
            EstructuraCodificacion::createUniqueName($row[2], 'family_description');
            EstructuraCodificacion::createUniqueName($row[3], 'stranding');
            EstructuraCodificacion::createUniqueName($row[4], 'conductor_pair_triad');
            EstructuraCodificacion::createUniqueName($row[5], 'conductor_gauge');
            EstructuraCodificacion::createUniqueName($row[6], 'voltage');
            EstructuraCodificacion::createUniqueName($row[7], 'conductor_material');
            EstructuraCodificacion::createUniqueName($row[8], 'insulation_material');
            EstructuraCodificacion::createUniqueName($row[9], 'temperature');
            EstructuraCodificacion::createUniqueName($row[10], 'color_code');
            EstructuraCodificacion::createUniqueName($row[11], 'grounding');
            EstructuraCodificacion::createUniqueName($row[12], 'shielded');
            EstructuraCodificacion::createUniqueName($row[13], 'armour');
            EstructuraCodificacion::createUniqueName($row[14], 'jacket_material');
        }
    }
}
