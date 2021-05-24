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
    return view('auth.login');
});

//Lista Linguagem
Route::get('listarlinguagem', [App\Http\Controllers\LinguagemController::class, 'listarlinguagem'])->name('listarlinguagem');
//Criar Linguagem
Route::post('criarlinguagem', [App\Http\Controllers\LinguagemController::class, 'criarlinguagem'])->name('criarlinguagem');
//Alterar Linguagem
Route::get('telaeditarlinguagem{id}', [App\Http\Controllers\LinguagemController::class, 'telaeditarlinguagem'])->name('telaeditarlinguagem');
//Salvar Linguagem editada
Route::post('editarlinguagem{id}',  [App\Http\Controllers\LinguagemController::class, 'editarlinguagem'])->name('editarlinguagem');
//Voltar tela de Listar Linguagem
Route::get('voltartelalinguagem',  [App\Http\Controllers\LinguagemController::class, 'voltartelalinguagem'])->name('voltartelalinguagem');
//Excluir linguagem
Route::delete('excluirlinguagem{id}',  [App\Http\Controllers\LinguagemController::class, 'excluirlinguagem'])->name('excluirlinguagem');






//Lista Vagas
Route::get('listarvagas', [App\Http\Controllers\VagasController::class, 'listarvagas'])->name('listarvagas');
//Criar vagas
Route::post('criarvagas', [App\Http\Controllers\VagasController::class, 'criarvagas'])->name('criarvagas');
//Alterar Linguagem
Route::get('telaeditarvaga{id}', [App\Http\Controllers\VagasController::class, 'telaeditarvaga'])->name('telaeditarvaga');
//Salvar Linguagem editada
Route::post('editarvaga{id}',  [App\Http\Controllers\VagasController::class, 'editarvaga'])->name('editarvaga');
//Voltar tela de Listar Linguagem
Route::get('voltartelavaga',  [App\Http\Controllers\VagasController::class, 'voltartelavaga'])->name('voltartelavaga');
//Excluir linguagem
Route::delete('excluirvaga{id}',  [App\Http\Controllers\VagasController::class, 'excluirvaga'])->name('excluirvaga');




//Listar Candidato
Route::get('listarcandidato', [App\Http\Controllers\CandidatoController::class, 'listarcandidato'])->name('listarcandidato');
//Criar Candidato
Route::post('criarcandidato', [App\Http\Controllers\CandidatoController::class, 'criarcandidato'])->name('criarcandidato');
//Alterar Linguagem
Route::get('telaeditarcandidato{id}', [App\Http\Controllers\CandidatoController::class, 'telaeditarcandidato'])->name('telaeditarcandidato');
//Salvar Linguagem editada
Route::post('editarcandidato{id}',  [App\Http\Controllers\CandidatoController::class, 'editarcandidato'])->name('editarcandidato');
//Voltar tela de Listar Linguagem
Route::get('voltartelacandidato',  [App\Http\Controllers\CandidatoController::class, 'voltartelacandidato'])->name ('voltartelacandidato');
//Excluir linguagem
Route::delete('excluircandidato{id}',  [App\Http\Controllers\CandidatoController::class, 'excluircandidato'])->name('excluircandidato');





'Auth'::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
