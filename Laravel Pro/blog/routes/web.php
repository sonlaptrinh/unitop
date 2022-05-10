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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('post/{id}', function ($id) {
//    return "$id";
//});
//Route::get('users/profile', function(){
//    return route('profile');
//
//}) ->name('profile');
//
//Route::get('users/{id?}', function ($id = 0) {
//    return "$id";
//});
//Route::get('product/{id}', function ($id){
//    return $id;
//}) -> where('id', '[0,100]+');
//
//Route::view('welcome','welcome');
//
//Route::get('post/{id}','PotsController@detail');
// BT phần Route
//Route::get('admin/post', function (){
//    return "Đây là trang thêm bài viết";
//});

//Route::get('admin/post/update/{ad}',function ($id){
//    return "Admin: Cập nhật bài viết có id: {$id}";
//});
//
//
//Route::get('admin/post/show',function (){
//    return "Đây là trang danh sách bài viết ";
//});
//
//Route::get('admin/post/delete/{id}',function ($id){
//    return " Xóa bài viết có id: {$id} ";
//});
// Làm việc với controller
Route::get('post/add','PotsController@add');
//Route::get('product/add','PotsController@create');
//Route::get('product/add','PotsController@show');
//Route::get('product/show/{ad}','PotsController@show');
//Route::get('post/read',function(){
//    $posts = Post::all();
//    return $posts;
//});



