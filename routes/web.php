<?php

Route::get('/','CarouselController@indexCarousel')->name('index');
Route::get('/order-tracking-form','OrderController@orderTrackingForm')->name('order.tracking.form');
//Route::post('/view-my-order','OrderController@checkMyOrder')->name('check.my.order');
//Route::get('/view-my-order','OrderController@viewMyOrder')->name('view.my.order');

Route::group(['prefix'=>'dashboard'],function(){
	Route::get('/',function(){
         return view('dashboard.dashboardlayout');
	});
	Route::get('/create-category','CategoryController@createCategory')->name('create.category');
	Route::post('/create-category/submit','CategoryController@submitCategory')->name('create.category.submit');
	Route::get('/view-categories','CategoryController@viewCategory')->name('view.category');
	Route::post('/del-category/{id}','CategoryController@delete')->name('delete.category');
	Route::get('/carousel','CarouselController@carousel')->name('carousel');
	Route::post('/carousel/submit','CarouselController@submitCarousel')->name('carousel.submit');
	Route::get('/view-offers','CarouselController@viewCarousel')->name('view.carousel');
	Route::post('/del-carousel/{id}','CarouselController@delCarousel')->name('carousel.delete');
});
Route::group(['prefix'=>'dashboard/product'],function(){
    Route::get('/create','ProductController@create')->name('product.create');
    Route::post('/create','ProductController@store')->name('product.store');
    Route::get('/view/{id}','ProductController@view')->name('product.view');
    Route::post('/delete/{id}','ProductController@delete')->name('product.delete');
});
Route::group(['prefix'=>'dashboard/sub_category'],function(){
    Route::get('/create','SubcategoryController@create')->name('sub_category.create');
    Route::post('/create','SubcategoryController@store')->name('sub_category.store');
    Route::get('/view/{id}','SubcategoryController@view')->name('sub_category.view');
    Route::post('/delete/{id}','SubcategoryController@delete')->name('sub_category.delete');
});
Route::group(['prefix'=>'dashboard/order'],function(){
    Route::get('/create','OrderController@create')->name('order.create');
    Route::post('/create','OrderController@store')->name('order.store');
    Route::get('/view','OrderController@view')->name('order.view');
    Route::post('/edit/{id}','OrderController@edit')->name('order.edit');
    Route::post('/delete/{id}','OrderController@delete')->name('order.delete');
});

