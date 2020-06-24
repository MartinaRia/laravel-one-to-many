<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function index(){
    $allEmployees = Employee::all();
    $allTasks = Task::all();

    return view('home', compact('allEmployees','allTasks'));
  }
}
