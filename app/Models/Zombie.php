<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Zombie extends Model
{
    use HasFactory;


    protected $table = 'Zombie';

    protected function name():Attribute{
        return Attribute::make(
            get:fn(string $value) =>ucwords($value),
            set:fn(string $value) => ucfirst($value),
        );
    }
    protected $fillable = [
        'name',
        'health',
        'strength',
        'age',
    ];


    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }
}

