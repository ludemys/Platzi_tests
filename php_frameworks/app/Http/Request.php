<?php

namespace App\Http;

use Exception;

class Request
{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();
    }

    public function setController()
    {

        if (!empty($this->segments[1]))
        {
            $controller_temp = ucfirst(strtolower($this->segments[1]));
            try
            {
                if (class_exists("\App\Http\Controllers\\{$controller_temp}Controller"))
                {
                    $this->controller = $this->segments[1];
                }
                else
                {
                    throw new \Exception('404: Page not found');
                }
            }
            catch (\Exception $exception)
            {
                echo "Error {$exception->getMessage()}";
                die();
            }
        }
        else
        {
            $this->controller = 'home';
        }
    }
    public function setMethod()
    {
        if (!empty($this->segments[2]))
        {
            $controller_temp = ucfirst(strtolower($this->segments[1]));
            try
            {
                if (method_exists("App\Http\Controllers\\{$controller_temp}Controller", $this->segments[2]))
                {
                    $this->method = $this->segments[2];
                }
                else
                {
                    throw new \Exception('404: Page not found');
                }
            }
            catch (\Exception $exception)
            {
                echo "Error {$exception->getMessage()}";
                die();
            }
        }
        else
        {
            $this->method = 'index';
        }
    }

    public function getController()
    {
        $controller = ucfirst(strtolower($this->controller));

        // home -> HomeController
        return "App\Http\Controllers\\{$controller}Controller";
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function send()
    {
        $controller = $this->getController();
        $method = $this->getMethod();

        $response = call_user_func([
            new $controller,
            $method
        ]);

        try
        {
            if ($response instanceof Response)
            {
                $response->send();
            }
            else
            {
                throw new \Exception("501: Not implemented, error processing request");
            }
        }
        catch (\Exception $exception)
        {
            echo "Error {$exception->getMessage()}";
            die();
        }
    }
}
