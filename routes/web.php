<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\WarentyCardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CustomMiddleware;

//------------------  ADMIN CONTROLLER ----------------- //
Route::get('/dashboard', [AdminController::class, 'dashbord'])->name('admin.dashbord')->middleware(CustomMiddleware::class);

//------------------ USER CONTROLLER ------------------ //
Route::get('login/',[UserController::class , 'login'])->name('login');
Route::post('/login/store',[UserController::class , 'store'])->name('login.store');
Route::get('/logout',[UserController::class , 'logout'])->name('logout');

Route::group(['middleware'=>CustomMiddleware::class],function(){
//--------------    CHANGE PASSWORD CONTROLLER ---------------------//
Route::get('changepasword/',[ChangePasswordController::class, 'changepassword'])->name('changepassword');
Route::post('changepasword/store',[ChangePasswordController::class, 'store'])->name('changepassword.store');

//------------------ SEARCH CONTROLLER ------------------ //
Route::get('/search',[SearchController::class,'search'])->name('search');
//------------------------- WARENTY CARD CONTROLLER ----------------- //
Route::get('/warentycard/index',[WarentyCardController::class,'index'])->name('warentycard.index');
Route::post('/warentycard/store',[WarentyCardController::class,'store'])->name('warentycard.store');
Route::get('/warentycard/delete/{id}',[WarentyCardController::class,'delete'])->name('warentycard.delete');
Route::get('/warentycard/show/{id}',[WarentyCardController::class,'show'])->name('warentycard.show');


//-------------------  COMPLAIN CONTROLLER ------------------//
Route::get('/complain/index',[ComplainController::class,'index'])->name('complain.index');
Route::post('/complain/store',[ComplainController::class,'store'])->name('complain.store');
Route::get('/complain/delete/{id}',[ComplainController::class,'delete'])->name('complain.dalete');

//------------------ USER REGISTER CONTROLLER -------------//

Route::get('/userregister/index',[UserRegisterController::class,'index'])->name('userregister.index');
Route::post('/userregister/store',[UserRegisterController::class,'store'])->name('userregister.store');
Route::get('/userregister/delete/{id}',[UserRegisterController::class,'delete'])->name('userregister.delete');
Route::get('/userregister/show/{id}',[UserRegisterController::class,'show'])->name('userregister.show');

//--------------------- FEEDBACK CONTROLLER -----------------//
Route::get('/feedback/index',[FeedbackController::class,'index'])->name('feedback.index');
Route::post('/feedback/store',[FeedbackController::class,'store'])->name('feedback.store');
Route::get('/feedback/delete/{id}',[FeedbackController::class,'delete'])->name('feedback.delete');

});
// --------------------FRONTEND -- CONTROLLER----------------//

// Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::get('/complain', [HomeController::class, 'complain'])->name('complain');
Route::get('/user_rec', [HomeController::class, 'user_rec'])->name('user_rec');
Route::get('/inqury', [HomeController::class, 'inqury'])->name('inqury');
Route::get('/', [HomeController::class, 'varranty'])->name('varranty');
