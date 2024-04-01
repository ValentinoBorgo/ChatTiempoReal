<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Controller\SistemChat;

require __DIR__ . '/../../vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
           new SistemChat()
        )
       ),
      8080
);

//Iniciar la conexion y conectar con server

//$server->run();


?>