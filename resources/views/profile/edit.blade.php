<!-- resources/views/profile/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
<h1>Edit Profile</h1>

@if (session('status') === 'profile-updated')
    <p>Your profile has been updated!</p>
@endif

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
        @error('name')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
        @error('email')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Update Profile</button>
</form>

<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')

    <button type="submit">Delete Account</button>
</form>

<a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>
