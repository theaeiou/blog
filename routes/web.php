<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/', 'QuestionController@index');
  Route::get('/about', 'QuestionController@about');
   Route::get('/duty', 'QuestionController@duty');
   Route::resource('posts', 'PostController');

// Route::get('/hello',function(){
//     return "<h1>Hello laravel finally</h1>";
// });
// Route::get('/about', function(){
//     return view('pages.about');//เรัยกไฟล์
// });

//เรียกไฟล์อื่น
// Route::get('form', 'Auth\LoginController@form');
// Route::get('movie','MovieController@index');
// Route::get('movieview','MovieController@view');
// Route::get('song','Music\SongController@index');
//
// //ต้องการ Require Parameter
// Route::get('bloge/{id}/{name}', function($id,$name){
//     return "Welcome user : ". $name." by ID ".$id;
// });
//
// //ไม่ต้องการ Optional Parameters
// Route::get('bloge2/{id?}', function($id=null){
//     return "Welcome user ID : ". $id;
// });
//
// //จำกัดเป็นตัวเลขหรือหนังสือ Regular Expression
// Route::get('bloge3/{name?}', function($name){
//     return "Welcome user ID : ". $name;
// })->where('name', '[0-9]+');//ตัวหนังสือ [A-Za-z]
// //match รับค่าที่ระบุ
// Route::match(['get','post'],'bill', function() {
//     if (Request::isMethod('get')) {
//         return 'This is get method';
//     }
//     if (Request::isMethod('post')) {
//         return 'This is post method';
//     }
// });
// //any รับค่าทุกอย่างไม่ว่า get หรือ post
// Route::any('poll','Auth\LoginController@poll');
