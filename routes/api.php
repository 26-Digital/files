<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\files;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//showing all documents  
Route::get('/getDocuments', function(Request $request){

    $files = files::where('id', '>', 0)->get();
    return response()->json([
        'files'=>$files,
    
    ]);
});
