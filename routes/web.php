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

Route::get('/', function () {
    
    return view('/main');
});


Route::get('/resume/download','ResumeController@download')->name('resume.download');
Route::get('/resume', 'ResumeController@index')->name('resume.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/image', 'Controller@dimages')->name('image.index');


//store pdf files in s3 bucket
// Route::put('/resume/upload', 'ResumeController@postPdf')->name('resume.postPdf');

//upload pdf files to s3 bucket aws
Route::get('/resume/uploadPdf', 'ResumeController@uploadPdf')->name('resume.uploadPdf');

//delete pdf files from s3 bucket
Route::get('/resume/deletePdf', 'ResumeController@deletePdf')->name('resume.deletePdf');

//download pdf files from s3 bucket
Route::get('/resume/getPdf', 'ResumeController@getPdf')->name('resume.getPdf');

// Path: routes\web.php


Route::resource('user-detail', 'UserDetailController')->middleware('auth');

Route::resource('education', 'EducationController')->middleware('auth');

Route::resource('experience', 'ExperienceController')->middleware('auth');
Route::resource('skill', 'SkillController')->middleware('auth');
