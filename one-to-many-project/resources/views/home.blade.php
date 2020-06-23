@extends('layouts.template')

@section('header-title')
  <h1>WELCOME</h1>
@endsection

@section('main-content')
    <div class="container-home flex-container">
      <div class="omini-container">
        <h3>TASKS</h3>
        <br>
        @foreach ($allTasks as $task)
        <div class="omini-list">
          <a href="" class="">
            <h4>{{ $task['name'] }}: </h4>
            <p>{{ $task['description'] }}</p>
            <h5>Employee assigned: {{ $task['employee']['firstname'] }} {{ $task['employee']['lastname'] }}</h5>
            <br>
          </a>
        </div>
      @endforeach
      </div>

      <div class="omini-container">
        <h3>EMPLOYEES</h3>
        <br>
        @foreach ($allEmployees as $employee)
        <div class="omini-list">
          <a href="" class="flex-container">
            <h4>NAME: </h4>
            <p>{{ $employee['firstname'] }} </p>
            <h4> SURNAME: </h4>
            <p>{{ $employee['lastname'] }}</p>
            <br>
          </a>
        </div>
      @endforeach
      </div>
    </div> {{-- fine conatiner-home  --}}

@endsection
