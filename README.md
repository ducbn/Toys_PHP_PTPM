# Dự án Bán Hàng Laravel 11

## 📝 Giới Thiệu
Dự án này là một hệ thống bán đồ chơi được xây dựng bằng **Laravel 11**, sử dụng **Laravel Breeze** để xác thực người dùng và **MySQL** làm cơ sở dữ liệu.  
Giao diện được thiết kế bằng **HTML & CSS**, tập trung vào trải nghiệm người dùng đơn giản và hiệu quả.  

---

## 🚀 Chức Năng Chính

### 🔑 1. Xác Thực Người Dùng
- ✅ **Đăng ký tài khoản**: Người dùng có thể đăng ký bằng email và mật khẩu.
- ✅ **Đăng nhập/Đăng xuất**: Người dùng có thể đăng nhập vào hệ thống và đăng xuất khi không sử dụng.
- 🔒 **Bảo vệ route**: Chỉ những người dùng đã đăng nhập mới có thể truy cập các trang quan trọng như giỏ hàng, đặt hàng, thanh toán và lịch sử đơn hàng.

---

### 🛍️ 2. Sản Phẩm
- 📋 **Danh sách sản phẩm**: Trang chủ hiển thị tất cả sản phẩm có sẵn trong cửa hàng.
- 🔍 **Lọc sản phẩm theo danh mục**: Người dùng có thể lọc sản phẩm theo danh mục mong muốn.
- 📄 **Trang chi tiết sản phẩm**: Hiển thị thông tin chi tiết, mô tả, giá cả và nút thêm vào giỏ hàng.

---

### 🛒 3. Giỏ Hàng
- ➕ **Thêm sản phẩm vào giỏ hàng** từ trang danh sách hoặc trang chi tiết sản phẩm.
- 🔄 **Cập nhật số lượng sản phẩm** trong giỏ hàng.
- ❌ **Xóa sản phẩm khỏi giỏ hàng** nếu không muốn mua nữa.
- 💰 **Tính tổng tiền** dựa trên sản phẩm và số lượng trong giỏ hàng.

---

### 📦 4. Đặt Hàng
- 📝 **Nhập thông tin đặt hàng**: Người dùng cung cấp tên, địa chỉ, số điện thoại.
- ✅ **Xác nhận đơn hàng** trước khi tiến hành thanh toán.

---

### 💳 5. Thanh Toán
- 🏦 **Tích hợp PayPal**: Khi nhấn "Xác nhận đặt hàng", hệ thống sẽ chuyển đến trang thanh toán PayPal.
- 🎉 **Hiển thị thông báo sau khi thanh toán thành công**.
- 🔜 **Tích hợp VNPay** _(Dự kiến bổ sung sau)_.

---

### 📜 6. Lịch Sử Đơn Hàng
- 📄 **Danh sách đơn hàng đã đặt** để người dùng xem lại lịch sử mua hàng.
- 🔎 **Chi tiết đơn hàng**: Xem thông tin sản phẩm, giá cả và trạng thái đơn hàng.

---
