@extends('layouts.template')

@section('header-title')
  <h1>Tasks</h1>
@endsection

@section('main-content')
    <div class="container-home flex-container">
      <div class="omini-container">
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

      <div class="form-store">
        <h3>ADD NEW OMINO</h3>
        <br>

      </div>
    </div> {{-- fine conatiner-home  --}}

@endsection
