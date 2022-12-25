<?php
  @include "connection.php";
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
if(isset($_POST['submit'])){
$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password=md5($_POST['password']);
$conpassword=md5($_POST['conpassword']);
$user_type = $_POST['user_type'];
};
$select = "SELECT * FROM user_form WHERE email = '$email ' && password = '$password' ";
$result=mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
    $error[]='ERROR: User already exist!';
}else{
            if($password != $conpassword){
                 $error[]='ERROR: Password doesn not match!';
            }else{
                $insert = "INSERT INTO user_form (fname, lname, password, userName, email, userType) VALUES ('$fname','$lname','$password','$username','$email','$user_type ')";
                mysqli_query($conn,$insert);
                header("Location:login_form.php");
            }
           
          }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="background">
        <div class="pack">
            <form action="" method="post">
             <h2>Register Now</h2>
         <?php
          if(isset($error)){
            foreach($error as $error){
                echo '<span class="error_msg">'.$error.'</span>';
            }
          }
         
         ?>
                <label>First Name :<br></label>
                <input type="text"name="fname"placeholder="enter firist name"><br>      
                <label>Last Name :<br></label>
                <input type="text"name="lname" placeholder="enter last name"><br>
           
                      
                <label>User Name :<br></label>
                <input type="text"name="username" placeholder="enter username"><br>
           
                       
                <label>Email :<br></label>
                <input type="email"name="email" placeholder="email"><br>
            
                       
                <label>Password :<br></label>
                <input type="password"name="password" placeholder="enter password"><br>
            
                       
                <label>Confirm Password: <br></label>
                <input type="password"name="conpassword" placeholder="confirm password"><br>
            
            
                <label for="user_type">Choose your type:<br></label>
                <select class="user_type" name="user_type">
                    <option value="User">User</option>
                      <option value="Admin">Admin</option>
                </select><br>
               <div><button class="submitbtn" type="submit" name="submit">Submit</div>
        <p>Already have an account?<a href="login_form.php">Login Now</a></p>   
        </form>
        </div>
    </div>
</body>
</html>