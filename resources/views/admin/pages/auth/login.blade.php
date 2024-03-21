<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- favicon -->
        <link rel="icon" type="image/ico" href="{{ asset('assets/images/Logos/favicon.ico') }}">

        @include('admin.layouts.styles')

        <title> {{ $title }} </title>
    </head>

    <body>
        <div class="login-page">
            <div class="login-from-wrap">
                <form class="login-from" action="{{ route('login.store') }}" method="post">
                    <form>
                        @csrf
                        <h1 class="site-title">
                            <a href="{{ route('home') }}" class="auth-logo">
                                <img loading="lazy" src="{{ asset('assets/images/Logos/adm-logo.png') }}"
                                    alt="">
                            </a>
                        </h1>
                        <div class="form-group">
                            <label for="first_name1">E-mail</label>
                            <input type="email" class="validate" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">Password</label>
                            <input id="last_name" type="password" class="validate" name="password"
                                value="{{ old('password') }}">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button-primary">Login</button>
                        </div>
                        <a href="{{ route('password.request') }}" class="for-pass">Forgot Password?</a>
                    </form>
            </div>
        </div>

        @include('admin.layouts.scripts')

    </body>

</html>
