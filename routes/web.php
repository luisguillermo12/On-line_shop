<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();



/* RUTAS PAGE */
 require ('page/page.php');
/* END RUTAS PAGE */




