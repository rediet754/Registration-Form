<?php
//make the connection with database
$conn = mysqli_connect('localhost','walta','walta','walta');
if($conn === false){
    die("ERROR:coudn't connect.".mysqli_connect_error());
}
else{
    // echo "connected <br>";
}
?>