<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels_array = array(
            ['label' => 'bug', 'color'=>'red'],
            ['label' => 'feature', 'color'=>'green'],
            ['label' => 'urgent', 'color'=>'yellow']
        );
        foreach ($labels_array as $item){
                DB::table('labels')->insert([
                    'name' => $item['label'],
                    'color' => $item['color']
                ]);
        }
    }
}
