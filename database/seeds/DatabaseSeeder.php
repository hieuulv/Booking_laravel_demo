<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
