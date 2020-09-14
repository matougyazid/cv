<html lang="en">

<head>
    <!-- created by yazid matoug -->
    <meta name="description" content="my site is a personnel site containe 6 pages . it discribe my cv .">
    <meta charset="UTF-8">
    <meta name="author" content="matoug yazid">
    <meta name="keywords" content="cv matoug yazid personnel ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="css/img/favicon.png">
    <title>photos gallery</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/photos.css">
</head>
<style>
    .Nav {
        z-index: 10;
    }
    #Elem11, #Elem44 {
        display: block;
    }
</style>
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
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </td>
                <td id="Elem11" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="home.php" target="_blank" class="homeLnk links">
                        Home
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
                <td id="Elem33" class="NavElem btnhvr">
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <span class="SpanBtn"></span>
                    <a href="contact.php" target="_self" class="contactLnk links">
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
        <tbody id="photos-wrapper">
            <tr>
                <td id="index-gallery" class="wrapper-gallery">
                    <h1>
                        <b>Gallery</b>
                    </h1>
                    <div class="gallery-img img1">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img2">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img3">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img4">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img5">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img6">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img7">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img8">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img9">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img10">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img11">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img12">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img13">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img14">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img15">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img16">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img17">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img18">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img19">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img20">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img21">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img22">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img23">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img24">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img25">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img26">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img27">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img28">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img29">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img30">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img31">
                        <div><a href="#"></a></div>
                    </div>
                    <div class="gallery-img img32">
                        <div><a href="#"></a></div>
                    </div>
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
        </tbody>
    </table>
</body>
<script src="js/photos.js"></script>
</html>