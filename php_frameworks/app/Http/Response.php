<?php

namespace App\Http;


class Response
{
    public $view; //view, array, json, pdf...
    public $arguments;

    public function __construct($view, $arguments)
    {
        $this->view = $view;
        $this->arguments = $arguments;
    }

    public function getView()
    {
        return $this->view;
    }

    public function send()
    {
        $view = $this->getView();

        // home
        $content = viewPath($view);
        $arguments = isset($this->arguments)
            ? $this->arguments
            : null;


        require viewPath('layout');
    }
}
