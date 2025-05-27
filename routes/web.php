<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pustakawan\BorrowingController;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard Role-based
Route::middleware(['auth'])->prefix('admin-desa')->name('admin_desa.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminDesa\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('visits', \App\Http\Controllers\AdminDesa\VisitController::class);
    Route::resource('members', \App\Http\Controllers\AdminDesa\MemberController::class);
    Route::resource('books', \App\Http\Controllers\AdminDesa\BookController::class);  
});

Route::middleware(['auth'])->prefix('pustakawan')->name('pustakawan.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Pustakawan\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('borrowings', BorrowingController::class)->only(['index', 'create', 'store']);
    Route::put('borrowings/{borrowing}/return', [BorrowingController::class, 'returnBook'])->name('borrowings.return');
    Route::get('returns', [BorrowingController::class, 'returnIndex'])->name('returns.index');
    Route::resource('books', \App\Http\Controllers\Pustakawan\BookController::class);     
});

Route::middleware(['auth'])->prefix('admin-daerah')->name('admin_daerah.')->group(function () {
    // Dashboard Admin Daerah
    Route::get('/dashboard', [\App\Http\Controllers\AdminDaerah\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('books', \App\Http\Controllers\AdminDaerah\BookController::class);
    // Laporan
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/', [\App\Http\Controllers\AdminDaerah\ReportController::class, 'index'])->name('index');
        Route::get('/export-excel', [\App\Http\Controllers\AdminDaerah\ReportController::class, 'exportExcel'])->name('export.excel');
        Route::get('/export-pdf', [\App\Http\Controllers\AdminDaerah\ReportController::class, 'exportPDF'])->name('export.pdf');
    }); 
    // Manajemen Pustakawan (Anggota)
    Route::resource('pustakawans', \App\Http\Controllers\AdminDaerah\PustakawanController::class)
        ->only(['index', 'destroy'])
        ->names([
            'index' => 'pustakawans.index',
            'destroy' => 'pustakawans.destroy',
        ]);

    // Route Verifikasi Pustakawan (PATCH digunakan untuk update sebagian data)
    Route::patch('pustakawans/{pustakawan}/verify', [\App\Http\Controllers\AdminDaerah\PustakawanController::class, 'verify'])
        ->name('pustakawans.verify');  
});

Route::get('reports', [\App\Http\Controllers\AdminDaerah\ReportController::class, 'index'])->name('reports.index');
Route::get('reports/export-excel', [\App\Http\Controllers\AdminDaerah\ReportController::class, 'exportExcel'])->name('reports.export.excel');
Route::get('reports/export-pdf', [\App\Http\Controllers\AdminDaerah\ReportController::class, 'exportPDF'])->name('reports.export.pdf');
Route::resource('borrowings', \App\Http\Controllers\Pustakawan\BorrowingController::class);
Route::put('borrowings/{borrowing}/return', [\App\Http\Controllers\Pustakawan\BorrowingController::class, 'returnBook'])->name('borrowings.return');
Route::get('/struktur-organisasi', [WebController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/sejarah', [WebController::class, 'sejarah'])->name('sejarah');
Route::get('/unit-kerja', [WebController::class, 'unitKerja'])->name('unit-kerja');
Route::get('/layanan', [WebController::class, 'layanan'])->name('layanan');
Route::get('/berita', [WebController::class, 'berita'])->name('berita');
Route::get('/testimoni', [WebController::class, 'testimoni'])->name('testimoni');
Route::get('/agenda', [WebController::class, 'agenda'])->name('agenda');
Route::get('/buku-terbaru', [WebController::class, 'bukuTerbaru'])->name('buku-terbaru');
Route::get('/perpustakaan-terdekat', [WebController::class, 'perpustakaanTerdekat'])->name('perpustakaan-terdekat');