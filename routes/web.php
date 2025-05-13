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

Route::get('/internships', [InternshipController::class, 'index'])->name('internships.index');
Route::get('/internships/create', [InternshipController::class, 'create'])->name('internships.create'); // <-- verplaatst
Route::post('/internships', [ InternshipController::class, 'store' ]);
Route::get('/internships/{id}', [InternshipController::class, 'show'])->name('internships.show');
Route::get('/internships/{id}/edit', [ InternshipController::class, 'edit' ]);
Route::put('/internships/{id}', [ InternshipController::class, 'update' ]);

Route::get('/educations/create', [EducationController::class, 'create'])->name('educations.create');
Route::post('/educations', [EducationController::class, 'store']);
Route::get('/educations', [EducationController::class, 'index'])->name('educations.index');
Route::get('/educations/{id}', [EducationController::class, 'show'])->name('educations.show');
Route::get('/educations/{id}/edit', [EducationController::class, 'edit'])->name('educations.edit');
Route::put('/educations/{id}', [EducationController::class, 'update'])->name('educations.update');

