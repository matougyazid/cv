<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        error_reporting(0);
        include('connect.php');
        session_start();
        $u_name = $_SESSION['username_cv'];
        $sql="SELECT * FROM users WHERE u_name='$u_name AND u_password='$u_password'";
        $result = $conn->query($sql);
        include 'comming-soon.html';
    ?>
    <!-- created by yazid matoug -->
    <meta name="description" content="my site is a personnel site containe 6 pages . it discribe my cv .">
    <meta charset="UTF-8">
    <meta name="author" content="matoug yazid">
    <meta name="keywords" content="cv matoug yazid personnel ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
    <title>Account</title>
    <script src="js/home.js"></script>
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
  body,
  html {
    height: 100%;
    margin: 0;
    overflow: hidden;
  }

  #demo {
    margin: 0;
    color: springgreen;
    top: -2px;
    position: relative;
  }

  hr {
    margin: auto;
    width: 40%;
  }

  a {
    text-decoration: none;
    color: black;
  }

  .linkback:hover {
    box-shadow: 0px 0px 4px 1px black inset;
    border-radius: 24px;
    width: 98%;
  }

  #demo {
    margin: 0;
    color: springgreen;
    top: -2px;
    position: relative;
  }

  .backgroundimg {
    background-image: url('css/img/soon.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
    width: 100%;
    z-index: -100;
  }

  .topleft {
    position: absolute;
    top: 4px;
    left: 5px;
    background-color: white;
    border-radius: 11px;
    width: 6vw;
    height: 4.8vh;
    z-index: 9;
  }


  .middle {
    position: absolute;
    top: 51%;
    left: 35%;
    text-align: center;
    width: 40%;
  }

  hr {
    margin: auto;
    width: 40%;
  }

  tbody {
    left: 0;
    position: relative;
    display: block;
    top: 0;
    width: 100vw;
    height: 100vh;
    z-index: -100;
  }

  a {
    text-decoration: none;
    color: black;
  }

  #toback {
    position: relative;
    width: 100%;
    display: block;
  }

  .linkback {
    display: block;
    text-align: center;
    z-index: 100;
    position: relative;
    color: black;
  }

  .linkback:hover {
    box-shadow: 0px 0px 4px 1px black inset;
    border-radius: 24px;
    width: 98%;
  }
  form {
    position: fixed;
    bottom: 5px;
    right: 5px;
    text-align: center;
    display: block;
    cursor: pointer;
    background-color: white;
    color: black;
    border-radius: 8px;
    font-size: 31px;
  }
  form button {
    border-radius: 11px;
    width: 100%;
    height: 100%;
    display: block;
    position: relative;
    cursor: pointer;
    font-size: 27px;
  }
  form button:hover {
    color: red;
    box-shadow: 0px 0px 1px 1px black inset;
  }

</style>
<body>
    <script>
        document.getElementById('toback').innerHTML = '<a href="home.php" class="linkback">back</a><form action="index.php" method="post"><button type="submit" name="logout">logout</button></form>';
    </script>
</body>
</html>