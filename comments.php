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
    ?>
    <meta charset="UTF-8">
    <title>Comments</title>
    <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
    <link rel="stylesheet" href="css\Comment.css" />
</head>
<body>
    <table>
        <tr>
            <td>
                <button class="back-btn" title="go to home" onclick="location.href='home.php'">Home</button>
                <div class="container">
                    <div class="input-group">
                        <span class="user-icon">&nbsp;</span>
                        <input autocomplete="off" id="main-comment" name="comment" placeholder="Join the discussion..." class="comment-box" />
                    </div>
                    <div id="comments">
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
    <script type="text/javascript" src="js\Comment.js"></script>
</body>

</html>