<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $table = 'tasks';

  public function employee(){  //nomeFunzione = tabellaonealsingolare
   return $this -> belongsTo(Employee::class);
  }

}
