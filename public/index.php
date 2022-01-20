<?php

include 'includes/funcitons.php';

// $myVariable = 'some sentence';

// var_dump($myVariable);

// function myFunction() {
//     $myVar = 'one';
// }
// myFunction();

// echo "<h1>Hello, World</h1>";



// $myArray = [
//     'one',
//     'two',
//     'three',
// ]
// $myAossiaciatedArray = [
//     'first_name' => 'John',
//     'last_name' => 'Doe',
//     'email' => 'emreusun@mail.com',
// ]
// var_dump($_POST);
// $firstName = null;
// $lastName = null;
// $email = null;



// this functions returns the first name from the form if it has been submitted, 
// otherwise it returns null.



// var_dump(
//     getEmail()
// );

$shouldShowSubmission = shouldShowSubmissionData();
$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');
$comments = getPostData('comments');
$phone = getPostData('phone');


  



// var_dump($firstName);

?>
<html>
    <head></head>
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="first_name">
            <br>
            <input type="text" name="last_name">
            <br>
            <input type="text" name="email">
            <br>
            <!-- <textarea name="comments" id="comments" cols="30" rows="10"></textarea> -->
            <input type="text" name="phone">
            <button type="submit">
                Submit
            </button>
        </form>
        <?php
        if ($shouldShowSubmission) {
        ?>
    
        
        <div>
        <h2>Your Submission</h2>
            <p>
                <?php echo $firstName; 
                ?>
            
            </p>

            <p>
                <?php echo $lastName; 
                ?>
            </p>

            <p>
                <?php echo $email; 
                ?>
            </p>
            <p>
                <?php echo $comments; 
                ?>
            </p>
            <p>
                <?php echo $phone; 
                ?>
            </p>

        </div>
        <?php 
        } 
        ?>
    </body>


</html>