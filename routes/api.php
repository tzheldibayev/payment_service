<?php

$router->group(['prefix' => 'api'], function() use ($router) {

    // Public endpoints
    $router->get('/paymentMethods', 'PaymentMethodsController@index');

    // Private endpoints
    $router->group(['prefix' => 'private'], function() use ($router) {
        //
    });
});

