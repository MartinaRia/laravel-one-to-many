<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $table = 'locations';

  public function employees(){  //nomeFunzione = tabellamanyalplurale
   return $this -> belongsToMany(Employee::class);
  }

}
