<?php

class TodoController
{

    public static function loadTodoList()
    {
        $table = App::get('database')->getAllTasks();
        require "app/views/todo.view.php";
    }

    public static function storeTodo()
    {
        dd(App::get('database'));
    }
}