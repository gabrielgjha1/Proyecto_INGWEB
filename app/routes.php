<?php


$controllers = array(
    'Home' => ['mensaje'],
    'Docente' => ['mostrar','Registrar','crear_u','add','modificar','Registrar_titulos'],
    'Administrativo' => ['mostrar','crear_u'],
    'Login'=>['add','login']);



if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'mensaje');
    }
} else {
    call('Home', 'mensaje');
}

function call($controller, $action)
{
    require_once('Controllers/' . $controller . 'Controller.php');


    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Docente':

            $controller = new DocenteController();
            break;
        case 'Administrativo':
            $controller = new AdministrativoController();
            break;

        case 'Login':
            $controller =new LoginController();
            break;

        default:

            break;
    }
    $controller->{$action}();

}

?>