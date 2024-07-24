<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/dashboard.css', 'resources/js/app.js'])
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

    </h2>
</head>
<body class="main" style="background-image: url('{{ asset('images/zombie2.png') }}');">
    <div class="container py-12">
        <div class="inner-container max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="content bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-container p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="suggestion">
            <button type="button" class="btn btn-success"><a href="admin/zombies/create">Create your own zombie</a></button>
        </div>
        <div class="suggest">
            <button class=""></button>
        </div>
    </div>
</body>
