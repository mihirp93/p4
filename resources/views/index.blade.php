@extends('layouts.master')

@section('content')
<div class="jumbotron">
   <h1>Personal Finance Manager</h1>
   <p class="lead">Do you ever feel overwhelmed in keeping track of your personal finances?
      Be honest(for your sake). In today's day and age, money is simply too valuable
      for us and keeping track of it is no longer an option. Therefore, I created this web app
      to help me manage and track my finances(along with others things as you'll soon see).
   </p>
   <div class="row">
      @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>
                    <span class="sr-only">Error:</span>
                      {{ $error }}
                 </li>
                @endforeach
              </ul>
        </div>
       @endif
      <div class="col-md-6">
         <h2>Already have an account?</h2>
         <form class="form-horizontal" method='POST' action='/login'>
            {!! csrf_field() !!}
            <div class="form-group">
               <label class="control-label col-sm-3" for='email'>Email</label>
               <input type='text' name='email' id='email' value='{{ old('email') }}'>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-3" for='password'>Password</label>
               <input type='password' name='password' id='password'>
            </div>
            <div class="form-group">
               <div class="col-md-offset-2 col-sm-4">
                  <div class="checkbox">
                     <label><input type="checkbox" name="remember_me"> Remember me</label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-lg">Log In</button>
               </div>
            </div>
         </form>
      </div>
      <div class="col-md-6">
         <h2>Sign up for an Account</h2>
         <form class="form-horizontal" method='POST' action='/register'>
            {!! csrf_field() !!}
            <div class="form-group">
               <label class="control-label col-sm-4" for='name'>Name</label>
               <input type='text' name='name' id='name' value='{{ old('name') }}' >
            </div>
            <div class="form-group">
               <label class="control-label col-sm-4" for='email'>Email</label>
               <input type='text' name='email' id='email' value='{{ old('email') }}'>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-4" for='password'>Password</label>
               <input type='password' name='password' id='password'>
            </div>
            <div class="form-group">
               <label  class="control-label col-sm-4" for='password_confirmation'>Confirm Password</label>
               <input type='password' name='password_confirmation' id='password_confirmation'>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-4 col-sm-10">
                  <button type="submit" class="btn btn-info btn-lg">Register</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@stop
