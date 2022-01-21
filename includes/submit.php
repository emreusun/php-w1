<?php
session_start();
include 'functions.php';
include 'validation.php';

$_SESSION['errors'] = [];

// ensure there's a place for the user to be redirected back to
if (! array_key_exists('HTTP_REFERER' , $_SERVER)) {
   die;
}
// ensure the user has actually submitted data 
if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

   die;
}

$_SESSION['submission'] = $_POST;

$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');

$errors = [];


if (!  isFirstNameValid($firstName)) {
    $errors['first_name'] = 'First name is not invalid';
}
if (!  isLastNameValid($lastName)) {
    $errors['last_name'] = 'Last name is not invalid';
}
if (!  isEmailValid($email)) {
    $errors['email'] = 'Email is not invalid';
}
if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}
$to = 'emre95neo@gmail.com';
$subject = 'New submission';
$message = "new messafe from site!";
$message = "";
$message .= "Firstname: " . $firstName . "\r\n";
$message .= "Lastname: " . $lastName . "\r\n";
$message .= "Email: " . $email . "\r\n";
// $mail(
//     $to,
//     $subject,
//     $message
// );
$_SESSION['submission'] = [];
// $_SESSION['suceess_message'] = "yes!";
// var_dump('here');
// die;

header('Location: ' . $_SERVER['HTTP_REFERER']);