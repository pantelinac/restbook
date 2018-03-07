<?php

use Illuminate\Database\Seeder;
use App\Book;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();


        for ($i = 0; $i < 50; $i++) {
            Book::create([
                'name' => $faker->word,
                'author' => $faker->name,
                'year' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'lang' => $faker->state,
                'orlang' => $faker->state,
            ]);
        }
    }
}
