<?php
    namespace App\controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    use Slim\Routing\RouteCollectorProxy;
    
$app->group('/api',function(RouteCollectorProxy $api){
    $api->group('/artefacto',function(RouteCollectorProxy $producto){
        $producto->get('/read[/{id}]', Artefacto::class . ':read');
        $producto->post('', Artefacto::class . ':create');
        $producto->put('/{id}', Artefacto::class . ':update');
        $producto->delete('/{id}', Artefacto::class . ':delete');
        $producto->get('/filtrar', Artefacto::class . ':filtrar');
    });
});