@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Create a New Task</div>
  <div class="card-body">
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Description</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop