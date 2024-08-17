<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public static function createUniqueName($name)
    {
        $name = strtolower($name);
        return self::firstOrCreate(['name' => $name]);
    }
    
}
