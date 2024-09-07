<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet"  href="css/layout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="/"><h1>SewaMotor</h1></a>
        </div>
        <nav class="navbar">
            <a href="/rent">Rent</a>
            <a href="/data">All Data</a>
            @auth
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit" class="btn-logout">Log Out</button>
                </form>
            @else
                <a href="/login">Log In</a>
            @endauth
        </nav>
    </header>
    <div>
        @yield('content')
    </div>

</body>

</html>
