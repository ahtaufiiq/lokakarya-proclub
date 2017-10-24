@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Login</h1>

    <div class="form-group">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email" >Email Address:</label>
                <input type="text" class="form-control" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="password" >Password:</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>

            <div class="form-group">

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>

            </div>

            @include('layouts.errors')
        </form>
    </div>
</div>
@endsection
