<?php


use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Query\QueryBuilder;

require_once 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function database(): Connection
{

    $connectionParams = [
        'dbname' => $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'host' => $_ENV['DB_HOST'],
        'driver' => 'pdo_mysql',
    ];
    $connection = DriverManager::getConnection($connectionParams);
    $connection->connect();
    return $connection;

}

function query(): QueryBuilder
{
    return database()->createQueryBuilder();
}


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

    $namespace = '\App\Controllers\\';

    $r->addRoute('GET', '/', $namespace . 'CvController@show');

    $r->addRoute('GET', '/CV/{id}', $namespace . 'CvController@showOne');

    $r->addRoute('GET', '/addCV', $namespace . 'CvController@add');
        $r->addRoute('POST', '/addCV', $namespace . 'CvController@addNew');
    $r->addRoute('DELETE', '/{id}', $namespace . 'CvController@delete');
    $r->addRoute('GET', '/CV/{id}/edit', $namespace . 'CvController@edit');
    $r->addRoute('PUT', '/CV/{id}', $namespace . 'CvController@update');

});

// Fetch method and URI from somewhere
$httpMethod =$_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        [$controller, $method] = explode('@', $routeInfo[1]);
        $vars = $routeInfo[2];

        (new $controller)->$method($vars);


        break;
}