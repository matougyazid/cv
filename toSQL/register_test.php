<?php
    include('../connect.php');
    $my_username=$_GET['my_username'];
    $my_password1=$_GET['my_password1'];
    $my_password2=$_GET['my_password2'];
    $my_email=$_GET['my_email'];
    $sql="SELECT * FROM users WHERE u_name='$my_username' AND u_password='$my_password1'";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $count = $result-> num_rows;
    }
    if (mysqli_connect_errno()) {
        exit('failed to connect to mysql: ' . mysqli_connect_error());
    }
    if (!isset($_GET['my_username'], $_GET['my_password1'], $_GET['my_password2'], $_GET['my_email'])) {
        exit('please complete the registration form .');
    }
    if (empty($_GET['my_username'] || empty($_GET['my_password1']) || empty($_GET['my_password2']) || empty($_GET['my_email']))) {
        exit('plese complete the registration form .');
    }
    if ($count > 0) {
        header('location:http://localhost/cv/join-us.php?q1=1');
        exit();
    }
    if ($u_password1 !== $u_password2) {
        header('location:http://localhost/cv/join-us.php?q1=2');
        exit();
    }
    $sql="INSERT INTO users (u_name ,u_password ,u_email) VALUES('$my_username','$my_password1','$my_email')";
    $result = $conn->query($sql);
    header('location:http://localhost/cv/join-us.php');
?>