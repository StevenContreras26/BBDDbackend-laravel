<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyDescription extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public static function createUniqueName($name)
    {
        $name = strtolower($name);
        if (!self::where('name', $name)->exists()) {
            self::create(['name' => $name]);
        }
}
}