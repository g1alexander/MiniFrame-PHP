<?php

/* cargue de controladores*/

function controllers_autoload($classname)
{
    include 'src/backend/controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');