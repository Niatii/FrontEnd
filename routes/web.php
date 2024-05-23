<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\RisetController;
use App\Http\Controllers\PublikasiController;
use App\Models\Konsultasi;
use App\Models\Riset;
use App\Models\Tentangkami;
use App\Models\Publikasi;





Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/daftar', function () {
    return view('auth/daftar');
});

Route::get('/LupaPassword', function () {
    return view('auth/lupa_password');
});

Route::get('/verifikasi', function () {
    return view('auth/verifikasi');
});

Route::get('/', function () {
    return view('home');
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user/user_home');
    });

    Route::get('/TentangKami', [TentangkamiController::class, 'selectUser']);
    Route::get('/Detail_TentangKami', [TentangkamiController::class, 'show']);

    Route::get('/Riset', function () {
        return view('user/riset');
    });
    Route::get('/Detail_Riset', function () {
        return view('user/riset_detail');
    });

    Route::get('/Konsultasi', [KonsultasiController::class, 'selectUser'])->name('user.konsultasi');
    Route::get('/Detail_Konsultasi/{id}', [KonsultasiController::class, 'ShowUser'])->name('user.konsultasi.detail');

    Route::get('/Publikasi', function () {
        return view('user/publikasi');
    });
    Route::get('/Detail_Publikasi', function () {
        return view('user/publikasi_detail');
    });

    Route::get('/Berita', function () {
        return view('user/berita');
    });
    Route::get('/Detail_Berita', function () {
        return view('user/berita_detail');
    });

    Route::get('/Akademi', function () {
        return view('user/akademi');
    });

    Route::get('/Pelatihan', function () {
        return view('user/pelatihan');
    });
    Route::get('/Detail_Pelatihan', function () {
        return view('user/pelatihan_detail');
    });

    Route::get('/Kegiatan', function () {
        return view('user/kegiatan');
    });

    Route::get('/Detail_Kegiatan', function () {
        return view('user/kegiatan_detail');
    });

    Route::get('/Pembayaran', function () {
        return view('user/pembayaran');
    });

    Route::get('/Detail_Riwayat', function () {
        return view('user/detail_riwayat');
    });

    Route::get('/profil', function () {
        return view('user/profil');
    });
});



Route::prefix('guest')->group(function () {

    Route::get('/TentangKami', [TentangkamiController::class, 'selectGuest']);
    Route::get('/Detail_TentangKami', function () {
        return view('guest/tentangkami_detail');
    });

    Route::get('/Riset', function () {
        return view('guest/riset');
    });
    Route::get('/Detail_Riset', function () {
        return view('guest/riset_detail');
    });

    Route::get('/Konsultasi', [KonsultasiController::class, 'selectGuest'])->name('guest.konsultasi');
    Route::get('/Detail_Konsultasi/{id}', [KonsultasiController::class, 'ShowGuest'])->name('guest.konsultasi.detail');

    Route::get('/Publikasi', function () {
        return view('guest/publikasi');
    });
    Route::get('/Detail_Publikasi', function () {
        return view('guest/publikasi_detail');
    });

    Route::get('/Akademi', function () {
        return view('guest/akademi');
    });

    Route::get('/Pelatihan', function () {
        return view('guest/pelatihan');
    });

    Route::get('/Kegiatan', function () {
        return view('guest/kegiatan');
    });

    Route::get('/Berita', function () {
        return view('guest/berita');
    });
    Route::get('/Detail_Berita', function () {
        return view('guest/berita_detail');
    });
});





Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/adm_home');
    });

    Route::prefix('tentangkami')->group(function () {
        Route::get('/', [TentangkamiController::class, 'selectAdmin'])->name('admin.tentangkami');
        Route::get('/detail/{id}', [TentangkamiController::class, 'showAdmin'])->name('admin.tentangkami.detail');
        Route::get('/edit', function () {
            return view('admin/tentangkami/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/tentangkami/tambah');
        })->name('admin.tentangkami.form');
        Route::post('/tambah', [TentangkamiController::class, 'insertTentangkami'])->name('admin.tentangkami.tambah');
    });

    Route::prefix('konsultasi')->group(function () {
        Route::get('/', [KonsultasiController::class, 'selectAdmin'])->name('admin.konsultasi');
        Route::get('/detail/{id}', [KonsultasiController::class, 'showAdmin'])->name('admin.konsultasi.detail');
        Route::get('/edit', function () {
            return view('admin/konsultasi/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/konsultasi/tambah');
        });
        Route::get('/pertanyaan', function () {
            return view('admin/konsultasi/pertanyaan');
        });
        Route::get('/detail_pertanyaan', function () {
            return view('admin/konsultasi/detail_pertanyaan');
        });
    });

    Route::prefix('riset')->group(function () {
        Route::get('/', [RisetController::class, 'selectAdmin'])->name('admin.riset');
        Route::get('/detail/{id}', [RisetController::class, 'showAdmin'])->name('admin.riset.detail');
        Route::get('/edit', function () {
            return view('admin/riset/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/riset/tambah');
        });
    });

    Route::prefix('publikasi')->group(function () {
        Route::get('/', [PublikasiController::class, 'selectAdmin'])->name('admin.publikasi');
        Route::get('/detail/{id}', [PublikasiController::class, 'showAdmin'])->name('admin.publikasi.detail');
        Route::get('/edit', function () {
            return view('admin/publikasi/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/publikasi/tambah');
        });
    });

    Route::prefix('berita')->group(function () {
        Route::get('/', function () {
            return view('admin/berita/berita');
        });
        Route::get('/detail', function () {
            return view('admin/berita/detail');
        });
        Route::get('/edit', function () {
            return view('admin/berita/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/berita/tambah');
        });
    });

    Route::prefix('pelatihan')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/pelatihan/pelatihan');
        });
        Route::get('/detail', function () {
            return view('admin/akademi/pelatihan/detail');
        });
        Route::get('/edit', function () {
            return view('admin/akademi/pelatihan/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/akademi/pelatihan/tambah');
        });
    });

    Route::prefix('kegiatan')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/kegiatan/kegiatan');
        });
        Route::get('/detail', function () {
            return view('admin/akademi/kegiatan/detail');
        });
        Route::get('/edit', function () {
            return view('admin/akademi/kegiatan/edit');
        });
        Route::get('/tambah', function () {
            return view('admin/akademi/kegiatan/tambah');
        });
    });

    Route::prefix('akademi')->group(function () {
        Route::get('/', function () {
            return view('admin/akademi/akademi');
        });
        Route::get('/barcode', function () {
            return view('admin/akademi/barcode');
        });
        Route::get('/detail_pembayaran', function () {
            return view('admin/akademi/detail_bayar');
        });
    });
});


// controller
// Route::get('/guest/TentangKami', [TentangkamiController::class, 'selectTentangkami']);
// Route::get('/guest/Konsultasi', [KonsultasiController::class, 'index']);
