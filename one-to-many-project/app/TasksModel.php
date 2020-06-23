<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TasksModel extends Model
{
  protected $table = 'tasks';

  public function employee(){  //nomeFunzione = tabellaonealsingolare
   return $this -> belongsTo(EmployeesModel::class);
  }

}
