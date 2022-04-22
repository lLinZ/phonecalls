<?php
require("../resources/conection.php");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        echo json_encode("echo ecoh ecoh", JSON_UNESCAPED_UNICODE);
        break;
    case 'POST':
        break;
    default:
        header('HTTP/1.1 404');
        break;
}
