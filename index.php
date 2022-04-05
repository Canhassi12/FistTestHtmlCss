<?php

require_once __DIR__.'/vendor/autoload.php';

use \App\Http\Router;

Router::get('/', 'index');