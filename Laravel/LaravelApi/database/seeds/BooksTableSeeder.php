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
        Book::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Book::create([
                'title' => substr($faker->sentence, 0, 20),
                'year' => $faker->year
            ]);
        }
    }
}
