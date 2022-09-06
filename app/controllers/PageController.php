<?php

class PageController{

    public function about( $args = NULL)
    {
        require "app/views/about.view.php";
    }
    public function error400( $args = NULL)
    {
        require "app/views/400.view.php";
    }
    public function error404( $args = NULL)
    {
        require "app/views/404.view.php";
    }
    public function js($args = NULL)
    {
        $data_json = json_encode($_POST, JSON_UNESCAPED_UNICODE);
        echo $data_json;
    }
}