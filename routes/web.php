<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');

# totais com vínculos ativos
Route::get('/ativos', 'AtivosController@grafico');
Route::get('/ativosCsv', 'AtivosController@csv');


# totais com vínculos ativos da graduação, separados por curso
Route::get('/ativosPCGrad', 'AtivosPorCursoGradController@grafico');
Route::get('/ativosPCGradCsv', 'AtivosPorCursoGradController@csv');


# totais de microcomputadores e notebooks ativos
Route::get('/ativosMicrosNotes', 'AtivosMicrosNotesController@grafico');
Route::get('/ativosMicrosNotesCsv', 'AtivosMicrosNotesController@csv');


# totais de alunos da graduação, por gênero
Route::get('/ativosPGGrad', 'AtivosPorGeneroGradController@grafico');
Route::get('/ativosPGGradCsv', 'AtivosPorGeneroGradController@csv');


# totais de alunos da pós graduação, por gênero
Route::get('/ativosPGPos', 'AtivosPorGeneroPosController@grafico');
Route::get('/ativosPGPosCsv', 'AtivosPorGeneroPosController@csv');


# totais de docentes, por gênero
Route::get('/ativosPGDocentes', 'AtivosPorGeneroDocentesController@grafico');
Route::get('/ativosPGDocentesCsv', 'AtivosPorGeneroDocentesController@csv');