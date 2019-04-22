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
// Route::get('drop', function() {
//     Schema::dropIfExists('category');
// });

Route::get('/', 'IndexController@getHome');
Route::get('gioi-thieu.html', 'IndexController@getAbout');
Route::get('lien-he.html', 'IndexController@getContact');
Route::get('san-pham.html', 'IndexController@getProduct');
Route::get('danh-muc/{slug}-{id}.html', 'IndexController@getProductByCat');
Route::get('/san-pham/{slug}-{id}.html', 'IndexController@getDetalProduct');
Route::get('/cart/add/{id}', 'IndexController@getAddCart');
Route::post('/cart/add/{id}', 'IndexController@postAddCart');
Route::get('gio-hang.html', 'IndexController@getCart');
Route::get('/cart/delete/{rowid}', 'IndexController@getDeleteCart');
Route::get('/cart/delete', 'IndexController@getDeleteAllCart');
Route::get('/cart/update', 'IndexController@getUpdateCart');
Route::get('thanh-toan.html', 'IndexController@getPay');
Route::post('saveOrder', 'IndexController@postSaveOrder');
Route::get('province', 'IndexController@getProvince');







Route::group([ 'namespace' => "Admin"], function() {
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function() {
    	Route::get('/', 'LoginController@getLogin');
    	Route::post('/', 'LoginController@postLogin');
	});
	Route::get('logout', 'IndexController@getLogout');
	Route::group(['prefix' => 'backend', 'middleware' => 'CheckLogedOut'], function() {
    	Route::get('/', 'IndexController@getHome');
    	Route::group(['prefix' => 'user'], function() {
	        Route::get('/', 'UserController@getListUser');
	        Route::get('/add', 'UserController@getAddUser');
	        Route::post('/add', 'UserController@postAddUser');
	       	Route::get('/edit', 'UserController@getEditUser');
	       	Route::post('/edit', 'UserController@postEditUser');
	       	Route::get('/delete', 'UserController@getDeleteUser');
    	});
        Route::group(['prefix' => 'about'], function () {
            Route::get('', ['as' => 'backend.about', 'uses' => 'AboutController@getList']);
            Route::post('', ['as' => 'backend.about.postAbout', 'uses' => 'AboutController@postAbout']);
        });
        Route::group(['prefix' => 'product'], function() {
            Route::get('', ['as' => 'backend.product', 'uses' => 'ProductController@getList']);
            Route::get('config', ['as' => 'backend.product.getConfig', 'uses' => 'ProductController@getConfig']);
            Route::post('config', ['as' => 'backend.product.postConfig', 'uses' => 'ProductController@postConfig']);
            Route::get('add', ['as' => 'backend.product.getAdd', 'uses' => 'ProductController@getAdd']);
            Route::post('add', ['as' => 'backend.product.postAdd', 'uses' => 'ProductController@postAdd']);
            Route::get('edit/{id}', ['as' => 'backend.product.getEdit', 'uses' => 'ProductController@getEdit']);
            Route::post('edit/{id}', ['as' => 'backend.product.postEdit', 'uses' => 'ProductController@postEdit']);
            Route::get('delete/{id}', ['as' => 'backend.product.getDelete', 'uses' => 'ProductController@getDelete']);
            Route::post('postMultiDel', ['as' => 'backend.product.postMultiDel', 'uses' => 'ProductController@postMultiDel']);


            Route::group(['prefix' => 'category'], function () {
                Route::get('', ['as' => 'backend.product.category', 'uses' => 'CategoryController@getList']);
                Route::get('add', ['as' => 'backend.product.category.getAdd', 'uses' => 'CategoryController@getAdd']);
                Route::post('add', ['as' => 'backend.product.category.postAdd', 'uses' => 'CategoryController@postAdd']);
                Route::get('edit/{id}', ['as' => 'backend.product.category.getEdit', 'uses' => 'CategoryController@getEdit']);
                Route::post('edit/{id}', ['as' => 'backend.product.category.postEdit', 'uses' => 'CategoryController@postEdit']);

                Route::get('delete/{id}', ['as' => 'backend.product.category.getDelete', 'uses' => 'CategoryController@getDelete']);
                Route::post('postMultiDel', ['as' => 'backend.product.category.postMultiDel', 'uses' => 'CategoryController@postMultiDel']);      
            });
            Route::group(['prefix' => 'brand'], function () {
                Route::get('', ['as' => 'backend.product.brand', 'uses' => 'BrandController@getList']);
                Route::get('add', ['as' => 'backend.product.brand.getAdd', 'uses' => 'BrandController@getAdd']);
                Route::post('add', ['as' => 'backend.product.brand.postAdd', 'uses' => 'BrandController@postAdd']);
                Route::get('edit/{id}', ['as' => 'backend.product.brand.getEdit', 'uses' => 'BrandController@getEdit']);
                Route::post('edit/{id}', ['as' => 'backend.product.brand.postEdit', 'uses' => 'BrandController@postEdit']);

                Route::get('delete/{id}', ['as' => 'backend.product.brand.getDelete', 'uses' => 'BrandController@getDelete']);
                Route::post('postMultiDel', ['as' => 'backend.product.brand.postMultiDel', 'uses' => 'BrandController@postMultiDel']);
            });
        });
        
    	Route::group(['prefix' => 'config'], function() {
    	    Route::get('general', 'ConfigController@getGeneral');
    	    Route::post('general', 'ConfigController@postGeneral');
            Route::get('social','ConfigController@getSocial');
            Route::post('social','ConfigController@postSocial');
            Route::get('other',  'ConfigController@getOther');
            Route::post('other','ConfigController@postOther');
            Route::group(['prefix' => 'service'], function() {
                Route::get('/', 'SeviceController@getList');
                Route::get('add', 'SeviceController@getAdd');
                Route::post('add', 'SeviceController@postAdd');
            });
            Route::group(['prefix' => 'policy'], function () {
                Route::get('', ['as' => 'backend.config.policy', 'uses' => 'PolicyController@getList']);
                Route::get('add', ['as' => 'backend.config.policy.getAdd', 'uses' => 'PolicyController@getAdd']);
                Route::post('add', ['as' => 'backend.config.policy.postAdd', 'uses' => 'PolicyController@postAdd']);
                Route::get('edit/{id}', ['as' => 'backend.config.policy.getEdit', 'uses' => 'PolicyController@getEdit']);
                Route::post('edit/{id}', ['as' => 'backend.config.policy.postEdit', 'uses' => 'PolicyController@postEdit']);
                Route::get('delete/{id}', ['as' => 'backend.config.policy.getDelete', 'uses' => 'PolicyController@getDelete']);
                Route::post('postMultiDel', ['as' => 'backend.config.policy.postMultiDel', 'uses' => 'PolicyController@postMultiDel']);
            });
            Route::group(['prefix' => 'bank'], function() {
                Route::get('', ['as' => 'backend.config.bank', 'uses' => 'BankController@getList']);
                Route::get('add', ['as' => 'backend.config.bank.getAdd', 'uses' => 'BankController@getAdd']);
                Route::post('add', ['as' => 'backend.config.bank.postAdd', 'uses' => 'BankController@postAdd']);
                Route::get('edit/{id}', ['as' => 'backend.config.bank.getEdit', 'uses' => 'BankController@getEdit']);
                Route::post('edit/{id}', ['as' => 'backend.config.bank.postEdit', 'uses' => 'BankController@postEdit']);
                Route::get('delete/{id}', ['as' => 'backend.config.bank.getDelete', 'uses' => 'BankController@getDelete']);
                Route::post('postMultiDel', ['as' => 'backend.config.bank.postMultiDel', 'uses' => 'BankController@postMultiDel']);
            });
            Route::group(['prefix' => 'customer'], function () {
                Route::get('', ['as' => 'backend.config.customer', 'uses' => 'CustomerController@getList']);
                Route::get('add', ['as' => 'backend.config.customer.getAdd', 'uses' => 'CustomerController@getAdd']);
                Route::post('add', ['as' => 'backend.config.customer.postAdd', 'uses' => 'CustomerController@postAdd']);
                Route::get('edit/{id}', ['as' => 'backend.config.customer.getEdit', 'uses' => 'CustomerController@getEdit']);
                Route::post('edit/{id}', ['as' => 'backend.config.customer.postEdit', 'uses' => 'CustomerController@postEdit']);

                Route::get('delete/{id}', ['as' => 'backend.config.customer.getDelete', 'uses' => 'CustomerController@getDelete']);
                Route::post('postMultiDel', ['as' => 'backend.config.customer.postMultiDel', 'uses' => 'CustomerController@postMultiDel']);
            });
            Route::group(['prefix' => 'slider'], function() {
                Route::get('/', 'SilderController@getListSlider');
                Route::get('/add', 'SilderController@getAdd');
                Route::post('/add', 'SilderController@postAdd');
                Route::get('/edit/{id}', 'SilderController@getEdit');
                Route::post('/edit/{id}', 'SilderController@postEdit');
                Route::get('/delete/{id}', 'SilderController@getDelete');
                Route::post('/deleteMuti', 'SilderController@getDeleteMuti');
            });
    	});
    });
});