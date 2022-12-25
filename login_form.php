<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="background">
        <div class="pack loginpack">
            <form action="" method="post">
             <h2>Login Now</h2>
           
                   
                       <div>
                        <label>User Name or Email:<br></label>
                <input type="text"name="fname"placeholder="enter User name or Email">
            </div>
                       <div>
                        <label>Password:<br></label>
                <input type="text"name="fname" placeholder="Password">
            </div>
            <div><button class="submitbtn" type="submit" name="submit">Submit</div>
            <p>don't have an account? <a href="registration_form.php">Register Now</a></p>
        </form>
        </div>
    </div>
</body>
</html>