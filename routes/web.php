<?php

// Rutas generadas por make:auth
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

//Index
Route::get('/', 'IndexController@index');

// Rutas del front (estáticas)
Route::get('faq', 'StaticController@faq');
Route::get('exito', 'StaticController@exito');
Route::get('success', 'StaticController@success');

// Rutas de User Profile
Route::get('/profile','ProfileController@show')->name('profile.show');
Route::get('/profile/edit','ProfileController@edit')->name('profile.edit');
Route::put('/profile/{id}','ProfileController@update')->name('profile.update');

// Rutas del Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.product');
//Rutas del Buscador
Route::get('/search', 'ShopController@search')->name('search');

// Rutas del Carrito
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

// Rutas de la instancia "Lista de Deseados"
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

// Rutas del Checkout
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');


// Rutas del panel de admin
Route::prefix('admin')->group(function() {
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Rutas de Productos
    Route::get('/products', 'ProductController@index')->name('product.index');
    Route::get('/products/create', 'ProductController@create')->name('product.create');
    Route::post('/products', 'ProductController@store')->name('product.store');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::put('/products/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('product.destroy');

    // Rutas de Categorías
    Route::get('/categories', 'CategoryController@index')->name('category.index');
    Route::get('/categories/create', 'CategoryController@create')->name('category.create');
    Route::post('/categories', 'CategoryController@store')->name('categories.store');
    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/categories/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/categories/{id}', 'CategoryController@destroy')->name('category.destroy');

    // Rutas de Admin
    Route::get('/admins','AdminController@index')->name('admins.index');
    Route::get('/create', 'AdminController@create')->name('admins.create');
    Route::post('/admins', 'AdminController@store')->name('admins.store');
    Route::get('/admins/{id}/edit', 'AdminController@edit')->name('admins.edit');
    Route::put('/admins/{id}', 'AdminController@update')->name('admin.update');
    Route::delete('/admins/{id}', 'AdminController@destroy')->name('admin.destroy');

    //Rutas de Ventas
    Route::get('/sales', 'SaleController@index')->name('sales.index');
    Route::get('/sales/{id}', 'SaleController@show')->name('sales.show');
    Route::put('/sales/{id}', 'SaleController@update')->name('sales.update');

    // Rutas de User 
    Route::get('/users','UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users', 'UserController@store')->name('users.store');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::put('/users/{id}', 'UserController@update')->name('user.update');
    Route::delete('/users/{id}', 'UserController@destroy')->name('user.destroy');
});
