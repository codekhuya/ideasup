<?php

use Illuminate\Database\Seeder;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Article::class,69)->create();
        // factory(App\User::class, 50)->create()->each(function($c) {
        //     $c->articles()->saveMany(
        //         factory(App\Article::class, rand(1,4))->create([
        //             'user_id' => $c->id
        //         ])
        //     );
        // });
    }
}
