<?php

use App\Models\Zombie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/admin/zombies/create', function(Request $request) {
// instantiate a new zombie
    $zombie = new Zombie();
    $zombie->name = $request->name;
    $zombie->strength = $request->strength;
    $zombie->health = $request->health;
    $zombie->weapons = $request->weapons;
    $zombie->save();
    echo 'Zombie Created';
});
