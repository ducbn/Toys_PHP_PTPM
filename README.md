
# 🧸 Web Bán Đồ Chơi

## 📌 Giới Thiệu

Web bán đồ chơi là một nền tảng trực tuyến giúp khách hàng dễ dàng tìm kiếm, lựa chọn và mua các sản phẩm đồ chơi một cách thuận tiện. Website cung cấp nhiều tính năng hỗ trợ người dùng như tìm kiếm, lọc sản phẩm, thêm vào giỏ hàng, thanh toán an toàn qua PayPal, và quản lý lịch sử giao dịch.

Website được xây dựng với Laravel kết hợp MySQL để quản lý dữ liệu, giao diện được thiết kế đơn giản nhưng hiện đại bằng HTML, CSS và Tailwind CSS. Hệ thống xác thực và quản lý người dùng được triển khai bằng Laravel Breeze, giúp đăng nhập và đăng ký dễ dàng.

## 🚀 Tính Năng

-   **🔍 Tìm kiếm & Lọc sản phẩm**: Người dùng có thể tìm kiếm sản phẩm theo tên hoặc sử dụng bộ lọc để thu hẹp danh sách dựa trên danh mục, giá cả, v.v.
-   **🏷️ Xem chi tiết sản phẩm**: Hiển thị thông tin sản phẩm đầy đủ gồm mô tả, hình ảnh, giá cả, giúp người dùng đưa ra quyết định mua sắm.
-   **🛒 Giỏ hàng**: Cho phép người dùng thêm sản phẩm vào giỏ, cập nhật số lượng hoặc xóa sản phẩm trước khi tiến hành thanh toán.
-   **💳 Thanh toán qua PayPal**: Hỗ trợ phương thức thanh toán bảo mật, nhanh chóng qua PayPal, giúp đảm bảo an toàn cho giao dịch.
-   **🔑 Đăng nhập & Đăng ký**: Sử dụng Laravel Breeze để quản lý tài khoản người dùng, hỗ trợ đăng nhập và đăng ký dễ dàng.
-   **📜 Lịch sử giao dịch**: Người dùng có thể xem lại các đơn hàng đã đặt, kiểm tra trạng thái đơn hàng và quản lý lịch sử mua sắm.

## 🛠️ Công Nghệ Sử Dụng

-   **Backend**: Laravel
-   **Frontend**: HTML, CSS, Tailwind CSS
-   **Database**: MySQL
-   **Xác thực người dùng**: Laravel Breeze
-   **Thanh toán**: PayPal API

## 📦 Cài Đặt & Chạy Dự Án

### Yêu Cầu Hệ Thống

-   PHP >= 8.1
-   Composer
-   MySQL
-   Node.js & npm

### Hướng Dẫn Cài Đặt

1.  **Clone repository**
```sh
git clone <repo-url>
cd <project-folder>
```
2.  **Cài đặt các gói phụ thuộc**
```sh
composer install
npm install
```
3.  **Cấu hình môi trường**
```sh
cp .env.example .env
php artisan key:generate 
```
Cập nhật thông tin kết nối cơ sở dữ liệu trong tệp `.env` (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4.  **Chạy migration và seed dữ liệu**
```sh
php artisan migrate --seed 
```
5.  **Chạy ứng dụng**
```sh
php artisan serve
```
Ứng dụng sẽ chạy tại `http://127.0.0.1:8000`.

