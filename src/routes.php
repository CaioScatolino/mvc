<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@signin');
$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');
$router->post('/login', 'LoginController@signinAction');

//$router->get('/pesquisa')
//$router->get('/perfil')
//$router->get('/sair')
//$router->get('/amigos')
//$router->get('/fotos')
//$router->get('/config')