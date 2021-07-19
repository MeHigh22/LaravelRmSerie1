<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Mihai', function () {
    $prenom = "Mihai";
    return view('Mihai', compact('prenom'));
});


Route::get('/{variable}', function ($variable) {
    if(is_numeric($variable)) {
        $multiply = 4 * $variable;
        return "4" . "*" . $variable . "=" . $multiply;
    } elseif(!is_numeric($variable)) {
        return "Pas possible Monsieur";
    }
    return view('welcome', compact('variable'));
});
