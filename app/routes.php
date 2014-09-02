<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |<?php
    $allContacts = DB::table('contact')->get();
?>
 */
/**
 * Trang chu khach hang
 */
Route::get('', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.index')->with('allContacts', $allContacts);
});

Route::get('contact', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.contacts.index')->with('allContacts', $allContacts);
});

Route::get('news', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.news.index')->with('allContacts', $allContacts);
});

Route::get('sanphamgd', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.traders.sanpham')->with('allContacts', $allContacts);
});

Route::get('kinhnghiemgd', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.traders.kinhnghiem')->with('allContacts', $allContacts);
});

Route::get('chienluocgd', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.traders.chienluoc')->with('allContacts', $allContacts);
});

Route::get('sangd', function() {
    $allContacts = DB::table('contact')->get();
    return View::make('guest.floortrader.index')->with('allContacts', $allContacts);
});
//phần admin này chỉ làm giao diện chưa ràng buộc login
Route::get('admin',  function (){
    return View::make('admin.index');
});

Route::get('qltintuc',  function (){
    return View::make('admin.news.index');
});

Route::get('qlgiaodich',  function (){
    return View::make('admin.traders.index');
});

Route::get('qlsangiaodich',  function (){
    return View::make('admin.floortraders.index');
});

Route::get('qllienhe',  function (){
    return View::make('admin.contacts.index');
});