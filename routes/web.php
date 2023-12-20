<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

/********************     controller route ******************* */

// Route::controller(PostController::class)->group(function() {
//     Route::get("posts", "index");
//     Route::get("posts/create", "create");
//     Route::get("posts/edit/{id}", "edit");
//     Route::get("posts/update/{id}", "update");
//     Route::get("posts/delete/{id}", "destroy");
// });




/********************     resource route ******************* */
Route::resource("posts", PostController::class);
// Route::resource("posts", PostController::class)->except([
//     "show",
//     "store"
// ]);



// Route::get("posts/create", function() {
//     return view("posts_create");
// });
// Route::post("posts/show", function(Request $req) {
//     return $req;
// })->name("posts/show");



Route::get("user_profile", UserController::class);