<?php

Route::prefix('dashboard')
->name('dashboard.')
->middleware(['auth','role:super_admin|admin'])
->group(function(){
    Route::get('/','welcomeController@index')->name('welcome');

    /** profile:route   **/
    Route::get('/profile','profileController@index')->name('profile.index');

   /*  Route::resource('journaliste','JouralisteController'); */


    Route::resource('student','StudentController');
    Route::resource('teacher','TeacherController');
    Route::get('change-status', 'UserController@userChangeStatus')->name('change-status');

    });


