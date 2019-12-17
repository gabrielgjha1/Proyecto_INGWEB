<?php


$controllers = array(
    'Home' => ['mensaje'],
    'Docente' => ['mostrar','Registrar','crear_u','add','add2','add3','add4','add5','modificar','Registrar_titulos','Registrar_capacitaciones','Registrar_familiar'],
    'Administrativo' => ['mostrar','crear_u','add5','add6','listar_cedula'],
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