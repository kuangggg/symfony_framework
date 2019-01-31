<?php

function d($exp)
{
	var_dump($exp);
}

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// $request = Request::createFromGlobals();

// d($request->getPathInfo());

// d($request->headers->get('content_type'));

// d($request->getMethod());


// $input = $request->get('name', 'default');

// $content = sprintf("hello %s", $input);

// $response = new Response($content);

// $response->send();


// $response = new Response();

// $response->setContent('hello world');

// $response->setStatusCode('200');

// $response->headers->set('Content-Type', 'text/html');

// // $response->setMaxAget(10);
// $response->send();
// 

$request = Request::createFromGlobals();

$response = new Response();

$map = [
	'/hello' => __DIR__ . '/hello.php',
	'/bye' => __DIR__ . '/bye.php',
];

$path = $request->getPathInfo();

if(isset($map[$path])) {
	require $map[$path];
} else {
	$response->setStatusCode(404);
	$response->setContent('Not Found');
}

$response->send();