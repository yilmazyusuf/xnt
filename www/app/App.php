<?php


namespace App;


use App\Commands\PostCreateCommand;
use Symfony\Component\Console\Application;

class App
{

    /**
     * @return int
     */
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

    /**
     * @return int
     * @throws \Exception
     */
    private static function registerCommands(): int
    {
        $application = new Application();
        $application->add(new PostCreateCommand());
        return $application->run();
    }

}