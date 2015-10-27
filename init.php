<?php defined('SYSPATH') or die('No direct script access.');

Kohana::$errors = TRUE;

// Recebe a url atual
$url = $_SERVER['SERVER_NAME'];

// Verifica se URL é de desenvolvimento
$development = strripos($url,'.dev');

// FALSE = PRODUCAO (SERVIDOR)
if($development === FALSE)
    Kohana::$environment = Kohana::PRODUCTION;
else
    Kohana::$environment = Kohana::DEVELOPMENT;