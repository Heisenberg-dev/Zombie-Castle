<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }}'s Profile</title>
</head>
<body>
<p>Welcome, {{ $user->name }}!</p>
<p>Email: {{ $user->email }}</p>
<a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>
