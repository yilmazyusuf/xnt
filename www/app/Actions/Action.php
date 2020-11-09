<?php

namespace App\Actions;


abstract class Action
{

    /**
     * @param string $view
     * @param array $params
     * @return $this
     */
    protected function display(string $view, $params = array())
    {
        require_once __DIR__ . '/../templates/' . $view . '.tpl';
        unset($params);
        return $this;

    }

    /**
     * @param string $string
     * @return string
     */
    protected function sanitizeString(string $string)
    {
        $string = filter_var($string, FILTER_SANITIZE_STRING);
        $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
        $string = strip_tags($string);
        $string = htmlspecialchars($string);
        return $string;

    }


}