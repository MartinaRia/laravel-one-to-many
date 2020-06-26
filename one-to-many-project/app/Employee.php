<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $table = 'employees';

  public function tasks(){ //nomeFunziones = tabellamanyalplurale
	   return $this -> hasMany(Task::class);
  }

  public function locations(){  //nomeFunzione = tabellamanyalplurale
   return $this -> belongsToMany(Location::class);
  }

}
