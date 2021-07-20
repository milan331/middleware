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
        DB::table('users')->truncate();
        DB::table('posts')->truncate();


        factory(App\User::class,10)->create()->each(function($user){

            $user->posts()->save(factory(App\Post::class,10)->make());

        });


        // $this->call(UsersTableSeeder::class);
    }
}
