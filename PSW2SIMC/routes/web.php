<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    $products = DB::table('products')->get();
    return view('welcome',[
        'products' => $products
    ]);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index'])->
middleware(['auth','admin']);


Route::get('/form', [MessageController::class, 'showForm']);
Route::post('/submit', [MessageController::class, 'submitForm']);
Route::get('admin/dashboard', [MessageController::class, 'showMessages']);

Route::get('/test-insert', function () {
    $message = Message::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'contact_information' => '1234567890',
        'message' => 'This is a test message'
    ]);

    return $message ? 'Insert successful' : 'Insert failed';
});