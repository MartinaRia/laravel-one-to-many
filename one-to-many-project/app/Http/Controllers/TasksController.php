<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use App\Location;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  // INDEX -------------
  public function tasksIndex(){
    $allTasks = Task::all();
    $allEmployees = Employee::all();

    return view('tasksindex', compact('allTasks', 'allEmployees'));
  }

  // STORE -----------------
  public function taskStore(Request $request){
    $data = $request -> all();
    $task = new Task;

    $task -> name = $data['name'];
    $task -> description = $data['description'];
    $task -> deadline = $data['deadline'];
    $task -> employee_id = $data['employee_id'];

    $task ->save();

    return redirect() -> route ('tasks-list');
  }

  // SHOW ---------------------
  public function taskShow($id){
    $task = Task::findOrFail($id);

    return view('task-show', compact('task'));
  }


  // EDIT ---------------------
  public function taskEdit($id){
    $task = Task::findOrFail($id);
    $allEmployees = Employee::all();

    return view('task-edit', compact('task', 'allEmployees'));
  }

  // UPDATE ---------------------
  public function taskUpdate(Request $request, $id){
    $data = $request -> all();
    $task = Task::findOrFail($id);

    $task -> name = $data['name'];
    $task -> description = $data['description'];
    $task -> deadline = $data['deadline'];
    $task -> employee_id = $data['employee_id'];

    $task ->save();

    return redirect() -> route ('task-show', $task['id']);
  }

    // DELETE ---------------------
    public function taskDestroy($id){
      $task = Task::findOrFail($id);
      $task -> delete();

      return redirect() -> route('tasks-list');
    }
}
