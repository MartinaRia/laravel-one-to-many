@extends('layouts.template')

@section('header-title')
  <h1>WELCOME</h1>
@endsection

@section('main-content')
    <div class="container-home flex-container">
      <div class="list-container">
        <h3>TASKS</h3>
        <br>
        @foreach ($allTasks as $task)
        <div class="list">
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
        <h3>ADD NEW TASK</h3>
        <br>
        <form action="" method="post">
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
    </div> {{-- fine conatiner-home  --}}

@endsection
