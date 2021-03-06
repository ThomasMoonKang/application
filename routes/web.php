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

Route::get('/', function () {
	return view('welcome');
});

Route::get('customer/{id}', 'CustomerController@customer');

Route::get('customer_name', function(){
	$customer = App\Customer::where('name', '=', 'Nathan')->first();
	echo $customer->id;
});

Route::get('orders', function() {
	$orders = App\Order::all();
	foreach($orders as $order) {
		echo $order->name . ' belongs to ' . $order->customer->name . '<br>';
	}
});


Route::get('mypage', function() {
	$data = array(
		'var1' => 'Hamburger',
		'var2' => 'Hot Dog',
		'var3' => 'French Fries',
		'orders' => App\Order::all()
	);

	return view('mypage', $data);
});




// Route::get('hello/{name}', function($name) {
// 	echo 'Hello ' . $name;
// });

// // CREATE an item
// Route::post('test', function(){
// 	echo 'We just created an item';
// });

// // Read an item
// Route::get('test', function() {
// 	echo '<form action="test" method="POST">';
// 	echo '<input type="submit">';
// 	echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
// 	echo '<input type="hidden" name="_method" value="DELETE">';
// 	echo '</form>';
// });

// // Update an item
// Route::put('test', function(){
// 	echo 'We have just updated an item';
// });

// // Delete an item
// Route::delete('test', function(){
// 	echo 'We have just deleted an item';
// });