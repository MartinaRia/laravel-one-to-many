<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;
use App\Location;


class LocationsController extends Controller
{
  // INDEX -------------
  public function locationsIndex(){
    $allEmployees = Employee::all();
    $allLocations = Location::all();

    return view('locationsindex', compact('allEmployees', 'allLocations'));
  }

  // STORE -----------------
  public function locationStore(Request $request){
    $data = $request -> all();
    $location = new Location;

    $location -> street = $data['street'];
    $location -> city = $data['city'];
    $location -> state = $data['state'];

    $location ->save();
    $location->employees()->attach($request-> employees);

    return redirect() -> route ('locations-list');
  }

  // SHOW ---------------------
  public function locationShow($id){
    $location = Location::findOrFail($id);

    return view('location-show', compact('location'));
  }


  // EDIT ---------------------
  /*public function taskEdit($id){
    $task = Task::findOrFail($id);
    $allEmployees = Employee::all();

    return view('task-edit', compact('task', 'allEmployees'));
  }*/

  // UPDATE ---------------------
  /*public function taskUpdate(Request $request, $id){
    $data = $request -> all();
    $task = Task::findOrFail($id);

    $task -> name = $data['name'];
    $task -> description = $data['description'];
    $task -> deadline = $data['deadline'];
    $task -> employee_id = $data['employee_id'];

    $task ->save();

    return redirect() -> route ('task-show', $task['id']);
  }*/

    // DELETE ---------------------
    public function locationDestroy($id){
      $location = Location::findOrFail($id);
      $location -> delete();

      return redirect() -> route('locations-list');
    }
}
