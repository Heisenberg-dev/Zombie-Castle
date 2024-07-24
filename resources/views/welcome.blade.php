<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-cover" style="background-image: url('{{ asset('images/zombie.png') }}');">
<div class="center-container">
    <div class="container">
    <h1 class="text-center">Welcome to Zombie Castle!</h1>
    <p class="lead">This is a simple Laravel web-app for fun</p>

        <div class="first_btn">
    <button id="welcome_btn" type="button" class="btn btn-warning"><a href="dashboard">Log in and let's Face with a Zombies</a></button>
        </div>
    </div>
</div>
</body>
</html>
