<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*--------------------------------------------------PUBLIC PAGES - NO AUTH*/

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


/*--------------------------------------------------YOUR EVENTS - JUST WITH AUTH */
Route::get('/yourEvents', [PublicationController::class, 'showAll'])->name('yourEvents');



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
    Route::get('/yourEvents', [PublicationController::class, 'showAll'])->name('dashboard');
});

/*-------------------------------WITHOUT AUTH */
Route::get('/General_Events', [PublicationController::class, 'showAll'])->name('dashboard');
Route::get('/Food_Events', [PublicationController::class, 'showAll'])->name('dashboard');
Route::get('/Pub_Events', [PublicationController::class, 'showAll'])->name('dashboard');
Route::get('/Smalls_Events', [PublicationController::class, 'showAll'])->name('dashboard');


Route::post('/events', [PublicationController::class, 'eventDate']);

Route::get('/filter', [PublicationController::class, 'filter'])->name('publications.partials.publicationDetails');


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

Route::post('/create_message/{id}', [MessageController::class, 'createMessage'])->name('publication.partials.publicationEdit/edit');



require __DIR__.'/auth.php';
