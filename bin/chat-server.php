<?php


use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Models\MessageBar;

require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/app/models/MessageBar.php';


$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new MessageBar()
        )
    ),
    8080
);


$server->run();