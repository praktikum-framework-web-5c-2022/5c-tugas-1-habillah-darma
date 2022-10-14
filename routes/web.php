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
    $dsn = [
        "Rini Mayasari",
        "Susilawati Sobur",
        "Iqbal Maulana",
        "Tesa Nur Padilah",
        "Betha Nurina Sari",
        "Intan Purnamasari",
        "Ratna Mufidah",
        "Purwanto",
        "Asep Jamaludin",
        "Arip Solehudin"
    ];
    return view('dosen')->with('dosen',$dsn);
});
Route::get('/matkul', function () {
    $mk = [
        'Tecnhopeuer',
        'Data Mining',
        'Pemrograman Berabasis Web',
        'Pancasila',
        'Budaya Bangsa',
        'Pemrograman Berbasis Mobile',
        'Framework Pemrograman Web',
        'Cloud Computing',
        'Jaringan Komputer',
        'Blockchain',
        ];
    return view('matakuliah')->with('matkul',$mk);;
});
Route::get('/mahasiswa', function () {
    $mhs = [
        "Habillah Darma",
        "Harvian Arga Adi Putra",
        "Fauzan Arista",
        "Gilang Maulana",
        "Hanna Athaya",
        "Gidion Bagas",
        "Hagi Azzam",
        "Jaka Prasetya",
        "Ihsan Muhammad Sobari",
        "Lily",
        ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});