@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email" />
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password" />
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span style="color: #ffffff;">Remember Me</span>
                    </label>
                </div>

                @if (Route::has('password.request'))
                <div class="f-password">
                    <h4>
                        <a style="text-decoration: none; color: #ffffff;" href="{{ route('password.request') }}"
                            class="fp-link">Forgot
                            Password?</a>
                    </h4>
                </div>
                @endif

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input type="submit" value="Login" class="btn solid" />
            </form>
        </div>
    </div>
</div>
@endsection