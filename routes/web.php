<?php
use App\Http\Controllers\NewController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\InternshipController;
use Illuminate\Support\Facades\Route;
 
// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', [NewController::class, 'home']);
 
// Route::get('/contact', function () {
//     return view('contact');
// });
 
Route::get('/contact', [NewController::class, 'contact']);
 
// Route::get('/links', function () {
//     return view('links');
// });
Route::get('/links', [NewController::class, 'links']);
 
// Route::get('/companies', function () {
//     return view('companies');
// });
Route::get('/companies', [NewController::class, 'companies']);
Route::get('/about', [NewController::class, 'about']);
Route::get('/internships', [InternshipController::class, 'index']);
Route::get('/educations', [EducationController::class, 'index']);