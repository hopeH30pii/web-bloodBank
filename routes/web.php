<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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


Route::group(
    ['middleware' => 'myguest'],
    function () {


        Route::get('/login', [UserController::class, 'showLogin']);
        Route::post('/login', [UserController::class, 'login']);
        Route::get('/register', [UserController::class, 'showRegister']);
        Route::post('/register', [UserController::class, 'register']);
        Route::get('/loginadmin', [AdminController::class, 'showLoginAdmin']);
        Route::post('/loginadmin', [AdminController::class, 'loginAdmin']);
        Route::get('/registeradmin', [AdminController::class, 'showRegisterAdmin']);
        Route::post('/registeradmin', [AdminController::class, 'registerAdmin']);
    }
);

////public routes
Route::get('/HIS', [UserController::class, 'HIS']);
Route::get('/Home', [UserController::class, 'Home']);
Route::get('/addpatient', [UserController::class, 'showaddPatient']);
Route::post('/addpatient', [UserController::class, 'addPatient']);
Route::get('/login-to', [UserController::class, 'headPage']);
Route::get('/contact', [UserController::class, 'showContact']);
Route::post('/contact', [UserController::class, 'contact']);
Route::get('/Services', [UserController::class, 'showServices']);
Route::get('/about', [UserController::class, 'showAbout']);

//authenticated
Route::group(
    ['middleware' => 'myauth'],
    function () {

        Route::get('/appointment', [PostController::class, 'showAppointment']);
        Route::post('/appointment', [UserController::class, 'appointment']);
        Route::get('/submition', [UserController::class, 'showSubmition']);
        Route::get('/Admin', [UserController::class, 'showAdmin']);
        Route::post('/Admin', [UserController::class, 'Admin']);
        Route::get('/myappointment', [dataController::class, 'index']);
        Route::get('/mycontact', [dataController::class, 'indexcont']);




        //logout  
        Route::get('/logout', [UserController::class, 'logout']);
    }
);



Route::group(
    ['middleware' => 'admin'],
    function () {

        Route::get('/Admin', [PostController::class, 'showAdmin']);
        Route::post('/Admin', [UserController::class, 'Admin']);
        Route::get('/myappointment', [dataController::class, 'index']);
        Route::get('/mycontact', [dataController::class, 'indexcont']);

        //Adminlogout  
        Route::get('/Adminlogout', [UserController::class, 'Adminlogout']);
    }
);




























// /////Admin middleware
// Route::get('/Admin', [PostController::class, 'showAdmin']);
// Route::post('/Admin', [UserController::class, 'Admin']);
// Route::get('/myappointment', [dataController::class, 'index']);
// Route::get('/mycontact', [dataController::class, 'indexcont']);


// //guested
// Route::group(
//     ['middleware' => 'myguest'],
//     function () {

//         Route::get('/login', [UserController::class, 'showLogin']);
//         Route::post('/login', [UserController::class, 'login']);
//         Route::get('/register', [UserController::class, 'showRegister']);
//         Route::post('/register', [UserController::class, 'register']);
        
//     }
// );

// ////public routes
// Route::get('/Home', [UserController::class, 'Home']);
//         Route::get('/contact', [UserController::class, 'showContact']);
//         Route::post('/contact', [UserController::class, 'contact']);
//         Route::get('/Services', [UserController::class, 'showServices']);
//         Route::get('/about', [UserController::class, 'showAbout']);

// //authenticated
// Route::group(
//     ['middleware' => 'myauth'],
//     function () {
//         // Route::get('/Home', [UserController::class, 'Home']);
//         // PostController
//         Route::get('/appointment', [PostController::class, 'showAppointment']);
//         Route::post('/appointment', [UserController::class, 'appointment']);
//         Route::get('/submition', [UserController::class, 'showSubmition']);
      



//        
