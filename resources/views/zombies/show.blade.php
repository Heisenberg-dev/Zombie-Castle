<!DOCTYPE html>
<html>
<head>
    <title>Zombie Details</title>
    @vite(['resources/css/zombieshow.css', 'resources/js/app.js'])
</head>
<body style="background-image: url('{{ asset('images/zombie.png') }}');">
<div class="container">
    <h1><b>Zombie Details</b></h1>
    <br>
 
    <div class="details">
        <p>Name: <span>{{ $zombie->name }}</span></p>
        <p>Strength: <span>{{ $zombie->strength }}</span></p>
        <p>Health: <span>{{ $zombie->health }}</span></p>
        <p>Age: <span>{{ $zombie->age }}</span></p>
    </div>
    
    <ul class="weapon-list">
        @foreach ($zombie->weapons as $weapon)
            <li>Weapon: <span>{{ $weapon->name }}</span></li>
        @endforeach
    </ul>
    <a href="{{ route('zombies.index') }}" class="btn btn-primary">Back to Zombie List</a>
</div>
</body>
</html>
