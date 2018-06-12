<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Article;
use App\Category;

class PivotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all()->pluck('id');
        foreach(Article::all() as $article){
            $article->tags()->sync($tags);
        }

        $article = Article::all()->pluck('id');
        foreach(Category::all() as $category){
            $category->articles()->sync($article);
        }
    }
}
