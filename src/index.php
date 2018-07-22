<?php

use Phalcon\Config as Config;
use Phalcon\Mvc\View\Simple as SimpleView;

require __DIR__ . '/config/config.php';
$config = new Config($settings);
require __DIR__ . '/config/loader.php';

//require_once __DIR__ . '/../vendor/autoload.php';

header("Content-Type: text/html; charset=ISO-8859-1");	
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, token');

if (isset($_SERVER['HTTP_ORIGIN'])) {
	$http_origin = $_SERVER['HTTP_ORIGIN'];

	header("Access-Control-Allow-Origin: $http_origin");
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	exit;
}

$di = new \Phalcon\DI\FactoryDefault();

//Set up the database service
$di->set('db', function() use ($config){
	$conn = array(
		"host" => $config->database->host,
		"username" => $config->database->username,
		"password" => $config->database->password,
		"dbname" => $config->database->name,
		"options" => array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		)
	);
	return new \Phalcon\Db\Adapter\Pdo\Mysql($conn);
});

$di->set('config', $config);

$di->set(
	'view',
	function () use ($config) {

		$view = new SimpleView();

		$view->setViewsDir('views/');

		$view->registerEngines([
			'.volt' => function($view, $di) { return new Phalcon\Mvc\View\Engine\Volt($view, $di); }
		]);

		return $view;
	},
	true
);

$app = new Phalcon\Mvc\Micro($di);

require __DIR__ . "/routes.php";

$app->notFound(function () use ($app) {
	$app->response->setStatusCode(404, "Not Found")->sendHeaders();

	echo $app->view->render('errors/404/index', []);
});

$app->handle();