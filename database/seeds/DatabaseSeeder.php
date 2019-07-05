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
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Nguyen Van A",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van B",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van C",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van D",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van E",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van F",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van I",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => "Nguyen Van K",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau')
            ]
        ]);
    }
}
