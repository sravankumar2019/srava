<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="TWS";
    $cookie_name = "Watch Maker";
    $user_login=filter_input(INPUT_POST , 'username');
    $pwd_login=filter_input(INPUT_POST , 'password');
    $conn=new mysqli($servername , $username , $password , $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql="SELECT username FROM register WHERE username= '$user_login' AND password = '$pwd_login'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		 setcookie($cookie_name, $user_login, time() + (86400 * 40), "/");
        session_start();
        if( isset( $_SESSION['counter'] ) ) {
         $_SESSION['counter'] += 1;
       }else {
         $_SESSION['counter'] = 1;
        }
        if(isset($_COOKIE[$cookie_name]))
        {
        header( "refresh:5;url=home.html" );
        echo "Cookie is Created!<br>";
        echo "Hello " . $_COOKIE[$cookie_name];
		echo "<br>Welcome To The Watch Store..<br>";
        echo "<br>You have visited this page ".  $_SESSION['counter'];
        echo "<br>in this session.";
        }
     }
    else{
        echo "Invalid email/password";
    }
    $conn->close();
?>