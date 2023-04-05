<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

<<<<<<< HEAD
<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('yourEvent',[StaticController::class, 'yourEvent']);
Route::get('home',[StaticController::class, 'home'] );
Route::get('about', [StaticController::class, 'about']);
Route::get('contact', [StaticController::class, 'contact']);

=======
/*--------------------------------------------------PUBLIC PAGES - NO AUTH*/
>>>>>>> da57728 (Fuktionen (Users / Besucher))
=======
/*--------------------------------------------------PUBLIC PAGES - NO AUTH*/
=======
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('translate',[StaticController::class, 'translate']);
Route::get('home',[StaticController::class, 'home'] );
Route::get('about', [StaticController::class, 'about']);
Route::get('contact', [StaticController::class, 'contact']);
>>>>>>> 497ed25 (commit-05-April-23)
>>>>>>> f64d6a9 (commit-05-April-23)


Route::get('/', function () {
    return view('homePage');
});
Route::get('/homePage', function(){
    return view('homePage');
})->name('homePage');

Route::get('/aboutPage', function(){
    return view('aboutPage');
})->name('aboutPage');

Route::get('/contactPage', function(){
    return view('contactPage');
})->name('contactPage');

Route::get('/yourEvents', function(){
    return view('yourEvents');
})->name('yourEvents');





/*--------------------------------------------------EDIT PROFILE - JUST WITH AUTH */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*--------------------------------------------------POST FOTO USER */
Route::post('/newFoto/{id}', [ProfileController::class, 'addFoto']);


/*--------------------------------------------------SELECT EVENTS */

/*-------------------------------WITH AUTH */
Route::middleware('auth')->group(function () {
    Route::get('/General_Events', [PublicationController::class, 'showAll'])->name('dashboard');
    Route::get('/Food_Events', [PublicationController::class, 'showAll'])->name('dashboard');
    Route::get('/Pub_Events', [PublicationController::class, 'showAll'])->name('dashboard');
    Route::get('/Smalls_Events', [PublicationController::class, 'showAll'])->name('dashboard');
    Route::get('/yourEvents', [PublicationController::class, 'showYourEvents'])->name('yourEvents');
});

/*-------------------------------WITHOUT AUTH */
Route::get('/General_Events', [PublicationController::class, 'showAll'])->name('dashboard');
Route::get('/Food_Events', [PublicationController::class, 'showAll'])->name('dashboard');
Route::get('/Pub_Events', [PublicationController::class, 'showAll'])->name('dashboard');
Route::get('/Smalls_Events', [PublicationController::class, 'showAll'])->name('dashboard');





/*--------------------------------------------------TO CREATE EVENTS - JUST WITH AUTH */
Route::get('/create', function () {
    return view('publications.partials.createPublication');
})->name('publications.partials.createPublication');

Route::middleware('auth')->group(function () {
    Route::post('/create_event', [PublicationController::class, 'create']);
});






/*--------------------------------------------------TO GIVE LIKE - JUST WITH AUTH*/

Route::middleware('auth')->group(function () {
    Route::post('/like', [PublicationController::class, 'like']);
});







/*--------------------------------------------------DETAILS EVENTS */

/*-------------------------------WITH AUTH */
 Route::middleware('auth')->group(function () {
    Route::get('/details/{id}', [PublicationController::class, 'showOnePublication'])->name('publication.partials.publicationDetails/details');
    Route::get('/edit/{id}', [PublicationController::class, 'showPublicationToEdit'])->name('publication.partials.publicationEdit/edit');
    Route::post('/edit_event/{id}', [PublicationController::class, 'edit']);
}); 

/*-------------------------------WITHOUT AUTH */
Route::get('/details/{id}', [PublicationController::class, 'showOnePublication'])->name('publication.partials.publicationDetails/details');






/*--------------------------------------------------CREATE COMMENTS */

/*-------------------------------WITH AUTH */
Route::middleware('auth')->group(function () {
    Route::post('/create_message/{id}', [MessageController::class, 'createMessage'])->name('publication.partials.publicationEdit/edit');
}); 

/*-------------------------------WITHOUT AUTH */


require __DIR__.'/auth.php';
