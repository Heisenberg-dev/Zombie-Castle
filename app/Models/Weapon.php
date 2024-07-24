<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'zombie_id',
        'name',
    ];

    public function zombie()
    {
        return $this->belongsTo(Zombie::class);
    }
}
