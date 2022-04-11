<?php



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Home@index');
Route::get('/registrasi','Registrasi@index');
Route::post('/simpanRegis','Registrasi@registrasi');
Route::get('/masukSuplier','Suplier@index');
Route::post('/masukSuplier','Suplier@masukSuplier');
Route::get('/suplierKeluar','Suplier@suplierKeluar');
Route::get('/masukAdmin','Admin@index');
// Route::get('/adminGenerate','Admin@adminGenerate');
Route::post('/loginAdmin','Admin@loginAdmin');
Route::get('/pengajuan','Pengajuan@pengajuan');
Route::get('/keluarAdmin','Admin@keluarAdmin');