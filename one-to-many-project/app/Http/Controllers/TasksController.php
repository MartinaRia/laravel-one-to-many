<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function tasksIndex(){
    $allTasks = Task::all();
    $allEmployees = Employee::all();

    return view('tasksindex', compact('allTasks', 'allEmployees'));
  }
}
