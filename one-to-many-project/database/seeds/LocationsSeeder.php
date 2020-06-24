<?php

use Illuminate\Database\Seeder;
use App\EmployeesModel;
use App\LocationsModel;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(LocationsModel::class, 15)
                            -> create()
                            -> each(function($location) {
                                $employees = EmployeesModel::inRandomOrder() -> take(rand(1, 5)) ->get();
                                $location -> employees() -> attach($employees);
                              });
    }
}
