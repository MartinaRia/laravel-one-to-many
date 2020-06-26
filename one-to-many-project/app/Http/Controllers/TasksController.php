<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;
use App\Location;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function tasksIndex(){
    $allTasks = Task::all();
    $allEmployees = Employee::all();

    return view('tasksindex', compact('allTasks', 'allEmployees'));
  }
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

  // public function taskShow($id){
  //   $task = Task::findOrFail($id);
  //
  //   return view('taskdetails', compact('task'));
  // }
}
