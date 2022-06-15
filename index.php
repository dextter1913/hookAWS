
<?php
header("Content-Type: JSON");
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $_POST = json_decode(file_get_contents('php://input'), true);
        fopen('log.txt', 'a');
        fwrite('pruebaaa', "\n");
        file_put_contents('log.txt', json_encode($_POST));
        echo json_encode($_POST);

        break;
    case 'PUT':
        $_PUT = json_decode(file_get_contents('php://input'), true);

        break;
    case 'DELETE':
        $_DELETE = json_decode(file_get_contents('php://input'), true);

        break;
    case 'GET':
        header("Content-Type: JSON");
        $_GET = json_decode(file_get_contents('php://input'), true);

        break;
    default:
        echo "Metodo no permitido";
        http_response_code(405);
}
