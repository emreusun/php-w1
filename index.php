<?php

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
function getPostData($key) {
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    return "";
}



// this functions returns the first name from the form if it has been submitted, 
// otherwise it returns null.

function getFirstName() 
{   
    return getPostData('first_name');
}

// this function returns the submitted last name
// or "" an empty string if nothing is submitted
// uses an early return (check a condition and return if it is true)
// * preferred
function getLastName() 
{   
    return getPostData('last_name');

}
// return the submitted getEmail also uses early return

function getEmail() 
{   
    return getPostData('email');
    

}

// var_dump(
//     getEmail()
// );

$firstName = getFirstName();
$lastName = getLastName();
$email = getEmail();


  



// var_dump($firstName);

?>
<html>
    <head></head>
    <body>
        <form action="http://localhost:8888/week%20one/index.php" method="POST">
            <input type="text" name="first_name">
            <br>
            <input type="text" name="last_name">
            <br>
            <input type="text" name="email">
            <br>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            <button type="submit">
                Submit
            </button>
        </form>
        <div>
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

        </div>
    </body>


</html>