@extends('layouts.master_profile')

@section('content')
<div class='add_form'>
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
   <br>
   <br>
  <form "form-horizontal" method="post" action="/add">
      {{ csrf_field() }}
      <div class="form-group">
         <label class="col-sm-2 control-label" for="trans_desc">Description</label>
         <input type="text" name="trans_desc" id='trans_desc' value='{{ old('trans_desc') }}' />
      </div>
      <div class="form-group">
         <label class="col-sm-2 control-label" for="trans_amount">Amount</label>
         <input type="text" name="trans_amount" desc='trans_amount' value='{{ old('trans_amount') }}' />
      </div>
      <div class="form-group">
         <label class="col-sm-2 control-label" for="trans_date">Date</label>
         <input type="date" name="trans_date" id='trans_date' max='{{ date('Y-m-d') }}' value='{{ old('trans_date') }}'  />
      </div>

      <div class="form-group">
           <label class="col-sm-2 control-label" for='type_id'>Type</label>
           <select name='type_id' id='type_id'>
               @foreach($types_for_dropdown as $type_id => $trans_type)
                    <option value='{{$type_id}}'>
                        {{$trans_type}}
                    </option>
                @endforeach
           </select>
      </div>
      <br>
      <button type="button" class="btn btn-primary btn-lg active">Post</button>
  </form>
</div>
@stop
