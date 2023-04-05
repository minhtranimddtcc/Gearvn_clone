# Gearvn_clone
  HƯỚNG DẪN SỬ DỤNG SOURCE

+ B1: Tải virtual host laragon php 7.4 (https://windows.php.net/download/)

+ B2: tài thêm NodeJS( recomend bản 14.16.1 để ổn định là tối ưu nhất)

+ B3: click start all trong laragon

+ B4: tạo database tên bất kì trong laragon.MySQL (vd: tên "nbstore")

+ B5: Phần mềm quản trị ( click mở terminal -> nhớ đem source nbstore vào folder C:/laragon/www cho dễ access)
  bước 1: mở thư mục /BACKEND từ root 
  bước 2: cmd: 'composer install' || nếu lỗi 'composer update' (php7.4)
  bước 3: nhân 2  file '.env copy.exmaple'  và đổi tên thành '.env'
  bước 4: tạo database tên 'laravel'
  bước 5: cmd: 'php artisan key:generate'
  bước 6: cmd: 'php artisan migrate:refresh --seed'
  bước 7: cmd: 'php artisan passport:install'
  bước 8: cmd: 'php artisan serve' ( Sau này khi start lại source chỉ cần chạy lệnh này để start BE)

+ B6: Giao diện client 
  bước 1: Cài đặt nodeJS
  bước 2: mở thư mục /FRONT-END/nbstore từ root
  bước 3: cmd: 'npm install' (nodejs phiên bản >= 6)
  bước 4: cmd: 'npm start'
  bước 5: Mở http://localhost:3000 trên trình duyệt
  
