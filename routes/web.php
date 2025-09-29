<?php

use App\Http\Controllers\InscricaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InscricaoController::class, 'index'])->name('home');
Route::get('/inscrever', [InscricaoController::class, 'create'])->name('inscrever');
Route::post('/inscricao', [InscricaoController::class, 'store'])->name('inscricao');
Route::get('/inscricao/{id}/editar', [InscricaoController::class, 'edit'])->name('editar_inscricao');
Route::get('/inscricao/confirmar', [InscricaoController::class, 'confirmar'])->name('confirmar');
Route::put('/inscricao/{id}/atualizar', [InscricaoController::class, 'update'])->name('atualizar_inscricao');
Route::get('/inscricao/{id}/excluir', [InscricaoController::class, 'destroy'])->name('excluir_inscricao');
Route::get('/teste',[InscricaoController::class, 'showEachInscricao'])->name('teste_de_dump');  
