<?php

class TodoController
{

    public static function loadTodoList($table)
    {
        require "app/views/todo.view.php";
    }

    public static function storeTodo(PDO $db)
    {
        die(App::get('database'));
    }
}