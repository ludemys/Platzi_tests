<?php


if (!function_exists('view'))
{
    function view($view, array $arguments = null)
    {
        return new \App\Http\Response($view, $arguments);
    }
}

if (!function_exists('viewPath'))
{
    function viewPath($view)
    {
        return __DIR__ . "/../views/$view.php";
    }
}
