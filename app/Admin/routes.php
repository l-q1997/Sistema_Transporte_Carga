<?php

use App\Admin\Controllers\clienteController;
use App\Admin\Controllers\conducotresController;
use App\Admin\Controllers\entregaController;
use App\Admin\Controllers\pedidoController;
use App\Admin\Controllers\ProductController;
use App\Admin\Controllers\rutaController;
use App\Admin\Controllers\vehiculosController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Facades\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('products',ProductController::class);
    $router->resource('conducotres', conducotresController::class);
    $router->resource('vehiculos', vehiculosController::class);
    $router->resource('rutas', rutaController::class);
    $router->resource('entregas', entregaController::class);
    $router->resource('clientes', clienteController::class);
    $router->resource('pedidos', pedidoController::class);
    

   

});
