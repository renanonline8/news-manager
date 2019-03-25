<?php
// DIC configuration

$container = $app->getContainer();

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

//twig view
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => '../cache',
        'debug' => 'true'
    ]);

    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

//Swift Mailer
$container['mailer'] = function($c) {
    $ini = \Utils\Config\ParseIni::parsed();

    $transport = (new \Swift_SmtpTransport(
            $ini['mailer']['smtp_url'], 
            $ini['mailer']['smtp_port'],
            $ini['mailer']['security']
        ))
        ->setUsername($ini['mailer']['username'])
        ->setPassword($ini['mailer']['password']);

    return new \Swift_Mailer($transport);
};

//Controllers
$container['ControllerHome'] = function($c) {
    return new \App\Controller\ControllerHome($c);
};

$container['ControllerNews'] = function($c) {
    return new \App\Controller\ControllerNews($c);
};

$container['ControllerSendNews'] = function($c) {
    return new \App\Controller\ControllerSendNews($c);
};