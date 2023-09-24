@extends('layouts.app')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('password.email') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Reset Password</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email" />
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input type="submit" class="btn" value="Reset" />
            </form>
        </div>
    </div>
</div>
@endsection