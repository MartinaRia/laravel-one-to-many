<?php

use Illuminate\Database\Seeder;
use App\EmployeesModel;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(EmployeesModel::class, 10) -> create();
    }
}
