<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'id' => 1,
                'title' => 'Яйцо куриное',
            ],
            [
                'id' => 2,
                'title' => 'Соль',
            ],
            [
                'id' => 3,
                'title' => 'Сахар',
            ],
            [
                'id' => 4,
                'title' => 'Молоко',
            ],
            [
                'id' => 5,
                'title' => 'Пшеничная мука',
            ],
            [
                'id' => 6,
                'title' => 'Гашеная сода',
            ],
            [
                'id' => 7,
                'title' => 'Растительное масло',
            ],
            [
                'id' => 8,
                'title' => 'Кефир',
            ],
            [
                'id' => 9,
                'title' => 'Бананы',
            ],
            [
                'id' => 10,
                'title' => 'Сливочное мсло',
            ],

        ]);
    }
}
