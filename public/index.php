<?php

require '../core/Router.php';

/*$def_1 = Router::getFirst();
$def_2 = Router::getSecond();


Router::setFirst('NEW 1');
Router::setSecond('NEW 2');

$new_1 = Router::getFirst();
$new_2 = Router::getSecond();

print_r([
    $def_1,
    $def_2,
    $new_1,
    $new_2,
]);*/

$query = trim($_SERVER['REQUEST_URI'], '/');


Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);

print_r($query);
//print_r(Router::getRoutes());

if(Router::matchRoute($query)) {
    print_r(Router::getRoute());
} else {
    print_r(404);
}