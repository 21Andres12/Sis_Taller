<?php
    namespace App\controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Container\ContainerInterface;

 

    class Artefacto extends ServicioCURL{
        protected $container;
        private const ENDPOINT = "/artefacto";
        public function __construct(ContainerInterface $c){
            $this->container = $c;
        }

        public function read(Request $request, Response $response, $args){
          $url =$this::ENDPOINT . '/read';

          if(isset($args['id'])){
            $url .="/{$args['id']}";
          }

   
            $respA=$this->ejecutarCURL($url, 'GET');
          $response->getBody()->write($respA['resp']);

            return $response->withHeader(   'Content-Type', 'application/json')
                            ->withStatus($respA['status']);
        }

        public function create(Request $request, Response $response, $args){
           $body =$request->getBody();
            
            $respA=$this->ejecutarCURL($this::ENDPOINT, 'POST', $body);

            return $response->withStatus($respA['status']);
        }
        
        public function update(Request $request, Response $response, $args){
               $body =$request->getBody();
            
            $respA=$this->ejecutarCURL($this::ENDPOINT, 'POST', $body);

            return $response->withStatus($respA['status']);
          


            return $response ->withStatus($status);
        }

        
        public function delete(Request $request, Response $response, $args){
            
               $body =$request->getBody();
            
            $respA=$this->ejecutarCURL($this::ENDPOINT, 'POST', $body);

            return $response->withStatus($respA['status']);
          


            return $response ->withStatus($status);
        

        }


    }
