@extends('layouts.master_profile')
@section('content')
   @if(count($transactions) >= 1)
      <h2 class="sub-header">All Transactions</h2>
      <div class="table-responsive">
       <table class="table table-bordered">
          <thead>
           <tr>
              <th>#</th>
              <th>Date</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Type</th>
              <th><img src="/images/edit_icon.png" width="20" height="20"></th>
              <th><img src="/images/delete_icon.png" width="20" height="20"></th>
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
                 <td><a href='/edit/{{ $transaction->id }}'>Edit</a></td>
                 <td><a href='/delete/{{ $transaction->id }}'>Delete</a></td>
              </tr>
              <?php $i = $i + 1 ?>
           @endforeach
        </tbody>
        </table>
      </div>
   @endif
@stop
