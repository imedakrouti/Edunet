<?php

Route::prefix('dashboard')
->name('dashboard.')
->middleware(['auth','role:super_admin|admin|journaliste'])
->group(function(){
    Route::get('/','welcomeController@index')->name('welcome');

    /** profile:route   **/
    Route::get('/profile','profileController@index')->name('profile.index');

   /*  Route::resource('journaliste','JouralisteController'); */

   
    Route::resource('Student','StudentController');
    });


