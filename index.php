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
$firstName = null;
$lastName = null;
$email = null;

// this functions returns the first name from the form if it has been submitted, 
// otherwise it returns null.

function getFirstName() 
{   
    $firstName = null;

    if (array_key_exists('first_name', $_POST)) {
        $firstName = $_POST['first_name'];
    }

    return $firstName;
}

// this function returns the submitted last name
// or "" an empty string if nothing is submitted
// uses an early return (check a condition and return if it is true)
// * preferred
function getLastName() 
{   
    $lastName = null;

    if (array_key_exists('last_name', $_POST)) {
        return $lastName = $_POST['last_name'];
    }
    return "";

}
// return the submitted getEmail also uses early return

function getEmail() 
{   
    $email = null;

    if (array_key_exists('email', $_POST)) {
        return $email = $_POST['email'];
    }
        return "";
    

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