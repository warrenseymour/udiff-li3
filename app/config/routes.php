<?php // app/config/routes.php
    use lithium\net\http\Router;
    // Parse mongo/couch id format
    Router::connect('/{:controller}/{:action}/{:id:\d+}');
    // RESTful routing
    Router::connect('/{:controller}', [
        'http:method' => 'GET',
        'action' => 'index',
    ]);
    Router::connect('/{:controller}', [
        'http:method' => 'POST',
        'action' => 'create',
    ]);
    // Showing off
    use lithium\action\Response;
    Router::connect('/', null, function($request) {
        return new Response([
            'message' => 'Hello World!'
        ]);
    });
?>
