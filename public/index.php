<?php
 $CONFIG = json_decode(file_get_contents(__DIR__ . "/../app/conf/config.json"), true);
require_once __DIR__ . "/../vendor/autoload.php";
ToroHook::add("404",function(){
  echo "404";
  http_response_code(404);
});
Toro::serve([
    '/'=>Link\Controllers\DashboardController::class,
    '/login'=>Link\Controllers\LoginController::class,
    '/register'=>Link\Controllers\RegisterController::class,
    '/verify'=>Link\Controllers\VerifyController::class,
    '/add'=>Link\Controllers\AddController::class,
    '/addLink'=>Link\Controllers\AddLinkController::class,
    '/show'=>Link\Controllers\ShowController::class,
  ]);
?>
