<?php

class Router {
    /*static $first = 'default 1';
    static $second = 'default 2';


    public static function setFirst($value) {
        self::$first = $value;
    }
    public static function setSecond($value) {
        self::$second = $value;
    }
    public static function getFirst() {
        return self::$first;
    }
    public static function getSecond() {
        return self::$second;
    }*/

    protected static $routes = [];
    protected static $route = [];


    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }

    /**
     * @return array
     */
    public static function getRoutes()
    {
        return self::$routes;
    }

    /**
     * @return array
     */
    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($uri) {
        if(array_key_exists($uri, self::$routes)) {
            self::$route = self::$routes[$uri];

            return true;
        }

        return false;
    }
}