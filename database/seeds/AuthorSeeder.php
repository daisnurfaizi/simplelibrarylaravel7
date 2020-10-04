<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\App;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Author::class, 10)->create();
    }
}
