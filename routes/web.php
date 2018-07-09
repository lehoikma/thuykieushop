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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController@index')->name('home_admin');
    Route::post('login', 'IndexController@login')->name('admin_login');
});

Route::group(['namespace' => 'Member'], function () {
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('{slug}ttt{id}.html', 'NewsController@index')->name('news_detail');
    Route::get('tin-tuc.html', 'NewsController@getAll')->name('news_all');
    Route::get('san-pham.html', 'ProductsController@listAll')->name('products_all');
    Route::get('{slug}pp{id}.html', 'ProductsController@detail')->name('products_detail');
    Route::get('{slug}dd{id}', 'ProductsController@getProductCategory')->name('categories_list_product');
    Route::post('tim-kiem-san-pham', 'ProductsController@searchProducts')->name('search_products');
    Route::post('tim-kiem-san-phaml', 'ProductsController@searchProductsPrice')->name('search_products_price');
    Route::get('lien-he.html', 'ContactController@index')->name('contact');
    Route::get('lien-he/done.html', 'ContactController@done')->name('contact_done');
    Route::post('lien-he/save', 'ContactController@saveContact')->name('save_contact');
    Route::post('bookings', 'OrdersController@saveSessionOrders')->name('save_session_orders');
    Route::get('gio-hang.html', 'OrdersController@memberOrders')->name('member_orders');
    Route::get('gio-hang-xoa/{id}', 'OrdersController@deleteSession')->name('deleteSession');
    Route::get('thanh-toan.html', 'OrdersController@payOrders')->name('pay_orders');
    Route::post('thanh-toan-save', 'OrdersController@payOrdersSave')->name('pay_orders_save');
    Route::get('thanh-toan-done.html', 'OrdersController@payOrdersDone')->name('pay_orders_done');
    Route::get('tags{id}.html', 'TagsController@index')->name('tags_index');
    Route::get('san-pham-khuyen-mai.html', 'ProductsController@sale')->name('sale');
    Route::get('san-pham-ban-chay.html', 'ProductsController@productBig')->name('product_big');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/top', 'IndexController@top')->name('admin_top');
    Route::get('/categories', 'CategoriesController@index')->name('admin_categories');
    Route::get('danh-sach-dat-hang.html', 'OrdersController@index')->name('list_orders');
    Route::get('switch_status/{id}', 'OrdersController@switchStatus')->name('switch_status');
    Route::get('switch_status1/{id}', 'OrdersController@switchStatus1')->name('switch_status1');
    Route::get('/products/list', 'ProductsController@listAll')->name('products_list');
    Route::post('/products/delete', 'ProductsController@deleteProducts')->name('products_delete');
    Route::get('/logout', 'IndexController@logout')->name('admin_logout');
    Route::post('/category_add', 'CategoriesController@add')->name('category_add');
    Route::get('/category_list', 'CategoriesController@listCategory')->name('category_list');
    Route::get('/category/{id}', 'CategoriesController@editCategory')->name('category_edit');
    Route::post('/category_update', 'CategoriesController@update')->name('category_update');
    Route::post('/categories_delete', 'CategoriesController@deleteCategory')->name('categories_delete');
    Route::post('/news_delete', 'NewsController@deleteNews')->name('news_delete');
    Route::get('/news_add', 'NewsController@index')->name('news_add');
    Route::get('/news_list', 'NewsController@listNews')->name('news_list');
    Route::post('/news_add_save', 'NewsController@add')->name('news_add_save');
    Route::get('/news/{id}', 'NewsController@editNews')->name('news_edit');
    Route::post('news_edit_save', 'NewsController@editSaveNews')->name('news_edit_save');
    Route::get('products_create', 'ProductsController@index')->name('products_create');
    Route::get('products/{id}', 'ProductsController@edit')->name('products_edit');
    Route::post('products_update', 'ProductsController@updateProduct')->name('products_update');
    Route::post('products_save', 'ProductsController@add')->name('products_save');
    Route::get('contact', 'ContactController@index')->name('contact_index');
    Route::post('contact_lh', 'ContactController@updateStatus')->name('contact_lh');
    Route::get('tag', 'TagsController@index')->name('tag_index');
    Route::post('tag_save', 'TagsController@saveTags')->name('tag_create');
    Route::get('tags/list', 'TagsController@listTags')->name('tag_list');
    Route::get('tags/{id}', 'TagsController@editTags')->name('tags_edit');
    Route::post('tags/edit', 'TagsController@saveEditTags')->name('tags_edit_save');
    Route::post('tag_delete', 'TagsController@deleteTags')->name('tag_delete');
    Route::get('links', 'LinksController@index')->name('links_index');
    Route::post('links_save', 'LinksController@linkSave')->name('links_save');
    Route::post('links_delete', 'LinksController@linkDelete')->name('links_delete');
});
