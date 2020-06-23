<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationsModel extends Model
{
  protected $table = 'locations';

  public function employees(){  //nomeFunzione = tabellamanyalplurale
   return $this -> belongsToMany(EmployeesModel::class);
  }
  
}
