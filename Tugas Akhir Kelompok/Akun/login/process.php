<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$redirect_to = $_POST['redirect_to'];

$username = stripslashes($username);
$pass = stripslashes($password);

$conn = mysqli_connect("localhost","root","","tesLogin");

$result = mysqli_query($conn,"SELECT * FROM users WHERE user = '$username' AND pass = '$password'")
        or die("gagal");
$row = mysqli_fetch_array($result);
if($row['user'] == $username && $row['pass'] == $password){
    session_start();
    $_SESSION['is_logged_in'] = true;
    if($redirect_to != '')
        header('Location: '.$redirect_to);
    else
        header('Location: ../../Home.php');
}
else{
    header('Location: index.php');
    echo "<script>alert('fail')</script>";
}
?>
