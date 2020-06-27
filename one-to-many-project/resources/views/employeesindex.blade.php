@extends('layouts.template')

@section('header-title')
  <h1>WELCOME</h1>
@endsection

@section('main-content')
      <div class="container-main-content flex-container">
        <div class="list-container">
          <h3>EMPLOYEES</h3>
          <br>
          @foreach ($allEmployees as $employee)
          <div class="list">
            <a href="{{route('employee-show', $employee['id'])}}" class="">
              <p>{{ $employee['firstname'] }} {{$employee['lastname']}} </p>
              <br>
            </a>
          </div>
        @endforeach
        </div>

        <div class="form-store">
          <h3>ADD NEW EMPLOYEE</h3>
          <br>
          <form action="{{route('employee-store')}}" method="post">
            @csrf
            @method('POST')

            <input placeholder="Name" type="text" name="firstname" value="">
            <input placeholder="Surname" type="text" name="lastname" value="">
            <input placeholder="Role" type="text" name="role" value="">
            <h4>Date of Birth:</h4>
            <input placeholder="Date of Birth" type="date" name="dateOfBirth" value="">
            <h4>Select one or more locations:</h4>
              @foreach ($allLocations as $location)
                <input type="checkbox" name="locations[]" value="{{$location -> id}}">{{$location -> city}} ({{$location -> state}})</input>
              @endforeach
            <br>
            <input type="submit" name="submit" value="SUBMIT">

          </form>
        </div>
      </div> {{-- fine conatiner-home  --}}

@endsection
