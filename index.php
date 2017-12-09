﻿<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Styles/Popup.css" rel="stylesheet" />
    <script src="Scripts/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="Scripts/jquery.firstVisitPopup.js"></script>
    <style>
        a:visited{
            background-color:burlywood
        }
    </style>
    <script>
			$(function () {
				$('#my-welcome-message').firstVisitPopup({cookieName : 'homepage',showAgainSelector: '#show-message'});
				debugger;
			});
			var Cookie = "Font Size";
			$(document).ready(function () {

			    //string literal
			    //also read the cookie value, if it is not present use the default value as `normal`
			    var fontsize = $.cookie(Cookie);

			    if (fontsize == "larger") {
			        $("body").css({"font-size": "50px"});
			    }
			});

			function largerFont() {
			    $("body").css({"font-size": "50px"});
			    //string literal
			    fontsize = 'larger';
			    $.cookie(Cookie, fontsize);
			}
			
    </script>
</head>
<body id="forBody">
    <!-- Navigation -->
    <nav class="w3-bar w3-black nav">
        <a href="index.php" class="w3-button">Home</a>
        <a href="Resume.html" class="w3-button">Resume</a>
        <a href="#" class="w3-button" onclick="alert('View the Resume First!')">Download Resume</a>
        <a href="Contact.html" class="w3-button">Contact Me</a>
    </nav>

    <!-- Slide Show -->
    <div class="w3-content w3-section" style="max-width:500px">

        <img class="mySlides w3-animate-fading" src="images/img.jpg" style="width:100%" />
        
    </div>

    <!-- Website Description -->
    <section class="w3-container w3-center w3-content" style="max-width:600px">
        <h2 class="w3-wide" style="font-family:'Californian FB'">WELCOME TO MY SITE!</h2>
        <p class="w3-opacity"><i>A Web Designer With the Passion for Creativity</i></p>
        <p class="w3-opacity">Take a Tour of Fictional Resume Website!!!</p>
    </section>
    <div id="my-welcome-message" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                
                <h2>Welcome to my site!</h2>
            </div>
            <div class="modal-body">
                <h4>Check Out What's New.</h4>
                <p>You can double the fontsize in your next visits!</p>
            </div>
            
            <div class="modal-footer btn-group">
                <button style="width:150px"  onclick="largerFont()" class="w3-button" id="btnViewNow">View Now</button>&nbsp; &#160;&#160;&#160;&#160;&#160;
                <button style="width:150px" class="w3-button close" id="btnNoThanks">No Thanks</button>
            </div>
        </div>
        </div>
        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
            <a href="#"><i class="fa fa-facebook-official"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="https://www.linkedin.com/in/sai-gowtham-penubothu-7ba4759b/"><i class="fa fa-linkedin"></i></a>
        </footer>

</body>
</html>
