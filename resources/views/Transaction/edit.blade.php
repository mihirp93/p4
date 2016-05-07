@extends('layouts.master_profile')

@section('content')
<div class='profile_form'>
   <div class="jumbotron">
     <h2 class="sub-header">Edit Transaction</h2>
     <hr>
     <form class="form-horizontal" method="POST" action="/edit">
         {{ csrf_field() }}
         <input type='hidden' name='id' value='{{$transaction->id}}'>
         <label for="description">Description</label>
         <input type="text" name="description" id='description' value='{{ $transaction->trans_desc }}'/>
         <div class='field_error'>{{ $errors->first('description') }}</div>
         <label for="amount">Amount</label>
         <input type="text" name="amount" id='amount' value='{{ $transaction->trans_amount }}'/>
         <div class='field_error'>{{ $errors->first('amount') }}</div>
         <label for="date">Date</label>
         <input type="date" name="date" id='date' max='{{ date('Y-m-d') }}' value='{{ $transaction->trans_date }}'/>
         <div class='field_error'>{{ $errors->first('date') }}</div>
         <label for="type">Type</label>
         <select name='type' id='type'>
            @foreach($types_for_dropdown as $type_id => $trans_type)
                 <option
                     value='{{$type_id}}'
                     @if($transaction->type_id === $type_id)
                        SELECTED
                     @endif
                 >
                     {{$trans_type}}
                 </option>
            @endforeach
         </select>
         <div class='field_error'>{{ $errors->first('type') }}</div>
         <br>
         <br>
         <button type="submit" class="btn btn-primary btn-lg active">Update Transaction</button>
     </form>
  </div>
</div>
@stop
