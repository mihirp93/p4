@extends('layouts.master')

@section('head')
   <link href="/css/styles.css" rel="stylesheet" type="text/css"/>
@stop

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
        <div class="alert alert-danger error" role="alert">
              <ul class='error_list'>
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
               <div class="form-group form-group-lg">
                  <label class="col-sm-3 control-label" for='email'>Email</label>
                  <div class="col-sm-8">
                     <input  class="form-control" type='text' name='email' id='email' value='{{ old('email') }}'>
                  </div>
               </div>
               <div class="form-group form-group-lg">
                  <label class="col-sm-3 control-label" for='password'>Password</label>
                  <div class="col-sm-8">
                     <input  class="form-control" type='password' name='password' id='password'>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-offset-3 col-sm-4">
                     <div class="checkbox">
                        <label><input type="checkbox" name="remember_me">Remember me</label>
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
      <div class="col-md-6 register">
         <h2>Sign up for an Account</h2>
         <form class="form-horizontal" method='POST' action='/register'>
               {!! csrf_field() !!}
               <div class="form-group form-group-md">
                  <label class="col-sm-4 control-label" for='name'>Name</label>
                  <div class="col-sm-8">
                     <input  class="form-control" type='text' name='name' id='name' value='{{ old('name') }}'>
                  </div>
               </div>
               <div class="form-group form-group-md">
                  <label class="col-sm-4 control-label" for='register_email'>Email</label>
                  <div class="col-sm-8">
                     <input  class="form-control" type='text' name='email' id='register_email'>
                  </div>
               </div>
               <div class="form-group form-group-md">
                  <label class="col-sm-4 control-label" for='register_password'>Password</label>
                  <div class="col-sm-8">
                     <input  class="form-control" type='password' name='password' id='register_password'>
                  </div>
               </div>
               <div class="form-group form-group-md">
                  <label class="col-sm-4 control-label" for='confirm_password'>Confirm Password</label>
                  <div class="col-sm-8">
                     <input  class="form-control" type='password' name='confirm_password' id='confirm_password'>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-info btn-lg">Register</button>
                  </div>
               </div>
         </form>
      </div>
   </div>
</div>
@stop
