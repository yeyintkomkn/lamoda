<?php
Route::get('/','Controller@show_home_page')->name('lamoda');
// Route::get('/all_suits','Controller@show_all_product');
Route::get('product/{product_type}/{id}','Controller@show_products');
// Route::get('/search','Controller@search_product');
Route::get('/product_detail/{id}','Controller@show_product_detail');
Route::get('/contact','Controller@contact');
Route::get('/about','Controller@about');
Route::get('/services','Controller@services');
Route::get('/customer_feedback','Controller@feedback');
Route::get('/order','Controller@order');

Route::post('submit_order','Controller@submit_order');
Route::post('contact','Controller@store_contact');
Route::post('/upload_feedback','SiteController@feedback_store');
Route::post('feedback','SiteController@feedback_store'); // feedback store

Route::post('api/all_order','Controller@get_all_order');
Route::post('api/all_contact','Controller@get_all_contact');

Route::post('delete_order/{id}','Controller@delete_order');
Route::post('delete_contact/{id}','Controller@delete_contact');
/* --------------------------site admin login-------------------------- */
Route::get('admin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin', 'Auth\LoginController@login');

Route::group(['middleware'=>'auth'],function(){
	Route::get('dashboard', 'SiteController@index'); // site dashboard
	Route::get('logout','Auth\LoginController@logout'); // logout admin site
	/* --------------suit_type-------------*/
	Route::get('suit_type','SuitController@suit_type');
	// Route::post('suit_type','SuitController@suit_type_store');
	Route::get('suit_types/data','SuitController@suit_type_data');
	Route::get('suit_type/edit/{id}','SuitController@suit_type_edit');
	Route::post('suit_types/update/{id}','SuitController@suit_type_update');
	// Route::delete('suit_type/delete/{id}','SuitController@suit_type_destroy');
	// Route::get('suit_use_count/{id}','SuitController@suit_use_count');
	/* --------------------product-------------------- */
	Route::get('product','ProductController@product');
	Route::post('product/{type}','ProductController@product_store');
	Route::get('product/data','ProductController@product_data');
	Route::get('product_data/edit/{id}','ProductController@product_edit');
	Route::post('product/update/{type}','ProductController@product_update');
	Route::delete('product/delete/{id}','ProductController@product_destroy');
	/* -------------------site information----------------------- */
	Route::get('site_information','SiteController@site_information');
	Route::get('site_information/data','SiteController@site_information_data');
	Route::post('site_information','SiteController@site_information_update');
	/* ---------------------------feedback--------------------------- */
	Route::get('feedback','SiteController@feedback');
	Route::get('feedback/data','SiteController@feedback_data');
	Route::get('feedback/edit/{id}','SiteController@feedback_edit');
	Route::post('feedback/update','SiteController@feedback_update');
	Route::delete('feedback/delete/{id}','SiteController@feedback_destroy');
	Route::get('all_type/data','SiteController@all_type');
	/* ----------------------------accessories---------------------------- */
	Route::get('accessory','AccessoryController@accessory');
	Route::post('accessory','AccessoryController@accessory_store');
	Route::get('accessorys/data','AccessoryController@accessory_data');
	Route::get('accessory/edit/{id}','AccessoryController@accessory_edit');
	Route::post('accessorys/update','AccessoryController@accessory_update');
	Route::delete('accessory/delete/{id}','AccessoryController@accessory_destroy');
	// Route::get('suit_use_count/{id}','AccessoryController@suit_use_count');
	/* -------------------------------Waist coat------------------------------- */
	Route::get('waist_coat','WaistCoatController@waist_coat');
	Route::get('waist_coat/data','WaistCoatController@waist_coat_data');
	Route::post('waist_coat/update/{id}','WaistCoatController@waist_coat_update');
	/*---------------------------- all data type---------------------------- */
	Route::get('all_data_type/data','SiteController@all_data_type');
	/* -----------------------------for dashboard----------------------------- */
	Route::get('dashboard/product/data','SiteController@product_data');
	Route::get('dashboard/suit/data','SiteController@suit_data');
	Route::get('dashboard/accessory/data','SiteController@accessory_data');
	Route::get('dashboard/waist_coat/data','SiteController@waist_coat_data');
});
