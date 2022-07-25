<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

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





Route::get('/dashboard', function () {
    $data=App\Models\Student::all();
    return view('dashboard', ['students'=>$data]);
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('index');
});
Route::get('/log', 'StudentController@log')->name('students.log');
Route::post('/result', 'StudentController@result')->name('students.result');
Route::get('/register', 'StudentController@register')->name('students.register');
Route::post('students/store', 'StudentController@store')->name('students.store');
Route::post('/dashboard', 'AdminController@dashboard')->name('admins.dashboard');
Route::get('/students/delete/{id}', 'AdminController@delete')->name('students.delete');  
Route::post('/students/delete/{id}', 'AdminController@delete')->name('students.delete');  
Route::get('/add','AdminController@add')->name('admins.add');
Route::post('/store', 'AdminController@store')->name('admins.store');
Route::get('/edit/{id}', 'AdminController@edit')->name('admins.edit');
Route::post('/update', 'AdminController@update');





