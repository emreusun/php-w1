<?php

if (! array_key_exists('HTTP_REFERER', $_SERVER)) {
   die;
}

if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
   die;
}

var_dump(
    $_SERVER['HTTP_REFERER']
);

 
var_dump($_POST);

die;
header('Location: ' . $_SERVER['HTTP_REFERER']);