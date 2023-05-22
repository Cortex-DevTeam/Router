<?php

namespace Cortex;

abstract class ReqMethod {
    const GET = "get";
    const POST = "post";
}

class Router {

    private array $routes;

    public function __construct() {
        $this->routes = array();
    }

    public function render() {

    }

    public function route(ReqMethod $method, string $route): void {
        print_r(type(function() {

        }));
    }

}