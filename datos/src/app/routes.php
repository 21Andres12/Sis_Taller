<?php
    namespace App\controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    use Slim\Routing\RouteCollectorProxy;

    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("FCB 9 - 2 RVAR");
        return $response;
    });
    

    $app->group('/api',function(RouteCollectorProxy $api){
        $api->group('/artefacto',function(RouteCollectorProxy $producto){
            $producto->get('/read[/{id}]', Artefacto::class . ':read');
            $producto->post('', Artefacto::class . ':create');
            $producto->put('/{id}', Artefacto::class . ':update');
            $producto->delete('/{id}', Artefacto::class . ':delete');
            $producto->get('/filtrar/{pag}/{lim}', Artefacto::class . ':filtrar');
        });
  


    
    $api->group('/cliente',function(RouteCollectorProxy $endpoint){
            $endpoint->get('/read[/{id}]', Cliente::class . ':read');
            $endpoint->post('', Cliente::class . ':create');
            $endpoint->put('/{id}', Cliente::class . ':update');
            $endpoint->delete('/{id}', Cliente::class . ':delete');
            $endpoint->get('/filtrar/{pag}/{lim}', Cliente::class . ':filtrar');
        });
        

      $api->group('/administrador',function(RouteCollectorProxy $endpoint){
            $endpoint->get('/read[/{id}]', Administrador::class . ':read');
            $endpoint->post('', Administrador::class . ':create');
            $endpoint->put('/{id}', Administrador::class . ':update');
            $endpoint->delete('/{id}', Administrador::class . ':delete');
            $endpoint->get('/filtrar/{pag}/{lim}', Administrador::class . ':filtrar');
        });
    });
