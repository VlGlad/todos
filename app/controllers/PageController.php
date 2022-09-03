<?php

class PageController{

    public function index( $args = NULL)
    {
        require "app/views/todo.view.php";
    }
    
    public function about( $args = NULL)
    {
        require "app/views/about.view.php";
    }
}