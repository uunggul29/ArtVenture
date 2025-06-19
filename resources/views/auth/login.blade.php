<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ArtVenture Login</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">LOGIN</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="field">
                <input id="email" for="email" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
                <label>Email</label>
            </div>

            <!-- Password -->
            <div class="field">
                <input id="password" for="password" type="password" name="password" :value="__('Password')" required
                    autocomplete="current-password" />
                <label>Password</label>
            </div> <br>

            <div class="field">
                <input type="submit" value="{{ __('Login') }}">
            </div>

            <div class="signup-link">
                {{ __('Dont have an account?') }} <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
</body>

</html>