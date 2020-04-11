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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function() {

    //test
    Route::resource('store', 'Audit23Controller');
    Route::get('/storess', 'Audit06Controller@index')->name('storess');

    //sirviendo toca ubircar
    Route::get('/comparacion', 'HomeController@comparacion')->name('comparacion');

    Route::post('/upfile', 'Audit23Controller@store')->name('store');

    //roles
    Route::post('roles/store', 'Audit06Controller@store')->name('audit06.store')
           ->middleware('can:audit06.create');

    Route::get('roles', 'Audit06Controller@index')->name('audit06.index')
           ->middleware('can:audit06.index');

    Route::post('roles/create', 'Audit06Controller@create')->name('audit06.create')
           ->middleware('can:audit06.create');
           
    Route::post('roles/update', 'Audit06Controller@update')->name('audit06.update')
           ->middleware('can:audit06.edit');

    Route::post('roles/show', 'Audit06Controller@show')->name('audit06.show')
           ->middleware('can:audit06.show');
           
    Route::post('roles/delete', 'Audit06Controller@destroy')->name('audit06.destroy')
           ->middleware('can:audit06.destroy');

    Route::post('roles/edit', 'Audit06Controller@edit')->name('audit06.edit')
           ->middleware('can:audit06.edit');

    //audsys
    Route::get('roles', 'Audit07Controller@index')->name('audit07.index')
           ->middleware('can:audit07.index');

    Route::post('roles/show', 'Audit07Controller@show')->name('audit07.show')
           ->middleware('can:audit07.show');
           
    Route::post('roles/delete', 'Audit07Controller@destroy')->name('audit07.destroy')
           ->middleware('can:audit07.destroy');

    //actors
    Route::post('actors/store', 'Audit09Controller@store')->name('audit09.store')
           ->middleware('can:audit09.create');

    Route::get('actors', 'Audit09Controller@index')->name('audit09.index')
           ->middleware('can:audit09.index');

    Route::post('actors/create', 'Audit09Controller@create')->name('audit09.create')
           ->middleware('can:audit09.create');
           
    Route::post('actors/update', 'Audit09Controller@update')->name('audit09.update')
           ->middleware('can:audit09.edit');

    Route::post('actors/show', 'Audit09Controller@show')->name('audit09.show')
           ->middleware('can:audit09.show');
           
    Route::post('actors/delete', 'Audit09Controller@destroy')->name('audit09.destroy')
           ->middleware('can:audit09.destroy');

    Route::post('actors/edit', 'Audit09Controller@edit')->name('audit09.edit')
           ->middleware('can:audit09.edit');

    //directors
    Route::post('directors/store', 'Audit13Controller@store')->name('audit13.store')
           ->middleware('can:audit13.create');

    Route::get('directors', 'Audit13Controller@index')->name('audit13.index')
           ->middleware('can:audit13.index');

    Route::post('directors/create', 'Audit13Controller@create')->name('audit13.create')
           ->middleware('can:audit13.create');
           
    Route::post('directors/update', 'Audit13Controller@update')->name('audit13.update')
           ->middleware('can:audit13.edit');

    Route::post('directors/show', 'Audit13Controller@show')->name('audit13.show')
           ->middleware('can:audit13.show');
           
    Route::post('directors/delete', 'Audit13Controller@destroy')->name('audit13.destroy')
           ->middleware('can:audit13.destroy');

    Route::post('directors/edit', 'Audit13Controller@edit')->name('audit13.edit')
           ->middleware('can:audit13.edit');

    //films
    Route::post('films/store', 'Audit12Controller@store')->name('audit12.store')
           ->middleware('can:audit12.create');

    Route::get('films', 'Audit12Controller@index')->name('audit12.index')
           ->middleware('can:audit12.index');

    Route::post('films/create', 'Audit12Controller@create')->name('audit12.create')
           ->middleware('can:audit12.create');
           
    Route::post('films/update', 'Audit12Controller@update')->name('audit12.update')
           ->middleware('can:audit12.edit');

    Route::post('films/show', 'Audit12Controller@show')->name('audit12.show')
           ->middleware('can:audit12.show');
           
    Route::post('films/delete', 'Audit12Controller@destroy')->name('audit12.destroy')
           ->middleware('can:audit12.destroy');

    Route::post('films/edit', 'Audit12Controller@edit')->name('audit12.edit')
           ->middleware('can:audit12.edit');

    //rooms
    Route::post('rooms/store', 'Audit15Controller@store')->name('audit15.store')
           ->middleware('can:audit15.create');

    Route::get('rooms', 'Audit15Controller@index')->name('audit15.index')
           ->middleware('can:audit15.index');

    Route::post('rooms/create', 'Audit15Controller@create')->name('audit15.create')
           ->middleware('can:audit15.create');
           
    Route::post('rooms/update', 'Audit15Controller@update')->name('audit15.update')
           ->middleware('can:audit15.edit');

    Route::post('rooms/show', 'Audit15Controller@show')->name('audit15.show')
           ->middleware('can:audit15.show');
           
    Route::post('rooms/delete', 'Audit15Controller@destroy')->name('audit15.destroy')
           ->middleware('can:audit15.destroy');

    Route::post('rooms/edit', 'Audit15Controller@edit')->name('audit15.edit')
           ->middleware('can:audit15.edit');

    //seating
    Route::post('seating/store', 'Audit16Controller@store')->name('audit16.store')
           ->middleware('can:audit16.create');

    Route::get('seating', 'Audit16Controller@index')->name('audit16.index')
           ->middleware('can:audit16.index');

    Route::post('seating/create', 'Audit16Controller@create')->name('audit16.create')
           ->middleware('can:audit16.create');
           
    Route::post('seating/update', 'Audit16Controller@update')->name('audit16.update')
           ->middleware('can:audit16.edit');

    Route::post('seating/show', 'Audit16Controller@show')->name('audit16.show')
           ->middleware('can:audit16.show');
           
    Route::post('seating/delete', 'Audit16Controller@destroy')->name('audit16.destroy')
           ->middleware('can:audit16.destroy');

    Route::post('seating/edit', 'Audit16Controller@edit')->name('audit16.edit')
           ->middleware('can:audit16.edit');

    //functions
    Route::post('functions/store', 'Audit14Controller@store')->name('audit14.store')
           ->middleware('can:audit14.create');

    Route::get('functions', 'Audit14Controller@index')->name('audit14.index')
           ->middleware('can:audit14.index');

    Route::post('functions/create', 'Audit14Controller@create')->name('audit14.create')
           ->middleware('can:audit14.create');
           
    Route::post('functions/update', 'Audit14Controller@update')->name('audit14.update')
           ->middleware('can:audit14.edit');

    Route::post('functions/show', 'Audit14Controller@show')->name('audit14.show')
           ->middleware('can:audit14.show');
           
    Route::post('functions/delete', 'Audit14Controller@destroy')->name('audit14.destroy')
           ->middleware('can:audit14.destroy');

    Route::post('functions/edit', 'Audit14Controller@edit')->name('audit14.edit')
           ->middleware('can:audit14.edit');

    //ticketsale
    Route::post('ticketsale/store', 'Audit22Controller@store')->name('audit22.store')
           ->middleware('can:audit22.create');

    Route::get('ticketsale', 'Audit22Controller@index')->name('audit22.index')
           ->middleware('can:audit22.index');

    Route::post('ticketsale/create', 'Audit22Controller@create')->name('audit22.create')
           ->middleware('can:audit22.create');
           
    Route::post('ticketsale/update', 'Audit22Controller@update')->name('audit22.update')
           ->middleware('can:audit22.edit');

    Route::post('ticketsale/show', 'Audit22Controller@show')->name('audit22.show')
           ->middleware('can:audit22.show');
           
    Route::post('ticketsale/delete', 'Audit22Controller@destroy')->name('audit22.destroy')
           ->middleware('can:audit22.destroy');

    Route::post('ticketsale/edit', 'Audit22Controller@edit')->name('audit22.edit')
           ->middleware('can:audit22.edit');

    //users
    Route::get('users', 'UserController@index')->name('users.index')
           ->middleware('can:users.index');

    Route::post('users/update', 'UserController@update')->name('users.update')
           ->middleware('can:users.edit');

    Route::post('users/show', 'UserController@show')->name('users.show')
           ->middleware('can:users.show');
           
    Route::post('users/delete', 'UserController@destroy')->name('users.destroy')
           ->middleware('can:users.destroy');

    Route::post('users/edit', 'UserController@edit')->name('users.edit')
           ->middleware('can:users.edit');

});

//Route::get('/comparison-analysis', 'HomeController@analysis')->name('analysis');
