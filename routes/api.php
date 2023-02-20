<?php

use App\Http\Controllers\CdnController;
use App\Http\Controllers\SampleSenderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

$router->post('/sender', [SampleSenderController::class, 'sender']);

$router->group(['prefix' => '/cdn'], function () use ($router) {
    $router->get('/{cdn}', [CdnController::class, 'index']);
    $router->post('/', [CdnController::class, 'create']);
    $router->post('/{cdn}', [CdnController::class, 'update']);
    $router->delete('/{cdn}', [CdnController::class, 'delete']);
});