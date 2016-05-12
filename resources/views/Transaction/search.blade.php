@extends('layouts.master_profile')
@section('content')
<div class='profile_form'>
   <div class="jumbotron">
     <h2 class="sub-header">Search</h2>
     <hr>
     <p class="profile_paragraph">Please enter one or more criteria to search for transactions.</p>
     <form class="form-horizontal" method="POST" action="/search">
         {{ csrf_field() }}
         <label for="description">Description</label>
         <input type="text" name="description" id='description' value='{{ old('description') }}' />
         <div class='field_error'>{{ $errors->first('author_id') }}</div>
         <label for="amount">Amount</label>
         <input type="text" name="amount" id='amount' value='{{ old('amount') }}'/>
         <div class='field_error'>{{ $errors->first('amount') }}</div>
         <label for="date">Date(YYYY-MM-DD)</label>
         <input type="date" name="date" id='date' max='{{ date('Y-m-d') }}' value='{{ old('date') }}'/>
         <div class='field_error'>{{ $errors->first('date') }}</div>
         <label for="type">Type</label>
         <select name='type' id='type'>
            <option value='0'>Choose a type</option>
            @foreach($types_for_dropdown as $type_id => $trans_type)
                 <option value='{{$type_id}}'>
                     {{$trans_type}}
                 </option>
            @endforeach
         </select>
         <div class='field_error'>{{ $errors->first('type') }}</div>
         <br>
         <br>
         <button type="submit" class="btn btn-primary btn-lg active">Search</button>
     </form>
  </div>
</div>
@stop
