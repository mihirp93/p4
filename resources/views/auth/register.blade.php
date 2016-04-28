@extends('layouts.master')

@section('content')
<p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <div>
            <label for='name'>Name</label>
            <input type='text' name='name' id='name' value='{{ old('name') }}'>
        </div>

        <div>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password'>
        </div>

        <div>
            <label for='password_confirmation'>Confirm Password</label>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>

        <button type='submit'>Register</button>

    </form>
@stop
