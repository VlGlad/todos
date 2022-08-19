<?php

class Connection
{
    public static function make($config){
        try{
            $db = new PDO(
                $config['connect'] . $config['dbname'],
                $config['user'],
                $config['password']
            );
        } catch(Exception $ex) {
            die(var_dump($ex));
        }
        return $db;
    }

}