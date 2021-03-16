<?php

$router = new AltoRouter();

$router->map('GET', '/about', '', 'about_us');

$match  = $router->match();

if ($match) {
    echo 'About us page';
}
//var_dump($match);