# Hotel Booking Web Application - Trần Đức Thiều

## Thông tin chung
- **Trường:** Đại học Công nghệ Sài Gòn
- **Niên khóa:** 2024 - 2025
- **Tác giả:** Trần Đức Thiều
- **Chủ đề:** Website Đặt phòng Khách sạn

## Mô tả dự án
Đây là một ứng dụng web đặt phòng khách sạn được xây dựng bằng PHP, cung cấp các tính năng như:
- Đặt phòng và quản lý đặt chỗ.
- Kiểm tra thông tin khách hàng (check-in/out).
- Quản lý hóa đơn và thanh toán.
- Bảng điều khiển quản trị (admin dashboard) để theo dõi hoạt động.

Dự án được thiết kế để học tập và phát triển kỹ năng lập trình web, với giao diện đơn giản và chức năng cơ bản.

## Công nghệ sử dụng
- **Ngôn ngữ lập trình:** PHP
- **Frontend:** HTML, CSS, JavaScript
- **Cấu trúc thư mục:** Phân chia theo module (admin, auth, config, v.v.)
- **Cơ sở dữ liệu:** MySQL

## Cấu trúc thư mục
- **/admin-panel:** Chứa các tệp liên quan đến bảng điều khiển quản trị.
- **/auth:** Quản lý đăng nhập và xác thực người dùng.
- **/config:** Tệp cấu hình ứng dụng (ví dụ: `config.php`).
- **/css:** Tệp kiểu dáng CSS.
- **/fonts/flaticon:** Bộ biểu tượng hoặc font tùy chỉnh.
- **/images:** Thư mục chứa hình ảnh.
- **/includes:** Tệp bao gồm (includes) chung (ví dụ: header, footer).
- **/js:** Tệp JavaScript.
- **/rooms:** Tệp liên quan đến quản lý phòng.
- **/scss:** Tệp Sass (nếu có).
- **/users:** Tệp quản lý thông tin người dùng.
- **404.php:** Trang lỗi 404.
- **about.php:** Trang giới thiệu.
- **contact.php:** Trang liên hệ.
- **index.php:** Trang chủ.
- **rooms.php:** Trang quản lý phòng.
- **services.php:** Trang dịch vụ.

## Hướng dẫn cài đặt và chạy
1. **Clone repository:**
- git clone https://github.com/Romesdo/hotel-booking-web-app.git
- cd hotel-booking-web-app
2. **Cài đặt môi trường:**
- Cài đặt máy chủ web (ví dụ: XAMPP hoặc WAMP) với PHP và MySQL.
- Đảm bảo bật Apache và MySQL trong máy chủ.
3. **Cấu hình MySQL:**
- Tạo một cơ sở dữ liệu mới trong phpMyAdmin (ví dụ: `hotel_booking`).
- Nhập file SQL (nếu có, ví dụ: `database.sql`) để tạo bảng và dữ liệu mẫu.
- Chỉnh sửa file `config.php` (nếu có) với thông tin kết nối:
- $host = 'localhost';
- $username = 'root';
- $password = ''; // Thay bằng mật khẩu MySQL nếu có
- $database = 'hotel_booking';
4. **Chạy ứng dụng:**
- Mở trình duyệt và truy cập `http://localhost/hotel-booking-web-app`.
5. **Yêu cầu hệ thống:** PHP 7.x hoặc cao hơn, máy chủ web (Apache/Nginx), MySQL 5.7 hoặc cao hơn.

## Tính năng nổi bật
- Đặt phòng trực tuyến với lựa chọn phòng.
- Quản lý thông tin khách hàng và hóa đơn.
- Bảng điều khiển admin để xem thống kê và quản lý.
- Trang lỗi 404 và các trang tĩnh (about, contact, services).

## Hướng dẫn đóng góp
- Fork repository này.
- Tạo branch mới: `git checkout -b ten-tinh-nang`.
- Commit thay đổi: `git commit -m "Mô tả thay đổi"`.
- Push lên branch: `git push origin ten-tinh-nang`.
- Tạo Pull Request để hợp nhất code.

## Liên hệ hỗ trợ
- **Tác giả:** Trần Đức Thiều
- **Điện thoại:** 0918398980
- **Email:** ducthieu1606@gmail.com

## Ghi chú
- Đây là dự án học tập, vui lòng không sử dụng cho mục đích thương mại mà không có sự đồng ý.
- Phiên bản hiện tại có thể chưa hoàn thiện, mọi phản hồi đều được chào đón.
