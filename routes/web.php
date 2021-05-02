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
    Route::get('register-teacher', 'Auth\teacherController@create')->name('teacher.create');
    Route::post('register-teacher', 'Auth\teacherController@register')->name('teacher.create');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/* Route::get('/dashboard', function () {
    return view('dashboard.super_admin');
}); */
