<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortalController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('portal', [PortalController::class, 'index']);





Route::post('portall', [portalController::class, 'store']);

Route::get('portalll/{id}', [IssueController::class, 'update']);

Route::get('portallll/{id}', [IssueController::class, 'delete']);

