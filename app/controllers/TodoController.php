<?php

class TodoController
{

    public static function loadTodoList()
    {
        
        $table = App::get('database')->getAllRows("todos");
        require "app/views/todo.view.php";
    }

    public static function storeTodo()
    {
        if (! isset($_GET['description'])){
            return(
                App::get('router')->getError(400)
            );
        }
        $_GET['completed'] = 0;
        App::get('database')->insert("todos", $_GET);
        header('Location: '. '/');
    }
}