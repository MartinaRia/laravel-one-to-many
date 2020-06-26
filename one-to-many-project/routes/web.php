<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
  return view('home');
})->name('home');

// task ---------------------
Route::get('/tasksindex', 'TasksController@tasksIndex')->name('tasks-list');
Route::post('/task-store', 'TasksController@taskStore')->name('task-store');
Route::get('/task-show/{id}', 'TasksController@taskShow')->name('task-show');
Route::get('/task-edit/{id}', 'TasksController@taskEdit')->name('task-edit');
Route::post('/task-update/{id}', 'TasksController@taskUpdate')->name('task-update');
Route::get('/task-show/delete/{id}', 'TasksController@taskDestroy')->name('task-destroy');

// employee ---------------------
Route::get('/employeesindex', 'EmployeesController@employeesIndex')->name('employees-list');
Route::post('/esmployee-store', 'EmployeesController@employeeStore')->name('employee-store');
