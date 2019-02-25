<?php

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@welcome')->name('princ');
Auth::routes();



/* RUTAS PAGE */
 require ('page/page.php');
/* END RUTAS PAGE */




