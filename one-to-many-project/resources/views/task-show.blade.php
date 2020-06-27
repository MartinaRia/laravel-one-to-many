@extends('layouts.template')

@section('header-title')
  <h1>{{ $task['name'] }}</h1>
@endsection

@section('main-content')
    <div class="list">
      <h4>TASK NAME: </h4>
      <p>{{ $task['name'] }}</p>
      <h4>DESCRIPTION: </h4>
      <p>{{ $task['description'] }}</p>
      <h4>EMPLOYEE ASSIGNED: </h4>
      <p><a href="{{route('employee-show', $task -> employee -> id)}}">{{ $task -> employee -> firstname}} {{ $task -> employee -> lastname}} </p></a>
    </div>
    <div class="modification-button flex-container">
      <a href="{{route('task-destroy', $task['id'])}}">DELETE THIS TASK</a>
      <a href="{{route('task-edit', $task['id'])}}">EDIT THIS TASK</a>
    </div>
@endsection
