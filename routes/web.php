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

// $router->pattern('foo', '[0-9a-zA-Z]{4}');
// Route::get('/{foo?}', function ($foo = 'bar') {
//     return view('welcome', ['foo' => $foo]);
// })->where('foo', '[0-9a-zA-Z]{3}');

// Route::get('/', [
//     'as' => 'home',
//     function (){
//         return 'hi';
//     }
// ]);

// Route::get('/home', function() {
//     return redirect(route('home'));
// });

// Route::get('/', function (){
//     return view('errors.503');
// });

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Foo',
        'greeting' => 'Hello'
        ]);
});
