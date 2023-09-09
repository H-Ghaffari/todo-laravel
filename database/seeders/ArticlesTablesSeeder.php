<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticlesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //   foreach(range(1,10) as $i){
    //     Article::create([
    //         'title'=>'Article',
    //         'body'=>'lorem epsum'
    //     ]);
    //   }

    $faker=\Faker\Factory::create();
    foreach(range(1,10) as $i){
    Article::create([
        'title' => $faker->text(50),
        'body'=> $faker->paragraph(rand(5,20)),
    ]);
    } 
    }
}