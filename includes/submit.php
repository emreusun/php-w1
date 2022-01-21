<?php

include 'validation.php';

// ensure there's a place for the user to be redirected back to
if (! array_key_exists('HTTP_REFERER' , $_SERVER)) {
   die;
}
// ensure the user has actually submitted data 
if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

   die;
}


$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');

var_dump($email);
var_dump(
    isEmailValid($email)
);


// var_dump($_POST);

die;

header('Location: ' . $_SERVER['HTTP_REFERER']);