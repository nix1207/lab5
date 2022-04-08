<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 5; $i++)
        {
            DB::table('categories')->insert([
                'name' => 'Danh muc' . $i, 
                'desc' => 'Description'
            ]);
        }
    }
}
