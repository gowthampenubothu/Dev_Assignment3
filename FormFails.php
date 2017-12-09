<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
	<meta charset="utf-8" />
    <link href="Styles/Contact.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <script src="Scripts/jquery-3.2.1.js"></script>
</head>
<body>
    <nav class="w3-bar w3-black">
        <a href="index.php" class="w3-button">Home</a>
        <a href="Resume.html" class="w3-button">Resume</a>
        <a href="#" class="w3-button" id="print">Download Resume</a>
        <a href="Contact.html" class="w3-button">Contact Me</a>
    </nav>
    <div class="container">
        <?php
               $Message=$_GET["Message"];
        ?>
        <h2><center><?php echo $Message;?></center></h2>
    </div>
</body>
</html>

