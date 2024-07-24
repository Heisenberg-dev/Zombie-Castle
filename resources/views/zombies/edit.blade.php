<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Zombie</title>
    @vite(['resources/css/edit.css', 'resources/js/app.js'])
</head>

<body style="background-image: url('{{ asset('images/zombie.png') }}');">
    <div class="main">
        <div class="second">
            <h1>Edit Zombie</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('zombies.update', $zombie->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $zombie->name) }}">
                </div>
                <div class="form-group">
                    <label for="strength">Strength:</label>
                    <input type="text" id="strength" name="strength" value="{{ old('strength', $zombie->strength) }}">
                </div>
                <div class="form-group">
                    <label for="health">Health:</label>
                    <input type="text" id="health" name="health" value="{{ old('health', $zombie->health) }}">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" value="{{ old('age', $zombie->age) }}">
                </div>
                <div class="form-group">
                    <label for="weapons">Weapons:</label>
                    <input type="text" id="weapons" name="weapons"
                        value="{{ old('weapons', implode(', ', $zombie->weapons->pluck('name')->toArray())) }}">
                </div>
        </div>
        <div class="third">
        <button type="submit" class="btn btn-primary">Update Zombie</button>
        </form>

        <a href="{{ route('zombies.index') }}" class="btn btn-secondary mt-3">Back to Zombies</a>
        </div>
    </div>
</body>

</html>