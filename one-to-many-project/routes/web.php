<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
  return view('home');
})->name('home');

// task
Route::get('/tasksindex', 'TasksController@tasksIndex')->name('tasks-list');
