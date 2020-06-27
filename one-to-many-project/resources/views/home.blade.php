@extends('layouts.template')

@section('header-title')
  <h1>WELCOME</h1>
@endsection

@section('main-content')
    <h2 style="text-align:center;">This is your management system for:</h2>
    <br>
    <div class="home-container flex-container">
      <a class="home-button" href="{{route('tasks-list')}}">TASKS</a>
      <a class="home-button" href="{{route('employees-list')}}">EMPLOYEES</a>
      <a class="home-button" href="{{route('locations-list')}}">LOCATIONS</a>
  </div>

@endsection
