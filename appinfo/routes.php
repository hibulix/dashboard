<?php

namespace OCA\Dashboard;

use \OCA\Dashboard\App\Dashboard;

$application = new Dashboard();
$application->registerRoutes($this, array(
    'routes' => array(
        array(
            'name' => 'page#index',
            'url' => '/',
            'verb' => 'GET',
        ),
        array(
            'name' => 'api_stats#stats',
            'url' => '/api/1.0/stats',
            'verb' => 'GET',
        ),
        array(
            'name' => 'api_stats#index',
            'url' => '/api/1.0/index',
            'verb' => 'GET',
        ),
        array(
            'name' => 'api_stats#history_stats',
            'url' => '/api/1.0/history_stats/{dataType}/{range}',
            'defaults' => array('dataType' => 'all', 'range' => 30),
            'verb' => 'GET',
        ),
        array(
            'name' => 'api_stats#preflighted_cors',
            'url' => '/api/1.0/stats/{path}',
            'verb' => 'OPTIONS',
            'requirements' => array('path' => '.+'),
        ),
    ),
));