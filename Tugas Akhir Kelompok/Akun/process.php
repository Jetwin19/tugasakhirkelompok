<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripslashes($username);
$pass = stripslashes($password);

$conn = mysqli_connect("localhost","root","","tesLogin");

$result = mysqli_query($conn,"SELECT * FROM users WHERE user = '$username' AND pass = '$password'")
        or die("gagal");
$row = mysqli_fetch_array($result);
if($row['user'] == $username && $row['pass'] == $password){
    echo "login sukses";
}else{
    echo "failed";
}
?>