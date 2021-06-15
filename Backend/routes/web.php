<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TrangChuController@index')->middleware('checklogin::class');

Route::get('/quan-ly-san-pham', 'SanPhamController@index')->middleware('checklogin::class');

Route::get('/quan-ly-san-pham/them-san-pham', 'SanPhamController@ThemSanPham')->middleware('checklogin::class'); // lấy sản phẩm thêm theo id

Route::post('/them-san-pham' , 'SanPhamController@InsertProducts'); // thêm sản phẩm

Route::get('/quan-ly-san-pham/update/{id}','SanPhamController@SuaSanPham')->middleware('checklogin::class'); // lấy sản phẩm cập nhật theo id

Route::post('/updateproduct/{id}','SanPhamController@UpdateProduct'); // cập nhật sản phẩm

Route::get('/quan-ly-san-pham/{id}','SanPhamController@DeleteProduct')->middleware('checklogin::class');// xóa sản phẩm

Route::get('/quan-ly-loai-san-pham','LoaiSanPhamController@index')->middleware('checklogin::class'); // Xem danh sách loại sản phẩm

Route::get('/quan-ly-loai-san-pham/them-loai', 'LoaiSanPhamController@ThemLoai')->middleware('checklogin::class');// lấy tất cả loại sản phẩm

Route::post('/them-loai-san-pham','LoaiSanPhamController@InsertProductType'); // Thêm loại sản phẩm

Route::get('/quan-ly-loai-san-pham/update/{id}','LoaiSanPhamController@CapNhatLoaiSanPham')->middleware('checklogin::class'); // lấy loại sản phẩm theo id

Route::post('/update/{id}','LoaiSanPhamController@UpdateProductType'); // update Loại sản phẩm

Route::get('/quan-ly-loai-san-pham/delete/{id}','LoaiSanPhamController@DeleteProductType')->middleware('checklogin::class');// Xóa Loại sản phẩm

Route::get('/login','TrangChuController@FormLogin'); // form Login

Route::post('/login','TrangChuController@Login'); // Login vào trang admin

Route::get('/logout','TrangChuController@Logout')->middleware('checklogin::class');// đăng xuất

Route::post('/ThemAnhSanPham','AnhSanPhamController@InsertImageProducts'); // thêm ảnh sản phẩm

Route::get('/quan-ly-hinh-thuc-thanh-toan','HinhThucThanhToanController@index'); //quản lý hình thức thanh toán

Route::get('/quan-ly-hinh-thuc-thanh-toan/them-hinh-thuc-thanh-toan','HinhThucThanhToanController@ThemHinhThucThanhToan'); // thêm hình thức thanh toans

Route::post('/them-hinh-thuc-thanh-toan','HinhThucThanhToanController@Insertpayments');// Thêm hình thức thanh toán mới

Route::get('/quan-ly-hinh-thuc-thanh-toan/update/{id}','HinhThucThanhToanController@CapNhatHinhThucThanhToan');

Route::post('/updatepayment/{id}','HinhThucThanhToanController@UpdatePayments'); // cập nhật hình thức thanh toán

Route::get('/quan-ly-hinh-thuc-thanh-toan/{id}','HinhThucThanhToanController@DeletePayments');//xóa hình thức thanh toán

//Bình quản lis người dùng
Route::get('/quan-ly-nguoi-dung','CustomerController@index');
Route::get('/quan-ly-nguoi-dung/them-nguoi-dung','CustomerController@create');
Route::post('/quan-ly-nguoi-dung/them-nguoi-dung','CustomerController@store');
Route::get('/quan-ly-nguoi-dung/show/{id}','CustomerController@show');
Route::post('/quan-ly-nguoi-dung/update/{id}','CustomerController@update');
// quản lí đơn hàng
Route::get('/quan-ly-don-hang','OrderController@index');
Route::get('/quan-ly-don-hang/{id}','OrderController@show');
Route::get('/quan-ly-don-hang/order/complete/{id}','OrderController@complete');