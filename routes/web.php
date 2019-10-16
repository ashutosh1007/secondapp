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
/*************ADMIN PAGES CONTROLLER***************/
Route::get('/sampleform',function(){
    return view('sampleform');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard/add_category', function () {
    return view('admin.includes.add_category');
});
Route::get('/dashboard/add_product','AdminPagesController@addProduct');
Route::get('/dashboard/view_inventory', 'AdminPagesController@viewProduct');

Route::get('/dashboard/view_orders', 'AdminPagesController@viewOrder');
Route::get('/dashboard/view_cancelled_orders', function () {
    return view('admin.includes.view_cancelled_orders');
});
Route::get('/dashboard/view_customers','AdminPagesController@viewCustomers');
Route::get('/dashboard/add_product/add_product_details/{id}','AdminPagesController@addProductDetails');    
/***********USER PAGES CONTROLLER**************/
Route::get('/shop','PagesController@showShop');
Route::get('/register','PagesController@register');

//************ ADMIN AJAX CALLS****************//
Route::post('dashboard/save_category','AdminDataController@saveCategory');
Route::post('/sampleform/saveformdata','DataController@saveData');
Route::post('/dashboard/save_product','AdminDataController@saveProduct');
Route::post('/dashboard/view_orders/show_orders','AdminDataController@showOrders');
Route::post('/dashboard/view_inventory/show_inventory','AdminDataController@showInventory');
Route::post('/dashboard/view_customers/show_customers','AdminDataController@showCustomers');
Route::post('/dashboard/view_cancelled_orders/show_cancelled_orders','AdminDataController@showCancelledOrders');
Route::post('/dashboard/save_product_details','AdminDataController@saveProductDetails');

