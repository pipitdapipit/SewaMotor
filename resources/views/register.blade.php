<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/register.css">
    <title>SewaMotor</title>
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="/register">
            @csrf
            <h1>Register</h1>

            <div class="input-box">
                <input type="text" placeholder="Username" name="username" id="username">
            </div>

            <div class="input-box">
                <input type="text" placeholder="Email" name="email" id="email">
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password" id="password">
            </div>

            <div class="input-box">
                <input type="text" placeholder="Phone number" name="phone_num" id="phone_num">
            </div>

            <div class="input-box">
                <input type="text" placeholder="City" name="city" id="city">
            </div>


            <button type="submit" class="btn">Log In</button>
            <div class="login-link">
                <p>Already have account?<a href="/login"> Log In</a></p>
            </div>
        </form>
    </div>
</body>
</html>
