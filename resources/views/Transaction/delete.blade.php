@extends('layouts.master_profile')

@section('content')
   <h1>Delete Transaction</h1>
   <hr>
   <p class='lead confirm_message'>
      Are you sure you want to delete this transaction?
      <br>
      <a href='/delete/{{ $transaction->id }}'>Yes<a>
      <br>
      <a href='/profile'>No</a>
   </p>
   <div class="table-responsive">
    <table class="table table-striped">
       <thead>
           <tr>
              <th>Date</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Type</th>
           </tr>
       </thead>
       <tbody>
           <tr>
              <td>{{ $transaction->trans_date }}</td>
              <td>{{ $transaction->trans_desc }}</td>
              <td>{{ $transaction->trans_amount }}</td>
              <td>{{ $transaction->type->trans_type }}</td>
           </tr>
       </tbody>
     </table>
   </div>
@stop
