<?php

use Illuminate\Database\Seeder;

class RecipesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_ingredients')->insert([
            [
                'ingredient_id' => 1,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 2,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 3,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 4,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 5,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 6,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 7,
                'recipe_id' => 1,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 8,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 9,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 10,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 1,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 2,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 3,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 4,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],
            [
                'ingredient_id' => 5,
                'recipe_id' => 2,
                'qty' => '200 гр',
            ],

        ]);
    }
}
