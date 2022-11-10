<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Category::factory(16)->create();
         \App\Models\Product::factory(500)->create();
         \App\Models\CategoryProduct::factory(500)->create();
         \App\Models\ProductImage::factory(500)->create();

         \App\Models\User::create([
             'name' => 'Faisal Ahmmed',
             'email' => 'developerfaisal32@gmail.com',
             'password' => Hash::make('12345678'),
         ]);
    }
}
