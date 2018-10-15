<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time = Carbon::now()->toDateTimeString();
        $post_num = 2;

        for ($i=0; $i < $post_num ; $i++) { 
            DB::table('categories')->insert([
                'id' => null,
                'name' => 'Categoria '.($i +1) ,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
