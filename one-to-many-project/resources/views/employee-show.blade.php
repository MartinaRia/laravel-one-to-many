@extends('layouts.template')

@section('header-title')
  <h1>{{ $employee['firstname'] }} {{ $employee['lastname'] }}</h1>
@endsection

@section('main-content')
    <div class="list">
      <h4>NAME: </h4>
      <p>{{ $employee['firstname'] }}</p>
      <h4>SURNAME: </h4>
      <p>{{ $employee['lastname'] }}</p>
      <h4>DATE OF BIRTH: </h4>
      <p>{{ $employee['dateOfBirth'] }} </p>
      <h4>ROLE: </h4>
      <p>{{ $employee['role'] }} </p>
      <h4>LOCATIONS: </h4>
      @foreach ($employee -> locations as $location)
        <p><a href="{{route('location-show', $location['id'])}}">{{$location['city']}} ({{$location['state']}})</p></a>
      @endforeach

    </div>
    <div class="modification-button flex-container">
      <a href="{{route('employee-destroy', $employee['id'])}}">DELETE THIS TASK</a>
      {{-- <a href="">EDIT THIS TASK</a> --}}
    </div>
@endsection
