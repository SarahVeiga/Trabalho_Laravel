<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Tela inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas de registro
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

// Rotas de login
Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.attempt');

// Rota após login
Route::get('/logged', [UserController::class, 'logged'])->name('logged');

// Rotas de edição de usuário

Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');


Route::post('/edit/{id}', [UserController::class, 'update'])->name('update');

// Página para solicitar redefinição de senha
Route::get('/forgot-password', [UserController::class, 'forgotPasswordForm'])->name('password.request');

// Formulário para enviar o e-mail com instruções
Route::post('/forgot-password', [UserController::class, 'sendResetLink'])->name('password.email');

// Defina a rota para a página de sucesso de login
Route::get('/dashboard', function () {
    return view('dashboard'); // Nome da view que vai mostrar "Estou logado"
})->name('dashboard')->middleware('auth'); // middleware 'auth' para proteger a rota

// Rota para a tela pós-login
Route::get('/logged', [UserController::class, 'logged'])->name('logged');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route::post('/logout', function () {
//     Auth::logout();
//     return redirect('/');
// })->name('logout');


