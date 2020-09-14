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
    <!-- created by yazid matoug -->
    <meta name="description" content="my site is a personnel site containe 6 pages . it discribe my cv .">
    <meta charset="UTF-8">
    <meta name="author" content="matoug yazid">
    <meta name="keywords" content="cv matoug yazid personnel ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
    <title>Home page</title>
    <script src="js/home.js"></script>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <table id="warper">
        <thead id="NavBAR1" class="Nav">
            <tr class="tr-thead">
                <td id="logo" class="NavElem"></td>
                <td id="menu" onclick="showNavElem();" ondblclick="hideNavElem();">
                    <hr class="hr">
                    <hr class="hr">
                    <hr class="hr">
                </td>
                <td id="Elem44" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="comments.php" target="_blank" class="homeLnk links">
                        comments
                    </a>
                </td>
                <td id="Elem33" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="contact.php" target="_blank" class="contactLnk links">
                        Contact
                    </a>
                </td>
                <td id="Elem55" class="NavElem btnhvr">
					<span class="SpanBtn"></span>
					<span class="SpanBtn"></span>
					<span class="SpanBtn"></span>
					<span class="SpanBtn"></span>
					<a href="photos.php" target="_blank" class="joinLnk links">
                        Gallery
					</a>
				</td>
				<td id="Elem22" class="NavElem btnhvr">
					<span class="SpanBtn"></span>
					<span class="SpanBtn"></span>
					<span class="SpanBtn"></span>
					<span class="SpanBtn"></span>
					<a href="my-cv.php" target="_blank" class="joinLnk links">
                        author cv
					</a>
				</td>
                <td id="Elem11" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="account.php" target="_blank" class="homeLnk links">
                        Account
                    </a>
                </td>
                <td id="menuElem" class="menuElem">
                    <div id="Elem4" class="NavElem btnhvr">
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <a href="comments.php" target="_blank" class="homeLnk links">
                            comments
                        </a>
                    </div>
                    <div id="Elem3" class="NavElem btnhvr">
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <a href="contact.php" target="_blank" class="contactLnk links">
                            Contact
                        </a>
                    </div>
                    <div id="Elem5" class="NavElem btnhvr">
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <a href="photos.php" target="_blank" class="joinLnk links">
                            Gallery
                        </a>
                    </div>
					<div id="Elem2" class="NavElem btnhvr">
						<span class="SpanBtn"></span>
						<span class="SpanBtn"></span>
						<span class="SpanBtn"></span>
						<span class="SpanBtn"></span>
						<a href="my-cv.php" target="_blank" class="joinLnk links">
							author cv
						</a>
					</div>
                    <div id="Elem1" class="NavElem btnhvr">
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <span class="SpanBtn"></span>
                        <a href="comming-soon.html" target="_blank" class="homeLnk links">
                            Account
                        </a>
                    </div>
                </td>
                </tr>
        </thead>
        <tbody id="page-content">
            <tr class="tr-tbody">
                <td class="content welcmTXT style-mp" id="myphoto1" onmousemove="showinformation();" onmouseout="hideinformation();" onclick="location.href='my-cv.php';">
                    <div id="photo-explication1" class="style-pe">
                        <p id="name" class="information">Matoug</p>
                        <p id="surname" class="information">yazid</p>
                        <p id="age" class="information">20 ans</p>
                        <p id="description" class="information">a student in university of batna 2 live in arris</p>
                    </div>
                </td>
                <td class="content welcmTXT style-mp" id="myphoto2">
                    <div id="photo-explication2" class="style-pe"></div>
                </td>
                <td class="content welcmTXT style-mp" id="myphoto3">
                    <div id="photo-explication3" class="style-pe"></div>
                </td>
            </tr>
        </tbody>
        <tfoot id="NavBAR2" class="Nav">
            <tr class="tr-tfoot">
                <td id="footer" class="footer-tfoot">
                    <marquee id="movement" behavior="scroll" direction="right" >
                        <p class="madeBY">©copyright 2020 designed and developed by matoug yazid</p>
                    </marquee>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>