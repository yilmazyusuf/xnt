<?php


namespace App;

use App\Actions\Action;


class Router
{

    private string $method = '';
    private  $action = '';

    private static function getUri(): string
    {

        return $_SERVER['REQUEST_URI'];
    }

    public function getMatchedAction(): Action
    {
        $uri = self::getUri();

        $routes = require_once 'routes.php';

        foreach ($routes as $routeUri => $action) {
            if ($routeUri === $uri) {

                $this->setAction(new $action[0])
                    ->setMethod($action[1]);

                return $this->getAction();
            }
        }
        $this->setAction(new PostAction())
            ->setMethod('index');

        return $this->getAction();

    }

    /**
     * @param Action $action
     * @return Router
     */
    public function setAction(Action $action): Router
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @param string $method
     * @return Router
     */
    public function setMethod(string $method): Router
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return Action
     */
    public function getAction(): Action
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }


}