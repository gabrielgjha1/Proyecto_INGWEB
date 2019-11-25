<?php


$controllers = array(
    'Home' => ['mensaje'],
    'Docente' => ['mostrar'],
    'Administrativo' => ['mostrar']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'index');
    }
} else {
    call('Home', 'index');
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
        default:
            # código...
            break;
    }
    $controller->{$action}();

}

?>