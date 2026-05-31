@extends('layouts.admin')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f3f4f6;">
    <div class="card" style="width: 100%; max-width: 400px;">
        <h2 style="text-align: center; margin-bottom: 20px;">Admin Login</h2>

        @if(session('error'))
            <div style="background-color: #fee2e2; color: #ef4444; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-group">
                <label for="login" style="display: block; margin-bottom: 5px;">Email, Username, or Phone</label>
                <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autofocus>
                @error('login')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group" style="display: flex; align-items: center;">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" style="margin-left: 5px;">Remember Me</label>
            </div>

            <div class="form-group" style="margin-top: 20px;">
                <button type="submit" class="btn" style="width: 100%;">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
