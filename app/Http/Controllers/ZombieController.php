<?php

namespace App\Http\Controllers;

use App\Models\Zombie;
use App\Models\Weapon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


class ZombieController extends Controller
{
public function __construct()
{
$this->middleware(\App\Http\Middleware\CheckZombieAge::class)->except(['show']);
}

public function index()
{

$zombies = Zombie::with('weapons')->get();
return view('zombies.index', compact('zombies'));
}

public function create()
{
return view('zombies.create');
}

public function store(Request $request)
{
    Log::info('Store method triggered', $request->all());
$request->validate([
'name' => 'required|string|max:255',
'strength' => 'required|integer',
'health' => 'required|integer',
'age'=> 'required|integer',
'weapons' => 'nullable|string',
]);

if ($request->input('age') > 100) {
    Log::info('Age greater than 100, redirecting to home');
return redirect()->route('home')->with('error', 'Zombie is too old for being active');

}

$zombie = Zombie::create($request->only(['name', 'strength', 'health', 'age']));

if ($request->filled('weapons')) {
Weapon::create([
'zombie_id' => $zombie->id,
'name' => trim($request->weapons),
]);
}

return redirect()->route('zombies.index')->with('success', 'Zombie created successfully.');
}

public function show($id)
{
$zombie = Zombie::with('weapons')->findOrFail($id);
return view('zombies.show', compact('zombie'));
}

public function edit($id)
{
$zombie = Zombie::findOrFail($id);
return view('zombies.edit', compact('zombie'));
}

public function update(Request $request, $id)
{
$request->validate([
'name' => 'required|string|max:255',
'strength' => 'required|integer',
'health' => 'required|integer',
'age' => 'required|integer',
'weapons' => 'nullable|string',
]);

if ($request->input('age') > 100) {
return redirect()->route('home')->with('error', 'Zombie is too old for being active');
}

$zombie = Zombie::findOrFail($id);
$zombie->update($request->only(['name', 'strength', 'health', 'age']));

$zombie->weapons()->delete();
if ($request->filled('weapons')) {
$weaponNames = explode(',', $request->weapons);
foreach ($weaponNames as $weaponName) {
Weapon::create([
'zombie_id' => $zombie->id,
'name' => trim($weaponName),
]);
}
}

return redirect()->route('zombies.index')->with('success', 'Zombie updated successfully.');
}

public function destroy($id)
{
$zombie = Zombie::findOrFail($id);
$zombie->weapons()->delete();
$zombie->delete();
return redirect()->route('zombies.index')->with('success', 'Zombie deleted successfully.');
}

}
