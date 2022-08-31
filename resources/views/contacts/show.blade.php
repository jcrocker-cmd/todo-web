@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Show Task</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Description : {{ $contacts->name }}</h5>
        <p class="card-text">Time : {{ $contacts->created_at->toDateString()}}</p>
        <p class="card-text">Created at : {{ $contacts->created_at->toTimeString()}}</p>
  </div>
      
    </hr>
  
  </div>
</div>