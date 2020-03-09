<?php
require "router/Router.php";

$router = new Router();
$router->route($_SERVER);

echo "<pre>";
print_r($_SERVER);
echo "</pre>";