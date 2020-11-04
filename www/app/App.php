<?php


namespace App;


use App\Actions\IndexAction;

class App
{

    public static function run() : void{

        $route = new Router();
        $action = $route->getMatchedAction();
        $method = $route->getMethod();
        $action->{$method}();
    }



}