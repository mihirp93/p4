@extends('layouts.master')

@section('content')

    <p>Don't have an account? <a href='/register'>Register here...</a></p>

    <h1>Login</h1>

    <form method='POST' action='/login'>

        {!! csrf_field() !!}

        <div>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' value='{{ old('password') }}'>
        </div>

        <div>
            <input type='checkbox' name='remember' id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>

        <button type='submit'>Login</button>

    </form>
@stop
