<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         // 放在 ProductsSeeder 之前
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
