<?php

   $myData =[
       [
           'title' => 'First Post',
           'image' => 'http://placekitten.com/200/300',
       ]
       ];

?>
<html>
    <body>
    <?php
        include '../includes/partials/navigation.php';
        ?>
        <h1>Listing</h1>
        <?php
        foreach ($myData as $data) {
            ?>
            <p>
                <?php echo $data['title']; ?>
                <?php echo $data['image']; ?>
            </p>
        }
    </body>
</html>