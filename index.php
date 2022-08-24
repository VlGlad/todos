<?php

require 'Connection.php';

require 'QuerySelector.php';

$config = require 'config.php';

$connection = Connection::make($config['database']);

$db = new QuerySelector($connection);

$table = $db->getAllTasks();


require "index.view.php";

/* создал бд todolist
теперь надо создать поля, но пока не понятно использовать char
или varchar для логина и пароля.
CREATE TABLE users (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name
также узнал что хеш пароля нужно "солить" */