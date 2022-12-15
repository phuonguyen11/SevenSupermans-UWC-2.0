
# How to run
1. Cài/chạy mysql
2. Clone project
3. Sửa/chạy file ./CNPM.sql để tạo database và (các) bảng cần thiết
4. Sửa file models/connection.php, với các biến để trỏ về database vừa tạo
5. Setup apache root trỏ tới thư mục project vừa clone
6. Truy cập http://localhost:8080/app/views/
# Database
 Trong file SQL: \
-- bảng Users -- \
Role 0 là Back Officer \
Role 1 là Janitor \
Role 2 là Collector \
-- bảng Vehicles --  \
Status -1 là xe cần phải được bảo trì (không thể hoạt động được)  \
Status 0 là xe chưa đc phân công (xe trống)  \
Status 1 là xe đã được phân công 
# Note
Nhánh chính được đặt tên là Nguyen.

