@extends('layouts.template')

@section('header-title')
  <h1>Edit Task </h1>
@endsection

@section('main-content')
    <div class="form-edit">

      <form action="{{route('task-update', $task['id'])}}" method="post">
        @csrf
        @method('POST')

        <input placeholder="Name" type="text" name="name" value="{{$task -> name}}">
        <textarea placeholder="Description" name="description" rows="8">{{$task -> description}}</textarea>
        <select class="" name="employee_id">
          @foreach ($allEmployees as $employee)
            <option value="{{$employee -> id}}"
              @if ($task -> employee_id == $employee -> id)
                selected
              @endif

              > {{$employee['firstname']}} {{$employee['lastname']}}</option>
          @endforeach
        </select>
        <input placeholder="Deadline" type="date" name="deadline" value="{{$task -> deadline}}">
        <input type="submit" name="submit" value="SUBMIT">
      </form>

    </div>


@endsection
