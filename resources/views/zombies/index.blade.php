<!DOCTYPE html>
<html>
<head>
    <title>All Zombies</title>
    @vite(['resources/css/index.css', 'resources/js/app.js'])
</head>
<body style="background-image: url('{{ asset('images/zombie.png') }}');" >
    <div class="main">
        @if($zombies->isEmpty())
            <p>No zombies found. <a href="{{ route('zombies.create') }}">Create a new zombie</a>.</p>
        @else
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Weapons</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($zombies as $zombie)
                            <tr>
                                <td><a href="{{ route('zombies.show', $zombie->id) }}" class="btn btn-success">{{ $zombie->name }}</a></td>
                                <td><a href="{{ route('zombies.edit', $zombie->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('zombies.destroy', $zombie->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <ul>
                                        @foreach ($zombie->weapons as $weapon)
                                            <li class="weapon">Weapon: {{ $weapon->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button id="btn_create" type="button" class="btn btn-light">
                    <a href="{{ route('zombies.create') }}">Create New Zombie</a>
                </button>
            </div>
        @endif
    </div>
</body>
</html>
