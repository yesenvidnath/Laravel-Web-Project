<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/products', function () {
    return view('pages.product');
});

// Route::get('/students',[StudentsController::class, 'index'])->name ('home');


// Adding Nested routs for in the application
Route::group(['prefix' => 'students'], function () {
    Route::get('/', [StudentsController::class, 'index'])->name('student');
    Route::post('/save', [StudentsController::class, 'save'])->name('student.save');
    Route::get('/{stu_id}/delete', [StudentsController::class, 'delete'])->name('student.delete');
    Route::get('/{stu_id}/edit', [StudentsController::class, 'edit'])->name('student.edit');
    Route::post('/{stu_id}/update', [StudentsController::class, 'update'])->name('student.update');
    Route::get('/{stu_id}/manage', [StudentsController::class, 'vewRecords'])->name('student.manage');
    Route::post('/saveRecord', [StudentsController::class, 'saveRecord'])->name('student.saveRecord');
});
