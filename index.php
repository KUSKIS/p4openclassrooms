<?php
session_start();

require_once('router/Router.php');

$router = new Router();

$router->routeReq();

