<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>SewaMotor</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="/login">
            @csrf
            <h1>Login</h1>

            <div class="input-box">
                <input type="text" placeholder="Email" name="email" id="email">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" id="password">
            </div>

            <div class="forget-password">
                <a href="#">Forget Password?</a>
            </div>

            <button type="submit" class="btn">Log In</button>
            <div class="register-link">
                <p>Don't have an account?<a href="/register"> Register</a></p>
            </div>
        </form>

        @if ($errors->has('inputs'))
        <div class="error">
            <p>{{ $errors->first('inputs')}}</p>
        </div>
    @endif
    </div>
</body>
</html>
