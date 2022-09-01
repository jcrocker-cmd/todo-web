@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Create a New Task</div>
  <div class="card-body">
      
      <form action="{{ url('/store') }}" method="post">
        @csrf
        <label>Description</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Time</label></br>
        <input type="time" name="time" id="time" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop