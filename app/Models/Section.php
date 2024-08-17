<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public static function createUniqueName($unFixedName)
    {
        $name = strtolower($unFixedName); // Transforma el nombre a minúsculas
        $section = Section::where('name', $name)->first();

        if (!$section) {
            // Si no existe, crea un nuevo registro
            $section = new Section();
            $section->name = $name;
            $section->save();
        }

        return $section;
    }

}
