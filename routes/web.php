<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Route::get('/{id}/{asdf?}', function ($id='', $asdf='') {
// 	echo $id;
// 	echo "<br>";
// 	echo $asdf;
// });


// Route::get('/', function () {

// 	$a = ['aaa', 'b', 'c1'=>'c'];

//     return view('1', [
// 		'name' => 'Victoria',
// 		'name2' => 'asdf2',
// 		'arr' => $a,
// 		'arr2' => $a,
// 		'arr3' => [],
// 	]);
//     // return view('1');
// });
echo 221;
// php artisan route:list
Route::resource('/', welcomeController::class);
Route::resource('/photo', PhotoController::class);
// Route::resource('/welcome', 'welcomeController');
// Route::resource('/', PhotoController::class);
// Route::get('/', [welcomeController::class, 'index']);


Route::get('/layout', function () {
	return view('layout_test');
});

// Route::resource('user', 'UserController')->name('artice');
// Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');