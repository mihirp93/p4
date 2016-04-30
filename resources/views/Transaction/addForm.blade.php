@extends('layouts.master')

@section('content')
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

  <form method="post" action="/add">
      {{ csrf_field() }}
      <label for="trans_desc">Description</label>
      <input type="text" name="trans_desc" value='{{ old('trans_desc') }}' />
      <br>
      <label for="trans_amount">Amount</label>
      <input type="text" name="trans_amount" value='{{ old('trans_amount') }}' />
      <br>
      <label for="trans_date">Date</label>
      <input type="date" name="trans_date" max='{{ date('Y-m-d') }}' value='{{ old('trans_date') }}'  />
      <br>
      <div>
           <label for='type_id'>Transaction Type:</label>
           <select name='type_id' id='type_id'>
               @foreach($types_for_dropdown as $type_id => $trans_type)
                    <option value='{{$type_id}}'>
                        {{$trans_type}}
                    </option>
                @endforeach
           </select>
      </div>
      <br>
      <input type="submit" value="Post"/>
  </form>
@stop
