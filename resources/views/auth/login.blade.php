@extends('layout')
@section('content')
<div style="background: url('https://uasbucket1.s3.ap-southeast-1.amazonaws.com/foto_frontend/wallpaper.jpeg') no-repeat center center fixed; background-size: cover; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div style="background: rgba(255,255,255,0.85); padding: 32px 24px; border-radius: 8px; min-width: 320px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <h2 style="text-align:center;color:#1a237e;margin-bottom:24px;">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div style="margin-bottom:16px;">
                <label>Email</label><br>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus style="width:100%;padding:8px 10px;">
                @error('email')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
            </div>
            <div style="margin-bottom:16px;">
                <label>Password</label><br>
                <input type="password" name="password" required style="width:100%;padding:8px 10px;">
                @error('password')<div style="color:red;font-size:0.95em;">{{ $message }}</div>@enderror
            </div>
            <button type="submit" style="width:100%;background:#3949ab;color:#fff;padding:10px 0;border-radius:5px;font-size:1.1em;">Login</button>
        </form>
    </div>
</div>
@endsection
