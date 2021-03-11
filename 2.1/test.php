<?php
$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$app_root = "/" . $request_uri[2];
echo ($_SERVER['DOCUMENT_ROOT'] . $app_root . "/models/City.php"
);