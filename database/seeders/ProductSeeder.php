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
            ['name' => 'Blindbox Migo Rạp Xiếc',
             'category_id' => 2,
             'price' => 250000,
             'description' => "ĐẶC ĐIỂM NỔI BẬT:\nChất liệu mềm mại,\nBông polyester 3D trắng cao cấp, đàn hồi cao",
             'image' => 'blindbox-migo-rap-xiec-1.webp',
             'created_at' => now(),
             'updated_at' => now()],

            ['name' => 'Blindbox Baby Three Côn Trùng', 'category_id' => 2, 'price' => 280000, 'description' => "ĐẶC ĐIỂM NỔI BẬT:\nChất liệu mềm mại,\nBông polyester 3D trắng cao cấp, đàn hồi cao", 'image' => 'babythree-con-trung-avt.webp', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blindbox Baby Three Thỏ Macaron V2', 'category_id' => 2, 'price' => 350000, 'description' => "ĐẶC ĐIỂM NỔI BẬT:\nChất liệu mềm mại,\nBông polyester 3D trắng cao cấp, đàn hồi cao", 'image' => 'babythree-macaron-v2-1.webp', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blindbox Baby Three Mèo Joymiya', 'category_id' => 2, 'price' => 550000, 'description' => "ĐẶC ĐIỂM NỔI BẬT:\nChất liệu mềm mại,\nBông polyester 3D trắng cao cấp, đàn hồi cao", 'image' => 'babythree-meo-jomiya-1.webp', 'created_at' => now(), 'updated_at' => now()],

            ['name' => '[ Bản Đứng] Labubu Coca Cola The Monsters Vinyl Face (móc khóa)',
             'category_id' => 1,
             'price' => 1500000,
             'description' => 'Toàn bộ hộp (Whole Box): Khi khách hàng mua toàn bộ hộp, sẽ không có thiết kế trùng lặp và có thể xuất hiện nhân vật hiếm. Vui lòng quay video trong quá trình unbox và kiểm tra các thẻ trước khi xé bao bì, nếu có mẫu trùng lặp thì liên hệ Hobiverse để được đổi trả. Hobiverse không hỗ trợ đổi trả trong trường hợp không có video và đã xé bao bì.',
             'image' => 'coca.jpg',
             'created_at' => now(),
             'updated_at' => now()],

            ['name' => '[Tím ZIZI] Popmart Labubu The Monster Have a Seat Vinyl Plush( Ver 2)',
             'category_id' => 1,
             'price' => 750000,
             'description' => 'Sản phẩm có kích thước vừa phải, thích hợp để trưng bày trên bàn làm việc, kệ sách hoặc bất kỳ không gian nào bạn muốn thêm phần sinh động. Đây là một lựa chọn tuyệt vời cho các fan của POP MART, những người yêu thích sưu tập đồ chơi nghệ thuật, hoặc đơn giản là muốn tìm kiếm một món quà độc đáo và đáng yêu.',
             'image' => 'ngu.jpg',
             'created_at' => now(),
             'updated_at' => now()],

            ['name' => '[Vàng nâu BABA] Popmart Labubu The Monster Have a Seat Vinyl Plush( Ver 2)',
             'category_id' => 1,
             'price' => 950000,
             'description' => 'Sản phẩm có kích thước vừa phải, thích hợp để trưng bày trên bàn làm việc, kệ sách hoặc bất kỳ không gian nào bạn muốn thêm phần sinh động. Đây là một lựa chọn tuyệt vời cho các fan của POP MART, những người yêu thích sưu tập đồ chơi nghệ thuật, hoặc đơn giản là muốn tìm kiếm một món quà độc đáo và đáng yêu.',
             'image' => 'nau.jpg', 'created_at' => now(), 'updated_at' => now()],

            ['name' => 'Labubu Mokoko The Monster Fall into Spring Vinyl Plush Doll (17cm)',
             'category_id' => 1,
             'price' => 6090000,
             'description' => 'Bộ sưu tập Labubu Mokoko The Monster Fall into Spring Vinyl Plush Doll (17cm) từ POP MART mang đến những mô hình đồ chơi độc đáo và ấn tượng, lấy cảm hứng từ thiên nhiên hoang dã. Mỗi mô hình trong bộ sưu tập này được thiết kế với hình ảnh của những quái vật dễ thương, sống động và đầy màu sắc, kết hợp hoàn hảo giữa sự ngộ nghĩnh và phong cách tự nhiên.',
             'image' => 'couple.webp', 'created_at' => now(), 'updated_at' => now()],
