<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
class systemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert(
            
        [

            'name'=>'part1',

        ],

        [
            'name'=>'part2',
        ]
    
    
    );

    }
}
