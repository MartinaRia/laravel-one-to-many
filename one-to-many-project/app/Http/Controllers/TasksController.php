<?php

namespace App\Http\Controllers;
use App\EmployeesModel;
use App\TasksModel;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function index(){
    $allEmployees = EmployeesModel::all();
    $allTasks = TasksModel::all();

    return view('home', compact('allEmployees', 'allTasks'));
  }
}
