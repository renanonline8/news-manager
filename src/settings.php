<?php
\Utils\Config\ParseIni::$localIni = '../app.ini';

ActiveRecord\Config::initialize(function($cfg) {
    $ini = \Utils\Config\ParseIni::parsed();
    $conn = $ini['database']['provider'] . '://'; 
    $conn .= $ini['database']['username'] . ':';
    $conn .= $ini['database']['password'] . '@';
    $conn .= $ini['database']['server'] . '/';
    $conn .= $ini['database']['dbname'];
    $cfg->set_model_directory('../model');
    $cfg->set_connections(
        array('development' => $conn)
    );
});

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
