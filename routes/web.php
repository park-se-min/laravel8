<?php

use Illuminate\Support\Facades\Route;

Route::get('/{id}/{asdf?}', function ($id='', $asdf='') {
	echo $id;
	echo "<br>";
	echo $asdf;
});

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('user', 'UserController')->name('artice');
// Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');