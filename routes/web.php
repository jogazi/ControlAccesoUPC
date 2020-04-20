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

    //pdf
    Route::get('/print-files', 'Audit23Controller@imprimir')->name('pdffiles');
    Route::get('/print-users', 'UserController@imprimir')->name('pdfusers');
    Route::get('/print-roles', 'Audit06Controller@imprimir')->name('pdfroles');

    //sirviendo toca ubircar
    Route::get('/comparacion', 'HomeController@comparacion')->name('comparacion');

    Route::post('/upfile', 'Audit23Controller@store')->name('store');

    //roles
    Route::post('roles/store', 'Audit06Controller@store')->name('roles.store')
           ->middleware('can:roles.create');

    Route::get('roles', 'Audit06Controller@index')->name('roles.index')
           ->middleware('can:roles.index');

    Route::get('roles/create', 'Audit06Controller@create')->name('roles.create')
           ->middleware('can:roles.create');
           
    Route::put('roles/{roles}', 'Audit06Controller@update')->name('roles.update')
           ->middleware('can:roles.edit');

    Route::get('roles/{roles}', 'Audit06Controller@show')->name('roles.show')
           ->middleware('can:roles.show');
           
    Route::delete('roles/{roles}', 'Audit06Controller@destroy')->name('roles.destroy')
           ->middleware('can:roles.destroy');

    Route::get('roles/{roles}/edit', 'Audit06Controller@edit')->name('roles.edit')
           ->middleware('can:roles.edit');

    //audsys
    Route::get('audit', 'Audit07Controller@index')->name('audit07.index')
           ->middleware('can:audit07.index');

    Route::get('audit/{audit07}', 'Audit07Controller@show')->name('audit07.show')
           ->middleware('can:audit07.show');
           
    Route::delete('audit/{audit07}', 'Audit07Controller@destroy')->name('audit07.destroy')
           ->middleware('can:audit07.destroy');

    //actors
    Route::post('actors/store', 'Audit09Controller@store')->name('audit09.store')
           ->middleware('can:audit09.create');

    Route::get('actors', 'Audit09Controller@index')->name('audit09.index')
           ->middleware('can:audit09.index');

    Route::get('actors/create', 'Audit09Controller@create')->name('audit09.create')
           ->middleware('can:audit09.create');
           
    Route::put('actors/update', 'Audit09Controller@update')->name('audit09.update')
           ->middleware('can:audit09.edit');

    Route::get('actors/show', 'Audit09Controller@show')->name('audit09.show')
           ->middleware('can:audit09.show');
           
    Route::delete('actors/delete', 'Audit09Controller@destroy')->name('audit09.destroy')
           ->middleware('can:audit09.destroy');

    Route::get('actors/edit', 'Audit09Controller@edit')->name('audit09.edit')
           ->middleware('can:audit09.edit');

    //directors
    Route::post('directors/store', 'Audit13Controller@store')->name('audit13.store')
           ->middleware('can:audit13.create');

    Route::get('directors', 'Audit13Controller@index')->name('audit13.index')
           ->middleware('can:audit13.index');

    Route::get('directors/create', 'Audit13Controller@create')->name('audit13.create')
           ->middleware('can:audit13.create');
           
    Route::put('directors/update', 'Audit13Controller@update')->name('audit13.update')
           ->middleware('can:audit13.edit');

    Route::get('directors/show', 'Audit13Controller@show')->name('audit13.show')
           ->middleware('can:audit13.show');
           
    Route::delete('directors/delete', 'Audit13Controller@destroy')->name('audit13.destroy')
           ->middleware('can:audit13.destroy');

    Route::get('directors/edit', 'Audit13Controller@edit')->name('audit13.edit')
           ->middleware('can:audit13.edit');

    //films
    Route::post('films/store', 'Audit12Controller@store')->name('audit12.store')
           ->middleware('can:audit12.create');

    Route::get('films', 'Audit12Controller@index')->name('audit12.index')
           ->middleware('can:audit12.index');

    Route::get('films/create', 'Audit12Controller@create')->name('audit12.create')
           ->middleware('can:audit12.create');
           
    Route::put('films/update', 'Audit12Controller@update')->name('audit12.update')
           ->middleware('can:audit12.edit');

    Route::get('films/show', 'Audit12Controller@show')->name('audit12.show')
           ->middleware('can:audit12.show');
           
    Route::delete('films/delete', 'Audit12Controller@destroy')->name('audit12.destroy')
           ->middleware('can:audit12.destroy');

    Route::get('films/edit', 'Audit12Controller@edit')->name('audit12.edit')
           ->middleware('can:audit12.edit');

    //rooms
    Route::post('rooms/store', 'Audit15Controller@store')->name('audit15.store')
           ->middleware('can:audit15.create');

    Route::get('rooms', 'Audit15Controller@index')->name('audit15.index')
           ->middleware('can:audit15.index');

    Route::get('rooms/create', 'Audit15Controller@create')->name('audit15.create')
           ->middleware('can:audit15.create');
           
    Route::put('rooms/update', 'Audit15Controller@update')->name('audit15.update')
           ->middleware('can:audit15.edit');

    Route::get('rooms/show', 'Audit15Controller@show')->name('audit15.show')
           ->middleware('can:audit15.show');
           
    Route::delete('rooms/delete', 'Audit15Controller@destroy')->name('audit15.destroy')
           ->middleware('can:audit15.destroy');

    Route::get('rooms/edit', 'Audit15Controller@edit')->name('audit15.edit')
           ->middleware('can:audit15.edit');

    //seating
    Route::post('seating/store', 'Audit16Controller@store')->name('audit16.store')
           ->middleware('can:audit16.create');

    Route::get('seating', 'Audit16Controller@index')->name('audit16.index')
           ->middleware('can:audit16.index');

    Route::get('seating/create', 'Audit16Controller@create')->name('audit16.create')
           ->middleware('can:audit16.create');
           
    Route::put('seating/update', 'Audit16Controller@update')->name('audit16.update')
           ->middleware('can:audit16.edit');

    Route::get('seating/show', 'Audit16Controller@show')->name('audit16.show')
           ->middleware('can:audit16.show');
           
    Route::delete('seating/delete', 'Audit16Controller@destroy')->name('audit16.destroy')
           ->middleware('can:audit16.destroy');

    Route::get('seating/edit', 'Audit16Controller@edit')->name('audit16.edit')
           ->middleware('can:audit16.edit');

    //functions
    Route::post('functions/store', 'Audit14Controller@store')->name('audit14.store')
           ->middleware('can:audit14.create');

    Route::get('functions', 'Audit14Controller@index')->name('audit14.index')
           ->middleware('can:audit14.index');

    Route::get('functions/create', 'Audit14Controller@create')->name('audit14.create')
           ->middleware('can:audit14.create');
           
    Route::put('functions/update', 'Audit14Controller@update')->name('audit14.update')
           ->middleware('can:audit14.edit');

    Route::get('functions/show', 'Audit14Controller@show')->name('audit14.show')
           ->middleware('can:audit14.show');
           
    Route::delete('functions/delete', 'Audit14Controller@destroy')->name('audit14.destroy')
           ->middleware('can:audit14.destroy');

    Route::get('functions/edit', 'Audit14Controller@edit')->name('audit14.edit')
           ->middleware('can:audit14.edit');

    //ticketsale
    Route::post('ticketsale/store', 'Audit22Controller@store')->name('audit22.store')
           ->middleware('can:audit22.create');

    Route::get('ticketsale', 'Audit22Controller@index')->name('audit22.index')
           ->middleware('can:audit22.index');

    Route::get('ticketsale/create', 'Audit22Controller@create')->name('audit22.create')
           ->middleware('can:audit22.create');
           
    Route::put('ticketsale/update', 'Audit22Controller@update')->name('audit22.update')
           ->middleware('can:audit22.edit');

    Route::get('ticketsale/show', 'Audit22Controller@show')->name('audit22.show')
           ->middleware('can:audit22.show');
           
    Route::delete('ticketsale/delete', 'Audit22Controller@destroy')->name('audit22.destroy')
           ->middleware('can:audit22.destroy');

    Route::get('ticketsale/edit', 'Audit22Controller@edit')->name('audit22.edit')
           ->middleware('can:audit22.edit');

    //users
    Route::get('users', 'UserController@index')->name('users.index')
           ->middleware('can:users.index');

    Route::post('users/update', 'UserController@update')->name('users.update')
           ->middleware('can:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
           ->middleware('can:users.show');
           
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
           ->middleware('can:users.destroy');

    Route::get('users/edit', 'UserController@edit')->name('users.edit')
           ->middleware('can:users.edit');

    //files
    Route::get('files', 'Audit23Controller@index')->name('audit23.index')
           ->middleware('can:audit23.index');

    Route::get('files/{audit23}', 'Audit23Controller@show')->name('audit23.show')
           ->middleware('can:audit23.show');

    Route::delete('files/{audit23}', 'Audit23Controller@destroy')->name('audit23.destroy')
           ->middleware('can:audit23.destroy');

});

//Route::get('/comparison-analysis', 'HomeController@analysis')->name('analysis');
