<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'Thú Bông', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Búp Bê', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Đồ Chơi Lắp Ghép', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Đồ Chơi Phương Tiện', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}

