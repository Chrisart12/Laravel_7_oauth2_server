<?php

use App\Post;
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
        // $this->call(UserSeeder::class);

        // Post::factory(20)->create();
        $users = factory(App\Post::class, 20)->create();
    }
}
