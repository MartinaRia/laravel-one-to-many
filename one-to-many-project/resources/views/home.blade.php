@extends('layouts.template')

@section('header-title')
  <h1>Tutti gli Omini</h1>
@endsection

@section('main-content')
    {{-- <div class="container-home flex-container">
      <div class="omini-container">
        @foreach ($ominiAll as $omino)
        <div class="omini-list">
          <a href="{{route('show', $omino['id'])}}" class="flex-container">
            <h4>NAME: </h4>
            <p>{{ $omino['firstname'] }}</p>
            <h4>SURNAME: </h4>
            <p>{{ $omino['lastname'] }}</p>
          </a>
        </div>
      @endforeach
      </div>

      <div class="form-store">
        <h3>ADD NEW OMINO</h3>
        <br>
        <form action="{{route('store')}}" method="post">
          @csrf
          @method('POST')

          <input placeholder="Firstname" type="text" name="firstname" value="">
          <input placeholder="Lastname" type="text" name="lastname" value="">
          <input placeholder="Address" type="text" name="address" value="">
          <input placeholder="Code" type="text" name="code" value="">
          <input placeholder="State" type="text" name="state" value="">
          <input placeholder="Phonenumber" type="text" name="phonenumber" value="">
          <input placeholder="Role" type="text" name="role" value="">
          <input type="submit" name="submit" value="SUBMIT">

        </form>
      </div>
    </div>  --}}

@endsection
