<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs(string $value) { 
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort(int $code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}