<?php

$router->get('', 'TodoController@loadTodoList');
$router->get('about', 'PageController@about');
$router->get('store', 'TodoController@storeTodo');
$router->post('delete', 'TodoController@deleteTodo');