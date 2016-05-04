@extends('layouts.profile')
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
   @endif
</div>
@stop
