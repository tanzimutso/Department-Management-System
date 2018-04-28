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


Route::get('/clock', function () {
    return view('clock');
});



Auth::routes();

Route::get('/home', 'HomeController@index');


//
//Route::GET('admin','Admin/LoginController@showLoginForm')->name('admin.login');
//Route::POST('admin','Admin/LoginController@login');
//Route::POST('auth-password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.email');
//Route::GET('auth-password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.request');
//Route::POST('auth-password/reset','Auth\ResetPasswordController@reset');
//Route::GET('auth-password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('auth.password.reset');


Route::prefix('admin/student')->group(function(){

	Route::get('/', 'StudentController@indexall')->name('admin_student_indexall');
    Route::get('/index', 'StudentController@indexall')->name('admin_student_index');
    Route::get('/firstyearfirstsemester', 'StudentController@firstyearfirstsemester')->name('admin_student_one_one');
    Route::get('/firstyearsecondsemester', 'StudentController@firstyearsecondsemester')->name('admin_student_one_two');
    Route::get('/secondyearfirstsemester', 'StudentController@secondyearfirstsemester')->name('admin_student_two_one');
    Route::get('/secondyearsecondsemester', 'StudentController@secondyearsecondsemester')->name('admin_student_two_two');
    Route::get('/thirdyearfirstsemester', 'StudentController@thirdyearfirstsemester')->name('admin_student_three_one');
    Route::get('/thirdyearsecondsemester', 'StudentController@thirdyearsecondsemester')->name('admin_student_three_two');
    Route::get('/fourthyearfirstsemester', 'StudentController@fourthyearfirstsemester')->name('admin_student_four_one');
    Route::get('/fourthyearsecondsemester', 'StudentController@fourthyearsecondsemester')->name('admin_student_four_two');

	Route::get('create', 'StudentController@create')->name('admin_student_create');
	Route::post('store', 'StudentController@store')->name('admin_student_store');
	Route::get('{id}/show', 'StudentController@show')->name('admin_student_show');
	Route::get('{id}/edit', 'StudentController@edit')->name('admin_student_edit');
	Route::post('{id}/update', 'StudentController@update')->name('admin_student_update');
	Route::get('{id}/delete', 'StudentController@destroy')->name('admin_student_delete');

});

Route::prefix('admin/teacher')->group(function(){

	Route::get('/', 'TeacherController@index')->name('admin_teacher_index');
	Route::get('create', 'TeacherController@create')->name('admin_teacher_create');
	Route::post('store', 'TeacherController@store')->name('admin_teacher_store');
	Route::get('{id}/show', 'TeacherController@show')->name('admin_teacher_show');
	Route::get('{id}/edit', 'TeacherController@edit')->name('admin_teacher_edit');
	Route::post('{id}/update', 'TeacherController@update')->name('admin_teacher_update');
	Route::get('{id}/delete', 'TeacherController@destroy')->name('admin_teacher_delete');

});

Route::prefix('student/')->group(function(){

    Route::get("/allcourses","CourseController@allcourse")->name('allcourse');
    Route::get("/one-one","CourseController@oneone")->name('course_one_one');
    Route::get("/one-two","CourseController@onetwo")->name('course_one_two');
    Route::get("/two-one","CourseController@twoone")->name('course_two_one');
    Route::get("/two-two","CourseController@twotwo")->name('course_two_two');
    Route::get("/three-one","CourseController@threeone")->name('course_three_one');
    Route::get("/three-two","CourseController@threetwo")->name('course_three_two');
    Route::get("/four-one","CourseController@fourone")->name('course_four_one');
    Route::get("/four-two","CourseController@fourtwo")->name('course_four_two');
});

Route::prefix('notice/')->group(function() {

    Route::get('/noticeindex','NoticeController@index')->name('allnotice');
    Route::get('/notice-create','NoticeController@create')->name('notice_create');
    Route::post('/notice-store', 'NoticeController@store')->name('notice_store');
    Route::get('{id}/notice-show', 'NoticeController@show')->name('notice_show');
    Route::get('{id}/notice-edit', 'NoticeController@edit')->name('notice_edit');
    Route::post('{id}/notice-update', 'NoticeController@update')->name('notice_update');
    Route::get('{id}/notice-delete', 'NoticeController@destroy')->name('notice_delete');


});

Route::get("/notice","NoticeController@showallnotice")->name("notice");

Route::get("routine/select","RoutineController@courses")->name('selectcourse');

Route::post("routine/selectedcourse","RoutineController@store")->name('selectedcourse');
Route::get("routine/selecttimeandroom","RoutineController@add")->name('selecttimeandroom');
Route::post("routine/selectedtimeandroom","RoutineController@getTimeAndRoom")->name('selectedtimeandroom');



Route::get("/one-one","LectureUploadController@sendmailToOneOne")->name("one_one_sendlecture");
Route::get("/one-two","LectureUploadController@sendmailToOneTwo")->name("one_two_sendlecture");
Route::get("/two-one","LectureUploadController@sendmailToTwoOne")->name("two_one_sendlecture");
Route::get("/two-two","LectureUploadController@sendmailToTwoTwo")->name("two_two_sendlecture");
Route::get("/three-one","LectureUploadController@sendmailToThreeOne")->name("three_one_sendlecture");
Route::get("/three-two","LectureUploadController@sendmailToThreeTwo")->name("three_two_sendlecture");
Route::get("/four-one","LectureUploadController@sendmailToFourOne")->name("four_one_sendlecture");
Route::get("/four-two","LectureUploadController@sendmailToFourTwo")->name("four_two_sendlecture");
Route::post("/one-one","LectureUploadController@postmailoneone")->name("one_one_postmail");
Route::post("/one-two","LectureUploadController@postmailonetwo")->name("one_two_postmail");
Route::post("/two-one","LectureUploadController@postmailtwoone")->name("two_one_postmail");
Route::post("/two-two","LectureUploadController@postmailtwotwo")->name("two_two_postmail");
Route::post("/three-one","LectureUploadController@postmailthreeone")->name("three_one_postmail");
Route::post("/three-two","LectureUploadController@postmailthreetwo")->name("three_two_postmail");
Route::post("/four-one","LectureUploadController@postmailfourone")->name("four_one_postmail");
Route::post("/four-two","LectureUploadController@postmailfourtwo")->name("four_two_postmail");
Route::get("/sendmail1","LectureUploadController@index1")->name("sendmailoneone");
Route::get("/sendmail2","LectureUploadController@index2")->name("sendmailonetwo");
Route::get("/sendmail3","LectureUploadController@index3")->name("sendmailtwoone");
Route::get("/sendmail4","LectureUploadController@index4")->name("sendmailtwotwo");
Route::get("/sendmail5","LectureUploadController@index5")->name("sendmailthreeone");
Route::get("/sendmail6","LectureUploadController@index6")->name("sendmailthreetwo");
Route::get("/sendmail7","LectureUploadController@index7")->name("sendmailfourone");
Route::get("/sendmail8","LectureUploadController@index8")->name("sendmailfourtwo");
Route::get("/allbatches","LectureUploadController@allbatches")->name('allbatches');

Route::get("/post","LectureController@postmail")->name("postmail");
