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
Route::post('/employee-store', 'EmployeesController@employeeStore')->name('employee-store');
Route::get('/employee-show/{id}', 'EmployeesController@employeeShow')->name('employee-show');
Route::get('/employee-show/delete/{id}', 'EmployeesController@employeeDestroy')->name('employee-destroy');

// location ---------------------
Route::get('/locationsindex', 'LocationsController@locationsIndex')->name('locations-list');
Route::post('/location-store', 'LocationsController@locationStore')->name('location-store');
Route::get('/location-show/{id}', 'LocationsController@locationShow')->name('location-show');
Route::get('/location-show/delete/{id}', 'LocationsController@locationDestroy')->name('location-destroy');
