@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <div>
            <label for="email">Email</label>
        </div>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <div>
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>
    <div>
        <div>
            <label for="email">Password</label>
        </div>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
            <div>
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>
    <div>
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">
            Remebmer me
        </label>
    </div>

    <button type="submit">
        Login
    </button>
    <div>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        @endif
    </div>
</form>
@endsection
