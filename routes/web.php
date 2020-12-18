<?php

use Illuminate\Support\Facades\Route;

// Route::get('/{id}/{asdf?}', function ($id='', $asdf='') {
// 	echo $id;
// 	echo "<br>";
// 	echo $asdf;
// });


Route::get('/', function () {

	$a = ['aaa', 'b', 'c1'=>'c'];

    return view('1', [
		'name' => 'Victoria',
		'name2' => 'asdf2',
		'arr' => $a,
		'arr2' => $a,
		'arr3' => [],
	]);
    // return view('1');
});


Route::get('/layout', function () {
	return view('layout_test');
});

// Route::resource('user', 'UserController')->name('artice');
// Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');