<!DOCTYPE html>
<html>
<head>
    <title>Zombie starus:</title>
</head>
<body>
<h1>Home</h1>
<p>Zombie is too old for being active</p>
@if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
@endif
<a href="{{ route('zombies.index') }}">Back to Zombies List</a>
</body>
</html>
