@extends('layouts.template')

@section('header-title')
  <h1>Tutti gli Omini</h1>
@endsection

@section('main-content')
    <div class="container-home flex-container">
      <div class="omini-container">
        @foreach ($allEmployees as $employee)
        <div class="omini-list">
          <a href="" class="flex-container">
            <h4>NAME: </h4>
            <p>{{ $employee['firstname'] }}</p>
            <h4>SURNAME: </h4>
            <p>{{ $employee['lastname'] }}</p>
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
