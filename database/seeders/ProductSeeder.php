<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            ['name' => 'iPhone 13', 'category_id' => 1, 'price' => 20000000, 'description' => 'Điện thoại thông minh mới nhất của Apple.', 'image' => 'iphone13.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Samsung Galaxy S21', 'category_id' => 1, 'price' => 18000000, 'description' => 'Điện thoại thông minh cao cấp của Samsung.', 'image' => 'galaxys21.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MacBook Pro M1', 'category_id' => 2, 'price' => 35000000, 'description' => 'Laptop Apple với chip M1, hiệu suất vượt trội.', 'image' => 'macbookpro.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dell XPS 13', 'category_id' => 2, 'price' => 25000000, 'description' => 'Laptop Dell XPS 13, màn hình 13.4 inch, hiệu suất cao.', 'image' => 'dellxps13.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'iPad Pro 12.9', 'category_id' => 3, 'price' => 25000000, 'description' => 'Máy tính bảng iPad Pro 12.9 inch, hiệu năng mạnh mẽ.', 'image' => 'ipadpro.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Apple Watch Series 7', 'category_id' => 4, 'price' => 10000000, 'description' => 'Đồng hồ thông minh Apple Watch Series 7, thiết kế mới.', 'image' => 'applewatch7.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tai nghe AirPods Pro', 'category_id' => 4, 'price' => 6000000, 'description' => 'Tai nghe không dây Apple AirPods Pro, chất lượng âm thanh cao.', 'image' => 'airpodspro.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Máy xay sinh tố Philips', 'category_id' => 5, 'price' => 1500000, 'description' => 'Máy xay sinh tố Philips, công suất mạnh mẽ, dễ sử dụng.', 'image' => 'mayxayphilip.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Máy hút bụi Dyson V11', 'category_id' => 5, 'price' => 12000000, 'description' => 'Máy hút bụi không dây Dyson V11, hiệu suất mạnh mẽ.', 'image' => 'dysonv11.jpg', 'created_at' => now(), 'updated_at' => now()],
            // Thêm 10 sản phẩm nữa theo cấu trúc tương tự
        ]);
    }
}

