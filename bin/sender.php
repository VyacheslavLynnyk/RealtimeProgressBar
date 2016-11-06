<?php

    require dirname(__DIR__)  . '/vendor/autoload.php';

    for ($i=1; $i <= 100; $i++) { 
    
    \Ratchet\Client\connect('ws://127.0.0.1:8080')->then(function($conn) use ($i) {
        
        $conn->on('message', function($msg) use ($conn) {
            echo "Received: {$msg}\n";
            $conn->close();
        });
		
        
        $conn->send($i++);
    	sleep(1);
    }, function ($e) {
        echo "Could not connect: {$e->getMessage()}\n";
    });
};
