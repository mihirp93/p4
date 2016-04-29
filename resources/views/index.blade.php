@extends('layouts.master')

@section('content')
  <h1>Home page<h1>
  <ul>
    <li><a href="/register">Register</a></li>
    <li><a href="/login">Login</a></li>
    <li><a href="/logout">Logout</a></li>
    <li><a href="/show-login-status">Show login status</a></li>
    <li><a href="/profile">Profile</a></li>
    <li><a href="/add">Add Transaction</a></li>
  <ul>
@stop
