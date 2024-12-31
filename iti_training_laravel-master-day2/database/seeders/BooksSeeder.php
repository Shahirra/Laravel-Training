<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use Faker\Factory as Faker;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {

            $book = new Book();
            $book->title = $faker->sentence;
            $book->price = $faker->randomFloat(2, 10, 100);
            $book->description = $faker->paragraph;
            $book->pic = $faker->imageUrl();
            $book->save();
        }

        $categories = Category::all();

        foreach ($categories as $category) {
            DB::table('books')
                ->whereNull('category_id')
                ->limit(10)
             ->update(['category_id' => $category->id]);
            }
         }
    }
