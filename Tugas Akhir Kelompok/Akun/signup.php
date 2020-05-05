<?php
   
    require "./includes/dbh.inc.php";

    if(isset($_POST['signup-submit'])){
    
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
    
        mysqli_query($conn,"INSERT INTO users VALUES ('','$username','$email','$password')");
        $uhh = mysqli_affected_rows($conn);
        if($uhh > 0){
            echo "<script>alert('ok')</script>";
        }else{
            echo "<script>alrt('gagal')</script>";
        }
    }
?>
 <link rel="stylesheet" href="style.css">
    <main>
        <div class="container">
            <h1>Sign Up</h1>   
             
            <form action="" method="post"><br>
                <input type="text" name="uid" placeholder="Username" required><br>
                <input type="text" name="pwd" placeholder="E-Mail" required><br>
                <input type="password" name="mail" placeholder="Password" required><br>
                <input type="password" name="pwd-repeat" placeholder="Repeat Password" required><br>
                <button type="submit" name="signup-submit">Sign UP</button>
            </form>
        </div>

        <div class="tombol">
        <a href="login/index.php">LOGIN Click Here</a>
        </div>

    </main>
<?php
   
?>
