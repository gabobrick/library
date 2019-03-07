<?php

use Illuminate\Database\Seeder;

class BookSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = factory(App\Book::class, 200)->create();
    }
}
