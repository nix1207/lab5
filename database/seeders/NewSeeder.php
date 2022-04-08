<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <=10; $i++ ) {
            DB::table('news')->insert([
                'title' => 'Tiêu đề' . ' ' . $i, 
                'content' => 'Content',
                'category_id' => rand(1,5)
            ]);
        }
    }
}
