<?php

namespace App\Http;

class Router
{
    public static function get(string $route, string $response)
    {
        if($_SERVER['REQUEST_URI'] == $route && $_SERVER['REQUEST_METHOD'] == 'GET')
        {
            header('location: resources/view/'.$response.'.php');
        }
    }
}