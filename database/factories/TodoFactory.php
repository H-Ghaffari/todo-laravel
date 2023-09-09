<?php
namespace Database\Factories;

use Hatamiarash7\PFaker\PFaker;
use Ybazli\Faker\Facades\Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /////////  first approach
        // // vendor\fakerphp\faker\src\Faker\Provider\fa_IR\Text.php
        // //https://laracasts.com/discuss/channels/laravel/laravel-8-factory-definition-with-locale-not-work

        $faker = \Faker\Factory::create('fa_IR');
        // dd($faker->name);
        // dd($faker->title);
         return [
           'title' => $faker->realText(rand(30,70)),
           'description'=>$faker->realText(rand(400,1000)),
           'completed' =>rand(0,1),
         ];

        /////////  second approach
        //    return [
        //    'title' => PFaker::sentence(),
        //    'description'=>PFaker::paragraph(),
        //    'completed' =>rand(0,1),
        //  ];

        /////////  third approach
        //    return [
        //    'title' => Faker::sentence(),
        //    'description'=>Faker::paragraph(),
        //    'completed' =>rand(0,1),
        //  ];
    }
}