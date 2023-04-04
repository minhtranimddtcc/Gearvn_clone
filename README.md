# Gearvn_clone
  HƯỚNG DẪN SỬ DỤNG SOURCE

+ B1: Tải virtual host có thể chọn 1 trong 3 ứng dụng như sau : xampp, wamp, laragon php 7 nhé

+ B2: Tải source code theo link

+ B3: Di chuyển source code đến www của xampp, wampp hoặc laragon

+ B4: tài thêm NodeJS( recomend bản 14.16.1 để ổn định là tối ưu nhất)

+ B5: Setup backend: Từ root di chuyển đến thư mục /Backend dùng lệnh trong cmd: Composer install để cài đặt vender sau đó coppy file evn.example ra rename thành .env sau đó setup theo database

+ B6: Setup Front-end: Từ root di chuyển đến thư mục /front-end/nbstore dùng lệnh trong cmd : npm i để cài đặt node module

+ B7: Sau khi cài đặt xong node_modules dùng lệnh trong cmd : npm start . Hệ thống tự mở trình duyệt địa chỉ localhost:3000

1.Phần mềm quản trị
  bước 1: mở thư mục /BACKEND từ root 
  bước 2: cmd: 'composer install' || nếu lỗi 'composer update' (php7.3 hoặc php8)
  bước 3: nhân 2  file '.env copy.exmaple'  và đổi tên thành '.env'
  bước 4: tạo database tên 'laravel'
  bước 5: cmd: 'php artisan key:generate'
  bước 6: cmd: 'php artisan migrate'
  bước 7: cmd: 'php artisan db:seed'
  bước 8: cmd: 'php artisan password:install'
  bước 9: cmd: 'php artisan serve'
1.Giao diện client 
  bước 1: Cài đặt nodeJS
  bước 2: mở thư mục /FRONT-END/nbstore từ root
  bước 3: cmd: 'npm install' (nodejs phiên bản >= 6)
  bước 4: cmd: 'npm start'
  bước 5: Mở http://localhost:3000 trên trình duyệt
  
