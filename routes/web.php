<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

    /* Alert::success('Success Title', 'Success Message'); */
 /*    toast('Eleves Ajouté','success')->background('green')->hideCloseButton(); */
    //alert()->success('Post Created', 'Successfully');

    /* toast('Post Updated','success','top-right')->hideCloseButton(); */



    return view('welcome');
});
/* Route::get('changeStatus', 'dashboard\StudentController@userChangeStatus');
 */

    /* Register Teacher  */
    Route::get('register', 'UserController@create')->name('register');
    Route::post('register', 'UserController@store')->name('registeruser');

    Route::get('/dropzone','ImageController@index');
    Route::post('/dropzone/store','ImageController@store')->name('dropzone.store');
   /*  Route::get('dropzone', 'DropzoneController@dropzone');
    Route::post('dropzone/store', 'DropzoneController@dropzoneStore')->name('dropzone.store'); */
    Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

/* Route::get('/dashboard', function () {
    return view('dashboard.super_admin');
}); */
