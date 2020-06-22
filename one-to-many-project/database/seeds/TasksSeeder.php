<?php

use Illuminate\Database\Seeder;
use App\EmployeesModel;
use App\TasksModel;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(TasksModel::class, 30)
                        -> make()
                        -> each(function($task) {
                            $employee = EmployeesModel::inRandomOrder() -> first();
                            $task -> employee() -> associate($employee);
                            $task -> save();
                          });
    }
}
