<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ArtVenture Register</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-artventure.png') }}">
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">REGISTER</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="field">
                <input id="name" for="name" type="name" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
                <label>Name</label>
            </div>

            <!-- Email -->
            <div class="field">
                <input id="email" for="email" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
                <label>Email</label>
            </div>

            <!-- Password -->
            <div class="field">
                <input id="password" for="password" type="password" name="password" :value="old('Password')" required
                    autofocus autocomplete="new-password" />
                <label>Password</label>
            </div>

            <!-- Confirm Password -->
            <div class="field">
                <input id="password_confirmation" for="password_confirmation" type="password"
                    name="password_confirmation" :value="old('Confirm Password')" required autofocus
                    autocomplete="new-password" />
                <label>Confirm Password</label>
            </div> <br>

            <div class="field">
                <input type="submit" value="{{ __('Register') }}">
            </div>

            <div class="signup-link">
                {{ __('Already registered?') }} <a href="{{ route('login') }}">Login</a>
            </div>

        </form>
    </div>
</body>

</html>