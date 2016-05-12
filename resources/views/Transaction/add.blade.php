@extends('layouts.master_profile')

@section('content')
<div class='profile_form'>
   <div class="jumbotron">
     <h2 class="sub-header">Add Transaction</h2>
     <hr>
     <form class="form-horizontal" method="POST" action="/add">
         {{ csrf_field() }}
         <label for="description">Description</label>
         <input type="text" name="description" id='description' value='{{ old('description') }}'/>
         <div class='field_error'>{{ $errors->first('description') }}</div>
         <label for="amount">Amount</label>
         <input type="text" name="amount" id='amount' value='{{ old('amount') }}'/>
         <div class='field_error'>{{ $errors->first('amount') }}</div>
         <label for="date">Date</label>
         <input
            type="date"
            name="date"
            id='date'
            max='{{ date('Y-m-d') }}'

            <?php
              $date_val = old('date');
              if ($date_val) {
               # do nothing
              }
              else {
               $date_val = date('Y-m-d');
              }
            ?>
            value={{ $date_val }}
          />
         <div class='field_error'>{{ $errors->first('date') }}</div>
         <label for="type">Type</label>
         <select name='type' id='type'>
            <option value='0'>Choose a type</option>
            @foreach($types_for_dropdown as $type_id => $trans_type)
                 <option
                     value='{{$type_id}}'
                     @if(old('type') == $type_id)
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
         <button type="submit" class="btn btn-primary btn-lg active">Post Transaction</button>
     </form>
  </div>
</div>
@stop
