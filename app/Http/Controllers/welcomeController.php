<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
	public function index()
	{
		// echo route('photo.index');
		return view('layout_test');
	}
}
