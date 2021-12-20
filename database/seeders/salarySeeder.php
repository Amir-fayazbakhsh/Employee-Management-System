<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salary;
class salarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Salary::create([

            's_amount'=>'4000',

        ]);

    }
}
