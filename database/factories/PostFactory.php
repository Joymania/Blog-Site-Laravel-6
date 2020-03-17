<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User\Category;
use App\Model\User\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'slug'=>Str::slug($faker->sentence),
        'body'=>$faker->paragraph,
        'user_id'=>1,
        'category_id'=>function(){

            return Category::all()->random();

        },
        'isactive'=>$faker->numberBetween(0,1),
        'view_count'=>$faker->numberBetween(1,100),
        'love'=>$faker->numberBetween(1,100)
    ];
});