// ------------------------
            ['name' => 'Mô Hình Đồ Chơi Pop Mart The Monsters Catch Me If You Like Me (38cm)',
             'category_id' => 1,
             'price' => 4900000,
             'description' => 'Bộ sưu tập Labubu Mokoko The Monster Fall into Spring Vinyl Plush Doll (17cm) từ POP MART mang đến những mô hình đồ chơi độc đáo và ấn tượng, lấy cảm hứng từ thiên nhiên hoang dã. Mỗi mô hình trong bộ sưu tập này được thiết kế với hình ảnh của những quái vật dễ thương, sống động và đầy màu sắc, kết hợp hoàn hảo giữa sự ngộ nghĩnh và phong cách tự nhiên.',
             'image' => 'den.webp', 'created_at' => now(), 'updated_at' => now()],

             ['name' => 'Đồ Chơi Lắp Ráp Siêu Xe Bugatti Bolide LEGO TECHNIC 42151',
             'category_id' => 3,
             'price' => 1650000,
             'description' => 'Sẵn sàng để gặp kẻ nổi loạn? Bugatti Bolide với kỹ năng mở rộng của công nghệ xe đua thể thao. Và bây giờ đến lượt bạn chế tạo chiếc xe đua mang tính biểu tượng này với bộ LEGO® Technic™ Siêu Xe Bugatti Bolide. Hiển thị các chi tiết của xe, bao gồm động cơ W16 đang hoạt động, hệ thống lái và cửa cắt kéo, đồng thời thêm các chi tiết nhãn dán để hoàn thiện vẻ ngoài nổi bật của xe.',
             'image' => 'vang.webp', 'created_at' => now(), 'updated_at' => now()],

             ['name' => 'Đồ Chơi Lắp Ráp Xe Huấn Luyện Cảnh Khuyển LEGO CITY 60369',
             'category_id' => 3,
             'price' => 650000,
             'description' => 'Woof! Woof! Tham gia Đơn vị cảnh sát K9 của thành phố và cùng huấn luyện chó nghiệp vụ và chăm sóc những bé cún con nhé. Đưa các thiết bị cần thiết vào xe kéo. Đừng quên thức ăn nhé! Giúp chú cún cảnh sát bình tĩnh và chú cún con trên chiếc SUV K9 và di chuyển đến sân tập. Khi đến nơi, hãy thiết lập khu huấn luyện, cầu thang bập bênh, thanh nhảy và sẵn sàng cho một ngày huấn luyệnnào.',
             'image' => 'xanh.webp', 'created_at' => now(), 'updated_at' => now()],

             ['name' => 'Đồ chơi lắp ráp Chiến giáp cơ khí của Sora LEGO NINJAGO 71807',
             'category_id' => 3,
             'price' => 599000,
             'description' => 'Siêu chiến giáp của Sora được trang bị một thanh kiếm lớn và lưỡi kiếm xoay để chiến đấu với Chiến binh Sói gian ác. Bé có thể kết hợp các bộ phận của 3 chiến giáp ninja tuyệt vời do Cole, Sora và Kai điều khiển để tạo ra cỗ máy của riêng bạn. Mỗi cỗ máy đều có thể tùy chỉnh và được bán riêng, đi kèm với chân, tay, vũ khí và thân có thể tháo rời để bạn có thể kết hợp.',
             'image' => 'robo.webp', 'created_at' => now(), 'updated_at' => now()],
// ---------------------------
             ['name' => 'Xe điều khiển 1:24 Lamborghini Aventador SVJ màu Vàng RASTAR R96100',
             'category_id' => 4,
             'price' => 470000,
             'description' => 'RASTAR đến từ Trung Quốc, là thương hiệu nổi tiếng về sản xuất mô hình xe điều khiển, với hơn 20 năm kinh nghiệm trong việc thỏa mãn niềm đam mê siêu xe của các bé. Các sản phẩm RASTAR được làm từ chất liệu cao cấp, kiểu dáng được thiết kế chuyên nghiệp giống hệt các mẫu xe thật được đưa ra và ứng dụng công nghệ sơn hiện đại, sử dụng robot ABB tiên tiến để phun sơn đảm bảo đúng yêu cầu về màu sắc và chi tiết tinh xảo từ các hãng xe khó tính nhất.',
             'image' => 'xe-dieu-khien-1-24-lamborghini-aventador-svj-mau-vang-r96100-yel.webp', 'created_at' => now(), 'updated_at' => now()],

             ['name' => 'Xe điều khiển 1:14 Lamborghini Sian, có thể mở cửa Cam RASTAR R97700',
             'category_id' => 4,
             'price' => 1500000,
             'description' => 'Xe Điều Khiển 1:14 Lamborghini Sian, Có Thể Mở Cửa Cam RASTAR R97700/ORA mô phỏng chân thật mẫu xe Lamborghini Sian - phiên bản mới được phát triển trên nền tảng của những chiếc xe Aventador. Đây thật sự là mẫu siêu xe ấn tượng với những động cơ vận hành mới mẻ, điều này giúp cho người dùng có được cảm giác lái và chinh phụ tốc độ vượt trội nhất.',
             'image' => 'img_6199_1.webp', 'created_at' => now(), 'updated_at' => now()],

             ['name' => 'Xe điều khiển 1:14 Lamborghini Sian, có thể mở cửa Đỏ RASTAR R97700',
             'category_id' => 4,
             'price' => 1159000,
             'description' => 'Xe điều khiển Lamborghini Sian tỷ lệ 1:14 - Đỏ được mô phỏng từ dòng siêu xe đẳng cấp của Lamborghini và nằm trong phiên bản giới hạn, chỉ có 63 chiếc trên toàn thế giới. Với tỷ lệ thu nhỏ 1:14 từ xe thật, tinh xảo đến từng chi tiết, xe điều khiển Lamborghini Sian sẽ mang đến cho bé yêu những phút giây vui chơi thư giãn, thoải mái nhất.',
             'image' => 'img_6191_1.webp', 'created_at' => now(), 'updated_at' => now()],

             ['name' => 'Xe Điều Khiển 1:24 Bmw 3.0 Csl Trắng Rastar R92900',
             'category_id' => 4,
             'price' => 475000,
             'description' => 'Xe điều khiển 1:24 BMW 3.0 CSL Trắng - R92900/WHI có bản quyền chính hãng BMW ngoài đời thật',
             'image' => 'R92900-WHI.webp', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

