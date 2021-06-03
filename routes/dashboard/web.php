<?php

Route::prefix('dashboard')
->name('dashboard.')
->middleware(['auth','role:super_admin|admin'])
->group(function(){
    Route::get('/','welcomeController@index')->name('welcome');

    /**     profile:route   **/
    Route::get('/profile','profileController@index')->name('profile.index');

    /**         change status route     **/
    Route::get('change-status', 'UserController@userChangeStatus')->name('change-status');

    /**         student route          **/
    Route::resource('student','StudentController');


     /**         teacher route          **/
    Route::resource('teacher','TeacherController');


     /**         subject route          **/
     Route::resource('subject','SubjectController');
     Route::get('subject-book/{id}','subjectController@subjectBook')->name('subject-book');
     Route::get('subject-courses/{id}','subjectController@subjectCourse')->name('subject-course');
     Route::get('subject-tasks/{id}','subjectController@subjectTask')->name('subject-task');

     /**         Book route          **/
     Route::resource('book','BookController');
     Route::get('/book/download/{file}','BookController@download')->name('download.book');

     /**         Course route          **/
     Route::resource('course','CourseController');
     Route::get('/course/download/{file}','CourseController@download')->name('download.course');

       /**         Task route          **/
     Route::resource('task','TaskController');
     Route::get('/task/download/{file}','TaskController@download')->name('download.task');

         /**         Cocours route          **/
         Route::resource('concour','CoucourController');
    });


