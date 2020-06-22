<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
  protected $table = 'employees';

  public function tasks(){ //nomeFunziones = tabellamanyalplurale
	   return $this -> hasMany(TasksModel::class);
  }
}
