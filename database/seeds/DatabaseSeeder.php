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
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class
        ]);
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

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => "Telephone"
            ],
            [
                'name' => "Laptop"
            ],
            [
                'name' => "Computer"
            ]
        ]);
    }
}

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "iPhone 6",
                'quality' => rand(1, 100),
                'category_id' => 1,
                'created_user_id' => 0
            ],
            [
                'name' => "iPhone 7",
                'quality' => rand(1, 100),
                'category_id' => 1,
                'created_user_id' => 0
            ],
            [
                'name' => "Samsung Note 6",
                'quality' => rand(1, 100),
                'category_id' => 1,
                'created_user_id' => 0
            ],
            [
                'name' => "Dell Latitude 6400",
                'quality' => rand(1, 100),
                'category_id' => 2,
                'created_user_id' => 0
            ],
            [
                'name' => "Dell Vostro 1500",
                'quality' => rand(1, 100),
                'category_id' => 2,
                'created_user_id' => 0
            ],
            [
                'name' => "Mac",
                'quality' => rand(1, 100),
                'category_id' => 3,
                'created_user_id' => 0
            ],
            [
                'name' => "Sony Vios",
                'quality' => rand(1, 100),
                'category_id' => 3,
                'created_user_id' => 0
            ],
            [
                'name' => "Lenovo",
                'quality' => rand(1, 100),
                'category_id' => 3,
                'created_user_id' => 0
            ]
        ]);
    }
}
