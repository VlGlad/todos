<?php

require "vendor/autoload.php";

App::bind(
    'database', require "core/bootstrap.php"
);

$table = App::get('database')->getAllTasks();



TodoController::loadTodoList($table);

/* создал бд todolist
теперь надо создать поля, но пока не понятно использовать char
или varchar для логина и пароля.
CREATE TABLE users (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name
также узнал что хеш пароля нужно "солить" */