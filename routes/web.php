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


/*  LOGIN  ============================================================================================ */
Route::get('/', 'Auth\LoginController@index')->name('login');
Route::post('/', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


/* HOME ==========================================================================================*/
Route::get('/home', 'HomeController@index')->name('home.index')->middleware('auth');

/*  AGENDAMENTOS ================================================================================== */
Route::get('/agenda', 'AgendaController@index')->name('agenda.index');
Route::post('/agenda', 'AgendaController@create');
Route::post('/agenda/{id}', 'AgendaController@update');
Route::post('/agenda/delete/{id}', 'AgendaController@destroy');
//edit----------------------
Route::get('/agenda/edit/{id}', 'AgendaController@show')->name('agenda_edit.index');
Route::post('/agenda/edit/{id}', 'AgendaController@edit');

/* ORÇAMENTOS =========================================================================================*/
Route::get('/orcamentos', 'OrcamentoController@index')->name('orcamentos.index');
Route::post('/orcamentos', 'OrcamentoController@create');
//edit ----------------------
Route::get('/orcamentos/edit/{id}', 'OrcamentoController@show')->name('orcamentos_edit.index');
Route::post('/orcamentos/edit/{id}', 'OrcamentoController@update');

Route::post('/orcamentos/delete/{id}', 'OrcamentoController@destroy');


/* SERVIÇOS ============================================================================================*/
Route::get('/servicos', 'ServicoController@index')->name('servicos.index');
Route::post('/servicos', 'ServicoController@create');

Route::post('/servicos/done/{id}', 'ServicoController@done');

Route::post('/servicos/delete/{id}', 'ServicoController@destroy');
//edit------------------
Route::get('/servicos/edit/{id}', 'ServicoController@store')->name('servicos.edit');
Route::post('/servicos/edit/{id}', 'ServicoController@update');

/* RELATÓRIOS GERAIS ====================================================================================*/
Route::get('/relatorios/orcamentos', 'RelatorioController@orcamentos_index')->name('relatorio.orcamento.index');
Route::get('/relatorios/servicos', 'RelatorioController@servicos_index')->name('relatorio.servicos.index');

/* RELATÓRIO CLIENTE =====================================================================================*/
Route::get('/relatorio_cliente', 'RelatorioController@relatorio_cliente')->name('relatorio_cliente.index');
Route::post('/relatorio_cliente', 'RelatorioController@gera_relatorio_cliente');

/* FINANCEIRO BALANÇOS =================================================================================== */
Route::get('/financeiro_balanco', 'FinanceiroController@index')->name('balanco_financeiro.index');
Route::post('/financeiro_balanco/{mes}/{ano}', 'FinanceiroController@busca_balanco');

/* FINANCEIRO LANÇAMENTOS =============================================================================== */
Route::get('/financeiro_lancamento', 'FinanceiroController@lancamento_index')->name('lancamentos_financeiro.index');
Route::post('/financeiro_lancamento', 'FinanceiroController@set_lancamento');



Route::get('/pdf', 'PdfController@gera_pdf');
Route::get('/teste/{mes}/{ano}', 'FinanceiroController@busca_balanco');