<?php

$settings = [
	"env" => "dev",
	"send" => true,
	"app" => [
		"name" => "mFest",
		"method" => "http://",
		"api" => "mfest.app/api/",
		"public" => "mfest.app//",
		"root" => "/var/www/mfest/api"
	],
	"cdn" => "https://s3.amazonaws.com/mfest.app/app/",
	"application" => [
		"controllersDir" => __DIR__ . "/../controllers/",
		"modelsDir"      => __DIR__ . "/../models/",
		"viewsDir"       => __DIR__ . "/../views/",
		"baseUri"        => __DIR__ . "/../",
	],
	"database" => [
		"adapter"  => "Mysql",
		"host"     => "localhost",
		"username" => "root",
		"password" => "",
		"name"   => "mfest",
	],
	"password" => [
		"salt" => "saltnpeppa"
	]
];