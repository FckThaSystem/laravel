<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses_array = ['to do', 'in progress', 'done'];
        foreach ($statuses_array as $item){
            DB::table('statuses')->insert([
                'name' => $item
            ]);
        }
    }
}
