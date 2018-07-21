<?php

$IndexCollection = new Phalcon\Mvc\Micro\Collection();
$IndexCollection->setHandler(new IndexController());
$IndexCollection->get('/', 'home');
$IndexCollection->get('/fest/{slug}', 'fest');
$IndexCollection->get('/band/{slug}', 'band');
$IndexCollection->get('/about', 'about');
$IndexCollection->get('/news', 'news');
$app->mount($IndexCollection);