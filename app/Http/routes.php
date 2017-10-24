<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// prikaz svih taskova u bazi
Route::get('/', function () {
		//return view('taska');
		return "Prva ruta";
});

// dodavanje novog taska
Route::post('/task', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'requerd|max:255',
	]);
	
	if($validator->fails() ){
		return redirect('/')->withInput()->withErrors($validator);
	}
	
	//stvaranje novog taska
	$task = new Task;
	$task->name = $request->name;
	$task->save();
	
	return redirect('/');
});

// brisanje postojećeg taska
Route::delete('/task/{id}', function ($id){
	// kod za brisanje taska
});

// prikaz određenog taska
Route::get('/task/{id}', function ($id) {
	// kod za prikaz taska
});
