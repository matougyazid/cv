<html lang="en">

<head>
    <?php
        error_reporting(0);
        include('connect.php');
        session_start();
        $u_name = $_SESSION['username_cv'];
        $sql="SELECT * FROM users WHERE u_name='$u_name AND u_password='$u_password'";
        $result = $conn->query($sql);
        session_destroy();
    ?>
    <!-- created by yazid matoug -->
    <meta name="description" content="my site is a personnel site containe 6 pages . it discribe my cv .">
    <meta charset="UTF-8">
    <meta name="author" content="matoug yazid">
    <meta name="keywords" content="cv matoug yazid personnel ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
    <title>Curriculum vitae</title>
    <script src="js/home.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="cssindex-responsive.css">
</head>

<body>
    <table id="warper">
        <thead id="NavBAR1" class="Nav">
            <tr class="tr-thead">
                <td id="logo" class="NavElem"></td>
                <td id="menu" onclick="openNav();">
                    <hr class="hr">
                    <hr class="hr">
                    <hr class="hr">
                </td>
            </tr>
            <tr id="mySidenav" class="sidenav" >
                <td class="close">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav();">×</a>
                </td>
                <td id="Elem22" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="join-us.php?q1=" target="_blank" class="joinLnk links">
                        join-us
                    </a>
                </td>
                <td id="Elem33" class="NavElem btnhvr" onclick="toDown();">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="#Contact"  class="contactLnk links">
                        Contact
                    </a>
                </td>
                <td id="Elem44" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="comments.php" target="_self" class="commentsLnk links">
                        comments
                    </a>
                </td>
            </tr>
        </thead>
        <tbody id="page-content" >
            <tr id="sidenavopacity" class="tr-tbody">
                <td class="content" id="myphoto1">
                </td>
                <td id="myinfo" class="content con">
                    <p class="infoTXT">
                        My full name is Matouk Yazid, I am a student in the University of Batna 2, and my level is 2 eme année licence in the College of Computer Science .  
                    </p>
                </td>
                <td id="myinfo1" class="content con">
                    <div class="about-site">
                        <ul>
                            <li class="title">about website</li>
                            <li>a personnele website show my cv.</li>
                            <li>it have a contact form.</li>
                            <li>it have a momments form.</li>
                        </ul>
                    </div>
                    <div class="about-site">
                        <ul>
                            <li class="title">futures</li>
                            <li>more security.</li>
                            <li>create you own cv.</li>
                            <li>modifier your own profile.</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot id="NavBAR2" class="Nav">
            <tr class="tr-tfoot">
                <td class="about">
                    <ul>
                        <li class="about-group">
                            <a href="comming-soon.html">
                                about us.
                            </a>
                        </li>
                        <li class="about-group">
                            <a href="comming-soon.html">
                                help?
                            </a>
                        </li>
                        <li class="about-group">
                            <a href="comming-soon.html">
                                join us.
                            </a>
                        </li>
                    </ul>
                </td>
                <td class="contact">
                    <form action="toSQL/contact_test.php" method="get">
                        <div class="elem-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="e-g" id="name" name="visitor_name" placeholder="full name" pattern=[A-Z\sa-z]{3,20} required>
                        </div>
                        <div class="elem-group">
                        <label for="email">Your E-mail</label>
                        <input type="email" class="e-g" id="email" name="visitor_email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="elem-group">
                        <label for="title">Reason For Contacting Us</label>
                        <input type="text" class="e-g" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
                        </div>
                        <div class="elem-group">
                        <label for="message">Write your message</label>
                        <textarea id="message" class="e-g" name="visitor_message" placeholder="Say whatever you want." required></textarea>
                        </div>
                        <button type="submit" class="sbmt-btn">Send Message</button>
                    </form>
                </td>
                <td id="footer" class="footer-tfoot">
                    <center>
                        <p class="madeBY">©copyright 2020 designed and developed by matoug yazid</p>
                    </center>
                </td>
                <td id="goup">
                    <button onclick="topFunction();" id="myBtn" title="Go to top">Top</button>
                    <script>
                        //Get the button:
                        mybutton = document.getElementById("myBtn");
                        // When the user scrolls down 20px from the top of the document, show the button
                        window.onscroll = function() {scrollFunction()};
                        function scrollFunction() {
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                            mybutton.style.display = "block";
                        } else {
                            mybutton.style.display = "none";
                        }
                        }
                        // When the user clicks on the button, scroll to the top of the document
                        function topFunction() {
                            document.body.scrollTop = 0; // For Safari
                            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
                        }
                        function toDown() {
                            var tocontct = document.body;
                            tocontct.scrollTop = tocontct.scrollHeight;
                        }
                    </script>
                </td>
            </tr>
        </tfoot>
    </table>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "47%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0px";
        }
    </script>



</body>

</html>