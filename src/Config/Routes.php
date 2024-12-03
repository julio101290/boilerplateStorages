<?php

$routes->group('admin', function ($routes) {


    $routes->resource('storages', [
        'filter' => 'permission:storages-permission',
        'controller' => 'storagesController',
        'except' => 'show',
        'namespace' => 'julio101290\boilerplatestorages\Controllers',
    ]);

    $routes->post('storages/save'
                , 'StoragesController::save'
                ,['namespace' => 'julio101290\boilerplatestorages\Controllers']
                );

    $routes->post('storages/getStorages'
                , 'StoragesController::getStorages'
                ,['namespace' => 'julio101290\boilerplatestorages\Controllers']
                );

    $routes->post('storages/getStoragesAjax'
                , 'StoragesController::getStoragesAjax'
                ,['namespace' => 'julio101290\boilerplatestorages\Controllers']
                );


});
