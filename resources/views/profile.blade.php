@extends('layouts.master')

@section('head')
   <link href="/css/styles.css" rel="stylesheet" type="text/css"/>
@stop

@section('title')
Profile
@stop

@section('navbar')
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Personal Finance Manager</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
@stop

@section('body_content')
   <div class='profile_sidebar'>
      <img src='http://www.fashatude.com/static/fashatude/img/user_icon.png' alt='user image' width='300' height='300'/>
      <h4>{{ $user->name }}</h4>
      <h4>{{ $user->email }}</h4>
      <ul class="nav nav-sidebar">
       <li><a href="#">See All Transactions</a></li>
       <li><a href="#">Add Transaction</a></li>
      </ul>
   </div>
@stop

@section('content')
<div class='profile_content'>
   @if(count($transactions) > 1)
   <h2 class="sub-header">All Transactions</h2>
   <div class="table-responsive">
    <table class="table table-striped">
       <thead>
        <tr>
           <th>#</th>
           <th>Date</th>
           <th>Description</th>
           <th>Amount</th>
           <th>Type</th>
        </tr>
       </thead>
       <tbody>
        <?php $i = 1 ?>
        @foreach($transactions as $transaction)
           <tr>
              <td>{{ $i }}</td>
              <td>{{ $transaction->trans_date }}</td>
              <td>{{ $transaction->trans_desc }}</td>
              <td>{{ $transaction->trans_amount }}</td>
              <td>{{ $transaction->type->trans_type }}</td>
           </tr>
           <?php $i = $i + 1 ?>
        @endforeach
     </tbody>
     </table>
   </div>
</div>
   @endif
@stop
