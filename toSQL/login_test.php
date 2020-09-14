<?php
    include('../connect.php');
    $u_name=$_GET['u_name'];
    $u_password=$_GET['u_password'];
    $sql="SELECT * FROM users WHERE u_name='$u_name' AND u_password='$u_password'";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $count = $result-> num_rows;
    }
    if ($count > 0) {
        session_start();
        $_SESSION['username_cv'] = $u_name;
        header('location:http://localhost/cv/home.php');
    } else {
        header('location:http://localhost/cv/join-us.php');
    }
    
?>