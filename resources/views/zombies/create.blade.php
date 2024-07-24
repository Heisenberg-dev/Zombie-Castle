
<!DOCTYPE html>
<html>
<head>
    <title>Create Zombie</title>
    @vite(['resources/css/create.css', 'resources/js/app.js'])
</head>
<body style="background-image: url('{{ asset('images/zombie.png') }}');">
<div class="main_container">
<h1>Create Zombie</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
@endif

<form class="create_form" action="{{ route('zombies.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
    </div>
    <div>
        <label for="strength">Strength:</label>
        <input type="number" id="strength" name="strength" value="{{ old('strength') }}">
    </div>
    <div>
        <label for="health">Health:</label>
        <input type="number" id="health" name="health" value="{{ old('health') }}">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}">
    </div>
    <div>
        <label for="weapons">Weapons:</label>
        <input type="text" id="weapons" name="weapons" value="{{ old('weapons') }}">
    </div>
    <button type="submit">Create Zombie</button>
</form>

<a href="{{ route('zombies.index') }}">Back to Zombies List</a>
</div>
</body>
</html>
