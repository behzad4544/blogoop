<?php
define('BASE_URL', "http://behzad.com/blogoop");
function dd($data)
{
    die("<pre>" . print_r($data, true) . "</pre>");
}
function asset($data)
{

    return BASE_URL . "./assets/" . $data;
}
