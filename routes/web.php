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
Route::get('/listAdmin','Admin@listAdmin');
Route::post('/tambahAdmin','Admin@tambahAdmin');
Route::post('/ubahAdmin','Admin@ubahAdmin');
Route::get('/hapusHapis/{id}','Admin@hapusAdmin');
Route::get('/listPengadaan','Pengadaan@index');
Route::post('/tambahPengadaan','Pengadaan@tambahPengadaan');