<?php

namespace App\Controller;

use Ratchet\WebSocket\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class SistemChat implements MessageComponentInterface{

    protected $client;

    public function __construct(){
        //Inicia objetos que debe almacenar cliente conectados
        $this->client = new \SplObjectStorage;
    }

    //Abrir conexion para nuevo cliente
    public function onOpen(ConnectionInterface $con){

        //Adiciono el cliente a la lista
        $this->client->attach($con);

        echo "Nueva conexion :  .{$con->res}. \n\n";

    }

    //Enviar mensajes para todos los usuarios conectados
    public function onMessage(ConnectionInterface $from, $msg){

        //Recorro la lista de cliente conectados
        foreach ($this->client as $value) {

            if($from !== $value){
                $value->send($msg);
            }

        }

        echo "Usuario :  .{$from->resourceId} envio un mensaje. \n\n";

    }

    //Desconectar cliente del websocket
    public function onClose(ConnectionInterface $con){

        $this->client->detach($con);

        echo "Usuario :  .{$con->resourceId} se desconecto. \n\n";
    }

    //Funcion para controllar errores del websocket
    public function OnError(ConnectionInterface $con, \Exception $e){
        $con->close();

        echo "Ocurrio un error  :  .{$e->getMessage()}. \n\n";
    }

}

?>