<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <form action="" method="post" >
 Username: <input type="text" name="username" />
 Password: <input type="password" name="password" />
 Colour: <input type="text" name="colour" />
 Animal: <input type="text" name="animal" />
 <input type="submit" value="Login" />
</form>
        <?php
        if(!empty($_POST)){
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["colour"] = $_POST['colour'];
        $_SESSION["animal"] = $_POST['animal'];
        }
        
        if(!empty($_SESSION)) {
            echo "Welcome " . $_SESSION["username"] . "<br>";
            echo "Your favourite colour is " . $_SESSION["colour"] . "<br>";        
            echo "Your favourite animal is " . $_SESSION["animal"] . "<br>";      
            echo "<a href ='SessionPostPage2.php'>Go To Page 2 </a><br>";
        }
            ?>
    </body>
</html>
