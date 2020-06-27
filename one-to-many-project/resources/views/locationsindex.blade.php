@extends('layouts.template')

@section('header-title')
  <h1>WELCOME</h1>
@endsection

@section('main-content')
      <div class="container-main-content flex-container">
        <div class="list-container">
          <h3>LOCATIONS</h3>
          <br>
          @foreach ($allLocations as $location)
          <div class="list">
            <a href="{{route('location-show', $location['id'])}}" class="">
              <p>{{ $location['city'] }} ({{$location['state']}}) </p>
              <br>
            </a>
          </div>
        @endforeach
        </div>

        <div class="form-store">
          <h3>ADD NEW LOCATION</h3>
          <br>
          <form action="{{route('location-store')}}" method="post">
            @csrf
            @method('POST')

            <input placeholder="Street" type="text" name="street" value="">
            <input placeholder="City" type="text" name="city" value="">
            <input placeholder="State" type="text" name="state" value="">
            <h4>Select one or more employees:</h4>
              @foreach ($allEmployees as $employee)
                <input type="checkbox" name="employees[]" value="{{$employee -> id}}">{{$employee-> firstname}} {{$employee-> lastname}}</input>
              @endforeach
            <br>
            <input type="submit" name="submit" value="SUBMIT">

          </form>
        </div>
      </div> {{-- fine conatiner-home  --}}

@endsection
