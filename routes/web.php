<?php

use App\Http\Controllers\AnunciousController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ParkingSpaceController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SubeTuPlazaController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\PaymentController;
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
    session()->forget('parkingSpace');
    return view('index');
})->name('home');



// Route::get('/email', function(){
//    return view('emails.verify_email');
// });

Route::get('/rooms-details', function(){
    return view('detail-rooms');
 });
Route::get('/error', function(){
    return view('components.error404');
 });

//user login register and forget passwor
 Route::post('/login',[AuthUserController::class,'loginUser'])->name('login');
 Route::post('/register',[AuthUserController::class,'registerUser'])->name('register');
 Route::get('/logout',[AuthUserController::class,'logout'])->name('logout');
 Route::get('/user/verify/{token}',[AuthUserController::class,'verifyEmail'])->name('user.verify');
 Route::get('/open-login',[AuthUserController::class,'openLogin'])->name('login-view');



 Route::get('email-view',[ForgotPasswordController::class,'getForgetPasswordEmailView'])->name('email-view');
 Route::post('forget-password-varification-email',[ForgotPasswordController::class,'forgetPasswordEmailVerification'])->name('forget-password-email-varification');
 Route::get('forget-password-view/{token}',[ForgotPasswordController::class,'loadViewToResetPassword'])->name('forget-password-view');
 Route::post('reset-password',[ForgotPasswordController::class,'resetForgetPassword'])->name('reset-password');

 Route::get('/add-to-favorite/{id}',[FavoriteController::class,'addToFavorite'])->name('favorite');




 Route::get('/search-results',[ParkingSpaceController::class,'getAllParkingSpaces'])->name('search-result');
 Route::get('/parking-lot',[ParkingSpaceController::class,'getSingleParkingSpace'])->name('parking-lot');
 Route::post('/apply-filter',[ParkingSpaceController::class,'applyFilter'])->name('apply.filter');
 Route::get('/clear-filter',[ParkingSpaceController::class,'clearFilter'])->name('clear.filter');

 Route::group(['middleware' => 'auth'], function () {

    Route::get('/favoritos',[FavoriteController::class,'getAllFavoriteParkigSpaces'])->name('getFavoritos');
    Route::get('/mensajes',[PagesController::class,'mensajesPage'])->name('getMensajes');
    Route::get('/ayuda',[PagesController::class,'ayudaPage'])->name('getAyuda');



    Route::get('/sube-tu-plaza1',[SubeTuPlazaController::class,'subeTuPlazaPage1'])->name('getSubeTuPlaza1');
    Route::get('/sube-tu-plaza2',[SubeTuPlazaController::class,'subeTuPlazaPage2'])->name('getSubeTuPlaza2');
    Route::get('/sube-tu-plaza3',[SubeTuPlazaController::class,'subeTuPlazaPage3'])->name('getSubeTuPlaza3');
    Route::get('/sube-tu-plaza4',[SubeTuPlazaController::class,'subeTuPlazaPage4'])->name('getSubeTuPlaza4');
    Route::get('/sube-tu-plaza5',[SubeTuPlazaController::class,'subeTuPlazaPage5'])->name('getSubeTuPlaza5');
    Route::get('/sube-tu-plaza6',[SubeTuPlazaController::class,'subeTuPlazaPage6'])->name('getSubeTuPlaza6');
    Route::get('/sube-tu-plaza7',[SubeTuPlazaController::class,'subeTuPlazaPage7'])->name('getSubeTuPlaza7');
    Route::get('/sube-tu-plaza8',[SubeTuPlazaController::class,'subeTuPlazaPage8'])->name('getSubeTuPlaza8');
    Route::get('/sube-tu-plaza9',[SubeTuPlazaController::class,'subeTuPlazaPage9'])->name('getSubeTuPlaza9');
    Route::get('/sube-tu-plaza10',[SubeTuPlazaController::class,'subeTuPlazaPage10'])->name('getSubeTuPlaza10');

    Route::post('/sube-tu-plaza1',[SubeTuPlazaController::class,'subeTuPlazaPagePost1'])->name('postSubeTuPlaza1');
    Route::post('/sube-tu-plaza2',[SubeTuPlazaController::class,'subeTuPlazaPagePost2'])->name('postSubeTuPlaza2');
    Route::post('/sube-tu-plaza3',[SubeTuPlazaController::class,'subeTuPlazaPagePost3'])->name('postSubeTuPlaza3');
    Route::post('/sube-tu-plaza4',[SubeTuPlazaController::class,'subeTuPlazaPagePost4'])->name('postSubeTuPlaza4');
    Route::post('/sube-tu-plaza5',[SubeTuPlazaController::class,'subeTuPlazaPagePost5'])->name('postSubeTuPlaza5');
    Route::post('/sube-tu-plaza6',[SubeTuPlazaController::class,'subeTuPlazaPagePost6'])->name('postSubeTuPlaza6');
    Route::post('/sube-tu-plaza7',[SubeTuPlazaController::class,'subeTuPlazaPagePost7'])->name('postSubeTuPlaza7');
    Route::post('/sube-tu-plaza8',[SubeTuPlazaController::class,'subeTuPlazaPagePost8'])->name('postSubeTuPlaza8');
    Route::post('/sube-tu-plaza9',[SubeTuPlazaController::class,'subeTuPlazaPagePost9'])->name('postSubeTuPlaza9');
    Route::post('/sube-tu-plaza10',[SubeTuPlazaController::class,'subeTuPlazaPagePost10'])->name('postSubeTuPlaza10');


    Route::get('/profile',[UserProfileController::class,'getProfileView'])->name('profile-view');
    Route::post('/update/profile',[UserProfileController::class,'updateProfileInfo'])->name('update-profile');

    Route::get('/rest/password/view',[PagesController::class,'resetPasswordView'])->name('change-password-view');
    Route::get('/payment/mathod/view',[PagesController::class,'paymentMathodView'])->name('payment-mathod-view');
    Route::get('/messages/view',[PagesController::class,'messagesView'])->name('messages-view');
    Route::get('/requests/view',[PagesController::class,'requestsView'])->name('requests-view');
    Route::get('/vehicles/view',[PagesController::class,'vehiclesView'])->name('vehicles-view');

    Route::get('/square/access/view',[PagesController::class,'squareAccessView'])->name('square-access-view');
    Route::get('/contracts/view',[PagesController::class,'contractsView'])->name('contracts-view');
    Route::get('/invoices/view',[PagesController::class,'invoicesView'])->name('invoices-view');

    Route::get('/adverts/view',[AnunciousController::class,'advertsView'])->name('adverts-view');
    Route::get('/edit-anuncios/{id}',[AnunciousController::class,'editAnuncious1'])->name('edit.anuncios');
    Route::get('/edit-anuncios2/{id}',[AnunciousController::class,'editAnuncious2'])->name('edit.anuncios2');
    Route::get('/delete-anuncious/{id}',[AnunciousController::class,'deleteAnuncious'])->name('delete.anuncious');
    Route::post('/edit-anuncious1-post/{id}',[AnunciousController::class,'editAnuncious1Post'])->name('edit.anuncios1.post');
    Route::post('/edit-anuncious2-post/{id}',[AnunciousController::class,'editAnuncious2Post'])->name('edit.anuncios2.post');


    Route::get('/recogida', function(){
        return view('settings.recogida-de-llaves');
     })->name('recogida');
     Route::get('/recogida-de', function(){
        return view('settings.recogida-de-llaves2');
     })->name('recogida2');

     Route::get('/entrega', function(){
        return view('settings.entrega-de-llaves');
     })->name('entrega');
     Route::get('/entrega-de', function(){
        return view('settings.entrega-de-llaves2');
     })->name('entrega2');

    Route::post('/rest/password',[UserProfileController::class,'resetPassword'])->name('change-password');



    Route::get('/payment-form', [PaymentController::class,'index']);
    // Route::post('/process-payment', PaymentController::class,'processPayment');
});

// Route::get('/chat', function(){
//     return view('chat-bot');
//  })->name('chat');

// Route::match(['get', 'post'], '/botman', [ChatBotController::class,'handle'])->name('chat.bot');
// ENABLE HTTPS
// URL::forceScheme('https');
