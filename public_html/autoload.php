<?php
spl_autoload_register(function ($class){
    $filename = str_replace("\\", "/", $class);
    include_once __DIR__.'/'.$filename.".php";
});