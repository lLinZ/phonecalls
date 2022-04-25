<?php
require("../resources/conection.php");

$method = $_SERVER['REQUEST_METHOD'];
$respuesta = [];
$errores = [];

switch ($method) {
    case 'POST':
        $json = file_get_contents("php://input");
        $_POST = json_decode($json, true);
        $usuario = $_POST['usuario'];
        $password = sha1($_POST['password']);

        if ($result = mysqli_query($mysqli, "SELECT nombre, usuario, created_at, status, id FROM usuarios WHERE UPPER(usuario) = UPPER('$usuario') AND password = '$password' AND status=1")) {
            if (mysqli_num_rows($result) && mysqli_num_rows($result) > 0) {
                $array_user = mysqli_fetch_array($result);
                $respuesta['user'] = $array_user;
                $respuesta['message'] = "Usuario encontrado";
                echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                return header("HTTP/1.1 200");
            } else {
                $respuesta['message'] = 'Usuario no encontrado';
                echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                return header("HTTP/1.1 400");
            }
        } else {
            $respuesta['message'] = 'No se logró conectar con el servidor';
            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
            return header("HTTP/1.1 500");
        }
    default:
        return header('HTTP/1.1 404');
}
