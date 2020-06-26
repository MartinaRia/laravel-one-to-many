@extends('layouts.template')

@section('header-title')
  <h1>WELCOME</h1>
@endsection

@section('main-content')
      <div class="container-main-content flex-container">
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
          <form action="{{route('task-store')}}" method="post">
            @csrf
            @method('POST')

            <input placeholder="Name" type="text" name="name" value="">
            <textarea placeholder="Description" name="description" rows="8"></textarea>
            <select class="" name="employee_id">
              @foreach ($allEmployees as $employee)
                <option value="{{$employee -> id}}"> {{$employee['firstname']}} {{$employee['lastname']}}</option>
              @endforeach
            </select>
            <input placeholder="Deadline" type="date" name="deadline" value="">
            <input type="submit" name="submit" value="SUBMIT">

          </form>
        </div>
      </div> {{-- fine conatiner-home  --}}

@endsection
