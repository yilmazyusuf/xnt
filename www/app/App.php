<?php


namespace App;


use App\Commands\PostCreateCommand;
use Symfony\Component\Console\Application;

class App
{

    public static function run()
    {

        if ('cli' === PHP_SAPI) {
            return static::registerCommands();
        }

        $route = new Router();
        $action = $route->getMatchedAction();
        $method = $route->getMethod();
        $action->{$method}();

    }

    private static function registerCommands(): int
    {
        $application = new Application();
        $application->add(new PostCreateCommand());
        return $application->run();
    }


}