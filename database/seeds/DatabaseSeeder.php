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
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van B",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van C",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van D",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van E",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van F",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van I",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Nguyen Van K",
                'email' => str_random(6) . '@example.com',
                'password' => bcrypt('matkhau'),
                'created_at' => date('Y-m-d H:i:s')
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
                'name' => "Telephone",
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Laptop",
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Computer",
                'created_at' => date('Y-m-d H:i:s')
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
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "iPhone 7",
                'quality' => rand(1, 100),
                'category_id' => 1,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Samsung Note 6",
                'quality' => rand(1, 100),
                'category_id' => 1,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Dell Latitude 6400",
                'quality' => rand(1, 100),
                'category_id' => 2,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Dell Vostro 1500",
                'quality' => rand(1, 100),
                'category_id' => 2,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Mac",
                'quality' => rand(1, 100),
                'category_id' => 3,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Sony Vios",
                'quality' => rand(1, 100),
                'category_id' => 3,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => "Lenovo",
                'quality' => rand(1, 100),
                'category_id' => 3,
                'user_id' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
