<?php
use Memo\App;
use Memo\Services\View;

require dirname(__DIR__) . "/bootstrap/bootstrap.php";

$app = new App();
$app["view"] = function ($container) {
    return new View([
        "helper" => $container,
        "folders" => [APP . "/Views/"]
    ]);
};
$app->run();
