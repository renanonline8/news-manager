<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/',  'ControllerHome:home')->setName('home');
$app->get('/news', 'ControllerNews:list')->setName('news-list');
$app->get('/send-news', 'ControllerSendNews:choose')->setName('sendnews-choose');
$app->post('/send-news/preview', 'ControllerSendNews:preview')->setName('sendnews-preview');