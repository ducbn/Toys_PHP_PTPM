<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'Điện thoại', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laptop', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Máy tính bảng', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phụ kiện', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Đồ gia dụng', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

