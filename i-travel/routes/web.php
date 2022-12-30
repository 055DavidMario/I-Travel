<?php

use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;
use App\Models\Wisata;
=======
use Illuminate\Support\Facades\Route;

>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/',[HomeController::class, 'index'])->name('landingpage');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[HomeController::class, 'contactus'])->name('contactus');
Route::get('/wisata',[HomeController::class, 'Wisata'])->name('wisata');
<<<<<<< HEAD
Route::get('/Pantai-Dreamland',[HomeController::class, 'artikel'])->name('artikel');
Route::get('/Pantai-Pandawa',[HomeController::class, 'artikel2'])->name('artikel');
Route::get('/Garuda-Wisnu-Kencana',[HomeController::class, 'artikel3'])->name('artikel');



Route::middleware('CheckClass:admin')->group(function () {
    $Wisata = Wisata::all();
    return view('backpage.admin')->with('$wisata', $Wisata);
    Route::resource('/admin', WisataController::class);
});

Route::get('/tabledata',[AdminController::class, 'datatable']);
Route::delete('/tabledata/delete/{id}',[AdminController::class, 'deletedata'])->name('deleteData');
Route::delete('/tabledata/wisata/delete/{id}',[AdminController::class, 'deleteWisata'])->name('deleteWisata');
Route::get('/formwisata', [AdminController::class, 'formwisata'])->middleware(['CheckClass:admin'])->name('formwisata');
Route::post('/formwisata/post',[AdminController::class, 'uploadformwisata']);
Route::post('/formtiket/post',[AdminController::class, 'uploadformtiket']);

Route::get('/formtiket', function () {
    return view('backpage.formtiket');
})->middleware(['CheckClass:admin'])->name('formtiket');
Route::get('/tabledata/edit/{id}',[AdminController::class, 'formEdit'])->middleware(['CheckClass:admin'])->name('formedit');
Route::get('/tabledata/wisata/edit/{id}',[AdminController::class, 'formeditwisata'])->middleware(['CheckClass:admin'])->name('formeditwisata');
Route::put('/tabledata/wisata/update/{id}',[AdminController::class, 'updateWisata'])->middleware(['CheckClass:admin'])->name('formupdatewisata');
Route::put('/tabledata/update/{id}',[AdminController::class, 'updateTiket'])->middleware(['CheckClass:admin'])->name('formupdate');
=======
Route::get('/artikel',[HomeController::class, 'artikel'])->name('artikel');


Route::get('/admin', function () {
    return view('backpage.admin');
})->middleware(['CheckClass:admin'])->name('admin');
Route::get('/tabledata', function () {
    return view('backpage.tabledata');
})->middleware(['CheckClass:admin'])->name('tabledata');
Route::get('/formwisata', function () {
    return view('backpage.formwisata');
})->middleware(['CheckClass:admin'])->name('formwisata');
Route::get('/formtiket', function () {
    return view('backpage.formtiket');
})->middleware(['CheckClass:admin'])->name('formtiket');
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
Route::get('/calendar', function () {
    return view('backpage.calendar');
})->middleware(['CheckClass:admin'])->name('calendar');


<<<<<<< HEAD
Route::post('/review', [HomeController::class, 'createReview'])->name('createReview');
=======
>>>>>>> 44a1f7ab0c4b64ba15f6406acd34bf8a568932d1
Route::get('/orderpage',[HomeController::class, 'formticket'])->name('orderpage');
Route::get('/ticketpage', [HomeController::class, 'Tiket'])->middleware(['auth'])->name('Tiket');


Route::get('admin', function () { return view('backpage.admin'); })->middleware(['auth'])->middleware('CheckClass:admin');
Route::get('user', function () { return view('frontpage.landingpage'); })->middleware(['CheckClass:user,admin']);

require __DIR__.'/auth.php';
