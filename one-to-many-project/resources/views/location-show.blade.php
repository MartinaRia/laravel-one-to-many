@extends('layouts.template')

@section('header-title')
  <h1>{{ $location['city'] }}</h1>
@endsection

@section('main-content')
    <div class="list">
      <h4>STREET: </h4>
      <p>{{ $location['street'] }}</p>
      <h4>CITY: </h4>
      <p>{{ $location['city'] }}</p>
      <h4>COUNTRY: </h4>
      <p>{{ $location['state'] }} </p>
      <h4>EMPLOYEES ASSIGNED TO THIS LOCATION: </h4>
      @foreach ($location -> employees as $employee)
        <p><a href="{{route('employee-show', $employee['id'])}}">{{$employee['firstname']}} {{$employee['lastname']}}</p></a>
      @endforeach

    </div>
    <div class="modification-button flex-container">
      <a href="{{route('location-destroy', $location -> id)}}">DELETE THIS TASK</a>
      {{-- <a href="">EDIT THIS TASK</a> --}}
    </div>
@endsection
