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
        Book::create(['inout' => 1, 'category' => "給料", 'year' => 2021, 'month' => 1, 'amount' => 25]);
        Book::create(['inout' => 2, 'category' => "光熱費", 'year' => 2021, 'month' => 1, 'amount' => 2]);
        Book::create(['inout' => 2, 'category' => "食費", 'year' => 2021, 'month' => 2, 'amount' => 5]);
        Book::create(['inout' => 2, 'category' => "家賃", 'year' => 2021, 'month' => 3, 'amount' => 7]);
        Book::create(['inout' => 1, 'category' => "副業", 'year' => 2020, 'month' => 1, 'amount' => 5]);
        
    }
}
