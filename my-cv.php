<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- created by yazid matoug -->
        <meta name="description" content="a page contain my personnel cv.">
        <meta charset="UTF-8">
        <meta name="author" content="matoug yazid">
        <meta name="keywords" content="cv , matoug , yazid , personnel ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>author cv</title>
        <script src="js/script-cv.js"></script>
        <link rel="stylesheet" href="css/my-cv.css">
        <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
        <?php
            error_reporting(0);
            include('connect.php');
            session_start();
            $u_name = $_SESSION['username_cv'];
            $sql="SELECT * FROM users WHERE u_name='$u_name AND u_password='$u_password'";
            $result = $conn->query($sql);
        ?>
    </head>
    <body>
        <hr class="fasil">
        <table id="warper">
            <thead id="top-info">
                <tr class="tr-thead">
                    <td id="names" class="thead-elements">
                        <button id="toback">
                            <a href="home.php" class="linkback">
                                back
                            </a>
                        </button>
                        <p class="my-name" id="name">Matoug</p>
                        <p class="my-name" id="surname">Yazid</p>
                    </td>
                    <td id="photo" class="thead-elements">
                        <div id="top-photo"></div>
                    </td>
                    <td id="contact" class="thead-elements">
                        <p class="cntct" id="my-place">
                            <abbr title="35.247722,6.334762 in google maps">Algeria / Batna / Arris</abbr>
                        </p>
                        <p class="cntct" id="phone-nmbr">+123 667767450</p>
                        <p class="cntct" id="my-email">matougyazid725@gmail.com</p>
                    </td>
                </tr>
            </thead>
            <tbody id="page-content">
                <tr class="tr-tbody1 TR-TB">
                    <td class="my-information" id="myinfo">
                        <p class="info-style">
                            i am matoug yazi a student in university of batna 2 - fesdis - and study in the department of informatics with a degree 2 licence . I live in Arris exactly in Mzata , i have knowledge of 6 languages of development and 3 languages to deal with people .
                        </p>
                    </td>
                </tr>
                <tr class="tr-tbody2 TR-TB">
                    <td class="my-information" id="lang">
                        <p class="lng" id="lang-ex1">Arabic</p><div class="skills" id="skills1">
                            <div class="my-skills" id="Arabic"><abbr title="100% لا تصلح الكمال لله تعالى">97%</abbr></div>
                        </div>
                        <p id="lang-ex2" class="lng">English</p>
                        <div class="skills" id="skills2">
                            <div class="my-skills" id="English">80%</div>
                        </div><p class="lng" id="lang-ex3">Francais</p>
                        <div id="skills3" class="skills">
                            <div class="my-skills" id="Francais">60%</div>
                        </div>
                    </td>
                    <td id="info-study1" class="my-information my-info">
                        <details class="school">
                            <summary class="summar">
                                <h1 class="schools" id="sch1">Bin Tersyh Masoud Elementary School</h1>
                            </summary>
                            <p class="schools-detail" id="sch-det1">
                                i finished primary school with a primary education certificate, with grade point average of 6.
                            </p>
                        </details>
                    </td>
                </tr>
                <tr class="tr-tbody3 TR-TB">
                    <td id="programs-exp" class="my-information">
                        <p id="pro-ex1" class="lng">Visual Studio Code</p>
                        <div id="skill1" class="skills">
                            <div id="vsc" class="my-skills">93%</div>
                        </div>
                        <p id="pro-ex2" class="lng">Xampp</p>
                        <div id="skill2" class="skills">
                            <div id="xmp" class="my-skills">74%</div>
                        </div>
                        <p id="pro-ex3" class="lng">Adobe Photoshop CS6</p>
                        <div id="skill3" class="skills">
                            <div class="my-skills" id="cs6">64%</div>
                        </div>
                    </td>
                    <td id="info-study2" class="my-information my-info">
                        <details class="school">
                            <summary class="summar">
                                <h1 class="schools" id="sch2">Middle School Al-Bashir Al-Ibrahimi</h1>
                            </summary>
                            <p class="schools-detail" id="sch-det2">
                                i finished intermediate education with a BEM certificate with an average of 14.
                            </p>
                        </details>
                    </td>
                </tr>
                <tr class="tr-tbody4 TR-TB">
                    <td class="my-information" id="lang-prgramation">
                        <p id="lang-pro1" class="lng">Html</p>
                        <div id="skil1" class="skills">
                            <div id="html" class="my-skills">89%</div>
                        </div>
                        <p id="lang-pro2" class="lng">CSS</p>
                        <div id="skil2" class="skills">
                            <div id="css" class="my-skills">78%</div>
                        </div>
                        <p id="lang-pro3" class="lng">javaScript</p>
                        <div id="skil3" class="skills">
                            <div id="javascript" class="my-skills">67%</div>
                        </div>
                        <p id="lang-pro4" class="lng">PHP</p>
                        <div id="skil4" class="skills">
                            <div id="php" class="my-skills">41%</div>
                        </div>
                        <p id="lang-pro5" class="lng">SQL</p>
                        <div id="skil5" class="skills">
                            <div id="sql" class="my-skills">23%</div>
                        </div>
                    </td>
                    <td id="info-study3" class="my-information my-info">
                        <details class="school">
                            <summary class="summar">
                                <h1 class="schools" id="sch3">Sheikh Mohammed Yakan Al-Ghasiri High School</h1>
                            </summary>
                            <p class="schools-detail" id="sch-det3">
                                i finished secondary education with a BAC certificate with a rate of 12.
                            </p>
                        </details>
                    </td>
                </tr>
                <tr class="tr-tbody5 TR-TB">
                    <td class="my-information" id="reseaux-sociaux">
                        <a href="https://www.facebook.com/matoug.yazid" target="_blank"  title="facebook" class="reseaux-sociaux-style" id="rss1"></a>
                        <a href="https://www.instagram.com/yazid_matoug/" target="_blank"  title="instagram" class="reseaux-sociaux-style" id="rss2"></a>
                        <a href="https://twitter.com/YazidMatoug" target="_blank"  title="twitter" class="reseaux-sociaux-style" id="rss3"></a>
                    </td>
                    <td id="info-study4" class="my-information my-info">
                        <details class="school">
                            <summary class="summar">
                                <h1 class="schools" id="sch4">Mustapha Ben Boulaid University - Batna 2 -</h1>
                            </summary>
                            <p class="schools-detail" id="sch-det4">
                                i finished the first year with a rate of 12.5 for each of the first and socend semesters.
                            </p>
                        </details>
                    </td>
                </tr>
            </tbody>
            <tfoot id="made-by">
                <tr class="tr-tfoot">
                    <td id="footer" class="footer-tfoot">
                        <p class="madeBY">©copyright 2020 designed and developed by matoug yazid</p>
                    </td>
                    <td id="goup">
                        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
                        </script>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>