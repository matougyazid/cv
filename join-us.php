<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/join-us.css">
    <script src="js/join-us.js"></script>
    <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <?php
        error_reporting(0);
        include('connect.php');
        session_start();
        $u_name = $_SESSION['username_cv'];
        $sql="SELECT * FROM users WHERE u_email='$u_email'";
        $result = $conn->query($sql);
    ?>
</head>
<body>
    <table class="tbl">
        <tr class="tr-tbl">
            <td class="td-tbl">
                <button id="backbtn" target="_parent" class="btn" onmousemove="hoverBTN();" onmouseout="NOhoverBTN()" onclick=" location.href = 'index.php'"></button>
                <div class="leftImg">
                </div>
                <div class="login-wrap">
                    <?php
                        $q1=$_GET['q1'];
                        if ($q1 == 1) {
                            echo 'user name alredy exists';
                        }
                        if ($q1 == 2) {
                            echo 'password dont match';
                        }
                    ?>
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">
                            <div class="sign-in-htm">
                                <form action="toSQL\login_test.php" method="get" >
                                    <div class="group">
                                        <label for="user" class="label">Username</label>
                                        <input id="user" name="u_name" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Password</label>
                                        <input id="pass" name="u_password" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" name="rememberme" checked>
                                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" name="login" value="login">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">Forgot Password?</a>
                                    </div>
                                </form>
                            </div>
                            <div class="sign-up-htm">
                                <form action="toSQL\register_test.php?q1=" method="get" >
                                    <div class="group">
                                        <label for="user" class="label">Username</label>
                                        <input id="user" type="text" class="input" name="my_username">
                                    </div>
                                    <div class="group">
                                        <label for="email" class="label">Email Address</label>
                                        <input id="email" type="email" class="input" name="my_email">
                                    </div>
                                    <div class="group">
                                        <label for="pass1" class="label">Password</label>
                                        <input id="pass1" type="password" class="input" data-type="password" name="my_password1">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Repeat Password</label>
                                        <input id="pass" type="password" class="input" data-type="password" name="my_password2">
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="regiter" name="singup">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <label class="alreadyMember"for="tab-1">Already Member?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid msg">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid msg">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid msg">A <b>number</b></p>
                    <p id="length" class="invalid msg">Minimum <b>8 characters</b></p>
                </div>
            </td>
        </tr>
    </table>
</body>
<script>
    var myInput = document.getElementById("pass1");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
    }
</script>
</html>