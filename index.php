<?php

require 'core/bootstrap.php';

$router = new Router();

$defineRoutes = require 'routes.php';
$defineRoutes($router);

$router->direct(Request::path(), Request::method());
