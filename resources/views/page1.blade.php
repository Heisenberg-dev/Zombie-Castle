<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Framework</title>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

</head >
<body>
<header>
    <h1>Page 1</h1>
</header>
<section>
    <p>Learn about the Laravel framework, a powerful PHP web application framework. There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.</p>
</section>
<nav>
    <a href="{{ url('/page2') }}">Go to Page 2</a>
    <a href="{{ url('/page3') }}">Go to Page 3</a>
</nav>
</body>
</html>
