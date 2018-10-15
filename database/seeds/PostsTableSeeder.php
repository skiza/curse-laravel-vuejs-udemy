<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PostsTableSeeder extends Seeder
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
            DB::table('posts')->insert([
                'id' => null,
                'title' => 'Titulo post '.($i +1) ,
                'excerpt' => 'Extracto post '.($i +1),
                'body' => '<p> Contenido del post numero  ' . ($i +1) . '</p>',
                'published_at' => Carbon::now(),
                'category_id' => \App\Category::all()->random()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
